<?php
    require  'conexion.php';
    $obj= new conectar();
    $conexion=$obj->conexion();
    SESSION_START();
    $usuario=$_POST['username'];
    $pass=$_POST['password'];
    
    // ALUMNOS
    $query = "SELECT * FROM alumno where id_alumno ='$usuario' and contraseña='$pass'";

    $consulta= $conexion->query($query) or die ($conexion->error);
    

    if($consulta->num_rows==0){
    }else{
        $reg=$consulta->fetch_assoc();
    session_start();
        
        $_SESSION["usu"]=$usuario;
        $_SESSION["nombreL"]=$reg["nombre"];
        header("location: ../procesos_alumno/datosalumno.php");
    }

    // maestros
    $query2 = "SELECT * FROM maestro where correo ='$usuario' and contraseña='$pass'";

    $consulta2= $conexion->query($query2) or die ($conexion->error);
    

    if($consulta2->num_rows==0){
        echo'<script type="text/javascript">
        alert("Datos incorrectos");
        window.location.href="../index.php";
        </script>';
    }else{
        $reg2=$consulta2->fetch_assoc();
        session_start();
        
        $_SESSION["usu"]=$usuario;
        $_SESSION["grupo"]=$reg2["id_grupo"];
        $_SESSION["nombreL"]=$reg2["nombre"];
        header("location: ../admComentario.php");
    }

    // adm
    $query3 = "SELECT * FROM admin where usuario ='$usuario' and contraseña='$pass'";

    $consulta3 = $conexion->query($query3) or die ($conexion->error);
    

    if($consulta3->num_rows==0){
        echo'<script type="text/javascript">
        alert("Datos incorrectos");
        window.location.href="../index.php";
        </script>';
    }else{
        $reg3=$consulta3->fetch_assoc();
        session_start();
        
        $_SESSION["usu"]=$usuario;
        $_SESSION["nombreL"]=$reg3["nombre"];
        header("location: ../admAlumno.php");
    }

    

?>