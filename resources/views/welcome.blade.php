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
        <div class="flecha">
            <div id="flecha-arriba" class="flecha-arriba">
                <a href="#" class="fa fa-arrow-up" aria-hidden="true" ></a>
            </div>
        </div>
        <header class="cabecera">
            <nav>
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="noticias">Noticias</a></li>
                    <li><a href="foro">Foro</a></li>
                </ul>
                <ul>
                    <div class="dropdown">
                        <button class="dropbtn">Institución <span class="glyphicon glyphicon-triangle-bottom"></span></button>
                        <div class="dropdown-content">
                            <a href="#">link 1</a>
                            <a href="#">link 2</a>
                            <a href="#">link 3</a>
                            <a href="#">link 4</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"> Estudios <span class="glyphicon glyphicon-triangle-bottom"></span></button>
                        <div class="dropdown-content">
                            <a href="#">link 1</a>
                            <a href="#">link 2</a>
                            <a href="#">link 3</a>
                            <a href="#">link 4</a>
                        </div>
                    </div>
                    <li><a href="#" data-toggle="modal" data-target="#myModal">Ingresar<span class="glyphicon glyphicon-user"></li>
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
                <img src="images/logo.png" width="500">
                <h1 class="animated slideInUp">Retica</h1>
                <p class="animated slideInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur veritatis laborum ipsum, quos. Voluptate, facilis! Dolores deserunt reprehenderit voluptas quis dolor a vel veniam, officia incidunt placeat asperiores rem, recusandae!</p>
            </div>
        </div>
        <div id="particles-js"></div>
        <section class="wrap">
            <section class="bienvenidos">
                <h2>Bienvenidos a Retica</h2>
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, corporis fugiat velit rem, beatae qui repellat sit deserunt vel quia ab unde veritatis eaque maxime repudiandae laborum illum iure omnis.</h3>
            </section>
            <section class="contenedor-columnas">
                <div class="columnasx3">
                    <img src="images/paris.jpg" alt="">
                    <h4>titulo</h4>
                    <h5>subtitulo genial</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, temporibus, voluptates! Illo autem delectus magnam voluptatem aperiam quas, architecto recusandae doloribus ullam, dignissimos, excepturi reprehenderit minima consequuntur hic nisi quam.</p>
                </div>
                <div class="columnasx3">
                    <img src="images/paris.jpg" alt="">
                    <h4>titulo</h4>
                    <h5>subtitulo genial</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla dignissimos facere accusantium delectus exercitationem odit facilis hic dolores eaque rem! Odit, asperiores dolores? Minima modi laboriosam fugit dolore, exercitationem consequatur!</p>
                </div>
                <div class="columnasx3">
                    <img src="images/paris.jpg" alt="">
                    <h4>titulo</h4>
                    <h5>subtitulo genial</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, provident impedit veritatis ea saepe libero ipsum, aperiam pariatur neque officiis totam tempora recusandae voluptatibus fugit voluptate magni sint qui praesentium.</p>
                </div>
            </section>
        </section>
        <div class="testimonios">
            <div class="slider">
                <div class="slider-1">
                    <img src="images/image1.jpg" alt="">
                </div>
                <div class="slider-2">
                    <img src="images/images2.jpg" alt="">
                </div>
                <div class="slider-3">
                    <img src="images/images3.jpg" alt="">
                </div>
                <div class="slider-4">
                    <img src="images/images4.jpg" alt="">
                </div>
            </div>
        </div>
        <section class="banner-1">
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing. <a href="#">Enlace Externo <i class="fa fa-arrow-right" aria-hidden="true"></i></a></h3>
        </section>
        
        <section class="wrap">
            <section class="bienvenidos">
                <h2>Patrocinantes</h2>
            </section>
            <section class="contenedor-columnas">
                <div class="columnasx3">
                    <h4>titulo servicios</h4>
                    <i class="fa fa-paper-plane fa-4x" aria-hidden="true"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis totam, magnam similique, fugiat eius explicabo nostrum qui asperiores quibusdam, voluptas voluptatibus! Voluptatum repudiandae expedita modi facere aperiam itaque ipsum maxime incidunt, at saepe, soluta eligendi!</p>
                </div>
                <div class="columnasx3">
                    <h4>titulo servicios</h4>
                    <i class="fa fa-address-book fa-4x" aria-hidden="true"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex eveniet, dolor est incidunt suscipit blanditiis rerum ab praesentium mollitia vel numquam, ratione excepturi repellendus aspernatur, perferendis facere! Illum incidunt voluptate quibusdam repudiandae eum voluptas officia!</p>
                </div>
                <div class="columnasx3">
                    <h4>titulo servicios</h4>
                    <i class="fa fa-envelope-square fa-4x" aria-hidden="true"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi consequuntur explicabo eaque totam! Officiis aperiam nihil recusandae repellat nam ipsa tempore illum atque perspiciatis accusamus, numquam maiores quos, temporibus ratione, animi saepe suscipit assumenda iste.</p>
                </div>
            </section>
            <section class="contenedor-columnas">
                <div class="columnasx3">
                    <h4>titulo servicios</h4>
                    <i class="fa fa-graduation-cap fa-4x" aria-hidden="true"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat ex, at doloremque. Ut quos corrupti, et eveniet rem necessitatibus maiores unde tempore inventore aperiam veniam dicta impedit ea voluptate possimus vero temporibus debitis ducimus sunt.</p>
                </div>
                <div class="columnasx3">
                    <h4>titulo servicios</h4>
                    <i class="fa fa-map-marker fa-4x" aria-hidden="true"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde beatae esse quam facere ipsa consequatur, soluta cum dignissimos itaque magnam at ipsam fugiat error, illo. Eum fugiat ea impedit dolorum animi, nostrum atque, iste sit!</p>
                </div>
                <div class="columnasx3">
                    <h4>titulo servicios</h4>
                    <i class="fa fa-retweet fa-4x" aria-hidden="true"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ut laborum necessitatibus accusamus quam recusandae quibusdam error dolore vitae voluptas iusto quaerat nobis, aliquid nisi ducimus eos ipsum aperiam. Nostrum necessitatibus autem perspiciatis quidem est.</p>
                </div>
            </section>
        </section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3944.982047316212!2d-71.145409!3d8.5977214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e64871fd6c85617%3A0x56d235bb1ff6b93c!2sRectorado+de+la+Universidad+de+Los+Andes!5e0!3m2!1ses-419!2sve!4v1421080123762"
        width="100%" height="300" frameborder="0" style="border:0"></iframe>
        
        <section class="wrap">
            <section class="bienvenidos">
                <h2>Contáctanos</h2>
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, corporis fugiat velit rem, beatae qui repellat sit deserunt vel quia ab unde veritatis eaque maxime repudiandae laborum illum iure omnis.</h3>
            </section>
            <section class="dos-columnas">
                <div class="formulario">
                    <h4>Formulario de contacto</h4>
                    <form action="" method="POST">
                        <input type="text" name="nombre" placeholder="Nombre" class="caja-1">
                        <input type="text" name="apellido" placeholder="Apellido" class="caja-1">
                        <input type="email" name="email" placeholder="Correo Electronico" class="caja-1">
                        <input type="tel" name="telefono" placeholder="Teléfono" class="caja-1">
                        <textarea name="comentarios" id="" cols="30" rows="10" class="caja-2" placeholder="Deja tus Comentarios Aquí"></textarea>
                        <button type="submit" class="contratar-a correr" >Enviar</button>
                    </form>
                </div>
                <div class="formulario">
                    <div class="columnasx3">
                        <i class="fa fa-mobile fa-4x" aria-hidden="true"></i>
                        <h5>titulo servicios</h4>
                        <p>Lorem ipsum.</p>
                    </div>
                    <div class="columnasx3">
                        <i class="fa fa-map-marker fa-4x" aria-hidden="true"></i>
                        <h5>titulo servicios</h4>
                        <p>Lorem ipsum.</p>
                    </div>
                    <div class="columnasx3">
                        <i class="fa fa-twitter fa-4x" aria-hidden="true"></i>
                        <h5>titulo servicios</h4>
                        <p>Lorem ipsum.</p>
                    </div>
                    <div class="columnasx3">
                        <i class="fa fa-instagram fa-4x" aria-hidden="true"></i>
                        <h5>titulo servicios</h4>
                        <p>Lorem ipsum.</p>
                    </div>
                    <div class="columnasx3">
                        <i class="fa fa-facebook fa-4x" aria-hidden="true"></i>
                        <h5>titulo servicios</h4>
                        <p>Lorem ipsum.</p>
                    </div>
                    <div class="columnasx3">
                        <i class="fa fa-envelope fa-4x" aria-hidden="true"></i>
                        <h5>titulo servicios</h4>
                        <p>Lorem ipsum.</p>
                    </div>
                </div>
            </section>
        </section>
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