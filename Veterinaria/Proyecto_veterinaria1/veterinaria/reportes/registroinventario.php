<?php
session_start();
				 				if (isset($_POST["nombre_producto"]) AND isset($_POST["precio"]) AND isset($_POST["existencia"]) ) 
				 				{
				 					$nombre_paciente = $_POST["nombre_producto"];
				 					$fecha_ingreso = $_POST["precio"];
				 					$especie = $_POST["existencia"];
				 					
				 					include "../../conexion.php";
				 					$query = mysql_query("INSERT INTO  veterinaria.productos (id_producto ,nombre_producto ,precio ,existencia ) VALUES('','$nombre_producto', '$precio', '$exitencia')");
				 					if ($query) {
				 						echo "el producto fue agregado";
				 					}
				 					else
				 					{
				 						echo "el producto no fue agregado";
				 					}
				 				}
				 				?>