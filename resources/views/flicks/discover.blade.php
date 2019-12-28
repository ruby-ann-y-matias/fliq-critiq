@extends ('layout.app')

@section('title')
Discover
@endsection

@section('main_content')

	<h5 id="desc">users who like the same flicks as you do</h5>

	<ul id="bingeCollapse" class="collapsible popout">

	@foreach ($collected_users as $key => $user)

	    <li class="active">
	      <div class="collapsible-header bingelister">
	      	<div class="col s12">
		      	<img src={{ asset("storage/$user->image") }} class="circle" width="50" height="50" alt="{{ $user->username }}">
		      	@if ($key == '0')
		      		<span id="topMatch" class="new badge red lighten-2" data-badge-caption="!!!">Top Match</span>
		      	@endif
		      	<h5>{{ $user->username }}</h5>
	      	</div>
	      	<div class="col s12">
		      	<a href={{ url("/profile/view/$user->id") }} class="waves-effect waves-light btn discover-more tooltipped" data-position="left" data-tooltip="View Profile">
		      		<i class="large material-icons">account_circle</i>
		      	</a>
		      	<a class="waves-effect waves-light btn chat-with-user tooltipped" data-position="left" data-tooltip="Message User">
		      		<i class="large material-icons">chat</i>
		      	</a>
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
	      		@foreach ($ownBinges as $ownBinge)
	      			@if ($flick->id == $ownBinge->id)
		      		<a href={{ url("/flicks/view/$flick->id") }}>
		      			<img src={{ asset("storage/$flick->sm_image") }}>
		      		</a>
		      		@endif
	      		@endforeach
	      	@endforeach
	      </div>
	    </li>

	@endforeach

	</ul>

	<button onclick="topFxn()" id="backToTop"><i class="material-icons">arrow_upward</i></button>
@endsection

@section('indiv_js')

	<script type="text/javascript">

	$(document).ready(function() {
		$('.collapsible').collapsible();
		$('.tooltipped').tooltip();
	});

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

	</script>

@endsection