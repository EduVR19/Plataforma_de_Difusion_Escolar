<?php 

	class crudMaestro{
		public function agregarMaestro($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$psswd = substr( md5(microtime()), 1, 8);

			$sql="INSERT into maestro (	  nombre,
										  cp,
										  telefono,
										  correo,
										  fecha_ingreso,
										  clave,
										  curp,
										  rfc,
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
											'$datos[7]',
											'$datos[8]',
											'$datos[9]',
											'$psswd')";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatosMaestro($idmaestro){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT   id_maestro,
							  nombre,
							  cp,
							  telefono,
							  correo,
							  fecha_ingreso,
							  clave,
							  curp,
							  rfc,
							  grado_estudios,
							  id_grupo
					from maestro 
					where id_maestro='$idmaestro'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_maestro' => $ver[0],
				'nombre' => $ver[1],
				'cp' => $ver[2],
				'telefono' => $ver[3],
				'correo' => $ver[4],
				'fecha_ingreso' => $ver[5],
				'clave' => $ver[6],
				'curp' => $ver[7],
				'rfc' => $ver[8],
				'grado_estudios' => $ver[9],
				'id_grupo' => $ver[10]
				);
			return $datos;
		}

		public function actualizarMaestro($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE maestro set  nombre='$datos[0]',
										  cp='$datos[1]',
									telefono='$datos[2]',
									  correo='$datos[3]',
						   fecha_ingreso='$datos[4]',
								  	   clave='$datos[5]',
									    curp='$datos[6]',
									     rfc='$datos[7]',
							  grado_estudios='$datos[8]',
							  		id_grupo='$datos[9]'
						where id_maestro='$datos[10]'";
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