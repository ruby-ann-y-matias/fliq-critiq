@extends ('layout.app')

@section('title')
	Flicks
@endsection

@section('main_content')

	@if (Session::has('alert'))
		<div id="alert" class="alert alert-success">
			{{ Session::get('alert') }}
		</div>
	@endif

	@if ( Auth::check() && Auth::user()->roles()->first()->role == 'admin')
	<ul id="addFlick" class="collapsible popout">
	    <li>
	      <div class="collapsible-header">
	      	<div class="row">
		      	<button id="addBtn" class="waves-effect waves-light btn">Add Flick</button>
	      	</div>
	      </div>
	      <div class="collapsible-body">
	      	<form action={{ url('/flicks/create')}} method="POST" enctype="multipart/form-data">
	      		{{ csrf_field() }}
	      		<div class="input-field">
	      			<textarea id="title" name="title" class="validate avoid-wrap"></textarea>
	      			<label for="title">Title</label>
	      		</div>
	      		<div class="input-field">
	      			<textarea id="description" name="description" rows="5" class="validate"></textarea>
	      			<label for="description">Description</label>
	      		</div>
	      		<div class="input-field">
	      			<textarea id="year" name="year" class="validate avoid-wrap"></textarea>
	      			<label for="year">Year</label>
	      		</div>
	      		<div class="input-field">
	      			<textarea id="ageLimit" name="age_limit" class="validate avoid-wrap"></textarea>
	      			<label for="ageLimit">Age Limit</label>
	      		</div>
	      		<div class="input-field">
	      			<textarea id="duration" name="duration" class="validate avoid-wrap"></textarea>
	      			<label for="duration">Duration</label>
	      		</div>
	      		<div class="file-field img-upload">
	      			<div class="btn upload-label">
		      			<span>Small-sized Image</span>
		      			<input id="smImg" type="file" name="sm_image" onchange="readSmallURL(this);">
	      			</div>
	      			<img id="smPreview" src="" width="100"">
	      			<div class="file-path-wrapper">
	      				<input class="file-path validate" type="text">
	      			</div>
	      		</div>
	      		<div class="file-field img-upload">
	      			<div class="btn upload-label">
		      			<span>Medium-sized Image</span>
		      			<input id="mdImg" type="file" name="md_image" onchange="readMediumURL(this);">
	      			</div>
	      			<img id="mdPreview" src="" width="100">
	      			<div class="file-path-wrapper">
	      				<input class="file-path validate" type="text">
	      			</div>
	      		</div>
	      		<div class="row">
		      		<button id="submitBtn" class="btn waves-effect waves-light" type="submit" name="action">Submit
					    <i class="material-icons right">send</i>
					</button>
				</div>
	      	</form>
	      </div>
	    </li>
	</ul>

	@endif

	<div class="row">
	    <div class="col s12">
		    <ul class="tabs">
		    	<li class="tab tooltipped" data-position="bottom" data-tooltip="Click on Genre to filter flicks">
		    		<a class="active" href="#genreAll">Filter by Genre</a>
		    	</li>

		        @foreach ($genres as $genre)
		        <li class="tab tooltipped" data-position="bottom" data-tooltip="Swipe to see more genres">
		        	<a data-value="{{ $genre->id }}" target="_self" href={{ url("/flicks/genre/$genre->id") }} class="genre-filter">
		        		{{ $genre->genre }}
		        	</a>
		        </li>
		        @endforeach
		    </ul>
	    </div>
	</div>

   {{--  @foreach ($genres as $genre)

   	<div id="genre{{ $genre->id }}" class="col s12">
		
    </div>

    @endforeach --}}

	<div id="genreAll" class="col s12">
		 <div class="row">

		 	@foreach ($flicks as $flick)
		    <div class="col s12 m3">
		    	<a href={{ url("/flicks/view/$flick->id") }}>
				<div class="card hoverable flick-cards">
					<div class="card-image">
						<img src={{ asset("/storage/$flick->sm_image") }}>
						<button class="btn-floating halfway-fab waves-effect waves-light show-indiv btn modal-trigger" value="{{ $flick->id }}" data-target="showIndiv">
							<i class="material-icons">add</i>
						</button>
					</div>
					<div class="card-content">
						<p>{{ $flick->description }}</p>
					</div>
				</div>
				</a>
		    </div>
		    @endforeach

		  </div>
	 </div>

	 {{ $flicks->links() }}

	 <!-- Modal Structure -->
	 <div id="showIndiv" class="modal">
	    <div class="modal-content">
	    	
	    </div>
	 </div>

	 <button onclick="topFxn()" id="backToTop"><i class="material-icons">arrow_upward</i></button>

@endsection

@section('indiv_js')
	<script type="text/javascript">

		$(document).ready(function() {
			$('.modal').modal();
			$('.tabs').tabs();
			$('.tooltipped').tooltip();
			$('.collapsible').collapsible();
		});

		// AVOID MULTI-LINE INPUT ON ONE-LINER TEXTAREAS
		$('.avoid-wrap').keydown(function(e) {
			if (e.keyCode == '13' || e.keyCode == '34') {
				e.preventDefault();
			}
		});

		// PREVIEW IMAGE UPON CREATE OR UPDATE
		function readSmallURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function(e) {
					$('#smPreview').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}

		function readMediumURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function(e) {
					$('#mdPreview').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}

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

		// FILTER BY GENRE
		$('.genre-filter').click(function() {
			var genreId = $(this).data('value');
			// alert(i);

			$.get('flicks/genre/' + genreId,
				{
					// genre_id = genreId;
				},
				function(data, status) {
					$('#genre' + genreId).html(data);
				});
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

		// FADEOUT ALERT

		$('#alert').fadeOut(5000, function() {
			// 
		});

	</script>
@endsection