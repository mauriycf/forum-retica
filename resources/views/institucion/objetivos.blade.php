@extends('layouts.welcome') @section('content')
<section class="main-container">
	<div class="row">
		<div class="post">
			<article class="post clearfix">
				<div class="cintillo"></div>
				<div class="post-noticia">
					<h2>Objetivos.</h2>
					<img src="images/logo.png" width="200" alt="">
          <p>Crear una red nacional virtual a fin de impulsar la aplicación de las TIC aplicadas a la
agrícultura. Por consiguiente se espera:</p><br><br><br><br><br><br>
          <ol>
            <li>Establecer la articulación entre productores, instituciones u organizaciones, investigadores, estudiantes, poder popular y demás actores agrícolas.</li><br>
            <li>Constituir un espacio de intercambio, publicación y divulgación de conocimientos,
experiencias, opiniones e información agrícola.</li><br>
            <li>Desarrollar actividades de formación y capacitación dirigidas a las comunidades
agrícolas, tales como: cursos, talleres, diplomados, especializaciones, eventos, etc.</li><br>
            <li>Promover una gestión agrícola de innovación tecnológica en nuestro país.</li><br>
            <li>Impulsar políticas que promuevan planes, programas y proyectos orientados a la aplicación de TIC como herramienta para la optimización del proceso productivo y el parovechamiento eficaz y eficiente de las áreas agrícolas de nuestro país.</li>
            <br><li>Constituir medios de divulgación de información que permita a investigadores, estudiantes e instituciones difundir conocimientos sobre el sector agrícola venezolano.</li>
          </ol>
				</div>
			</article>
		</div>
		<div class="col">
			<aside id="aside">
				<div class="cintillo-aside"></div>
				<h3>Categorias</h3>
				<div class="grupo">
					<ul>
						<li><a href="/introduccion">Introducción.</a></li>
						<li><a href="/que-es-redtica">¿Qué es Redtica?</a></li>
						<li><a href="/areas-tematicas">Áreas Temáticas</a></li>
						<li><a href="/actores">Actores Involucrados.</a></li>
						<li><a href="/sistema-productivo">Sistema Productivo a abordar.</a></li>
						<li><a href="/objetivos">Objetivos.</a></li>
						<li><a href="/mision">Mision.</a></li>
						<li><a href="/vision">Vision.</a></li>
					</ul>
				</div>
			</aside>
		</div>
	</div>
</section>
@stop
