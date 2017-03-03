@extends('layouts.welcome') @section('content')
<section class="main-container">
	<div class="row">
		<div class="post">
			<article class="post clearfix">
				<div class="cintillo"></div>
				<div class="post-noticia">
					<h2>Actores Involucrados.</h2>
					<img src="images/logo.png" width="200" alt="">
					<p>Una red consiste en una organización formada por un conjunto de actores que interactúan entre si, que en nuestro caso la temática va en dirección de la TIC en el sector agrícola. Por lo tanto, para fines de la REDTICA es importante definir los actores
						que actúan e influyen en el sector agrícola. Entre ellos tenemos:</p><br><br>
						<ul>
							<li>Productores</li>
							<li>Investigadores</li>
							<li>Instituciones Académicas</li>
							<li>Instituciones Públicas</li>
							<li>Instituciones Privadas</li>
							<li>Poder Popular</li>
							<li>Estudiantes, otros.</li>
						</ul>
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
