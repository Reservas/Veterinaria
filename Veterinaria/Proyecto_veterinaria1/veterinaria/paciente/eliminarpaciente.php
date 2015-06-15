<?php
    if(isset($_POST["id_paciente"]))
    {
        include "conexion.php";
        $id_producto = $_POST["id_paciente"];
        
            $query2 = "DELETE FROM pacientes WHERE id_paciente = '$id_paciente'";
            $resultado2 = mysql_query($query2);
            if($resultado2)
            {
                echo "el paciente ha sido eliminado";  
                header("location: indexpacientes.php#eliminarpaciente");
            }
            else
            {
                echo "error al eliminar paciente";  
            }
        
  }      
?>