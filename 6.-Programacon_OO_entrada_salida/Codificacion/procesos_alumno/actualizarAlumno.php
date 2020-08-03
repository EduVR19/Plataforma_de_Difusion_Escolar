<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crudAlumno.php";
	$obj= new crudAlumno();

	$datos=array(
		$_POST['nombreU'],
		$_POST['nombre_tutorU'],
		$_POST['correoU'],
		$_POST['fecha_nacU'],
		$_POST['lugar_nacU'],
		$_POST['curpU'],
		$_POST['domicilioU'],
		$_POST['telefonoU'],
		$_POST['id_grupoU'],
		$_POST['idalumno'],
		$_POST['contraseñaU']
				);

	echo $obj->actualizarAlumno($datos);
	

 ?>
