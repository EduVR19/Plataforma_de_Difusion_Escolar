<?php 
	
	require_once "../clases/conexion.php";
	require_once "../clases/crudMaestro.php";

	$obj= new crudMaestro();

	echo json_encode($obj->obtenDatosMaestro($_POST['idmaestro']));

 ?>