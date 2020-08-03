<?php 
    require_once "../clases/conexion.php";
    require_once "../clases/crudComentario.php";
    $obj= new crudComentario();

    $datos=array(
        $_POST['id_alumno'],
        $_POST['comentario']
        );

    echo $obj->agregarComentario($datos);
    

 ?>