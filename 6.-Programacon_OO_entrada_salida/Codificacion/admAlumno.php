<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "scripts.php";  ?>
</head>
<body>

	<!--*********************INICIO DE ENCABEZADO********************-->
	<div class="container.fluid text-center" style="margin: 10px">
		<div class="row">
			<div class="col-sm-2">
	           	<div class="container">
				  <img src="img\logo.png"> 
				</div>
	        </div>
	         <div class="col-sm-8">
	            <div class="container" style="margin-top: 30px">
	                <h1 class="mx-auto d-block">Escuela Primaria “Profr. Luis Tijerina Almaguer” Zona 8</h1>
	            </div> 
	        </div>  
	         <div class="col-sm-2">
	           	<div class="container">
				  <img src="img\logo_2.png" class="mx-auto d-block" style="width:100%; height:100%"> 
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
		      <a class="nav-link" href="admAlumno.php">Alumnos</a>
		   	<li class="nav-item active">
		      <a class="nav-link" href="admMaestro.php">Maestros</a>
		      <li class="nav-item active">
		      <a class="nav-link" href="asignaturas.php">Ver Materias</a>
		     <li class="nav-item active">
		      <a class="nav-link" href="cerrar.php">Salir</a>
		  </ul>
		</nav>
	</div>
	<!--*********************FIN DE NAVBAR********************-->

	<!--*****************INICIO DE TABLA DE DATOS************-->
	<div class="container.fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<center>
						<div class="card-header" >
							Datos de alumnos
						</div>
					</center>
					<div class="card-body">
						<span class="btn btn-primary" data-toggle="modal" data-target="#agregarnuevosdatosmodal">
							Agregar nuevo <span class="fa fa-plus-circle"></span>
						</span>
						<span><a class="btn btn-danger" href="pdf/ListadoDeAlumnos.php" role="button">PDF</a>
						</span>
						<hr>
						<div id="tablaDatatable"></div>
					</div>
					<div class="card-footer text-muted">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--*****************FIN DE TABLA DE DATOS************-->


	<!-- Modal (Ventana emergente) -->
	<div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agrega nuevo alumno</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevo">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombre" name="nombre">
						<label>Nombre del tutor</label>
						<input type="text" class="form-control input-sm" id="nombre_tutor" name="nombre_tutor">
						<label>correo</label>
						<input type="text" class="form-control input-sm" id="correo" name="correo">
						<label>Fecha de nacimiento</label>
						<input type="text" class="form-control input-sm" id="fecha_nac" name="fecha_nac">
						<label>Lugar de nacimiento</label>
						<input type="text" class="form-control input-sm" id="lugar_nac" name="lugar_nac">
						<label>CURP</label>
						<input type="text" class="form-control input-sm" id="curp" name="curp">
						<label>Domicilio</label>
						<input type="text" class="form-control input-sm" id="domicilio" name="domicilio">
						<label>Teléfono</label>
						<input type="text" class="form-control input-sm" id="telefono" name="telefono">
						<label>Grupo</label>
						<input type="text" class="form-control input-sm" id="id_grupo" name="id_grupo">
						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" id="btnAgregarnuevo" class="btn btn-primary">Agregar nuevo</button>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal -->
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
					<form id="frmnuevoU">
						<input type="text" hidden="" id="idalumno" name="idalumno">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombreU" name="nombreU">
						<label>Nombre del tutor</label>
						<input type="text" class="form-control input-sm" id="nombre_tutorU" name="nombre_tutorU">
						<label>correo</label>
						<input type="text" class="form-control input-sm" id="correoU" name="correoU">
						<label>Fecha de nacimiento</label>
						<input type="text" class="form-control input-sm" id="fecha_nacU" name="fecha_nacU">
						<label>Lugar de nacimiento</label>
						<input type="text" class="form-control input-sm" id="lugar_nacU" name="lugar_nacU">
						<label>CURP</label>
						<input type="text" class="form-control input-sm" id="curpU" name="curpU">
						<label>Domicilio</label>
						<input type="text" class="form-control input-sm" id="domicilioU" name="domicilioU">
						<label>Teléfono</label>
						<input type="text" class="form-control input-sm" id="telefonoU" name="telefonoU">
						<label>Grupo</label>
						<input type="text" class="form-control input-sm" id="id_grupoU" name="id_grupoU">
						<label>Contraseña</label>
						<input type="text" class="form-control input-sm" id="contraseñaU" name="contraseñaU">
						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>



<script type="text/javascript">
	$(document).ready(function(){
		$('#btnAgregarnuevo').click(function(){
			datos=$('#frmnuevo').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos_alumno/agregarAlumno.php",
				success:function(r){
					if(r==1){
						$('#frmnuevo')[0].reset();
						
						$('#tablaDatatable').load('tablaAlumno.php');
						alertify.success("Se agregó exitosamente");
					}else{
						alertify.error("No se agregó exitosamente");
					}
				}
			});
		});

		$('#btnActualizar').click(function(){
			datos=$('#frmnuevoU').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos_alumno/actualizarAlumno.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tablaAlumno.php');
						alertify.success("Se actualizó exitosamente");
					}else{
						alertify.error("No se actualizó exitosamente");
					}
				}
			});
		});
	});
</script>


<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatatable').load('tablaAlumno.php');
	});
</script>

<script type="text/javascript">
	function agregaFrmActualizar(idalumno){
		$.ajax({
			type:"POST",
			data:"idalumno=" + idalumno,
			url:"procesos_alumno/obtenDatosAlumno.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#idalumno').val(datos['id_alumno']);
				$('#nombreU').val(datos['nombre']);
				$('#nombre_tutorU').val(datos['nombre_tutor']);
				$('#correoU').val(datos['correo']);
				$('#fecha_nacU').val(datos['fecha_nac']);
				$('#lugar_nacU').val(datos['lugar_nac']);
				$('#curpU').val(datos['curp']);
				$('#domicilioU').val(datos['domicilio']);
				$('#telefonoU').val(datos['telefono']);
				$('#id_grupoU').val(datos['id_grupo']);
				$('#contraseñaU').val(datos['contraseña']);
			}
		});
	}

	function eliminarAlumno(idalumno){
		alertify.confirm('Eliminar alumno', '¿Seguro que desea eliminar alumno?', function(){ 

			$.ajax({
				type:"POST",
				data:"idalumno=" + idalumno,
				url:"procesos_alumno/eliminarAlumno.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tablaAlumno.php');
						alertify.success("Se eliminó exitosamente");
					}else{
						alertify.error("No se eliminó exitosamente");
					}
				}
			});

		}
		, function(){

		});
	}
</script>