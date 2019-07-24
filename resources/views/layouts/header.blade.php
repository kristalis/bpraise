<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app0.css" rel="stylesheet">

    <!-- Scripts -->
   
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {<span class="glyphicon glyphicon-play"></span>} {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input name="q" type="search" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default btn-search">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </button>
                    </form>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li>
                                <p class="navbar-btn">
                                    <a class="btn btn-primary" href="{{ url('/login') }}">Sign In</a>
                                </p>
                            </li>
                            <li><a href="{{ url('/register') }}">Sign Up</a></li>
                        @else
                            <li>

                                <a class="dropdown-item"  href="{{ route('pwlist.create') }}"> <span class="glyphicon glyphicon-open"></span></a>

                                   
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="glyphicon glyphicon-bell"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown-header">No Notification</li>
                                </ul>
                            </li>
                            <li class="nav-item">
                            <p class="navbar-btn">

              <a href="{{ route('logout') }}" class="nav-link btn btn-primary"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </a>
</p>
          </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="sub-nav text-center">
        @if (Auth::guest())
    <a href="#/" class="active">Home</a> 
    @else
    <a href="{{ route('home') }}" class="">Dashboard</a> 
    <a href="{{ route('rehearsal.create') }}" class="">Rehearsals</a> 
    <a href="{{ route('group.create') }}" class="">Rehearsals</a> 



    @endif
    <a href="#/trending" class="">News & Events</a> 
    <a href="/about" class="">About BWorship</a>
</div>