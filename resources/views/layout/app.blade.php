<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">

  <title>{{ config('app.name', 'FliQ CritiQ') }} - @yield('title')</title>

  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">

  <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import Materialize CSS-->
  <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css')}}"  media="screen,projection"/>
  <!-- Import custom CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your customer chat code -->
  <div class="fb-customerchat"
    attribution="setup_tool"
    page_id="1990952097835401"
    theme_color="#e68585"
    logged_in_greeting="Want us to include a movie or flick of your choice? Let us know!"
    logged_out_greeting="Want us to include a movie or flick of your choice? Let us know!">
  </div>

  <nav>
    <div class="nav-wrapper">
      <a href="{{ url('/') }}" class="brand-logo center">FliQ CritiQ</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="{{ url('/flicks') }}"><i class="material-icons">local_movies</i> Flicks</a></li>
        <li><a href="{{ url('/binge') }}"><i class="material-icons">visibility</i> Binge</a></li>
        <li><a href="{{ url('/discover') }}"><i class="material-icons">stars</i> Discover</a></li>
      </ul>

      <ul id="nav-mobile" class="right hide-on-med-and-down">

        @if ( Auth::check() )

        <li><a href="{{ url('/feed') }}"><i class="material-icons">home</i> Home</a></li>
        <li><a href="{{ url('/profile') }}"><i class="material-icons">account_circle</i> Profile</a></li>
        <li>
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <i class="material-icons">verified_user</i>
        Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
        </li>

        @else
        <li><a href="{{ url('/') }}"><i class="material-icons">home</i> Home</a></li>
        <li><a href="{{ url('/login') }}"><i class="material-icons">verified_user</i> Login</a></li>
        <li><a href="{{ url('/register') }}"><i class="material-icons">verified_user</i> Register</a></li>
        @endif

      </ul>

    {{-- MOBILE NAV --}}
    <ul class="sidenav" id="mobile-demo">
      <li><a href="{{ url('/flicks') }}"><i class="material-icons">local_movies</i> Flicks</a></li>
      <li><a href="{{ url('/binge') }}"><i class="material-icons">visibility</i> Binge</a></li>
      <li><a href="{{ url('/discover') }}"><i class="material-icons">stars</i> Discover</a></li>

      @if ( Auth::check() )

      <li><a href="{{ url('/home') }}"><i class="material-icons">home</i> Home</a></li>
      <li><a href="{{ url('/profile') }}"><i class="material-icons">account_circle</i> Profile</a></li>
      <li>
      <a href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      <i class="material-icons">verified_user</i>
      Logout
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
      </li>

      @else
      <li><a href="{{ url('/') }}"><i class="material-icons">home</i> Home</a></li>
      <li><a href="{{ url('/login') }}"><i class="material-icons">verified_user</i> Login</a></li>
      <li><a href="{{ url('/register') }}"><i class="material-icons">verified_user</i> Register</a></li>
      @endif
    </ul>
</div>
</nav>

<main>
    <h1>@yield('title')</h1>

    <div class="container">
      @yield('main_content')
    </div>
</main>

<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">FliQ CritiQ</h5>
        <p class="grey-text text-lighten-4">
        FliQ CritiQ is a community that loves motion pictures aka flicks. It uses a simple algorithm to match members with people who have the same viewing tastes as they do so they can share bingelists with each other. Adulting is hard enough as it is. Every hour counts. FliQ CritiQ wants to help you spend downtime more chill than you can ever be.
        </p>

        <p>The premise is simple. Tell us what you like in flicks.</p>
        <p>Discover other people who have the same viewing tastes.</p>
        <p>Less wasted time. More trusted reviews.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Site Map</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="{{ url('/flicks') }}">Flicks</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ url('/binge') }}">Binge</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ url('/discover') }}">Discover</a></li>
          <li><a class="grey-text text-lighten-3" href="mailto:raymcmy@gmail.com?Subject=Inquiry" target="_top">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      &copy; 2018 Ruby Ann Y. Matias
      <a class="grey-text text-lighten-4 right socmed" href="https://www.facebook.com"><i class="fab fa-facebook-f fa-2x"></i></a>
      <a class="grey-text text-lighten-4 right socmed" href="https://www.instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
      <a class="grey-text text-lighten-4 right socmed" href="https://www.twitter.com"><i class="fab fa-twitter fa-2x"></i></a>
    </div>
  </div>
</footer>



<!-- Import jQuery -->
<script type="text/javascript" src="{{ asset('lib/jquery-3.3.1.min.js') }}"></script>
<!--Import Materialize JS-->
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>

<script type="text/javascript">

  $(document).ready(function() {
    $('.sidenav').sidenav();
  });

</script>

@yield('indiv_js')

</body>
</html>