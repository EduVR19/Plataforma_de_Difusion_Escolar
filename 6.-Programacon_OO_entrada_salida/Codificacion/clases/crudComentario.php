<?php 

	class crudComentario
	{
		public function agregarComentario($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="INSERT into comentario (id_alumno,
									comentario)
									values ('$datos[0]',
											'$datos[1]')";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatosComentario($idcomentario){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT id_comentario,
							id_alumno,
							comentario
					from comentario 
					where id_comentario='$idcomentario'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_comentario' => $ver[0],
				'id_alumno' => $ver[1],
				'comentario' => $ver[2]
				);
			return $datos;
		}

		public function actualizarComentario($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE comentario set        
										id_alumno='$datos[0]',
										comentario='$datos[1]'
						where id_comentario='$datos[2]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminarComentario($idcomentario){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from comentario where id_comentario='$idcomentario'";
			return mysqli_query($conexion,$sql);
		}
	}



 ?>