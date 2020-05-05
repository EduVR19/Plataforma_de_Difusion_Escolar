<?php 

	class crudAlumno
	{
		public function agregarAlumno($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$psswd = substr( md5(microtime()), 1, 8);
			$sql="INSERT into alumno (nombre,
									nombre_tutor,
									correo,
									sexo,
									fecha_nac,
									lugar_nac,
									curp,
									domicilio,
									telefono,
									id_grupo,
									contraseña)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]',
											'$datos[3]',
											'$datos[4]',
											'$datos[5]',
											'$datos[6]',
											'$datos[7]',
											'$datos[8]',
											'$datos[9]',
											'$psswd')";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatosAlumno($idalumno){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT id_alumno,
							nombre,
							nombre_tutor,
							correo,
							sexo,
							fecha_nac,
							lugar_nac,
							curp,
							domicilio,
							telefono,
							id_grupo,
							contraseña
					from alumno 
					where id_alumno='$idalumno'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_alumno' => $ver[0],
				'nombre' => $ver[1],
				'nombre_tutor' => $ver[2],
				'correo' => $ver[3],
				'sexo' => $ver[4],
				'fecha_nac' => $ver[5],
				'lugar_nac' => $ver[6],
				'curp' => $ver[7],
				'domicilio' => $ver[8],
				'telefono' => $ver[9],
				'id_grupo' => $ver[10],
				'contraseña' => $ver[11]
				);
			return $datos;
		}

		public function actualizarAlumno($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE alumno set        nombre='$datos[0]',
										nombre_tutor='$datos[1]',
										correo='$datos[2]',
											 sexo='$datos[3]',
										fecha_nac='$datos[4]',
										lugar_nac='$datos[5]',
											 curp='$datos[6]',
										domicilio='$datos[7]',
										 telefono='$datos[8]',
										 id_grupo='$datos[9]',
										 contraseña='$datos[11]'
						where id_alumno='$datos[10]'";
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