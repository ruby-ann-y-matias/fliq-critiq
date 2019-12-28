<a href="#!" id="closeModal" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
<h5 id="titleRow"> {{ $single->title }} </h5>
<form id="addToBL" method="POST" action={{ url("/profile/add-to-binge/$single->id") }}>
	{{ csrf_field() }}
	<input hidden type="number" name="flick_id" value="{{ $single->id }}">
	<button class="btn waves-effect waves-light btn-small" type="submit" name="action">Add to Binge List
    <i class="material-icons right">send</i>
  	</button>
</form>

<div id="moreInfo" class="row">
	<div class="col s12 m6">
		<span><strong>Duration:</strong> {{ $single->duration }} </span>
	</div>
	<div class="col s12 m6">
		<span><strong>Age Limit:</strong> {{ $single->age_limit }} </span>
	</div>
</div>

<p id="descRow"> {{ $single->description }} </p>

@if ( Auth::check() && Auth::user()->roles()->first()->role == 'admin')
<form id="addGenre" action={{ url("/flicks/$single->id/add-genres") }} method="POST">
	{{ csrf_field() }}
	<div class="row">
		<div id="classify" class="input-field col s12 m6">
		    <select multiple name="genre[]">
				<option value="" disabled selected>Choose genre</option>
				
				@foreach ($genres as $genre)

					{{-- @foreach ($selected as $select) --}}
					{{-- @if ($selected->contains($genre))

						<option class="active selected" value="{{ $genre->id }}">{{ $genre->genre }}</option>

					@else --}}

						<option value="{{ $genre->id }}">{{ $genre->genre }}</option>

					{{-- @endif --}}
					{{-- @endforeach --}}
				@endforeach
		    </select>
	 	</div>
	 	<div class="col s12 m6">
		 	<button class="btn waves-effect waves-light" type="submit" name="action">Classify
		    	<i class="material-icons right">send</i>
			</button>
		</div>
	</div>
</form>
@endif

<img class="responsive-img" src={{ asset("storage/$single->md_image") }} alt="{{ $single->title }}">

<script type="text/javascript">
	
	$('select').formSelect();

</script>
