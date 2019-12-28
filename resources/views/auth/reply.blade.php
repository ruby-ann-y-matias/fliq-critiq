<img src={{ asset("storage/".$reply->user->image) }} class="circle">
<span class="title">{{ $reply->user->username }}</span>
<p>{{ $reply->reply }}</p>
<p class="reply-timestamp">
	<small>{{ $reply->updated_at }}</small>
</p>

<button id="replyLikeBtn{{ $reply->id }}" class="waves-effect waves-light btn-small like-reply" value="{{ $reply->id }}">
	<i class="material-icons left">thumb_up</i>Like
</button>

<meta name="comment_id" content="{{ $reply->comment->id }}">

<button class="waves-effect waves-light btn-small delete-reply" value="{{ $reply->id }}">
	<i class="material-icons left">delete_forever</i>Delete
</button>

<button class="waves-effect waves-light btn-small edit-reply" value="{{ $reply->id }}">
	<i class="material-icons left">edit</i>Edit
</button>

<div hidden id="editReply{{ $reply->id }}" class="row reply-container">
	<div class="row edit-reply-row">
		<div class="input-field col s10">
		  <textarea id="editReplyInput{{ $reply->id }}" class="materialize-textarea edit-reply-input">{{ $reply->reply }}</textarea>
		</div>
		<button class="update-reply waves-effect waves-light btn-small col s2" value="{{ $reply->id }}">
			<i class="material-icons">send</i>
		</button>
	</div>
</div>

@if (count($reply->userLikes) <= 1)
	<span id="replyLikes{{ $reply->id }}" class="new badge likes secondary-content" data-badge-caption="Like">{{ count($reply->userLikes) }}</span>
@else
	<span id="replyLikes{{ $reply->id }}" class="new badge likes secondary-content" data-badge-caption="Likes">{{ count($reply->userLikes) }}</span>
@endif


<script type="text/javascript">

	$('.edit-reply').click(function() {
			var replyID = $(this).val();
			// console.log(replyID);
			$('#editReply' + replyID).show();
		});

		$('.update-reply').click(function() {
			var replyID = $(this).val();
			var token = $('[name="csrf_token"]').attr('content');
			var editedReply = $.trim($('#editReplyInput' + replyID).val());
			// console.log(replyID + ' ' + token);
			// console.log(editedReply);
			$.post('/reply/edit/' + replyID,
				{
					reply: editedReply,
					reply_id: replyID,
					_token: token
				},
				function(data, status) {
					$('.nested-comment').html(data);
				});
		});

		$('.delete-reply').click(function() {
			var replyID = $(this).val();
			var token = $('[name="csrf_token"]').attr('content');
			var commentID = $('[name="comment_id"]').attr('content');
			// console.log(commentID);
			// console.log(replyID + ' ' + token);

			$.post('/reply/delete/' + replyID,
				{
					reply_id: replyID,
					_token: token	
				},
				function(data, status) {
					$('.nested-comment').remove();
				});
		});

		$('.like-reply').click(function() {
			var replyID = $(this).val();
			var btnTxt = $(this);
			var token = $('[name="csrf_token"]').attr('content');
			// console.log(replyID);
			// console.log(token);
			var text = btnTxt[0].innerText.substr(8);
			// console.log(text);

			$.post('/reply/like/' + replyID,
				{
					reply_id: replyID,
					btn_text: text,
					_token: token
				},
				function(data, status) {
					// console.log(data.likes);
					var likes = data.likes;
					$('#replyLikes'+replyID).text(likes.length);
					if (likes.length > 1) {
						$('#replyLikes'+replyID).attr('data-badge-caption', 'Likes');
					}

					if (text == 'LIKE') {
						$('#replyLikeBtn' + replyID).html('<i class="material-icons left">thumb_down</i>UNLIKE');
					} else {
						$('#replyLikeBtn' + replyID).html('<i class="material-icons left">thumb_up</i>LIKE');
					}
				});
		});

</script>