<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['nombre'],
		$_POST['a_paterno'],
		$_POST['a_materno'],
		$_POST['sexo'],
		$_POST['fecha_nac'],
		$_POST['lugar_nac'],
		$_POST['curp'],
		$_POST['domicilio'],
		$_POST['telefono']
				);

	echo $obj->agregar($datos);
	

 ?>