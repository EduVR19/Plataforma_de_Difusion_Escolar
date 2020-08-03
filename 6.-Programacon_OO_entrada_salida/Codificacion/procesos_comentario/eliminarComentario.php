<?php 
	
	require_once "../clases/conexion.php";
	require_once "../clases/crudComentario.php";

	$obj= new crudComentario();

	echo $obj->eliminarComentario($_POST['idcomentario']);

 ?>