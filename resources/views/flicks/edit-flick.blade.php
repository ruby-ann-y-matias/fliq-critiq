<form action={{ url("/flicks/update/$flick->id")}} method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="input-field">
		<textarea id="title" name="title" class="validate avoid-wrap">{{ $flick->title }}</textarea>
		<label for="title">Title</label>
	</div>
	<div class="input-field">
		<textarea id="description" name="description" rows="5" class="validate">{{ $flick->description }}</textarea>
		<label for="description">Description</label>
	</div>
	<div class="input-field">
		<textarea id="year" name="year" class="validate avoid-wrap">{{ $flick->year }}</textarea>
		<label for="year">Year</label>
	</div>
	<div class="input-field">
		<textarea id="ageLimit" name="age_limit" class="validate avoid-wrap"></textarea>
		<label for="ageLimit">Age Limit</label>
	</div>
	<div class="input-field">
		<textarea id="duration" name="duration" class="validate avoid-wrap">{{ $flick->duration }}</textarea>
		<label for="duration">Duration</label>
	</div>
	<div class="row img-upload">
		<label class="img-label" for="smImg">Small-sized Image</label>
		<input id="smImg" type="file" name="sm_image" value="{{ $flick->sm_image }}" onchange="readSmallURL(this);">
		<img id="smPreview" src={{ asset("/storage/$flick->sm_image")}} width="100"">
	</div>
	<div class="row img-upload">
		<label class="img-label" for="mdImg">Medium-sized Image</label>
		<input id="mdImg" type="file" name="md_image" value="{{ $flick->md_image }}" onchange="readMediumURL(this);">
		<img id="mdPreview" src={{ asset("/storage/$flick->md_image")}} width="100">
	</div>
	<div class="row">

	</div>
	<div class="row">
		<button id="submitBtn" class="btn waves-effect waves-light" type="submit" name="action">Update
	    <i class="material-icons right">send</i>
		</button>
	</div>
</form>

<script type="text/javascript">

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

</script>