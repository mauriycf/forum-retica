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

                <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
                <a href="{{ url('/forums') }}">Foro</a>
                @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
            @endif
            <div class="content">
                <div class="title m-b-md" id="logo">
                    <a href="{{ url('/home') }}"><img src="images/logo.png" alt="" width="500"></a>
                </div>
                <div class="title m-b-md">
                    Retica
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Inicio</a>
                    <a href="https://laracasts.com">Foro</a>
                    <a href="https://laravel-news.com">Noticias</a>
                    <a href="https://forge.laravel.com">Institución</a>
                    <a href="https://github.com/laravel/laravel">Estudios</a>
                    <a class="icon-facebook" target="blank" href="https://www.facebook.com/profile.php?id=100014547347833&fref=ts"></a>
                    <a class="icon-twitter" target="blank" href="https://twitter.com/mppaptiniaula?lang=es"></a>
                    <a class="icon-instagram" target="blank" href="https://www.instagram.com/oticmatvenezuela/?hl=es"></a>
                </div>
            </div>
        </div>

        <div class="flex-center position-ref full-height">
           <!--  @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                <a href="{{ url('/home') }}">Perfil</a>
                <a href="{{ url('/forums') }}">Foro</a>
                @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
            @endif -->
            <div class="content">
                <div class="title m-b-md">
                    <a href="{{ url('/home') }}"><img src="images/logo.png" alt="" width="500"></a>
                </div>
                <div class="title m-b-md">
                    Retica
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Inicio</a>
                    <a href="https://laracasts.com">Foro</a>
                    <a href="https://laravel-news.com">Noticias</a>
                    <a href="https://forge.laravel.com">Institución</a>
                    <a href="https://github.com/laravel/laravel">Estudios</a>
                </div>
            </div>
        </div>
        <section id="banner">

</section>