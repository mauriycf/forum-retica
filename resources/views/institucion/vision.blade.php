@extends('layouts.welcome') @section('content')
<section class="main-container">
	<div class="row">
		<div class="post">
			<article class="post clearfix">
				<div class="cintillo"></div>
				<div class="post-noticia">
					<h2>Objetivos.</h2>
					<img src="images/logo.png" width="200" alt="">
          <p>Ser el espacio virtual activo y dispuesto para impulsar todo lo concerniente a las TIC aplicadas
          a la agricultura en la República Bolivariana de Venezuela.</p>
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
