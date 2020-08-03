<?php 
	
	require_once "../clases/conexion.php";
	require_once "../clases/crudCalificacion.php";

	$obj= new crudCalificacion();

	echo $obj->eliminarCalificacion($_POST['idalumno']);

 ?>