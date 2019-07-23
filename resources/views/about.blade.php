<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha256-Md8eaeo67OiouuXAi8t/Xpd8t2+IaJezATVTWbZqSOw=" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                
                background: url(../img/bniceworship.jpg) top right;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                 
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;


            }

            .full-height {
                height: 70vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }
            .fs-36 {
                font-size: 36px;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 20px;
                bottom: 60%;
            }
            .bottom-left {
                position: absolute;
                left: 20px;
                bottom: 10%;
            }

            .content {
                text-align: left;
            }

            .title {
                font-size: 48px;
            }

            .links > a {
                color: #fff;
                padding: 0 5px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .nav
            {
                color: #fff;
            }

            .m-b-md {
                margin-bottom: 10px;
                width:47vw;
                text-align: left;
                color:#fff;
            }
            #block {
                background: #000;
                filter: alpha(opacity=40);
                /* IE */
                -moz-opacity: 0.4;
                /* Mozilla */
                opacity: 0.4;
                /* CSS3 */
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height nav" >
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
</div>
            <div class="content bottom-left">
                <div id="block"></div>
                <div class="title m-b-md" >
                    A social meeting place for Worshippers
                </div>
                <div class="fs-36 m-b-md">
                <ul><li>Sign up to start using this portal to engage with your choir or singing members.</li>
                <li>No more excuse we didn't have the instrumentals or lyrics to learn the song.</li>
                <Li>Manage your choir songs effectively</li></ul>
        </div>
            </div>
        
             
 

     </body>
</html>
