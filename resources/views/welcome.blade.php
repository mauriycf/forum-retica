@extends('layouts.welcome')
@section('content')
<section class="wrap">
    <section class="bienvenidos">
        <h2>Bienvenidos a {{ config('app.name', 'Laravel') }}</h2>
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
        <div class="formulario form-2">
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
@stop