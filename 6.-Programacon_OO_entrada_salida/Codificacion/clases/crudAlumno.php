<?php 

	class crudAlumno
	{
		public function agregarAlumno($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$psswd = substr( md5(microtime()), 1, 8);
			$sql="INSERT into alumno (nombre,
									sexo,
									fecha_nac,
									lugar_nac,
									curp,
									domicilio,
									telefono,
									contraseña)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]',
											'$datos[3]',
											'$datos[4]',
											'$datos[5]',
											'$datos[6]',
											'$psswd')";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatosAlumno($idalumno){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT id_alumno,
							nombre,
							sexo,
							fecha_nac,
							lugar_nac,
							curp,
							domicilio,
							telefono,
							contraseña
					from alumno 
					where id_alumno='$idalumno'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_alumno' => $ver[0],
				'nombre' => $ver[1],
				'sexo' => $ver[2],
				'fecha_nac' => $ver[3],
				'lugar_nac' => $ver[4],
				'curp' => $ver[5],
				'domicilio' => $ver[6],
				'telefono' => $ver[7],
				'contraseña' => $ver[8]
				);
			return $datos;
		}

		public function actualizarAlumno($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE alumno set        nombre='$datos[0]',
											 sexo='$datos[1]',
										fecha_nac='$datos[2]',
										lugar_nac='$datos[3]',
											 curp='$datos[4]',
										domicilio='$datos[5]',
										 telefono='$datos[6]',
										 contraseña='$datos[8]'
						where id_alumno='$datos[7]'";
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