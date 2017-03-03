@extends('layouts.welcome')
@section('content')
<section class="main-container">
	<div class="row">
		<div class="post">
			<article class="post clearfix">
				<div class="cintillo"></div>
				<div class="post-noticia">
					<h2>Áreas Temáticas.</h2>
					<img src="images/logo.png" width="200" alt="">
					<ul>
						<li>Agricultura de Precision: También conocida como “el manejo del cultivo en el sitio
							especifico”. Es un sistema de gestion agrícola detallado, basado en la utilizacion de
							tecnologías para identificar, analizar y gestionar la variabilidad en el campo agrícola,
						en busca de una optima rentabilidad, sostenibilidad y protección del ambiente.</li><br>
						<li>Agricultura familiar: esta referido al desarrollo productivo y el mejoramiento de las
							condiciones de vida de quienes conforman el nucleo familiar y también impulsa su
							adecuada representacion y participación en los sistemas alimentarios, contribuyendo
						al desarrollo rural a nivel regional y nacional.</li><br>
						<li>Trazabilidad animal: Es la relacion ininterrumpida del animal desde su nacimiento
							hasta los productos derivados de la faena de ese animal, comercializarlos y ponerlos
						a disposicion del consumidor.</li><br>
						<li>Programas aplicados a la Agricultura de Precision: Los programas informaticos desarrollados
							para la agricultura que permiten un estudio exhaustivo del terreno a sembrar.
							Ente ellos:FARM TRAC FIEL RECORDS , FARM SITE, FARM WORKS MOBILE, SMS BASIC, SMS
						ADVANCED, OTROS.</li><br>
						<li>Sistemas de Informacion Geográfica aplicados a la Agrícultura: Los SIG contemplan
							sus propios métodos, técnicas y herramientas, considerandolos herramientas tecnologicas
							muy  útiles para el análisis y manipulación de los datos espaciales. Permiten
							empleos como generar visiones complejas del terreno de trabajo, para tomar
						decisiones como la aplicación de fertilizantes o determinar las causas de la variabilidad.</li><br>
						<li>Tecnologías de drones en uso agropecuario: Se trata de equipos aéreos no tripulados,
							con camaras y sensores controlados por GPS. Su uso en la agricultura permite el
							monitoreo de los cultivos, beneficiando la producción de las cosechas sin provocar
							danos, hacer un seguimiento del cultivo, mejorar el consumo de agua y gestionar las
						plagas gracias a las camaras incorporadas.</li><br>
						<li>Tecnologías o técnicas aplicadas en la Agrícultura: Técnicas orientadas a la gestion
							de la variabilidad espacial de las propiedades de los suelos y estado de los cultivos;
							y técnicas orientadas a la ayuda al guiado y a la uniformidad de las operaciones
						mecanizadas. Entre ellas:
							<ul><br>
								<li>Implementacion de SIG, GPS,</li>
								<li>Monitoreo y mapas de rendimiento,</li>
								<li>Monitoreo de calidad y variabilidad de suelos</li>
								<li>Tecnolog´ıas de aplicacion de variables de insumos,</li>
								<li>Teledetección y zonificación,</li>
								<li>Medición de variabilidad de rendimiento,</li>
								<li>Monitoreo de riego,</li>
								<li>Tecnologías de detección de plagas,</li>
								<li>Otros.</li>
							</ul>
						</li>
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
