<?php 
	
	require_once "../clases/conexion.php";
	require_once "../clases/crudMaestro.php";

	$obj= new crudMaestro();

	echo $obj->eliminarMaestro($_POST['idmaestro']);

 ?>