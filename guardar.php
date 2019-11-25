<?php
	
	require 'conexion.php';
	
	$nombre = $_POST['nombre'];
	$apellido=$_POST['apellido'];
	$dni=$_POST['dni'];
	$cuil=$_POST['cuil'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$direccion=$_POST['direccion'];
	
	$establecimiento = isset($_POST['establecimiento']) ? $_POST['establecimiento'] : null;
	
	$arrayestablecimiento = null;
	
	$num_array = count($establecimiento);
	$contador = 0;
	
	if($num_array>0){
		foreach ($establecimiento as $key => $value) {
			if ($contador != $num_array-1)
			$arrayestablecimiento .= $value.' ';
			else
			$arrayestablecimiento .= $value;
			$contador++;
		}
	}
	
	$sql = "INSERT INTO cliente (nombre, apellido, dni, cuil, email, telefono,direccion,establecimiento) VALUES ('$nombre','$apellido', '$dni', '$cuil', '$email', '$telefono','$direccion', '$arrayestablecimiento')";
	$resultado = $mysqli->query($sql);
	
	
?>
 
<html>
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>