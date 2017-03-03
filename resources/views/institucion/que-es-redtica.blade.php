@extends('layouts.welcome')
@section('content')
<section class="main-container">
	<div class="row">
		<div class="post">
			<article class="post clearfix">
				<div class="cintillo"></div>
				<div class="post-noticia">
					<h2>¿Qué es Redtica?.</h2>
					<img src="images/logo.png" width="200" alt="">
					<p>La REDTICA se trata de una plataforma virtual que promueve un sistema de interrelaciones
						entre los diferentes actores del sector agrícola venezolano, así como también la canalizacion
						de actividades o planes de formación y capacitación a las comunidades agrícolas
						sobre las TIC aplicadas a la agricultura. En tal sentido, el objeto consiste en organizar y promover
						la articulacion entre instituciones, productores, investigadores, estudiantes, poder
						popular y demas actores relacionados con la actividad agrícola, con el proposito de constituir un espacio de divulgacion y publicación de información. En particular, la propuesta
						de red involucra una sala de intercambio de informacion, experiencias y saberes donde
						los usuarios comparten con otros las actividades todo tipo de actividades concernientes al
						uso de las TIC aplicadas a la agricultura, estando en contacto constante y con actualizaciones
						en tiempo real, dando lugar a una organizacion sobre un contenido en particular:
					la actividad agrícola.</p>
					<p>Se propone a través de ella el fomento de relaciones e intercambios de manera sostenida,
						con el proposito de lograr objetivos comunes de forma colectiva y eficiente, generando un
						tejido humano que promueva el uso de las TIC en las actividades agrícolas, las cuales son
						de valor estratégico para el desarrollo del país y por ende para el alcance de la soberanía
					alimentaria de la Republica Bolivariana de Venezuela.</p>
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
