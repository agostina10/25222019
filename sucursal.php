
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
				<h3 style="text-align:center">REGISTRAR SUCURAL</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="sucursalguardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre Sucursal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>

				<form class="form-horizontal" method="POST" action="sucursalguardar.php" autocomplete="off">
				<div class="form-group">
					<label for="provincia" class="col-sm-2 control-label">Provincia</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="provincia" name="provincia" placeholder="provincia" required>
					</div>
				</div>
				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Direccion</label>
					<div class="col-sm-10">
						<input type="numero" class="form-control" id="direccion" name="direccion" placeholder="direccion">
					</div>
				</div>

                <div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
					</div>
				</div>


                  <div class="form-group">
					<label for="codigopostal" class="col-sm-2 control-label">codigopostal</label>
					<div class="col-sm-10">
						<input type="numero" class="form-control" id="codigopostal" name="codigopostal" placeholder="codigopostal">
					</div>
				</div>
				
				<div class="form-group">
					<label for="fechapertura" class="col-sm-2 control-label">fechaapertura</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fechaapertura" name="fechaapertura" placeholder="fechaapertura" required>
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