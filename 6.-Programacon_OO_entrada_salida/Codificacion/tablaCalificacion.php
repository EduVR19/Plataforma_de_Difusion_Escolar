<?php 

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql = "SELECT 	ASI.id_alumno, ASI.id_asignatura, ASI.calificacion,
				ASI2.nombre,
				AL.nombre

		FROM alumno_asignatura ASI
		INNER JOIN asignatura ASI2 ON ASI.id_asignatura = ASI2.id_asignatura
		INNER JOIN alumno AL ON ASI.id_alumno = AL.id_alumno";
$result=mysqli_query($conexion,$sql);
?>


<div class="container.fluid">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table class="table table-sm table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>ID de Aasignatura</td>
				<td>Nombre de la Asignatura</td>
				<td>Calificacion</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>ID de Aasignatura</td>
				<td>Nombre de la Asignatura</td>
				<td>Calificacion</td>
				<td>Eliminar</td>
			</tr>
		</tfoot>
		<tbody >
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr>
				    <td><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[4] ?></td>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[3] ?></td>
					<td><?php echo $mostrar[2] ?></td>
				<!--<td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-pencil-square-o"></span>
						</span>
					</td>-->
					<td style="text-align: center;">
						<span class="btn btn-danger btn-sm" onclick="eliminarCalificacion('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-trash"></span>
						</span>
					</td>
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

<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>