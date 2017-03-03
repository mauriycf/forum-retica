<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://use.fontawesome.com/ed7c0ff828.js"></script>
        <script src="js/bootstrap.js" charset="utf-8"></script>
        <link href="https://file.myfontastic.com/5E3BuKH3rGbwEhoW738v7Y/icons.css" rel="stylesheet">
        <script src="js/bootstrap.min.js" charset="utf-8"></script>
        <script src="js/jquery-3.1.1.min.js" charset="utf-8"></script>
        <script src="js/script.js" charset="utf-8"></script>
        <link href="css/bootstrap.min.css" media="screen" title="no title">
        <link rel="stylesheet" href="css/master.css" media="screen" title="no title">
        <link rel="stylesheet" href="css/redes.css">
        <link rel="stylesheet" href="css/formulario.css">
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/secciones.css">
        <link rel="stylesheet" href="sss/sss.css">
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Styles -->
        <!-- <style>
        html, body {
        width: 100%;
        background-image: url(images/bg.jpg);
        background-attachment: contain;
        background-position: center;
        background-repeat: no-repeat;
        font-weight: 100;
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
        color: black;
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
        font-size: 100px;
        color: #003e68;
        }
        .links > a {
        color: black;
        padding: 0 25px;
        font-size: 20px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        }
        .links > a:hover{
        color: #0f8bdd;
        transition: 0.5s;
        }
        .m-b-md {
        margin-bottom: 30px;
        }
        .flex-center .content .links .icon-facebook:hover{
        color: #556efc;
        transition: 0.5s;
        }
        .flex-center .content .links .icon-twitter:hover{
        color: #54cdf9;
        transition: 0.5s;
        }
        .flex-center .content .links .icon-instagram:hover{
        color: #968554;
        transition: 0.5s;">
        }
        </style> -->
    </head>
    <body>
        <div class="red">
            <div id="facebook" class="facebook">
                <a href="#" target="blank" class="fa fa-facebook" aria-hidden="true"></a>
            </div>
            <div id="twitter" class="twitter">
                <a href="#" target="blank" class="fa fa-twitter" aria-hidden="true"></a>
            </div>
            <div id="instagram" class="instagram">
                <a href="#" target="blank" class="fa fa-instagram" aria-hidden="true"></a>
            </div>
            <div id="correo" class="correo">
                <a href="#" target="blank" class="fa fa-envelope" aria-hidden="true"></a>
            </div>
        </div>
        <!-- <div class="flecha">
            <div id="flecha-arriba" class="flecha-arriba">
                <a href="#top" class="fa fa-arrow-up" aria-hidden="true" ></a>
            </div>
        </div> -->
        <span class="ir-arriba fa fa-arrow-up" aria-hidden="true"></span>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="barra">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <img src="images/logo.png" width="50" alt="">
                    <a style="font-size:14px;color:#fff;" class="navbar-brand" href="#">REDTICA</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Inicio</a></li>
                        <li><a href="noticias">Noticias</a></li>
                        <li><a href="forums">Foro</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Institucion <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="que-es-redtica">¿Qué es Redtica?</a></li>
                                <li><a href="#">Objetivos</a></li>
                                <li><a href="#">Mision</a></li>
                                <li><a href="#">Vision</a></li>
                                <li><a href="/actores">Actores involucrados</a></li>
                                <li><a href="#">Ubicación</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Iniciar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="cabecera">
            <nav id="top">
                <div class="logo">
                    <h2><img src="images/logo.png" width="60" alt=""> {{ config('app.name', 'Laravel') }}</h2>
                </div>
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="noticias">Noticias</a></li>
                    <li><a href="forums">Foro</a></li>
                </ul>
                <ul>
                    <div class="dropdown">
                        <button class="dropbtn">Institución <span class="glyphicon glyphicon-triangle-bottom"></span></button>
                        <div class="dropdown-content">
                            <a href="que-es-redtica">¿Qué es Redtica?</a>
                            <a href="/objetivos">Objetivos</a>
                            <a href="/mision">Mision</a>
                            <a href="/vision">Vision</a>
                            <a href="/actores">Actores involucrados</a>
                            <a href="/ubicacion">Ubicación</a>
                        </div>
                    </div>
                </ul>
                <ul>
                    <div class="dropdown">
                        <button class="dropbtn">Estudios <span class="glyphicon glyphicon-triangle-bottom"></span></button>
                        <div class="dropdown-content">
                            <a href="">Hola</a>
                        </div>
                    </div>
                </ul>
                <ul>
                    <div class="redes-sociales">
                        <li>
                            <a class="icon-facebook" target="blank" href="https://www.facebook.com/profile.php?id=100014547347833&fref=ts"></a>
                        </li>
                        <li>
                            <a class="icon-twitter" target="blank" href="https://twitter.com/mppaptiniaula?lang=es"></a>
                        </li>
                        <li>
                            <a class="icon-instagram" target="blank" href="https://www.instagram.com/oticmatvenezuela/?hl=es"></a>
                        </li>
                    </div>
                </ul>
            </nav>
        </header>
        <div class="ancho-letras">
            <div class="letras-slider">
                <img src="images/logo.png" class="logo-bienvenidos">
                <h1 class="animated slideInUp">{{ config('app.name', 'Laravel') }}</h1>
                <p class="animated slideInUp">plataforma virtual que promueve un sistema de interrelaciones
                    entre los diferentes actores del sector agrícola venezolano, así como también la canalización
                    de actividades o planes de formación y capacitación a las comunidades agrícolas
                sobre las TIC aplicadas a la agricultura.</p>
            </div>
        </div>
        <div id="particles-js"></div>
        @yield('content')
        <footer class="footer" id="footer">
            <div class="social">
                <a class="icon-facebook" href="https://www.facebook.com/profile.php?id=100014547347833&fref=ts" target="blank"></a>
                <a class="icon-twitter" target="blank" href="https://twitter.com/mppaptiniaula?lang=es"></a>
                <a class="icon-instagram" href="https://www.instagram.com/oticmatvenezuela/?hl=es" target="blank"></a>
            </div>
        </footer>
        <script src="js/particles.js"></script>
        <script src="js/apps.js"></script>
        <script src="sss/sss.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    </body>
</html>
