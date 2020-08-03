<?php 
    
    require_once "../clases/conexion.php";
    require_once "../clases/crudComentario.php";

    $obj= new crudComentario();

    echo json_encode($obj->obtenDatosComentario($_POST['idalumno']));

 ?>