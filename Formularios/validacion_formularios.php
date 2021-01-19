<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<link rel="stylesheet" href="./estilos/main.css">
	<style>
	body {
		background: lightgray;
	}
	form {
		width: 400px;
		margin: 5rem auto;
		display: flex;
		flex-direction: column;
		background: #232132;
		padding: 2rem;
		border-radius: 5px;
		color: #fff;
		font-size: 16px
	}
	input {
		padding: .5rem;
		margin: 10px 0;
	}
	.correcto {
		background-color: #A0DEA7;
		font-size: 12px;
		padding: 10px;
	}
	.error {
		background-color: #FF9185;
		font-size: 12px;
		padding: 10px;
	}
	</style>
</head>
<body>
	<form action="index.php" method="POST">
		<?php
		error_reporting(0);
			$nombre ="";
			$password = "";
			$email = "";
			$pais = "";
			$nivel ="";
			$hamburguesas = [];
			if(isset($_POST['nombre'])){
				$nombre = $_POST['nombre'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				$pais = $_POST['pais'];
				// $nivel = $_POST['nivel']
				if(isset($_POST['nivel'])){
					$nivel = $_POST['nivel'];
				}else {
					$nivel = "";
				}
				if(isset($_POST["hamburguesa"])){
					$hamburguesas = $_POST["hamburguesa"];
				}else {
					$hamburguesas = "";
				}
				$campos = [];

				if($nombre == ""){
					array_push($campos, "El campo Nombre no pude estar vacío");
				}

				if($password == "" || strlen($password) < 6){
					array_push($campos, "El campo Password no puede estar vacío, ni tener menos de 6 caracteres.");
				}

				if($email == "" || strpos($email, "@") === false){
					array_push($campos, "Ingresa un correo electrónico válido.");
				}

				if($pais == "" || $pais === "no__valido"){
					array_push($campos, "Selecciona un pais de origen.");
				}
				if($nivel == ""){
					array_push($campos, "Selecciona un nivel.");
				}
				if($hamburguesas == ""){
					array_push($campos, "Seleccione la cantidad de hamburguesas a solicitar.");
				}
				if(count($campos) > 0){
					echo "<div class='error'>";
					for($i = 0; $i < count($campos); $i++){
						echo "<li>".$campos[$i]."</i>";
					}
				}else{
					echo "<div class='correcto'>
							Datos correctos";
				}
				echo "</div>";
			}
		?>
		<p>
		Nombre:<br/>
		<input type="text" name="nombre" value="<?php echo $nombre;?>" >
		</p>

		<p>
		Password:<br/>
		<input type="password" name="password" value="<?php echo $password;?>" >
		</p>

		<p>
		correo electrónico:<br/>
		<input type="text" name="email" value="<?php echo $email;?>">
		</p>
		
		<select name="pais" id="pais">
			<option value="no__valido" disabled selected>Selecciona un pais</option>
			<option value="mx" <?php if($pais == "mx"){echo "selected";} ?>>Mexico</option>
			<option value="ar" <?php if($pais == "ar"){echo "selected";} ?>>Argentina</option>
			<option value="eu" <?php if($pais == "eu"){echo "selected";} ?>>Estados Unidos</option>
			<option value="ch" <?php if($pais == "ch"){echo "selected";} ?>>China</option>
		</select>
		
		<p>
		Seleccione nivel: <br>
		<input type="radio" name="nivel" value="principiante" <?php if($nivel == "principiante") {echo "checked";} ?>> Principiante
		<input type="radio" name="nivel" value="intermedio" <?php if($nivel == "intermedio") {echo "checked";} ?>> Intermedio
		<input type="radio" name="nivel" value="avanzado" <?php if($nivel == "avanzado") {echo "checked";} ?>>Avanzado
		</p>
		<p>
		Seleccione cuantas hamburguesas va a querer: <br>
		<input type="checkbox" name="hamburguesa" value="1" <?php if($hamburguesas == "1") {echo "checked";} ?>> 1 Hamburguesa. <br>
		<input type="checkbox" name="hamburguesa" value="2" <?php if($hamburguesas == "2") {echo "checked";} ?>> 2 Hamburguesas. <br>
		<input type="checkbox" name="hamburguesa" value="3" <?php if($hamburguesas == "3") {echo "checked";} ?>> 3 Hamburguesas.<br>
		<input type="checkbox" name="hamburguesa" value="4" <?php if($hamburguesas == "4") {echo "checked";} ?>> 4 Hamburguesas. <br>
		<input type="checkbox" name="hamburguesa" value="5" <?php if($hamburguesas == "5") {echo "checked";} ?>> 5 Hamburguesas.
		</p>

		<p><input type="submit" value="enviar datos"></p> 
	</form>
</body>
</html>