<?php 
	
	require_once "../clases/conexion.php";
	require_once "../clases/crudAlumno.php";

	$obj= new crudAlumno();

	echo $obj->eliminarAlumno($_POST['idalumno']);

 ?>