<?php
session_start();
include "conexion.php";

if(isset($_POST['user'],$_POST['pass'])){

    $idusuario;
    $usuario=$_POST['user'];
    $contrasena=$_POST['pass'];
	$query = "SELECT id_doctor,user,pass FROM doctor WHERE user ='$usuario' AND pass ='$contrasena'";
	$resultado = mysql_query($query, $link);
	$total = mysql_num_rows($resultado);    

  while($row = mysql_fetch_array($resultado)){
		header("location: ./veterinaria/index.php");
        $_SESSION['user'] = $row['user'];
        $_SESSION['pass'] = $row['pass'];
        exit();
  }

//sino entra lo mandara al login
  header("location:index.php");
  exit();
         
}

?>