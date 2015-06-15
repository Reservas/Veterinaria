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
						<a href="#inventario" class="icon fa-shopping-cart active"><span>Inventario</span></a>
						<a href="#agregarinventario" class="icon fa-plus " ><span>Modificar</span></a>
						<a href="#modificarinventario" class="icon fa-edit"><span>Paciente</span></a>
						<a href="#eliminarinventario" class="icon fa-eraser"><span>Modificar</span></a>
						<a href="#inicio" class="icon fa-home "><span>Cerrar Sesi&oacute;n</span></a>
						
					</nav>

				<!-- Main -->
					<div id="main">

					<!--INVENTARIO -->
							<article id="inventario" class="panel">
								<header>
									<center><h2>Inventario de productos</h2></center>
								</header>
								<form action="#" method="post">
								<div class="row">
										<div class="8u">
				    					  	<input type="text" placeholder="Ingrese nombre de producto"  name="nombre_producto"/>
				    					</div>
				    					<div class="4u">
											<input type="submit" name="buscar" value="Buscar" >
											<input type="submit" name="nuevo" value="Nuevo" >
										</div>
				 					 </div>

				 					 <div class="row">
										<div class="6u">
				     					 	<label>Nombre del producto:</label><br>
				    					  	<input type="text"  name="nombre_producto"/>
				    					</div>
				    					</div>
									<div class="row">
										<div class="6u">
				     					 	<label>Precio:</label><br>
				    					  	<input type="text"  name="precio"/>
				    					</div>
				    					</div>
				    				<div class="row">
										<div class="6u">
				     					 	<label>Existencia:</label>
				    					  	<input type="text"  name="peso"/>
				    					</div>
				 					</div>
				 					<div class="row">
										<div class="6u">
				     					 	<label>Propietario que compra:</label><br>
				    					  	<input type="text"  name="id_paciente"/>
				    					</div>
				    					</div>
				 					<br>
				 				<center><input type="submit" value="Aceptar" name="aceptar">
				 				<input type="reset" value="Cancelar" name="cancelar">
				 				<input type="submit" value="Nuevo" name="nuevo"></center>

									
								</form>
							</article>

							<!-- AGREGAR PRODUCTO -->

							<article id="agregarinventario" class="panel">
								<header>
									<center><h2>Agregar Producto</h2></center>
								</header>
								<form action="registroinventario.php" method="post">


				 					 <div class="row">
										<div class="6u">
				     					 	<label>Nombre del producto:</label><br>
				    					  	<input type="text"  id="nombre_producto" name="nombre_producto"/>
				    					</div>
				    					</div>
									<div class="row">
										<div class="6u">
				     					 	<label>Precio:</label><br>
				    					  	<input type="text"  id="precio" name="precio" />
				    					</div>
				    					</div>
				    				<div class="row">
										<div class="6u">
				     					 	<label>Existencia:</label>
				    					  	<input type="text"  id="existencia" name="existencia" />
				    					</div>
				 					</div>
				 					<br>
				 				<center><input type="submit" value="Agregar" name="agregar">
				 				</center>

									
								</form>
							</article>


							<!-- MODIFICAR PRODUCTO -->
						<article id="modificarinventario" class="panel">
								<header>
									<center><h2>Modificar Producto</h2></center>
								</header>
								<form action="modificarinventario.php" method="post">

									 <div class="row">
										<div class="6u">
				     					 	<label>ID del producto:</label><br>
				    					  	<input type="text"  id="id_producto" values="id_producto"name="id_producto"/>
				    					</div>
				    					</div>
				 					 <div class="row">
										<div class="6u">
				     					 	<label>Nombre del producto:</label><br>
				    					  	<input type="text"  id="nombre_producto" values="nombre_producto"name="nombre_producto"/>
				    					</div>
				    					</div>
									<div class="row">
										<div class="6u">
				     					 	<label>Precio:</label><br>
				    					  	<input type="text"  id="precio" name="precio" values="precio"/>
				    					</div>
				    					</div>
				    				<div class="row">
										<div class="6u">
				     					 	<label>Existencia:</label>
				    					  	<input type="text"  id="existencia" name="existencia" values="existencia"/>
				    					</div>
				 					</div>
				 					<br>
				 				<center><input type="submit" value="Modificar" name="Modificar">
				 				</center>

									
								</form>
							</article>

							<!-- Eliminar producto-->
							<article id="eliminarinventario" class="panel">
								<header>
									<center><h2>Eliminar Producto</h2></center>
								</header>
								<form action="eliminarinventario.php" method="post">

									<div class="row">
										<div class="6u">
				     					 	<label>ID del producto:</label><br>
				    					  	<input type="text"  id="id_producto" values="id_producto"name="id_producto"/>
				    					</div>
				    					</div>
				 					 <div class="row">
										<div class="6u">
				     					 	<label>Nombre del producto:</label><br>
				    					  	<input type="text"  id="nombre_producto" values="nombre_producto"name="nombre_producto"/>
				    					</div>
				    					</div>
									<div class="row">
										<div class="6u">
				     					 	<label>Precio:</label><br>
				    					  	<input type="text"  id="precio" name="precio" values="precio"/>
				    					</div>
				    					</div>
				    				<div class="row">
										<div class="6u">
				     					 	<label>Existencia:</label>
				    					  	<input type="text"  id="existencia" name="existencia" values="existencia"/>
				    					</div>
				 					</div>
				 					<br>
				 				<center><input type="submit" value="eliminar" name="eliminar">
				 				</center>

									
								</form>
							</article>

						
						<!-- CERRAR SESION -->
							<article id="inicio" class="panel">
								<header>
									<form action="validacion.php" method="post">
										<center><br>
										<h1>Cerrar Sesi&oacute;n</h1>
										<br>
										<input   type="submit" value="Cerrar Sesi&oacute;n" name="cerrar" ></center>
									</form>
								</header>
							</article>

					</div>
		
				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">
							<li>Veterinaria | Dr. Gustavo Figueroa</li>
						</ul>
					</div>
		
			</div>

	</body>
</html>