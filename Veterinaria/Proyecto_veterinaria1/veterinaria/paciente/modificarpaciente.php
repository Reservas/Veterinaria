<?php
if(isset($_POST["nombre_paciente"]) AND isset($_POST["fecha_ingreso"]) AND isset($_POST["especie"]) AND isset($_POST["raza"]) AND isset($_POST["sexo"]) AND isset($_POST["color"]) AND isset($_POST["edad"]) AND isset($_POST["fecha_nacimiento"]) AND isset($_POST["propietario"]) AND isset($_POST["telefono"]) AND isset($_POST["celular"]) AND isset($_POST["direccion"]) AND isset($_POST["correo_electronico"]) AND isset($_POST["temperamento"]) AND isset($_POST["tatuaje"]))
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
                                    include "../../conexion.php";
    $query1 = mysql_query("UPDATE paciente SET nombre_paciente = '$nombre_paciente', fecha_ingreso = '$fecha_ingreso', especie = '$especie', raza = '$raza', sexo = '$sexo', color = '$color', edad = '$edad', fecha_nacimiento = '$fecha_nacimiento', propietario = '$propietario', telefono = '$telefono', celular = 'celular', direccion = '$direccion', correo_electronico = '$correo_electronico', temperamento = '$temperamento', tatuaje = '$tatuaje' WHERE id_paciente = $id_paciente");
    if($query1)
    {
        echo"su paciente ha sido modificado";
        header("location: indexpaciente.php#modificarpaciente");
    }
    else
    {
        echo "su paciente no ha sido modificado";
    }
}
?>