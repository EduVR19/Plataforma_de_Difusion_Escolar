<?php 

	class crudCalificacion{
		public function agregarCalificacion($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into alumno_asignatura (id_alumno,
												  id_asignatura,
												  calificacion)
											values ('$datos[0]',
													'$datos[1]',
													'$datos[2]'
																)";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatosCalificacion($idalumno){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT   id_alumno,
							  id_alumno,
							  calificacion
					from alumno_asignatura 
					where id_alumno='$idalumno'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_alumno' => $ver[0],
				'id_alumno' => $ver[1],
				'calificacion' => $ver[2]
				);
			return $datos;
		}

		public function actualizarCalificacion($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE alumno_asignatura set  id_asignatura='$datos[1]',
												calificacion='$datos[2]'
						where id_alumno='$datos[0]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminarCalificacion($idalumno){ //se esta borrando idalumno
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from alumno_asignatura where id_alumno ='$idalumno'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>