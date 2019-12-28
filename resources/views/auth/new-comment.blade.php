<img src={{ asset("storage/".$comment->user->image) }} class="circle">
<span class="title">{{ $comment->user->username }}</span>
<p>{{ $comment->comment }}</p>
<p class="comment-timestamp">
	<small>{{ $comment->updated_at }}</small>
</p>

<button id="likeBtn{{ $comment->id }}" class="waves-effect waves-light btn-small like-comment" value="{{ $comment->id }}">
	<i class="material-icons left">thumb_up</i>Like
</button>

<button class="waves-effect waves-light btn-small delete-comment" value="{{ $comment->id }}">
	<i class="material-icons left">delete_forever</i>Delete
</button>

<button class="waves-effect waves-light btn-small edit-comment" value="{{ $comment->id }}">
	<i class="material-icons left">edit</i>Edit
</button>

<div hidden id="editComment{{ $comment->id }}" class="row comment-container">
	<div class="row comment-row">
		<div class="input-field col s10">
		  <textarea id="editCommentInput{{ $comment->id }}" class="materialize-textarea">{{ $comment->comment }}</textarea>
		</div>
		<button class="update-comment waves-effect waves-light btn-small col s2" value="{{ $comment->id }}">
			<i class="material-icons">send</i>
		</button>
	</div>
</div>

@if (count($comment->likes) <= 1)
	<span id="likesFor{{ $comment->id }}" class="new badge likes secondary-content" data-badge-caption="Like">{{ count($comment->likes) }}</span>
@else
	<span id="likesFor{{ $comment->id }}" class="new badge likes secondary-content" data-badge-caption="Likes">{{ count($comment->likes) }}</span>
@endif

<script type="text/javascript">
	
		$('.edit-comment').click(function() {
			var commentID = $(this).val();
			// console.log(commentID);

			$('#editComment' + commentID).show();
		});

		$('.update-comment').click(function() {
			var commentID = $(this).val();
			var token = $('[name="csrf_token"]').attr('content');
			var editedComment = $.trim($('#editCommentInput' + commentID).val());
			// console.log(commentID + ' ' + token);
			// console.log(editedComment);

			$.post('/comment/edit/' + commentID,
				{
					comment_id: commentID,
					comment: editedComment,
					_token: token					
				},
				function(data, status) {
					$('.fresh-comment').html(data);
				});
		});

		$('.delete-comment').click(function() {
			var commentID = $(this).val();
			var token = $('[name="csrf_token"]').attr('content');
			// var allReplies = $('.replies-to-comment' + commentID);
			// allReplies.hide();
			// alert(commentID);
			// alert(childsren);

			$.post('/comment/delete/' + commentID,
			{
				comment_id: commentID,
				_token: token
			},
			function(data, status) {
				$('.fresh-comment').remove();
			});

		});

		$('.like-comment').click(function() {
			var commentID = $(this).val();
			var btnTxt = $(this);
			var token = $('[name="csrf_token"]').attr('content');
			// alert(commentID);
			// alert(token);
			var text = btnTxt[0].innerText.substr(8);
			// console.log(text);

			$.post('/comment/like/' + commentID,
				{
					comment_id: commentID,
					btn_text: text,
					_token: token
				},
				function(data, status) {
					// console.log(data.likes);
					var likes = data.likes;
					$('#likesFor'+commentID).text(likes.length);
					if (likes.length > 1) {
						$('#likesFor'+commentID).attr('data-badge-caption', 'Likes');
					}

					if (text == 'LIKE') {
						$('#likeBtn' + commentID).html('<i class="material-icons left">thumb_down</i>UNLIKE');
					} else {
						$('#likeBtn' + commentID).html('<i class="material-icons left">thumb_up</i>LIKE');
					}
				});
		});

</script>