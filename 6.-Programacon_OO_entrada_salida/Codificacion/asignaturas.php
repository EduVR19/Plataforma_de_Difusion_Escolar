<!DOCTYPE html>
<html>
<head>
<title></title>
	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="librerias/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="librerias/datatable/bootstrap.css">
<link rel="stylesheet" type="text/css" href="librerias/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="librerias/alertify/css/alertify.css">
<link rel="stylesheet" type="text/css" href="librerias/alertify/css/themes/bootstrap.css">
<link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/font-awesome.css">

<script src="librerias/jquery.min.js"></script>
<script src="librerias/bootstrap/popper.min.js"></script>
<script src="librerias/bootstrap/bootstrap.min.js"></script>
<script src="librerias/datatable/jquery.dataTables.min.js"></script>
<script src="librerias/datatable/dataTables.bootstrap4.min.js"></script>
<script src="librerias/alertify/alertify.js"></script>
</head>
<body>
	<?php 
		session_start();
	include "validasesion.php";
	$usuario=$_SESSION["usu"];
		//$usuario=1;
	?>
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

	<div class="container.fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<center>
						<div class="card-header" >
							Datos de materias
						</div>
					</center>
					<div class="card-body">
						
						<span><a class="btn btn-danger" href="pdf/ListadoDeMaterias.php" role="button">PDF</a>
						</span>
						<hr>
						<div id="tablaDatatable"></div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php 

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();
   
$sql="SELECT *
from asignatura";
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
				<td>Id de asignatura</td>
				<td>Nombre</td>
				<td>Grado en que se imparte</td>
				

			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>Id de asignatura</td>
				<td>Nombre</td>
				<td>Grado en que se imparte</td>

			</tr>
		</tfoot>
		<tbody >
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr>
				    <td><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[3] ?></td>
					
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>
</div>
</div>
</div>


</html>