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

	<div class="container.fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<center>
						<div class="card-header" >
							Datos de maestros
						</div>
					</center>
					<div class="card-body">
						<span class="btn btn-primary" data-toggle="modal" data-target="#agregarnuevosdatosmodal">
							Agregar nuevo <span class="fa fa-plus-circle"></span>
						</span>
						<span><a class="btn btn-danger" href="pdf/ListadoDeMaestros.php" role="button">PDF</a>
						</span>
						<hr>
						<div id="tablaDatatable"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--*********************FIN DE NAVBAR********************-->


	<!-- Modal (Ventana emergente) -->
	<div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agrega nuevo maestro</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevo">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombre" name="nombre">
						<label>Domicilio</label>
						<input type="text" class="form-control input-sm" id="domicilio" name="domicilio">
						<label>Teléfono</label>
						<input type="text" class="form-control input-sm" id="telefono" name="telefono">
						<label>Correo electrónico</label>
						<input type="text" class="form-control input-sm" id="correo" name="correo">
						<label>Fecha de ingreso</label>
						<input type="text" class="form-control input-sm" id="fecha_ingreso" name="fecha_ingreso">
						<label>Grado de estudios</label>
						<input type="text" class="form-control input-sm" id="grado_estudios" name="grado_estudios">
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
					<h5 class="modal-title" id="exampleModalLabel">Actualizar maestro</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevoU">
						<input type="text" hidden="" id="idmaestro" name="idmaestro">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombreU" name="nombreU">
						<label>Domicilio</label>
						<input type="text" class="form-control input-sm" id="domicilioU" name="domicilioU">
						<label>Teléfono</label>
						<input type="text" class="form-control input-sm" id="telefonoU" name="telefonoU">
						<label>Correo electrónico</label>
						<input type="text" class="form-control input-sm" id="correoU" name="correoU">
						<label>Fecha de ingreso</label>
						<input type="text" class="form-control input-sm" id="fecha_ingresoU" name="fecha_ingresoU">
						<label>Grado de estudios</label>
						<input type="text" class="form-control input-sm" id="grado_estudiosU" name="grado_estudiosU">
						<label>Grupo</label>
						<input type="text" class="form-control input-sm" id="id_grupoU" name="id_grupoU">
						<label>ContraseñaU</label>
						<input type="text" class="form-control input-sm" id="contraseñaU" name="contraseñaU">
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
				url:"procesos_maestro/agregarMaestro.php",
				success:function(r){
					if(r==1){
						$('#frmnuevo')[0].reset();
						$('#tablaDatatable').load('tablaMaestro.php');
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
				url:"procesos_maestro/actualizarMaestro.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tablaMaestro.php');
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
		$('#tablaDatatable').load('tablaMaestro.php');
	});
</script>

<script type="text/javascript">
	function agregaFrmActualizar(idmaestro){
		$.ajax({
			type:"POST",
			data:"idmaestro=" + idmaestro,
			url:"procesos_maestro/obtenDatosMaestro.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#idmaestro').val(datos['id_maestro']);
				$('#nombreU').val(datos['nombre']);
				$('#domicilioU').val(datos['domicilio']);
				$('#telefonoU').val(datos['telefono']);
				$('#correoU').val(datos['correo']);
				$('#fecha_ingresoU').val(datos['fecha_ingreso']);
				$('#grado_estudiosU').val(datos['grado_estudios']);
				$('#id_grupoU').val(datos['id_grupo']);
				$('#contraseñaU').val(datos['contraseña']);
			}
		});
	}

	function eliminarMaestro(idmaestro){
		alertify.confirm('Eliminar maestro', '¿Seguro desea eliminar maestro?', function(){ 

			$.ajax({
				type:"POST",
				data:"idmaestro=" + idmaestro,
				url:"procesos_maestro/eliminarMaestro.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tablaMaestro.php');
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