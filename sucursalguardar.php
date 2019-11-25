<?php
	
	require 'conexion.php';
	
	$nombresucursal = $_POST['nombresucursal'];
	$provincia=$_POST['provincia'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$codigopostal = $_POST['codigopostal'];
	
	
	
	
	$sql = "INSERT INTO sucursal (nombresucursal, provincia, direccion, telefono ,codigopostal) VALUES ('$nombre','$provincia', '$direccion', '$telefono', '$codigopostal')";
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