<div class="well text-center">
	<h4>
		<i class="glyphicon glyphicon-home"></i>
   <b>FC BARCA</b>
	</h4>
</div>



<hr>


<head>


	<style>
			/* Para el ancho y alto de las imagenes. Modificalo a gusto =)  */
			.carousel-inner > .item > img,
			.carousel-inner > .item > a > img {
					width: 100%;
					height: 500px;
					margin: auto;
			}
			/* Para los margenes del contendor de las fotos. Podes cambiarle el ancho a gusto tambien! */
			.carousel-control {
					width: 10%;
			}
	</style>
</head>
<body>

<div class="container">
<br>
<div id="carrusel" class="carousel slide" data-ride="carousel">

	<!-- Opcional, bullets abajo para saltar directamente a una foto (si los pones tiene q haber 1 por foto) -->
	<ol class="carousel-indicators">
		<li data-target="#carrusel" data-slide-to="0" class="active"></li>
		<li data-target="#carrusel" data-slide-to="1"></li>
		<li data-target="#carrusel" data-slide-to="2"></li>
	</ol>

	<!-- Contenedor de las fotos -->
	<div class="carousel-inner" role="listbox">

		<!-- Foto 1 -->
		<div class="item active">
		<img src="<?php echo base_url(); ?>/assets/images/p1.jpg"  alt="logo" height="500px">
		</div>
		<!-- Foto 2 -->
		<div class="item">
		<img src="<?php echo base_url(); ?>/assets/images/p2.jpg"  alt="logo" height="500px">
		</div>
		<!-- Foto 3 -->
		<div class="item">
		<img src="<?php echo base_url(); ?>/assets/images/p3.jpeg"  alt="logo" height="500px">
		</div>
		<!-- Foto 3 -->
		<div class="item">
		<img src="<?php echo base_url(); ?>/assets/images/p4.jpg"  alt="logo" height="500px">
		</div>

	</div>
	<!-- Controles para pasar las fotos -->
	<a class="left carousel-control" href="#carrusel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carrusel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
  </div>
</div>
