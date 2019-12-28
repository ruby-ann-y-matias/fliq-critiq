@extends ('layout.app')

@section('title')
	{{ $flick->title }}
@endsection

@section('main_content')

	@if (Session::has('alert'))
		<div id="alert" class="alert alert-success">
			{{ Session::get('alert') }}
		</div>
	@endif

	<meta name="csrf_token" content="{{ csrf_token() }}">
	
	<div class="parallax-container">
		<div id="mdViewCon" class="parallax">
			<img id="mdView" src={{ asset("/storage/$flick->md_image")}}>
		</div>
	</div>
	<div class="section white">
		<div id="viewDesc" class="row container">
			<h2 class="header">{{ $flick->title }}</h2>
			<span>{{ $flick->year }}</span>
			<span>{{ $flick->age_limit }}</span>
			<span>{{ $flick->duration }}</span>
			<p class="grey-text text-darken-3">{{ $flick->description }}</p>
			@foreach($genres as $genre)
				<div class="chip">{{ $genre->genre }}</div>
			@endforeach
		</div>
	</div>
	<div id="secondCon" class="parallax-container">

		@if ( Auth::check() && Auth::user()->roles()->first()->role == 'admin')

		<div id="adminTasks">
			<button id="editBtn" class="btn-floating btn-large waves-effect waves-light btn modal-trigger" value="{{ $flick->id }}" data-target="editFlick">
				<i class="material-icons">edit</i>
			</button>
			<button id="deleteBtn" class="btn-floating btn-large waves-effect waves-light btn modal-trigger" value="{{ $flick->id }}" data-target="deleteFlick">
				<i class="material-icons">delete_forever</i>
			</button>
		</div>

		@endif
		
		<div id="smViewCon" class="parallax">
			<img id="smView" src={{ asset("/storage/$flick->sm_image") }}>
		</div>
	</div>

	@if (Auth::check() )

	<button class="waves-effect waves-light btn-small new-comment" value="{{ $flick->id }}">
			<i class="material-icons left">comment</i>Share your thoughts
	</button>
	<div id="newComment{{ $flick->id }}" class="row new-comment-container">
		<div class="row comment-row">
			<div class="input-field col s10 new-comment-input">
			  <textarea id="commentInput{{ $flick->id }}" class="materialize-textarea"></textarea>
			</div>
			<button class="post-comment waves-effect waves-light btn-small col s2" value="{{ $flick->id }}">
				<i class="material-icons">send</i>
			</button>
		</div>
	</div>

	@endif

	@if (isset($comments))
	<ul class="collection">

		<li id="freshComment{{ $flick->id }}" class="collection-item avatar fresh-comment">
			
		</li>

		@foreach($comments as $comment)
	
		<li id="commentRow{{ $comment->id }}" class="collection-item avatar">
			<img src={{ asset("storage/".$comment->user->image) }} class="circle">
			<span class="title">{{ $comment->user->username }}</span>
			<p>{{ $comment->comment }}</p>
			<p class="comment-timestamp">
				<small>{{ $comment->updated_at }}</small>
			</p>
			@if (Auth::check() )

				<button id="likeBtn{{ $comment->id }}" class="waves-effect waves-light btn-small like-comment" value="{{ $comment->id }}">
					<i class="material-icons left">thumb_up</i>Like
				</button>

				@if (Auth::user() == $comment->user || Auth::user()->roles()->first()->role == 'admin')

				<button class="waves-effect waves-light btn-small delete-comment" value="{{ $comment->id }}">
					<i class="material-icons left">delete_forever</i>Delete
				</button>

				@endif

				@if (Auth::user() == $comment->user)

				<button class="waves-effect waves-light btn-small edit-comment" value="{{ $comment->id }}">
					<i class="material-icons left">edit</i>Edit
				</button>

				<div hidden id="editComment{{ $comment->id }}" class="row edit-comment-container">
					<div class="row comment-row">
						<div class="input-field col s10 edit-comment-input">
						  <textarea id="editCommentInput{{ $comment->id }}" class="materialize-textarea">
						  	{{ $comment->comment }}
						  </textarea>
						</div>
						<button class="update-comment waves-effect waves-light btn-small col s2" value="{{ $comment->id }}">
							<i class="material-icons">send</i>
						</button>
					</div>
				</div>

				@endif

				<button class="waves-effect waves-light btn-small reply-comment" value="{{ $comment->id }}">
					<i class="material-icons left">reply</i>Reply
				</button>
				<div hidden id="reply{{ $comment->id }}" class="row reply-container">
					<div class="row reply-row">
						<div class="input-field col s10">
						  <textarea id="replyInput{{ $comment->id }}" class="materialize-textarea">
						  </textarea>
						</div>
						<button class="post-reply waves-effect waves-light btn-small col s2" value="{{ $comment->id }}">
							<i class="material-icons">send</i>
						</button>
					</div>
				</div>

			@else

			<button class="waves-effect waves-light btn-small login-prompt" onclick="$('.tap-target').tapTarget('open');">
				<i class="material-icons left">thumb_up</i>Like
			</button>
			<button class="waves-effect waves-light btn-small login-prompt" onclick="$('.tap-target').tapTarget('open');">
				<i class="material-icons left">reply</i>Reply
			</button>
			@endif

			@if (count($comment->likes) <= 1)
				<span id="likesFor{{ $comment->id }}" class="new badge likes secondary-content" data-badge-caption="Like">{{ count($comment->likes) }}</span>
			@else
				<span id="likesFor{{ $comment->id }}" class="new badge likes secondary-content" data-badge-caption="Likes">{{ count($comment->likes) }}</span>
			@endif

			{{-- REPLY ACTIONS --}}
			@foreach ($comment->replies()->get() as $reply)

			<li id="nestedReply{{ $reply->id }}" class="collection-item avatar nested-comment replies-to-comment{{ $comment->id }}">
				<img src={{ asset("storage/".$reply->user->image) }} class="circle">
				<span class="title">{{ $reply->user->username }}</span>
				<p id="replyItself{{ $reply->id }}">{{ $reply->reply }}</p>
				<p class="reply-timestamp">
					<small id="replyTime{{ $reply->id }}">{{ $reply->updated_at }}</small>
				</p>
				@if (Auth::check() )
				<button id="replyLikeBtn{{ $reply->id }}" class="waves-effect waves-light btn-small like-reply" value="{{ $reply->id }}">
					<i class="material-icons left">thumb_up</i>Like
				</button>
				@else
				<button class="waves-effect waves-light btn-small login-prompt" onclick="$('.tap-target').tapTarget('open');">
					<i class="material-icons left">thumb_up</i>Like
				</button>
				@endif

				@if (Auth::user() == $reply->user)

				<button class="waves-effect waves-light btn-small edit-reply" value="{{ $reply->id }}">
					<i class="material-icons left">edit</i>Edit
				</button>

				<button class="waves-effect waves-light btn-small delete-reply" value="{{ $reply->id }}">
					<i class="material-icons left">delete_forever</i>Delete
				</button>

				<div hidden id="editReply{{ $reply->id }}" class="row reply-container">
					<div class="row edit-reply-row">
						<div class="input-field col s10">
						  <textarea id="editReplyInput{{ $reply->id }}" class="materialize-textarea edit-reply-input">
						  	{{ $reply->reply }}
						  </textarea>
						</div>
						<button class="update-reply waves-effect waves-light btn-small col s2" value="{{ $reply->id }}">
							<i class="material-icons">send</i>
						</button>
					</div>
				</div>

				@endif

				@if (count($reply->userLikes) <= 1)
					<span id="replyLikes{{ $reply->id }}" class="new badge likes secondary-content" data-badge-caption="Like">{{ count($reply->userLikes) }}</span>
				@else
					<span id="replyLikes{{ $reply->id }}" class="new badge likes secondary-content" data-badge-caption="Likes">{{ count($reply->userLikes) }}</span>
				@endif
			</li>

			@endforeach

			<li hidden id="nestedComment{{ $comment->id }}" class="collection-item avatar nested-comment">
			
			</li>
		</li>

		@endforeach
	</ul>
	@endif

	<!-- Modal Structure -->
	<div id="editFlick" class="modal">
		<div id="editFlickContent" class="modal-content">
			
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
		</div>
	</div>

	<!-- Modal Structure -->
	<div id="deleteFlick" class="modal">
		<div class="modal-content">
			<form method="POST" action={{ url("/flicks/delete/$flick->id") }}>
				{{ csrf_field() }}
				{{ method_field('delete') }}
				<input hidden name="flick_id" value="{{ $flick->id }}">
				<h5>Are you sure you want to delete {{ $flick->title }}?</h5>
				<button class="btn waves-effect waves-light red lighten-2" type="submit" name="action">Delete
				    <i class="material-icons right">delete_forever</i>
				</button>
			</form>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
		</div>
	</div>

	<!-- Element Showed -->
	<a id="menu" class="waves-effect waves-light btn btn-floating"></a>

	<!-- Tap Target Structure -->
	<div class="tap-target" data-target="menu">
	<div class="tap-target-content">
	  <h5>Welcome back!</h5>
	  <p>
	  	<a href="{{ url('/login') }}">Login</a> or 
	  	<a href="{{ url('/register') }}">Register</a> 
	  	First
	  </p>
	</div>
	</div>

	<button onclick="topFxn()" id="backToTop"><i class="material-icons">arrow_upward</i></button>

@endsection

@section('indiv_js')
	<script type="text/javascript">

		$(document).ready(function() {
			$('.parallax').parallax();
			$('.modal').modal();
			$('.tap-target').tapTarget();
		});

		$('#editBtn').click(function() {
			var flick_id = $(this).val();
			// alert(flick_id);

			$.get('/flicks/edit/' + flick_id,
				{
					// 
				},
				function(data, status) {
					$('#editFlickContent').html(data);
				});
		});	

		$('.post-comment').click(function() {
			var flickID = $(this).val();
			var token = $('[name="csrf_token"]').attr('content');
			var comment = $.trim($('#commentInput' + flickID).val());
			// console.log(flickID + ' ' + token);
			// console.log(comment);

			$.post('/comment/new/' + flickID,
				{
					flick_id: flickID,
					comment: comment,
					_token: token
				},
				function(data, status) {
					$('#freshComment' + flickID).html(data);
					$('#commentInput' + flickID).val('');
				});
		});

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
					$('#commentRow' + commentID).html(data);
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

		$('.reply-comment').click(function() {
			var commentID = $(this).val();
			// console.log(commentID);
			$('#reply' + commentID).show();
		});

		$('.post-reply').click(function() {
			var commentID = $(this).val();
			var token = $('[name="csrf_token"]').attr('content');
			var reply = $.trim($('#replyInput' + commentID).val());
			// console.log(commentID + ' ' + token + ' ' + reply);
			// alert(reply);

			$.post('/comment/reply/' + commentID,
				{	
					comment_id: commentID,
					reply: reply,
					_token: token
				},
				function(data, status) {
					// console.log(data);
					$('#reply' + commentID).hide();
					$('#nestedComment' + commentID).html(data);
					$('#nestedComment' + commentID).show();
				});
		});

		$('.delete-comment').click(function() {
			var commentID = $(this).val();
			var token = $('[name="csrf_token"]').attr('content');
			var allReplies = $('.replies-to-comment' + commentID);
			allReplies.hide();
			// alert(commentID);
			// alert(childsren);

			$.post('/comment/delete/' + commentID,
			{
				comment_id: commentID,
				_token: token
			},
			function(data, status) {
				$('#commentRow' + commentID).remove();
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
					$('#nestedReply' + replyID).html(data);
				});
		});

		$('.delete-reply').click(function() {
			var replyID = $(this).val();
			var token = $('[name="csrf_token"]').attr('content');
			// console.log(replyID + ' ' + token);

			$.post('/reply/delete/' + replyID,
				{
					reply_id: replyID,
					_token: token	
				},
				function(data, status) {
					$('#nestedReply' + replyID).remove();
				});
			
		});

		// BACK TO TOP
		window.onscroll = function() {scrollFxn()};

		function scrollFxn() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				$('#backToTop').css('display', 'block');
				$('#menu').css('display', 'block');
			} else {
				$('#backToTop').css('display', 'none');
				$('#menu').css('display', 'none');
			}
		}

		function topFxn() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}

		// FADEOUT ALERT

		$('#alert').fadeOut(5000, function() {
			// 
		});

	</script>
@endsection
