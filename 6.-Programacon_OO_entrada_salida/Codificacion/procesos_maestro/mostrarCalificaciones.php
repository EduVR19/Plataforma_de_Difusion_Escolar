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
              <a class="nav-link" href="mostrarCalificaciones.php">Agregar calificaciones</a>
            <li class="nav-item active">
            <a class="nav-link" href="mostrarGrupo.php">Ver grupo</a>
            <li class="nav-item active">
              <a class="nav-link" href="../cerrar.php">Salir</a>  
          </ul>
        </nav>
    </div>
    <!--*********************FIN DE NAVBAR********************-->

        <div class="card-body">
						<span class="btn btn-primary" data-toggle="modal" data-target="#modalEditar">
							Agregar calificacion <span class="fa fa-plus-circle"></span>
						</span>
                        <span class="btn btn-primary" data-toggle="modal" data-target="#modalEliminar">
							Eliminar calificacion <span class="fa fa-plus-circle"></span>
						</span>
						<span><a class="btn btn-danger" href="pdf/ListadoDeAlumnos.php" role="button">PDF</a>
						</span>
		</div>

        <?php
            $calificaciones="SELECT * FROM alumno_asignatura";
            $calificacionesQuery=mysqli_query($conexion,$calificaciones);
        ?>
        <div class="container.fluid">
                <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">        
                                <table class="table table-sm table-hover table-condensed table-bordered" id="iddatatable">
                <thead style="background-color: #dc3545;color: white; font-weight: bold;">
                    <tr>
                        
                        <td>Matricula</td>
                        <td>Nombre de Alumno</td>
                        <td>Correo</td>
                        <td>Materia</td>
                        <td>Calificación</td>
                        

                    </tr>
                </thead>
                <tfoot style="background-color: #ccc;color: white; font-weight: bold;">
                    <tr>
                        <td>Matricula</td>
                        <td>Nombre del alumno</td>
                        <td>Correo</td>
                        <td>Materia</td>
                        <td>Calificación</td>

                    </tr>
                </tfoot>
                <tbody >
                    <?php 
                    if($calificacionesQuery->num_rows>0){
                        while ($row=mysqli_fetch_row($calificacionesQuery)) {
                        $datosAlumno = "SELECT * from alumno where id_alumno='$row[0]'";
                        $datosAlumno= mysqli_query($conexion,$datosAlumno);
                        $row2=mysqli_fetch_row($datosAlumno);
                            if($row2[10]==$grupoo){
                            
                                ?>
                                <tr>
                                    <td><?php echo $row[0] ?></td>
                                    <td><?php echo $row2[1] ?></td>
                                    <td><?php echo $row2[3] ?></td>
                                    <td><?php echo $row[1] ?></td>
                                    <td><?php echo $row[2] ?></td>
                                </tr>
                                <?php 
                            }   
                        }
                    }
                
                    ?>
                </tbody>
            </table>
                    </div>
                </div>
            </div>
        </div>
<!-- Modal  para poder agregar calificaciones-->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar alumno</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevoU" method="POST" action="agregarCalificacion.php">
						<label>Matricula</label>
						<input type="text" class="form-control input-sm" id="matriculaU" name="matriculaU">
						<label>ID de materia</label>
						<input type="text" class="form-control input-sm" id="id_materiaU" name="id_materiaU">
                        <label>Calificación</label>
						<input type="text" class="form-control input-sm" id="calificacionU" name="calificacionU">
                        <br><br>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-warning" id="btnActualizar" onclick="agregarAlumno($('#matriculaU').val(), $('#id_materiaU').val(),$('#calificacionU').val());return false;">Actualizar</button>
				</div>
			</div>
		</div>
	</div>

    <!-- Modal  para poder eliminar calificaciones-->
<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Eliminar calificación</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
                <form id="frmnuevoE" method="POST" action="eliminarCalificaciones.php">
						<label>Matricula</label>
						<input type="text" class="form-control input-sm" id="matriculaE" name="matriculaE">
						<label>ID de materia</label>
						<input type="text" class="form-control input-sm" id="id_materiaE" name="id_materiaE">
                        <label>Calificación</label>
						<input type="text" class="form-control input-sm" id="calificacionE" name="calificacionE">
                        <br><br>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-warning" id="btnEliminar" onclick="eliminarAlumno($('#matriculaE').val(), $('#id_materiaE').val(),$('#calificacionE').val());">Actualizar</button>
				</div>
			</div>
		</div>
	</div>


    </body>
 <script>
    function agregarAlumno(matriculaU,id_materiaU,calificacionU)
    {
        var parametros={
            MatriculaU: matriculaU,
            Id_materia: id_materiaU,
            Calificacion: calificacionU

        };

        $.ajax({
            type:'POST', //aqui puede ser igual get
            url: 'agregarCalificaciones.php',//aqui va tu direccion donde esta tu funcion php
            data: parametros,//aqui tus datos
            success:function(data){
                alert("Datos ingresados");
           },
           error:function(data){
            alert("DAtos incorrectos");
           }
         });
    }
    function eliminarAlumno(matriculaE,id_materiaE,calificacionE)
    {
        var parametros={
            MatriculaU: matriculaE,
            Id_materia: id_materiaE,
            Calificacion: calificacionE

        };

        $.ajax({
            type:'POST', //aqui puede ser igual get
            url: 'eliminarCalificaciones.php',//aqui va tu direccion donde esta tu funcion php
            data: parametros,//aqui tus datos
            success:function(data){
                alert("Datos ingresados de eliminar");
           },
           error:function(data){
            alert("Datos incorrectos");
           }
         });
    }
</script>


</html>