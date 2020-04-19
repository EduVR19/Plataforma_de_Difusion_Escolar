<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['nombreU'],
		$_POST['cpU'],
		$_POST['telefonoU'],
		$_POST['correoU'],
		$_POST['fecha_ingreso_sepU'],
		$_POST['fecha_ingreso_zonaU'],
		$_POST['fecha_ingreso_escuelaU'],
		$_POST['claveU'],
		$_POST['curpU'],
		$_POST['rfcU'],
		$_POST['grado_estudiosU'],
		$_POST['idmaestro']
				);

	echo $obj->actualizar($datos);
	

 ?>
