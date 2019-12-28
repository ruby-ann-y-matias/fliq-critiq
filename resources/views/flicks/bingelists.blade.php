@extends ('layout.app')

@section('title')
	Bingelists
@endsection

@section('main_content')

	@if (Session::has('alert'))
		<div id="alert" class="alert alert-success">
			{{ Session::get('alert') }}
		</div>
	@endif

	<h5 id="desc">follow those you like</h5>

	<meta name="csrf_token" content="{{ csrf_token() }}">

	<ul id="bingeCollapse" class="collapsible popout">

	@foreach ($users as $user)

	    <li>
			<div class="collapsible-header bingelister">
				<div class="col s12">
					<img src={{ asset("storage/$user->image") }} class="circle" width="50" height="50" alt="{{ $user->username }}">
					<h5>{{ $user->username }}</h5>
				</div>
				<div class="col s12">
					@if ( Auth::check() )
						@if (Auth::user()->username != $user->username)
						<button id="follow{{ $user->id }}" class="waves-effect waves-light btn add-user-btn" value="{{ $user->id }}">
							@if (in_array($user->username, $following))
								Unfollow
							@else
								Follow
							@endif
						</button>
						@endif
					@else
						<button class="waves-effect waves-light btn feature-discovery" onclick="$('.tap-target').tapTarget('open');">
							Follow
						</button>
					@endif

					@if( Auth::check() && Auth::user()->roles()->first()->role == 'admin')
					  	<button class="waves-effect waves-light btn modal-trigger delete-user-btn" value="{{ $user->id }}" data-target="deleteUser">
					  		<i class="material-icons left">delete_forever</i>
					  	</button>
					@endif
				</div>
			</div>

			<!-- Modal Structure -->
			<div id="deleteUser" class="modal">
				<div id="deleteUserConfirm" class="modal-content">
					
				</div>
				<div class="modal-footer">
					<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
				</div>
			</div>

			<div class="collapsible-body bingelists">
				@foreach($user->flicks()->distinct()->get() as $flick)
					<a href={{ url("/flicks/view/$flick->id") }}>
						<img src={{ asset("storage/$flick->sm_image") }}>
					</a>
				@endforeach
			</div>
		</li>

	@endforeach

	</ul>

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

			$('.collapsible').collapsible();
			$('.modal').modal();
			$('.tap-target').tapTarget();
		});

		// RETRIEVE USER TO DELETE
		$('.delete-user-btn').click(function() {
			var user_id = $(this).val();
			// alert(user_id);

			$.get('/profile/retrieve/' + user_id,
				{
					user_id: user_id
				},
				function(data, status) {
					$('#deleteUserConfirm').html(data);
				});
		});

		// FOLLOW USER
		$('.add-user-btn').click(function() {
			var user_id = $(this).val();
			var btnTxt = $(this).text();
			var token = $('[name="csrf_token"]').attr('content');
			// alert(user_id);
			// alert(btnTxt);

			$.post('/profile/follow/' + user_id,
				{
					user_id: user_id,
					btn_text: btnTxt,
					_token: token
				},
				function(data, status) {
					$('#follow' + user_id).html(data);
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