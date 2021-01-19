<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Include Require</title>
	<link rel="stylesheet" href="./estilos/main.css">
	<style>
		#container {
			width: 500px;
			margin: 150px auto;
		}
		#menu {
			background: red;
			color: #fff;
			width: 100%;
			padding: 10px;
		}
		#footer{
			background: #000;
			color: #fff;
			width: 100%;
			padding: 10px;
		}
	</style>
</head>
<body>
	<div id="container">
		<?php
			include("menu.php");
		?>
		<h3>Contenido Principal</h3>
		<?php
			require("footer.php");
		?>
	</div>
</body>
</html>