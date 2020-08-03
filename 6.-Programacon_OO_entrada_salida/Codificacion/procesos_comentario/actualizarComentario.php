<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crudComentario.php";
	$obj= new crudComentario();

	$datos=array(
		$_POST['id_alumnoU'],
		$_POST['comentarioU'],
		$_POST['idcomentario']
		);

	echo $obj->actualizarComentario($datos);

 ?>