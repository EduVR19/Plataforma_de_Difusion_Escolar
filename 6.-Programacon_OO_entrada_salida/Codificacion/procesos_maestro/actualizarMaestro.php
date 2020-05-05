<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crudMaestro.php";
	$obj= new crudMaestro();

	$datos=array(
		$_POST['nombreU'],
		$_POST['cpU'],
		$_POST['telefonoU'],
		$_POST['correoU'],
		$_POST['fecha_ingreso'],
		$_POST['claveU'],
		$_POST['curpU'],
		$_POST['rfcU'],
		$_POST['grado_estudiosU'],
		$_POST['id_grupoU'],
		$_POST['idmaestro']
				);

	echo $obj->actualizarMaestro($datos);

 ?>