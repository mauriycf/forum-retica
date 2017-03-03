@extends('layouts.welcome') @section('content')
<section class="main-container">
	<div class="row">
		<div class="post">
			<article class="post clearfix">
				<div class="cintillo"></div>
				<div class="post-noticia">
					<h2>Ubicación.</h2>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3944.982047316212!2d-71.145409!3d8.5977214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e64871fd6c85617%3A0x56d235bb1ff6b93c!2sRectorado+de+la+Universidad+de+Los+Andes!5e0!3m2!1ses-419!2sve!4v1421080123762"
          width="100%" height="300" frameborder="0" style="border:0"></iframe>
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
