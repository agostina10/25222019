<?php
	
	require 'conexion.php';
	
	$marca = $_POST['marca'];
	$modelo=$_POST['modelo'];
	$patente=$_POST['patente'];
	$kilometraje=$_POST['kilometraje'];
	
	
	
	$sql = "INSERT INTO auto (marca, modelo, patente, kilometraje) VALUES ('$nombre','$modelo', '$patente', '$kilometraje')";
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