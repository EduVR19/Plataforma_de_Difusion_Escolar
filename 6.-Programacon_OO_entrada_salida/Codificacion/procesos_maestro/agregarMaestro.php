<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crudMaestro.php";
	$obj= new crudMaestro();

	$datos=array(
		$_POST['nombre'],
		$_POST['cp'],
		$_POST['telefono'],
		$_POST['correo'],
		$_POST['fecha_ingreso_sep'],
		$_POST['fecha_ingreso_zona'],
		$_POST['fecha_ingreso_escuela'],
		$_POST['clave'],
		$_POST['curp'],
		$_POST['rfc'],
		$_POST['grado_estudios']
				);

	echo $obj->agregarMaestro($datos);
	

 ?>
