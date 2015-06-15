<?php
session_start();
				 				if (isset($_POST["nombre_producto"]) AND isset($_POST["precio"]) AND isset($_POST["existencia"]) ) 
				 				{
				 					$nombre_producto = $_POST["nombre_producto"];
				 					$precio = $_POST["precio"];
				 					$existencia = $_POST["existencia"];
				 					
				 					include "conexion.php";
				 					$query = mysql_query("INSERT INTO  veterinaria.productos (id_producto ,nombre_producto ,precio ,existencia ) VALUES('','$nombre_producto', '$precio', '$existencia')");
				 					if ($query) {
				 						echo "el producto fue agregado";
				 						header("location:indexinventario.php#agregarinventario");
				 					}
				 					else
				 					{
				 						echo "el producto no fue agregado";
				 					}
				 				}
				 				?>

			 				