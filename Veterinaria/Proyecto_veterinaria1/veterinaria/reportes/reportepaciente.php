<!DOCTYPE HTML>

<html>
	<head>
		<title>Veterinaria | Dr. Gustavo Figueroa</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper-->
			<div id="wrapper">
				
				<!-- Nav -->
					<nav id="nav">
						<a href="#reportepaciente" class="icon fa-book active"><span>Paciente</span></a>
						<a href="#reporteinventario" class="icon fa-book "><span>Inventario</span></a>
					</nav>

				<!-- Main -->
					<div id="main">
						
						<!-- Me -->
							<article id="reportepaciente" class="panel">
								<header>
								<form action="" method="post">
								<br>
									<h1>Reporte de paciente</h1><br>
									<label>nombre paciente:</label>
										<div class="row">
									<div class="6u">
										<label type="text" name="user"></label>
									</div></div>
									<table>
									<td>
										<th>fecha</th>
										<th>peso</th>
										<th>consulta</th>
										<th>tratamiento</th>
										<th>proxima cita</th>
									</td>
									<td>
										<th><label id="fecha" name="fecha"></label></th>
										<th><label id="peso" name="peso"></label></th>
										<th><label id="consulta" name="consulta"></label></th>
										<th><label id="tratamiento" name="tratamiento"></label></th>
										<th><label id="proxima_cita" name="proxima_cita"></label></th>
									</td>
									</table>

								</form>
								</header>
							</article>

<!-- REPORTE INVENTARIO -->
				<article id="reporteinventario" class="panel">
								<header>
								<form action="" method="post">
								<br>
									<h1>Reporte de inventario</h1><br>
									
									<table>
									<td>
										<th>nombre producto</th>
										<th>precio</th>
										<th>existencia</th>
									</td>
									<td>
										<th><label id="nombre_producto" name="nombre_producto"></label></th>
										<th><label id="precio" name="precio"></label></th>
										<th><label id="existencia" name="existencia"></label></th>
									</td>
									</table>

								</form>
								</header>
							</article>

						
				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">
							 <a href="">Veterinaria Dr. Gustavo Figueroa</a>
						</ul>
					</div>
		
			</div>

	</body>
</html>

