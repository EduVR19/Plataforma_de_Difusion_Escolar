<!DOCTYPE html>
<html>
<head>
	<title></title>
	
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
</head>
<body>
	<?php 
		session_start();
		include "../validasesion.php";
	$usuario=$_SESSION["usu"];
		//$usuario=1;
	?>
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
		      <a class="nav-link" href="datosalumno.php">Datos personales</a>
		   	<li class="nav-item active">
		      <a class="nav-link" href="#">Comentarios</a>
		   	<li class="nav-item active">
		      <a class="nav-link" href="calificacionesalumno.php">Calificaciones</a>
		    <li class="nav-item active">
		      <a class="nav-link" href="../cerrar.php">Salir</a>  
		  </ul>
		</nav>
	</div>
	<!--*********************FIN DE NAVBAR********************-->

	<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevoU">
						<input type="text" hidden="" id="idalumno" name="idalumno">
						<label>nombreU</label>
						<input type="text" class="form-control input-sm" id="nombreU" name="nombreU">
						<label>nombre_tutorU</label>
						<input type="text" class="form-control input-sm" id="nombre_tutorU" name="nombre_tutorU">
						<label>correoU</label>
						<input type="text" class="form-control input-sm" id="correoU" name="correoU">
						<label>sexoU</label>
						<input type="text" class="form-control input-sm" id="sexoU" name="sexoU">
						<label>fecha_nacU</label>
						<input type="text" class="form-control input-sm" id="fecha_nacU" name="fecha_nacU">
						<label>lugar_nacU</label>
						<input type="text" class="form-control input-sm" id="lugar_nacU" name="lugar_nacU">
						<label>curpU</label>
						<input type="text" class="form-control input-sm" id="curpU" name="curpU">
						<label>domicilioU</label>
						<input type="text" class="form-control input-sm" id="domicilioU" name="domicilioU">
						<label>telefonoU</label>
						<input type="text" class="form-control input-sm" id="telefonoU" name="telefonoU">
						<label>ContraseñaU</label>
						<input type="text" class="form-control input-sm" id="contraseñaU" name="contraseñaU">
						<label>id_grupoU</label>
						<input type="text" class="form-control input-sm" id="id_grupoU" name="id_grupoU">

					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
				</div>
			</div>
		</div>
	</div>



	<?php 

require_once "../clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();
  


$sql = "SELECT 	Co.id_alumno, Co.comentario,
				Al.id_alumno

		FROM comentario Co
		INNER JOIN alumno Al ON Al.id_alumno = (Co.id_alumno = $usuario)";


$result=mysqli_query($conexion,$sql);
?>

<br><br>
<div class="container.fluid">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table class="table table-sm table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				
				<td>Comentarios</td>
			
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>Comentarios</td>
			</tr>
		</tfoot>
		<tbody >
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr>
				    <td><?php echo $mostrar[1] ?></td>
				</tr>
		<?php }
			?>
		</tbody>
	</table>
			</div>
		</div>
	</div>
</div>
</html>