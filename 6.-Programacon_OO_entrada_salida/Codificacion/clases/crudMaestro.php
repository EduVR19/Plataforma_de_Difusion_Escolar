<?php 

	class crudMaestro{
		public function agregarMaestro($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into maestro (	  nombre,
										  cp,
										  telefono,
										  correo,
										  fecha_ingreso_sep,
										  fecha_ingreso_zona,
										  fecha_ingreso_escuela,
										  clave,
										  curp,
										  rfc,
										  grado_estudios)
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
											'$datos[10]')";
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
							  fecha_ingreso_sep,
							  fecha_ingreso_zona,
							  fecha_ingreso_escuela,
							  clave,
							  curp,
							  rfc,
							  grado_estudios
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
				'fecha_ingreso_sep' => $ver[5],
				'fecha_ingreso_zona' => $ver[6],
				'fecha_ingreso_escuela' => $ver[7],
				'clave' => $ver[8],
				'curp' => $ver[9],
				'rfc' => $ver[10],
				'grado_estudios' => $ver[11]
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
						   fecha_ingreso_sep='$datos[4]',
						  fecha_ingreso_zona='$datos[5]',
					   fecha_ingreso_escuela='$datos[6]',
								  	   clave='$datos[7]',
									    curp='$datos[8]',
									     rfc='$datos[9]',
							  grado_estudios='$datos[10]'
						where id_maestro='$datos[11]'";
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