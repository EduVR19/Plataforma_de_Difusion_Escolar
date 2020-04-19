<?php 
	
	require_once "../clases/conexion.php";
	require_once "../clases/crudAlumno.php";

	$obj= new crudAlumno();

	echo json_encode($obj->obtenDatosAlumno($_POST['idalumno']));

 ?>