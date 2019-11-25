
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
				<h3 style="text-align:center">REGISTRAR CLIENTE</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>

				<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="apellido" class="col-sm-2 control-label">Apellido</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
					</div>
				</div>


				<div class="form-group">
					<label for="dni" class="col-sm-2 control-label">Dni</label>
					<div class="col-sm-10">
						<input type="numero" class="form-control" id="dni" name="dni" placeholder="dni">
					</div>
				</div>
					<div class="form-group">
					<label for="cuil" class="col-sm-2 control-label">cuil</label>
					<div class="col-sm-11">
						<input type="numero" class="form-control" id="cuil" name="cuil" placeholder="cuil">
					</div>
				</div>




				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
					</div>
				</div>
				
				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Direccion</label>
					<div class="col-sm-10">
						<input type="numero" class="form-control" id="direccion" name="direccion" placeholder="direccion">
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="establecimiento" class="col-sm-2 control-label">establecimiento</label>
					
					<div class="col-sm-10">
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="escuela">escuela
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="facultad"> facultad
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="particular"> particular
						</label>
						
						
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