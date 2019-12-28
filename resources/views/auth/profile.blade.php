@extends ('layout.app')

@section('title')
	{{ $user->username }}
@endsection

@section('main_content')

	@if (Session::has('alert'))
	<div id="alert" class="alert alert-success">
		{{ Session::get('alert') }}
	</div>
	@endif
	
	<div id="userCard" class="card horizontal">
		<div class="row">
			<div class="card-image center-align col s10 offset-s1 m4 offset-m1 ">
				<img src={{ asset("storage/$user->image") }} alt="{{ $user->name }}"  id="avatar">

				<div id="followers" class="row">
					<button class="chip btn col s3 count">
						{{ sizeof($followers) }}
					</button>
					<button id="showFollowers" class="chip btn col s8 modal-trigger" data-target="influenced" value="{{ $user->id }}">
						Followers
					</button>
				</div>

				<div id="following" class="row">
					<button id="newCount" class="chip btn col s3 count">
						{{ sizeof($influencers) }}
					</button>
					<button id="showFollowing" class="chip btn col s8 modal-trigger" data-target="influencer" value="{{ $user->id }}">
						Following
					</button>
				</div>

				<!-- Modal Structure -->
				<div id="influenced" class="modal">
				    <div id="followersContent" class="modal-content">
				    	
				    </div>
				 </div>

				 <div id="influencer" class="modal">
				    <div id="followingContent" class="modal-content">
				    	
				    </div>
				 </div>

			</div>
		
			<div id="userProfile" class="card-content col s11 m6">
				<p><i class="material-icons">mail</i> {{ $user->email }}</p>
				<p><i class="material-icons">cake</i> {{ $user->birthdate }}</p>
				<p><i class="material-icons">home</i> {{ $user->address }} </p>
				<p><i class="material-icons">phone</i> {{ $user->phone }} </p>
				<p><i class="material-icons">directions_run</i> {{ $user->job }} </p>
				<p><i class="material-icons">business_center</i> {{ $user->company }} </p>
				@if (Auth::user()->username == $user->username)
				<p>
				<span class="card-title activator grey-text text-darken-4">
					<i class="material-icons">face</i>
					<strong id="realName"> {{ $user->name }}</strong>
					<i class="material-icons right">more_vert</i>
				</span>
				</p>
				@endif
			</div>
		</div>
		<div class="card-reveal">
			<span class="card-title"><strong>Update Profile</strong>
				<i id="closeQuote" class="material-icons right">close</i>
			</span>
			
			<form id="updateProfile" action={{ url("/profile/edit/$user->id") }} method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="input-field">
					<textarea id="username" name="username" class="validate avoid-wrap">{{ $user->username }}</textarea>
					<label for="username">Username</label>
				</div>
				<div class="input-field">
					<textarea id="name" name="name" class="validate avoid-wrap">{{ $user->name }}</textarea>
					<label for="name">Name</label>
				</div>
				<div class="input-field">
					<textarea id="email" name="email" class="validate avoid-wrap">{{ $user->email }}</textarea>
					<label for="email">Email</label>
				</div>
				<div class="input-field">
					<textarea id="address" name="address" class="validate avoid-wrap">{{ $user->address }}</textarea>
					<label for="address">Address</label>
				</div>
				<div class="input-field">
					<textarea id="job" name="job" class="validate avoid-wrap">{{ $user->job }}</textarea>
					<label for="job">Occupation</label>
				</div>
				<div class="input-field">
					<textarea id="company" name="company" class="validate avoid-wrap">{{ $user->company }}</textarea>
					<label for="company">Work / School</label>
				</div>
				<div id="avatarChange" class="file-field img-upload">
					<div class="btn upload-label">
						<span class="img-label" for="smImg">Small-sized Image</span>
						<input id="userImg" type="file" name="user_image" value="{{ $user->image }}" onchange="readSmallURL(this);">
					</div>
					<img id="avatarPrev" src={{ asset("/storage/$user->image")}} width="100"">
					<div class="file-path-wrapper">
	      				<input class="file-path validate" type="text">
	      			</div>
				</div>
				<div class="row">
					<div class="input-field col s11 m4 offset-m1">
						<input type="date" id="birthdate" name="birthdate" class="validate" value="{{ $user->birthdate }}">
						<label for="birthdate">Birthdate</label>
					</div>
					<div class="input-field col s11 m4 offset-m1">
						<input type="tel" id="phone" name="phone" class="validate" value="{{ $user->phone }}">
						<label for="phone">Phone</label>
					</div>
				</div>

				<div class="row">
					<button id="submitBtn" class="btn waves-effect waves-light" type="submit" name="action">Update
				    <i class="material-icons right">send</i>
					</button>
				</div>
			</form>

		</div>
	</div>

	<ul id="bingeCollapse" class="collapsible popout">

	    <li class="active">
	      <div class="collapsible-header bingelister">
	      	<img src={{ asset("storage/$user->image") }} class="circle" width="50" height="50" alt="{{ $user->username }}">
	      	<h5>{{ $user->username }}'s Bingelist</h5>
	      </div>

	      <!-- Modal Structure -->
		<div id="deleteUser" class="modal">
			<div id="deleteUserConfirm" class="modal-content">
				
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
			</div>
		</div>

	      <div id="userBingeList" class="collapsible-body">
	      	@foreach($user->flicks()->distinct()->get() as $flick)
	      		<div class="fab-parent-container">
	      			@if (Auth::user()->username == $user->username)
		      		<div class="fixed-action-btn click-to-toggle fab-container">
		      			<a class="btn-floating btn-small click-to-toggle clickable-fab">
		      				<i class="material-icons">menu</i>
		      			</a>
		      			<ul>
		      				<li>
		      					<a class="btn-floating">
		      						<i class="material-icons">screen_share</i>
		      					</a>
		      				</li>
		      				<li>
		      					<a class="btn-floating btn modal-trigger" data-target="deleteBinge{{ $flick->id}}">
		      						<i class="material-icons">delete_forever</i>
		      					</a>
		      				</li>
		      			</ul>
		      		</div>
		      		@endif
		      		<a href={{ url("/flicks/view/$flick->id") }}>
		      			<img src={{ asset("storage/$flick->sm_image") }}>
		      		</a>
	      		</div>

	      		<!-- Modal Structure -->
				<div id="deleteBinge{{ $flick->id}}" class="modal">
					<div class="modal-content">
						<form method="POST" action={{ url("/profile/remove-from-binge/$flick->id") }}>
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

	      	@endforeach
	      </div>
	    </li>

	</ul>

	<button onclick="topFxn()" id="backToTop"><i class="material-icons">arrow_upward</i></button>

@endsection

@section('indiv_js')

	<script type="text/javascript">

	$(document).ready(function() {

		$('.collapsible').collapsible();
		$('.modal').modal();
		// $('.fixed-action-btn').floatingActionButton();

		var buttons = document.querySelectorAll('.fixed-action-btn');

		var instance = M.FloatingActionButton.init(buttons, {
			direction: 'left',
			hoverEnabled: false
		});

	});


	// AVOID MULTI-LINE INPUT ON ONE-LINER TEXTAREAS
	$('.avoid-wrap').keydown(function(e) {
		if (e.keyCode == '13' || e.keyCode == '34' || e.keyCode == '40') {
			e.preventDefault();
		}
	});
	
	// PREVIEW IMAGE UPON CREATE OR UPDATE
	function readSmallURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('#avatarPrev').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	// BACK TO TOP
	window.onscroll = function() {scrollFxn()};

	function scrollFxn() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			$('#backToTop').css('display', 'block');
		} else {
			$('#backToTop').css('display', 'none');
		}
	}

	function topFxn() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}

	// SOCIALS
	$('#showFollowers').click(function() {
		var user_id = $(this).val();
		// alert(user_id);
		$.get('/profile/followers/' + user_id,
			{
				// 
			},
			function(data, status) {
				$('#followersContent').html(data);
			});
	});

	$('#showFollowing').click(function() {
		var user_id = $(this).val();
		// alert(user_id);
		$.get('/profile/following/' + user_id,
			{
				// 
			},
			function(data, status) {
				$('#followingContent').html(data);
			});
	});

	$('#alert').fadeOut(5000, function() {
		// 
	});

	</script>

@endsection