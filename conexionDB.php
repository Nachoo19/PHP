<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Include Require</title>
	<link rel="stylesheet" href="./estilos/main.css">
	<style>
	body {
		background: pink;

	}
	.container{
		background: #000;
		color: #fff;
		width: 100%;
		height: 200px;
		margin: 200px 0;
		font-size: 2rem;
		text-align: center;
	}
	</style>
</head>
<body>

</body>
</html> -->
<?php
$servidor = "localhost";
$nombreUsuario = "root";
$password = "pass";
$database= "todolistDB";

$conexion = new mysqli($servidor, $nombreUsuario, $password, $database);
// print_r( $conexion);
if($conexion -> connect_error){
	die("Conexion fallida: " . $conexion-> connect_error);
}
// echo "Conexion exitosa"; 
// Crear base de datos
// $sql = "CREATE DATABASE todolistDB";
// if($conexion-> query($sql) === true ){
// 	echo "Base de datos creada correctamente...";
// }else {
// 	die("Error al crear la base de datos: " . $conexion-> error);
// }
$sql = "CREATE TABLE todoTable(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	texto VARCHAR(200) NOT NULL,
	completado BOOLEAN NOT NULL,
	timestamp TIMESTAMP
)";
if($conexion->query($sql) === true){
	echo "La tabla se creo correctamente";
}else{
	die("error al creat tabla: " . $conexion->error);
}
?>