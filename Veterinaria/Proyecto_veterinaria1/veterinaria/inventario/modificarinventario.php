<?php
if(isset($_POST["id_producto"]) AND isset($_POST["nombre_producto"]) AND isset($_POST["precio"]) AND isset($_POST["existencia"]))
{

    $nombre_producto = $_POST["nombre_producto"];
    $precio = $_POST["precio"];
    $existencia = $_POST["existencia"];
    include "conexion.php";
    $query = mysql_query("UPDATE productos SET nombre_producto = '$nombre_producto', precio = '$precio', existencia = '$existencia' WHERE id_producto = $id_producto");
    if($query)
    {
        echo"su producto ah sido modificado";
        header("location: indexinventario.php#modificarinventario");
    }
    else
    {
        echo "su producto no ha sido modificado";
    }
}
?>
