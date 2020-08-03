<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crudCalificacion.php";
	$obj= new crudCalificacion();

	$datos=array(
		$_POST['calificacionU'],
		$_POST['idalumno']

				);

	echo $obj->actualizarCalificacion($datos);

 ?>