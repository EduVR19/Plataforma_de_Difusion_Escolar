<?php  
		//verifico si existe la variable de sesion, si no existe, los regreso al indice para que no se salten filtros de seguridad.
	If(!isset($_SESSION["usu"]))
	header("location:../index.php");
?>