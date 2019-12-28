@extends ('layout.app')

@section('title')
	Binge Feed
@endsection

@section('main_content')

	<div class="carousel">
	    @foreach ($flick_collection as $flick_item)
	    	<a class="carousel-item" href={{ url("/flicks/view/$flick_item->id") }}>
	    		<h3 class="carousel-details">{{ $flick_item->title }}</h3>
	    		<img class="responsive-img medium-rotate" src={{ asset("storage/$flick_item->md_image") }}>
	    		@foreach ($flick_item->users()->distinct()->get() as $user)
	    			<p class="carousel-details">{{ $user->username }}</p>
				@endforeach
	    	</a>
	    @endforeach
	</div>

@endsection

@section('indiv_js')

    <script type="text/javascript">
        
        $(document).ready(function() {
            $('.carousel').carousel({
            	duration: 100
            });

            setInterval(function() {
            	$('.carousel').carousel('next');
            }, 3000);
        });

    </script>

@endsection