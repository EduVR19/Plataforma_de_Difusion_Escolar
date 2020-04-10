<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['nombreU'],
		$_POST['a_paternoU'],
		$_POST['a_maternoU'],
		$_POST['sexoU'],
		$_POST['fecha_nacU'],
		$_POST['lugar_nacU'],
		$_POST['curpU'],
		$_POST['domicilioU'],
		$_POST['telefonoU'],
		$_POST['idalumno']
				);

	echo $obj->actualizar($datos);
	

 ?>
