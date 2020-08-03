<?php 
	
	require_once "../clases/conexion.php";
	require_once "../clases/crudCalificacion.php";

	$obj= new crudCalificacion();

	echo json_encode($obj->obtenDatosCalificacion($_POST['idalumno']));

 ?>