<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/bootstrap-theme.css')}}" rel="stylesheet"/>



        <title>Easy Tax</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


        <!-- Styles -->
        <style>
            html, body { 
                background-image:url('{{asset('img/calculator.jpg')}}'); 
                background-image:linear-gradient(to bottom right,#002f4b,#dc4225);
                background-color: #fff;
                color: #636b6f;
            
                font-family: 'Georgia', sans-serif;
                font-weight: 200;
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

           /* .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }/*/

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                color:black;
            }
        </style>
                <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <div class="title m-b-md">
                   EASYTAX
                </div>
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"><button style="font-size:25px; color:white; padding: 12px; border-radius:6px; background-color:blue; cursor:pointer;">Home</button></a>
                    @else
                        
                    @endauth
                        <a href="{{ route('login') }}"><button style="font-size:25px; color:white; padding: 12px; border-radius:6px; background-color:blue; cursor:pointer">Login</button></a>
                        <a href="{{ route('register') }}"><button style="font-size:25px; color:white;  padding: 12px; border-radius:6px; background-color: blue; cursor:pointer; ">Register</button></a>
                   
                </div>
            @endif
                
            </div>
        </div>
    </body>
</html>
