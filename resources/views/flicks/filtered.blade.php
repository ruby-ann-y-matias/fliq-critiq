@extends ('layout.app')

@section('title')
	{{ $genre->genre }}
@endsection

@section('main_content')

	@if (Session::has('alert'))
		<div id="alert" class="alert alert-success">
			{{ Session::get('alert') }}
		</div>
	@endif
	
	<div class="row">
	    <div class="col s12">
		    <ul class="tabs">
		    	<li class="tab tooltipped" data-position="bottom" data-tooltip="Click on Genre to filter flicks">
		    		<a target="_self" href={{ url("/flicks") }}>Filter by Genre</a>
		    	</li>

		        @foreach ($allGen as $gen)

		        <li class="tab tooltipped" data-position="bottom" data-tooltip="Swipe to see more genres">
		        	@if ($genre->id == $gen->id)
		        	<a data-value="{{ $gen->id }}" target="_self" href={{ url("/flicks/genre/$gen->id") }} class="genre-filter active">
		        		{{ $gen->genre }}
		        	</a>
		        	@else
		        	<a data-value="{{ $gen->id }}" target="_self" href={{ url("/flicks/genre/$gen->id") }} class="genre-filter">
		        		{{ $gen->genre }}
		        	</a>
		        	@endif
		        </li>
		        @endforeach
		    </ul>
	    </div>
	</div>

	<div class="row">
		@foreach ($filters as $filter)
			<div class="col s12 m3">
				<a href={{ url("/flicks/view/$filter->id") }}>
				<div class="card hoverable flick-cards">
				<div class="card-image">
				  <img src={{asset("storage/$filter->sm_image")}}>
				  <button class="btn-floating halfway-fab waves-effect waves-light red show-indiv btn modal-trigger" value="{{ $filter->id }}" data-target="showIndiv">
				  	<i class="material-icons">add</i>
				  </button>
				</div>
				<div class="card-content">
				  <p>{{ $filter->description }}</p>
				</div>
				</div>
				</a>
			</div>
		@endforeach
	</div>

	<!-- Modal Structure -->
	 <div id="showIndiv" class="modal">
	    <div class="modal-content">
	    	
	    </div>
	    {{-- <div class="modal-footer">
	      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Add to Binge List</a>
	    </div> --}}
	 </div>

	 <button onclick="topFxn()" id="backToTop"><i class="material-icons">arrow_upward</i></button>

@endsection

@section('indiv_js')
	<script type="text/javascript">

		$(document).ready(function() {
			$('.modal').modal();
			$('.tabs').tabs();
			$('.tooltipped').tooltip();
			// $('.collapsible').collapsible();
		});

		// SHOW INDIVIDUAL FLICK ON MODAL
		$('.show-indiv').click(function() {
			var flick_id = $(this).val();
			// alert(flick_id);

			$.get('/flicks/' + flick_id,
				{
					// id: flick_id
				},
				function(data, status) {
					$('.modal-content').html(data);
				});
		});

		// // FILTER BY GENRE
		// $('.genre-filter').click(function() {
		// 	var genreId = $(this).data('value');
		// 	// alert(i);

		// 	$.get('flicks/genre/' + genreId,
		// 		{
		// 			// genre_id = genreId;
		// 		},
		// 		function(data, status) {
		// 			$('#genre' + genreId).html(data);
		// 		});
		// });

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

		// FADEOUT ALERT

		$('#alert').fadeOut(5000, function() {
			// 
		});


	</script>
@endsection