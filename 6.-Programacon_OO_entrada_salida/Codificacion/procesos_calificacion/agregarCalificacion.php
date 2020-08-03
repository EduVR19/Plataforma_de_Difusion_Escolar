<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crudCalificacion.php";
	$obj= new crudCalificacion();

	$datos=array(
		$_POST['id_alumno'],
		$_POST['id_asignatura'],
		$_POST['calificacion']
				);

	echo $obj->agregarCalificacion($datos);
	

 ?>
