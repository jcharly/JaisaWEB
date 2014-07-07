<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>JAISA</title><!--Nombre de la Mecanica Automotriz-->
	<!-- Estilos de la Pagina Principal-->
	<link href="css/indexcss.css" rel="stylesheet">
	<!--Bootstrap, framework de html-->
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<!-- Jquery, framework para animaciones JS. Necesario para bootstrap.js-->
	<script src="js/jquery-1.11.1.js"></script>
	<!--Animaciones de Bootstrap-->
	<script src="js/bootstrap.js"></script>
	
</head>
<body>
	<div class="container-fluid"><!-- Contiene la pagina completa--> 
		<div class="col-lg-12 black-menu"> <!--La parte negra que contiene el menu -->
			<div class="col-lg-3 img-logo"> <!--div qeu contiene el logo-->
				<img src="img/JAISA_LOGO.jpg" width="150" alt="LOGO">
			</div>
			<div class="col-lg-6 menu">

				<ul class="nav nav-pills">
					<li><a href="#">Inicio</a></li>	
					<li><a href="#">Servicios</a></li>
					<li><a href="#">Promociones</a></li>
					<li><a href="#">Productos</a></li>
					<li class=""><a href="#">Otro</a></li>
				</ul>
			</div>
			<div class="col-lg-3 menu">
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				    Contacto <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Tel: </a></li>
				    <li><a href="#">Cel:</a></li>
				    <li><a href="#">Nextel</a></li>
				    <li class="divider"></li>
				    <li><a href="#">E-mail:</a></li>
				  </ul>
				</div>
			</div>
		</div>
		<div class="container contenido">
						<div id="myCarousel" class="carousel slide">
							<!--Indicadores del carousel-->
							 <ol class="carousel-indicators">
			    				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  				</ol>

							<div class="carousel-inner">
								<div class="item">
									<img src="img/mecanica2_otro.gif"  width="1150" height="400" class="responsive" alt="Banner1">
									<div class="carousel-caption">
										<h4>LALALALA</h4>
										<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									</div>
								</div>
								<div class="item">
									<img src="img/mecanica2.gif" width="1150" class="responsive" alt="Banner2">
									<div class="carousel-caption">
										<h4>Second Thumbnail label</h4>
										<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									</div>
								</div>
								<div class="item active">
									<img src="img/mecanica1.gif" width="1150"class="responsive" alt="Banner3">
									<div class="carousel-caption">
										<h4>Third Thumbnail label</h4>
										<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									</div>
								</div>
							</div>
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
			<div class="row"></div>
			<div class="col-lg-6">
				<h3></h3>
				
			</div>
			<div class="col-lg-3">
			
			</div>
			<div class="row"></div>

			
		</div>
		
		<div class="separa"></div>
		<div class="footer">
		</div>


	</div>



</body>
</html>
