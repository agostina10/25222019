

<?php
	$mysqli = new mysqli('localhost', 'root', 'password', 'agostina');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);	
	}
?>