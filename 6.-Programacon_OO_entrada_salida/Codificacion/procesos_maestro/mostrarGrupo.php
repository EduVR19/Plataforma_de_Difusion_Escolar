<!DOCTYPE html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../librerias/datatable/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../librerias/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../librerias/alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../librerias/alertify/css/themes/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../librerias/fontawesome/css/font-awesome.css">

    <script src="../librerias/jquery.min.js"></script>
    <script src="../librerias/bootstrap/popper.min.js"></script>
    <script src="../librerias/bootstrap/bootstrap.min.js"></script>
    <script src="../librerias/datatable/jquery.dataTables.min.js"></script>
    <script src="../librerias/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../librerias/alertify/alertify.js"></script>
    <title>Grupo</title>
    <?php require_once "../scripts.php"; 

        session_start();
        include "../validasesion.php";
        include "../clases/conexion.php";
        $obj= new conectar();
		$conexion=$obj->conexion();
        $usuario=$_SESSION["usu"];
        $grupoo=$_SESSION["grupo"];
    ?>



    </head>

    <body>
        <!--*********************INICIO DE ENCABEZADO********************-->  
        <div class="container.fluid text-center" style="margin: 10px">
            <div class="row">
                <div class="col-sm-2">
                    <div class="container">
                    <img src="../img\logo.png"> 
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="container" style="margin-top: 30px">
                        <h1 class="mx-auto d-block">Escuela Primaria “Profr. Luis Tijerina Almaguer” Zona 8</h1>
                    </div> 
                </div>  
                <div class="col-sm-2">
                    <div class="container">
                    <img src="../img\logo_2.png" class="mx-auto d-block" style="width:100%; height:100%"> 
                    </div>
                </div>
            </div>
        </div>
        <!--*********************FIN DE ENCABEZADO********************-->


    <!--*****************INICIO DE NAVBAR (HORIZONTAL)************-->
    <div class="container.fluid text-center">
        <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="../admComentario.php">Agregar comentarios</a>
            <li class="nav-item active">
              <a class="nav-link" href="../admCalificacion.php">Agregar calificaciones</a>
            <li class="nav-item active">
            <a class="nav-link" href="mostrarGrupo.php">Ver grupo</a>
            <li class="nav-item active">
              <a class="nav-link" href="../cerrar.php">Salir</a>  
          </ul>
        </nav>
    </div>
    <!--*********************FIN DE NAVBAR********************-->
        
                    
        <?php
            $grupo="SELECT * FROM alumno WHERE id_grupo='$grupoo' ";
            $grupoQuery=mysqli_query($conexion,$grupo);


        ?>
<div class="container.fluid">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table class="table table-sm table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				
				<td>ID</td>
				<td>Nombre de Alumno</td>
				<td>Correo</td>
				

			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>ID</td>
				<td>Nombre del alumno</td>
				<td>Correo</td>

			</tr>
		</tfoot>
		<tbody >
            <?php 
             if($grupoQuery->num_rows>0){
                while ($row=mysqli_fetch_row($grupoQuery)) {
                    ?>
                    <tr>
                        <td><?php echo $row[0] ?></td>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[3] ?></td>
                    </tr>
                    <?php 
                }
            }
        
			?>
		</tbody>
	</table>
			</div>
		</div>
	</div>
</div>




</body>


        
    </body>

</html>