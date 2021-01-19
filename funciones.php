<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Include Require</title>
	<link rel="stylesheet" href="./estilos/main.css">
	<style>
		body {
			background: darkblue;
		}
		.container {
			background: #000;
			width: 500px;
			margin: 200px auto;
			padding: 20px;
		}
		h1 {
			font-size: 20px;
			color: #fff;
			text-align: center;
			padding: 10px;
		}
		.cuentas {
			width:100%;
			color: #fff;
		}
		input[type="text"]{
			width: 100%;
			padding: 10px;
			margin: 4px 0;
		}
		input[type="submit"]{
			width: 20%;
			padding: 5px;
			background: blue;
			border: none;
			border-radius: 2px;
			margin-top: 5px;
		}
		.resultado {
			background:#32a852;
			padding: 10px;
			border-radius: 5px;
			font-size: 1.2rem;
			text-align: center;
			margin-top: 5px;
			font-weight: 700;
			font-family: Helvetica;

		}
		.resultado > p{
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Multiplicaciones</h1>
		<div class="cuentas">
			<form action="index.php" method="post">
			
				<p>Num 1</p>
				<input type="text" name="numero1">
				<p>Num 2</p>
				<input type="text" name="numero2">
				<input type="submit" value="Multiplicar">
				
			</form>
			<?php
				error_reporting(0);

				$valor1 = $_POST['numero1'];
				$valor2 = $_POST["numero2"];
				
				function multiplicar ($num1, $num2){
					return $num1 * $num2;

				}
				if(isset($valor1) && isset($valor2)){
					echo '<div class="resultado">
					El resultado es: <p>'
					.multiplicar($valor1, $valor2).'</p></div>';
				}else if ($valor1 == "" || $valor2 == "") {
					echo "<div>Tenes que ingresar los numeros primero</div>";
				}
				
			?>
		</div>
	</div>
</body>
</html>