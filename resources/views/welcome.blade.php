<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FliQ CritiQ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url('bg-img/goldreel.jpg');
                background-attachment: fixed;
                background-size: cover;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 900;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                text-shadow: 3px 3px #000;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-shadow: 2px 2px #000;
            }

            @media only screen and (max-width: 412px) {
                #bottomLinks {
                    margin-top: 230px;
                }
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    FliQ CritiQ
                </div>

                <div id="bottomLinks" class="links">
                    <a href="{{ url('/flicks') }}">Flicks</a>
                    <a href="{{ url('/binge') }}">Binge</a>
                    <a href="{{ url('/discover') }}">Discover</a>
                </div>
            </div>
        </div>

        <!-- Import jQuery -->      
        <script type="text/javascript" src="{{ asset('lib/jquery-3.3.1.min.js') }}"></script>

        <script type="text/javascript">
            
            var bod = $("body");

            var bg = ["url('bg-img/curtains.jpg')", "url('bg-img/goldreel.jpg')"];

            var current = 0;

            function nextBg() {
                bod.css('background-image', bg[current = ++current % bg.length]);

                setTimeout(nextBg, 3000);
            }

            setTimeout(nextBg, 3000);

        </script>
    </body>
</html>
