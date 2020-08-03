<?php 

	class crudMaestro{
		public function agregarMaestro($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$psswd = substr( md5(microtime()), 1, 8);

			$sql="INSERT into maestro (nombre,
										  domicilio,
										  telefono,
										  correo,
										  fecha_ingreso,
										  grado_estudios,
										  id_grupo,
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

		public function obtenDatosMaestro($idmaestro){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT   id_maestro,
							  nombre,
							  domicilio,
							  telefono,
							  correo,
							  fecha_ingreso,
							  grado_estudios,
							  id_grupo,
							  contraseña
					from maestro 
					where id_maestro='$idmaestro'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_maestro' => $ver[0],
				'nombre' => $ver[1],
				'domicilio' => $ver[2],
				'telefono' => $ver[3],
				'correo' => $ver[4],
				'fecha_ingreso' => $ver[5],
				'grado_estudios' => $ver[6],
				'id_grupo' => $ver[7],
				'contraseña' => $ver[8]
				);
			return $datos;
		}

		public function actualizarMaestro($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE maestro set  nombre='$datos[0]',
								   domicilio='$datos[1]',
									telefono='$datos[2]',
									  correo='$datos[3]',
							   fecha_ingreso='$datos[4]',
							  grado_estudios='$datos[5]',
							        id_grupo='$datos[6]',
								  contraseña='$datos[8]'
						where id_maestro='$datos[7]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminarMaestro($idmaestro){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from maestro where id_maestro='$idmaestro'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>