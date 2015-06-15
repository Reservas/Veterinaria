<?php
session_start();
include "conexion.php";

if(isset($_POST['user'],$_POST['pass'])){

    $idusuario;
    $usuario=$_POST['user'];
    $contrasena=$_POST['pass'];
    
    $stmt = $mysqli->prepare("SELECT id_doctor,user,pass FROM doctor WHERE user =? AND pass =?");
    $stmt->bind_param('ss',$usuario,$contrasena);
    $stmt->execute(); 
    $stmt->store_result();
    $stmt->bind_result($idusuario,$usuario,$contrasena);
    
    while ($stmt->fetch()) {
        header("location: ./veterinaria/index.php");
        $_SESSION['user'] = $usuario;
        $_SESSION['pass'] = $contrasena;
        exit();
    }				
    
    if($idusuario==null){
        header("location:index.php");
        exit();
    }
         
}

?>