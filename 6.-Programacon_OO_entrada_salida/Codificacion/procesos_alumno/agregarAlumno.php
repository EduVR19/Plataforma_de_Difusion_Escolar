<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crudAlumno.php";
	$obj= new crudAlumno();

	$datos=array(
		$_POST['nombre'],
		$_POST['nombre_tutor'],
		$_POST['correo'],
		$_POST['sexo'],
		$_POST['fecha_nac'],
		$_POST['lugar_nac'],
		$_POST['curp'],
		$_POST['domicilio'],
		$_POST['telefono'],
		$_POST['id_grupo']
				);

	echo $obj->agregarAlumno($datos);
	

 ?>