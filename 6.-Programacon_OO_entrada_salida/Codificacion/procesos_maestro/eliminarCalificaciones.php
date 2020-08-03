<?php
    require_once "../scripts.php"; 
    session_start();
    include "../validasesion.php";
    include "../clases/conexion.php";
    $obj= new conectar();
    $conexion=$obj->conexion();

    $Matricula=$_POST["MatriculaU"];
    $Id_Materia=$_POST["Id_materia"];
    $Calificacion=$_POST["Calificacion"];

$eliminar="DELETE FROM alumno_asignatura WHERE id_alumno='$Matricula' and id_asignatura='$Id_Materia' and calificacion='$Calificacion'";
    $eliminarQuery=mysqli_query($conexion,$eliminar);
?>
