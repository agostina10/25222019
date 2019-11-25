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
				<h3 style="text-align:center">REGISTRAR AUTOMOVIL</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="autoguardar.php" autocomplete="off">
				<div class="form-group">
					<label for="marca" class="col-sm-2 control-label">MARCA</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="marca" name="marca" placeholder="marca" required>
					</div>
				</div>

				<form class="form-horizontal" method="POST" action="autoguardar.php" autocomplete="off">
				<div class="form-group">
					<label for="modelo" class="col-sm-2 control-label">MODELO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="modelo" name="modelo" placeholder="modelo" required>
					</div>
				</div>


				<div class="form-group">
					<label for="patente" class="col-sm-2 control-label">PATENTe</label>
					<div class="col-sm-10">
						<input type="numero" class="form-control" id="patente" name="patente" placeholder="patente">
					</div>
				</div>
				<div class="form-group">
					<label for="kilometraje" class="col-sm-2 control-label">kilometraje</label>
					<div class="col-sm-10">
						<input type="numero" class="form-control" id="kilometraje" name="kilometraje" placeholder="kilometraje">
					</div>
				</div>
				
				
				
				
				
				
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>