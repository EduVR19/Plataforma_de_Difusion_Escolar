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
              <a class="nav-link" href="admComentario.php">Agregar comentarios</a>
            <li class="nav-item active">
              <a class="nav-link" href="admCalificacion.php">Agregar calificaciones</a>
            <li class="nav-item active">
            <a class="nav-link" href="procesos_maestro/mostrarGrupo.php">Ver grupo</a>
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
						<div class="card-header">
							Comentarios
						</div>
					</center>
					<div class="card-body">
						<span class="btn btn-primary" data-toggle="modal" data-target="#agregarnuevosdatosmodal">
							Agregar nuevo comentario<span class="fa fa-plus-circle"></span>
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
					<h5 class="modal-title" id="exampleModalLabel">Agrega nuevo comentario</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevo">
						<label>ID</label>
						<input type="text" class="form-control input-sm" id="id_alumno" name="id_alumno">
						<label>Comentario</label>
						<input type="text" class="form-control input-sm" id="comentario" name="comentario">
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
					<h5 class="modal-title" id="exampleModalLabel">Actualizar comentario</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevoU">
						<label>id_alumno</label>
						<input type="text" class="form-control input-sm" id="id_alumnoU" name="id_alumnoU">
						<label>comentario</label>
						<input type="text" class="form-control input-sm" id="comentarioU" name="comentarioU">			
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
				url:"procesos_comentario/agregarComentario.php",
				success:function(r){
					if(r==1){
						$('#frmnuevo')[0].reset();
						
						$('#tablaDatatable').load('tablaComentario.php');
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
				url:"procesos_comentario/actualizarComentario.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tablaComentario.php');
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
		$('#tablaDatatable').load('tablaComentario.php');
	});
</script>

<script type="text/javascript">
	function agregaFrmActualizar(idcomentario){
		$.ajax({
			type:"POST",
			data:"idcomentario = " + idcomentario,
			url:"procesos_comentario/obtenDatosComentario.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#idcomentario').val(datos['id_comentario']);
				$('#id_alumnoU').val(datos['id_alumno']);
				$('#comentarioU').val(datos['comentario']);
			}
		});
	}

	function eliminarComentario(idcomentario){
		alertify.confirm('Eliminar comentario', '¿Seguro que desea eliminar comentario?', function(){ 

			$.ajax({
				type:"POST",
				data:"idcomentario=" + idcomentario,
				url:"procesos_comentario/eliminarComentario.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tablaComentario.php');
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