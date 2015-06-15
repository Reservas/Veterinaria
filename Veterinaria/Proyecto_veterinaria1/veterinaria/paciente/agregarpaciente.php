<?php
session_start();
				 				if (isset($_POST["nombre_paciente"]) AND isset($_POST["fecha_ingreso"]) AND isset($_POST["especie"]) AND isset($_POST["raza"]) AND isset($_POST["sexo"]) AND isset($_POST["color"]) AND isset($_POST["edad"]) AND isset($_POST["fecha_nacimiento"]) AND isset($_POST["propietario"]) AND isset($_POST["telefono"]) AND isset($_POST["celular"]) AND isset($_POST["direccion"]) AND isset($_POST["correo_electronico"]) AND isset($_POST["temperamento"]) AND isset($_POST["tatuaje"])) 
				 				{
				 					$nombre_paciente = $_POST["nombre_paciente"];
				 					$fecha_ingreso = $_POST["fecha_ingreso"];
				 					$especie = $_POST["especie"];
				 					$raza = $_POST["raza"];
				 					$sexo = $_POST["sexo"];
				 					$color = $_POST["color"];
				 					$edad = $_POST["edad"];
				 					$fecha_nacimiento = $_POST["fecha_nacimiento"];
				 					$propietario = $_POST["propietario"];
				 					$telefono = $_POST["telefono"];
				 					$celular = $_POST["celular"];
				 					$direccion = $_POST["direccion"];
				 					$correo_electronico = $_POST["correo_electronico"];
				 					$temperamento = $_POST["temperamento"];
				 					$tatuaje = $_POST["tatuaje"];
				 					include "../conexion.php";
				 					$query = mysql_query("INSERT INTO  veterinaria.paciente (id_paciente ,nombre_paciente ,fecha_ingreso ,especie ,raza ,sexo ,color ,edad ,fecha_nacimiento ,propietario ,telefono ,celular ,direccion ,correo_electronico ,temperamento ,tatuaje) VALUES('','$nombre_paciente', '$fecha_ingreso', '$especie', '$raza', '$sexo', '$color', '$edad', '$fecha_nacimiento', '$propietario', '$telefono', '$celular', '$direccion', '$correo_electronico', '$temperamento', '$tatuaje')");
				 					if ($query) {
				 						echo "los datos fueron agregados";
				 						header("location: indexpacientes.php#agregarpaciente");
				 					}
				 					else
				 					{
				 						echo "los datos no fueron agregardos";

				 					}
				 				}
				 				?>