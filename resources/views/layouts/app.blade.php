<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Fira+Mono' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

</head>
<body id="app-layout">
    <!--Navbar-->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <!--Collapsed Hamburger-->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--/Collapsed Hamburger-->

                <!--Branding Image-->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <strong>i</strong>qam
                </a>
                <!--/Branding Image-->
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!--Right Side Of Navbar-->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        @if(url('/login') !== Request::url())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                        @endif
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                @if(route('home') !== Request::url())
                                    <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-home"></i>Dashboard</a></li>
                                @endif
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
                <!--/Right Side Of Navbar-->
            </div>
        </div>
    </nav>
    <!--/Navbar-->
    <!--Flash Message-->
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel-body">
                </div>
            </div>
        </div>
    </div>
    <!--/Flash Message-->
    <!--Container-->
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!--/Container-->
    <!--Footer-->
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel-body">
                    <div class="well well-sm text-center">
                        <small>
                            by <b>Network</b>.<sub>run</sub>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Footer-->
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>
