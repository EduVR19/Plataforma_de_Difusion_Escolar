<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crudMaestro.php";
	$obj= new crudMaestro();

	$datos=array(
		$_POST['nombre'],
		$_POST['cp'],
		$_POST['telefono'],
		$_POST['correo'],
		$_POST['fecha_ingreso'],
		$_POST['clave'],
		$_POST['curp'],
		$_POST['rfc'],
		$_POST['grado_estudios'],
		$_POST['id_grupo']
				);

	echo $obj->agregarMaestro($datos);
	

 ?>
