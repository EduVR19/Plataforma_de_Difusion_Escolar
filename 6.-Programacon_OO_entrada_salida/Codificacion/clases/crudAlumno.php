<?php 

	class crudAlumno{
		public function agregarAlumno($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into alumno (nombre,
									a_paterno,
									a_materno,
									sexo,
									fecha_nac,
									lugar_nac,
									curp,
									domicilio,
									telefono)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]',
											'$datos[3]',
											'$datos[4]',
											'$datos[5]',
											'$datos[6]',
											'$datos[7]',
											'$datos[8]')";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatosAlumno($idalumno){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT id_alumno,
							nombre,
							a_paterno,
							a_materno,
							sexo,
							fecha_nac,
							lugar_nac,
							curp,
							domicilio,
							telefono
					from alumno 
					where id_alumno='$idalumno'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_alumno' => $ver[0],
				'nombre' => $ver[1],
				'a_paterno' => $ver[2],
				'a_materno' => $ver[3],
				'sexo' => $ver[4],
				'fecha_nac' => $ver[5],
				'lugar_nac' => $ver[6],
				'curp' => $ver[7],
				'domicilio' => $ver[8],
				'telefono' => $ver[9]
				);
			return $datos;
		}

		public function actualizarAlumno($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE alumno set        nombre='$datos[0]',
										a_paterno='$datos[1]',
										a_materno='$datos[2]',
											 sexo='$datos[3]',
										fecha_nac='$datos[4]',
										lugar_nac='$datos[5]',
											 curp='$datos[6]',
										domicilio='$datos[7]',
										 telefono='$datos[8]'
						where id_alumno='$datos[9]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminarAlumno($idalumno){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from alumno where id_alumno='$idalumno'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>