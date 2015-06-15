<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'veterinaria';
    $link=mysql_connect($hostname,$username,$password);
	if($link){
		mysql_select_db($database,$link);	
	}	 
?>
