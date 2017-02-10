<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
        Retica
        </title>
        <script src="js/bootstrap.js" charset="utf-8"></script>
        <link href="https://file.myfontastic.com/5E3BuKH3rGbwEhoW738v7Y/icons.css" rel="stylesheet">
        <script src="js/bootstrap.min.js" charset="utf-8"></script>
        <script src="js/jquery-3.1.1.min.js" charset="utf-8"></script>
        <script src="js/script.js" charset="utf-8"></script>
        <link href="css/bootstrap.min.css" media="screen" title="no title">
        <link rel="stylesheet" href="css/master.css" media="screen" title="no title">
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Para telefonos -->
         <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
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
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            @else
                            <li><a href="{{ url('/') }}">Inicio</a></li>
                            <li><a href="{{ url('/forums') }}">Foro</a></li>
                            <li><a href="{{ url('/noticias') }}">Noticias</a></li>
                            <li><a href="{{ url('/institucion') }}">Institución</a></li>
                            <li><a href="{{ url('/estudios') }}">Estudios</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>

        @yield('content')
        <footer class="footer" id="footer">
            <div class="social">
                <a class="icon-facebook" href="https://www.facebook.com/profile.php?id=100014547347833&fref=ts" target="blank"></a>
                <a class="icon-twitter" target="blank" href="https://twitter.com/mppaptiniaula?lang=es"></a>
                <a class="icon-instagram" href="https://www.instagram.com/oticmatvenezuela/?hl=es" target="blank"></a>
            </div>
            <p class="text-muted credit">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, quam!</p>
        </footer>
        <script src="js/slider.js" charset="utf-8"></script>
    </body>
</html>