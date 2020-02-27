<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                background:url('../../images/logo.png') no-repeat;
                background-size: 100%;
                font-family: 'Cambria', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                color: #000 !important;
            }

            .full-height {
                height: 100vh;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #000 !important;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .btn{
                background-color: #5ca3ea;
                color:#000 !important;
                border-radius: 10px;

            }
            .btn a{
                text-decoration: none;
            }
            .btn:hover{
                background-color: #4dd655;

            }

            
        </style>
    </head>
    <body>
        <div class="flex-center">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                       <button class="btn"> <a href="{{ url('/admin-sneha/home') }}">Home</a></button>
                    @else
                        <button class="btn"><a href="{{ route('login') }}"><h1>Login</h1></a></button>

                        @if (Route::has('register'))
                           <button class="btn"> <a href="{{ route('register') }}"><h1>Register</h1></a></button>
                        @endif
                    @endauth
                </div>
            @endif

           
        </div>
    </body>
</html>
