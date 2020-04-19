<!DOCTYPE html>
<html>
<head>
	<meta chasrset = "utf-8">
	<title></title>
</head>
<body>
	<?php

		$db_host = "localhost";
		$db_nombre = "pde";
		$db_usuario = "root";
		$db_contra = "";

		$conexion = mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

		$consulta = "SELECT * FROM ALUMNO";

		$resultados = mysqli_query($conexion, $consulta);

		$fila = mysqli_fetch_row($resultados);

		echo $fila[0];
		echo $fila[1];
		echo $fila[2];
		echo $fila[3];

	?>
</body>
</html>