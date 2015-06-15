<?php
    if(isset($_POST["id_producto"]))
        {
            include ("conexion.php");
             $id_producto = $_POST["id_producto"];
            $query2 = "DELETE FROM productos WHERE id_producto = '$id_producto'";
            $resultado2 = mysql_query($query2);
            if($resultado2)
            {
                echo "el producto ha sido eliminado";  
                header("location: indexinventario.php#eliminarinventario");
            }
            else
            {
                echo "error al eliminar el producto";  
            }
        }
        
?>

