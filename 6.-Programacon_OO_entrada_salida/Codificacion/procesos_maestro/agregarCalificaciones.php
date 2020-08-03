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

    $insertar="INSERT INTO alumno_asignatura(id_alumno,id_asignatura,calificacion) VALUES ('$Matricula','$Id_Materia','$Calificacion')";
    $InsertarQuery=mysqli_query($conexion,$insertar);

?>


