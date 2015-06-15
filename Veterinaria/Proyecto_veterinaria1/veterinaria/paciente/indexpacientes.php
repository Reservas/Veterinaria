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
						
						<a href="#agregarpaciente" class="icon fa-paw active"><span>Paciente</span></a>
						<a href="#modificarpaciente" class="icon fa-edit"><span>Consulta</span></a>
						<a href="#eliminarpaciente" class="icon fa-pencil"><span>Modificar</span></a>
						<a href="#inicio" class="icon fa-home "><span>Cerrar Sesi&oacute;n</span></a>
					</nav>

				<!-- Main -->
					<div id="main">


					<!-- agregar PACIENTE --> 
							<article id="agregarpaciente" class="panel">
								<header>
									<center><h2>Registro de Pacientes</h2></center>
								</header>
								<form action="agregarpaciente.php" method="post">
				 					<div class="row">
										<div class="6u">
				     					 	<label>Nombre paciente:</label>
				    					  	<input type="text" placeholder="Ingrese nombre de paciente"  id="nombre_paciente" name="nombre_paciente"/>
				    					</div>
										<div class="6u">
				     					 	<label>Fecha de ingreso:</label><br>
				    					  	<input type="date"  name="fecha_ingreso" id="fecha_ingreso" value="fecha_ingreso"/>
				    					</div>
				 					 </div>

				 					<div class="row">
										<div class="6u">
				     					 	<label>Especie:</label>
				    					  	<input type="text"  name="especie" id="especie" value="especie"/>
				    					</div>
										<div class="6u">
				     					 	<label>Raza:</label>
				    					  	<input type="text"  name="raza" id="raza " value="raza"/>
				    					</div>
				 					 </div>

				 					<div class="row">
										<div class="6u">
				     					 	<label>Sexo:</label><br>
				     					 	 	<input type="radio" name="sexo" value="Femenino" id="sexofemenino"><label for="sexofemenino">Femenino</label>
				      							<input type="radio" name="sexo" value="Masculino" id="sexomasculino"><label for="sexomasculino">Masculino</label>
				    					</div>
										<div class="6u">
				     					 	<label>Color:</label>
				    					  	<input type="text"  name="color" id="color" value="color"/>
				    					</div>
				 					</div>

				 					<div class="row">
										<div class="6u">
				     					 	<label>Edad:</label>
				    					  	<input type="text"  name="edad" id="edad" value="edad"/>
				    					</div>
										<div class="6u">
				     					 	<label>Fecha nacimiento:</label><br>
				    					  	<input type="date"  name="fecha_nacimiento" id="fecha_nacimiento" value="fecha_nacimiento"/>
				    					</div>
				 					 </div>

				 					 <div class="row">
										<div class="6u">
				     					 	<label>Nombre de propietario:</label>
				    					  	<input type="text"  name="propietario" id="propietario" value="propietario"/>
				    					</div>
										<div class="6u">
				     					 	<label>Tel&eacute;fono:</label>
				    					  	<input type="text"  name="telefono" id="telefono" value="telefono"/>
				    					</div>
				 					</div>

				 					<div class="row">
										<div class="6u">
				     					 	<label>Cel&uacute;lar:</label>
				    					  	<input type="text"  name="celular" id="celular" value="celular"/>
				    					</div>
										<div class="6u">
				     					 	<label>Direcci&oacute;n:</label>
				    					  	<input type="text"  name="direccion" id="direccion" value="direccion"/>
				    					</div>
				 					</div>

				 					<div class="row">
										<div class="6u">
				     					 	<label>Correo electr&oacute;nico</label>
				    					  	<input type="text"  name="correo_electronico" id="correo_electronico" value="correo_electronico"/>
				    					</div>
										<div class="6u">
				     					 	<label>Temperamento:</label>
				    					  	<input type="text"  name="temperamento" id="temperamento" value="temperamento"/>
				    					</div>
				 					</div>
				 					<div class="row">
										<div class="6u">
				     					 	<label>Tatuaje:</label>
				    					  	<input type="text"  name="tatuaje" id="tatuaje" value="tatuaje"/>
				    					</div>
				 					</div>
				 					<br>
				 					<input type="submit" value="guardar" name="guardar">
				 				</form>
				 				
							</article>

						
						<!-- MODIFICAR PACIENTE --> 
							<article id="modificarpaciente" class="panel">
								<header>
									<center><h2>Modificar Pacientes</h2></center>
								</header>
								<form action="modificarpaciente.php" method="post">
				 					<div class="row">
				 					<div class="6u">
				     					 	<label>ID paciente:</label>
				    					  	<input type="text" placeholder="ID de paciente"  id="id_paciente" name="id_paciente"/>
				    					</div></div>
				 					<div class="row">
				 
										<div class="6u">
				     					 	<label>Nombre paciente:</label>
				    					  	<input type="text" placeholder="Ingrese nombre de paciente"  id="nombre_paciente" name="nombre_paciente"/>
				    					</div>
										<div class="6u">
				     					 	<label>Fecha de ingreso:</label><br>
				    					  	<input type="date"  name="fecha_ingreso" id="fecha_ingreso" value="fecha_ingreso"/>
				    					</div>
				 					 </div>

				 					<div class="row">
										<div class="6u">
				     					 	<label>Especie:</label>
				    					  	<input type="text"  name="especie" id="especie" value="especie"/>
				    					</div>
										<div class="6u">
				     					 	<label>Raza:</label>
				    					  	<input type="text"  name="raza" id="raza " value="raza"/>
				    					</div>
				 					 </div>

				 					<div class="row">
										<div class="6u">
				     					 	<label>Sexo:</label><br>
				     					 	 	<input type="radio" name="sexo" value="Femenino" id="sexofemenino"><label for="sexofemenino">Femenino</label>
				      							<input type="radio" name="sexo" value="Masculino" id="sexomasculino"><label for="sexomasculino">Masculino</label>
				    					</div>
										<div class="6u">
				     					 	<label>Color:</label>
				    					  	<input type="text"  name="color" id="color" value="color"/>
				    					</div>
				 					</div>

				 					<div class="row">
										<div class="6u">
				     					 	<label>Edad:</label>
				    					  	<input type="text"  name="edad" id="edad" value="edad"/>
				    					</div>
										<div class="6u">
				     					 	<label>Fecha nacimiento:</label><br>
				    					  	<input type="date"  name="fecha_nacimiento" id="fecha_nacimiento" value="fecha_nacimiento"/>
				    					</div>
				 					 </div>

				 					 <div class="row">
										<div class="6u">
				     					 	<label>Nombre de propietario:</label>
				    					  	<input type="text"  name="propietario" id="propietario" value="propietario"/>
				    					</div>
										<div class="6u">
				     					 	<label>Tel&eacute;fono:</label>
				    					  	<input type="text"  name="telefono" id="telefono" value="telefono"/>
				    					</div>
				 					</div>

				 					<div class="row">
										<div class="6u">
				     					 	<label>Cel&uacute;lar:</label>
				    					  	<input type="text"  name="celular" id="celular" value="celular"/>
				    					</div>
										<div class="6u">
				     					 	<label>Direcci&oacute;n:</label>
				    					  	<input type="text"  name="direccion" id="direccion" value="direccion"/>
				    					</div>
				 					</div>

				 					<div class="row">
										<div class="6u">
				     					 	<label>Correo electr&oacute;nico</label>
				    					  	<input type="text"  name="correo_electronico" id="correo_electronico" value="correo_electronico"/>
				    					</div>
										<div class="6u">
				     					 	<label>Temperamento:</label>
				    					  	<input type="text"  name="temperamento" id="temperamento" value="temperamento"/>
				    					</div>
				 					</div>
				 					<div class="row">
										<div class="6u">
				     					 	<label>Tatuaje:</label>
				    					  	<input type="text"  name="tatuaje" id="tatuaje" value="tatuaje"/>
				    					</div>
				 					</div>
				 					<br>
				 					<input type="submit" value="guardar" name="guardar">
				 				</form>
				 				
							</article>


						<!-- ELIMINAR PACIENTE --> 
							<article id="eliminarpaciente" class="panel">
								<header>
									<center><h2>Eliminar Pacientes</h2></center>
								</header>
								<form action="eliminarpaciente.php" method="post">
								<div class="row">
										<div class="6u">
				     					 	<label>ID paciente:</label>
				    					  	<input type="text" placeholder="Ingrese ID de paciente"  id="id_paciente" value="id_paciente"name="id_paciente"/>
				    					</div>
				 					<div class="row">
										<div class="6u">
				     					 	<label>Nombre paciente:</label>
				    					  	<input type="text" placeholder="Ingrese nombre de paciente"  id="nombre_paciente" value="nombre_paciente"name="nombre_paciente"/>
				    					</div>
										<div class="6u">
				     					 	<label>Fecha de ingreso:</label><br>
				    					  	<input type="date"  name="fecha_ingreso" id="fecha_ingreso" value="fecha_ingreso"/>
				    					</div>
				 					 </div>

				 					<div class="row">
										<div class="6u">
				     					 	<label>Especie:</label>
				    					  	<input type="text"  name="especie" id="especie" value="especie"/>
				    					</div>
										<div class="6u">
				     					 	<label>Raza:</label>
				    					  	<input type="text"  name="raza" id="raza " value="raza"/>
				    					</div>
				 					 </div>

				 					<div class="row">
										<div class="6u">
				     					 	<label>Sexo:</label><br>
				     					 	 	<input type="radio" name="sexo" value="Femenino" id="sexofemenino"><label for="sexofemenino">Femenino</label>
				      							<input type="radio" name="sexo" value="Masculino" id="sexomasculino"><label for="sexomasculino">Masculino</label>
				    					</div>
										<div class="6u">
				     					 	<label>Color:</label>
				    					  	<input type="text"  name="color" id="color" value="color"/>
				    					</div>
				 					</div>

				 					<div class="row">
										<div class="6u">
				     					 	<label>Edad:</label>
				    					  	<input type="text"  name="edad" id="edad" value="edad"/>
				    					</div>
										<div class="6u">
				     					 	<label>Fecha nacimiento:</label><br>
				    					  	<input type="date"  name="fecha_nacimiento" id="fecha_nacimiento" value="fecha_nacimiento"/>
				    					</div>
				 					 </div>

				 					 <div class="row">
										<div class="6u">
				     					 	<label>Nombre de propietario:</label>
				    					  	<input type="text"  name="propietario" id="propietario" value="propietario"/>
				    					</div>
										<div class="6u">
				     					 	<label>Tel&eacute;fono:</label>
				    					  	<input type="text"  name="telefono" id="telefono" value="telefono"/>
				    					</div>
				 					</div>

				 					<div class="row">
										<div class="6u">
				     					 	<label>Cel&uacute;lar:</label>
				    					  	<input type="text"  name="celular" id="celular" value="celular"/>
				    					</div>
										<div class="6u">
				     					 	<label>Direcci&oacute;n:</label>
				    					  	<input type="text"  name="direccion" id="direccion" value="direccion"/>
				    					</div>
				 					</div>

				 					<div class="row">
										<div class="6u">
				     					 	<label>Correo electr&oacute;nico</label>
				    					  	<input type="text"  name="correo_electronico" id="correo_electronico" value="correo_electronico"/>
				    					</div>
										<div class="6u">
				     					 	<label>Temperamento:</label>
				    					  	<input type="text"  name="temperamento" id="temperamento" value="temperamento"/>
				    					</div>
				 					</div>
				 					<div class="row">
										<div class="6u">
				     					 	<label>Tatuaje:</label>
				    					  	<input type="text"  name="tatuaje" id="tatuaje" value="tatuaje"/>
				    					</div>
				 					</div>
				 					<br>
				 					<input type="submit" value="guardar" name="guardar">
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