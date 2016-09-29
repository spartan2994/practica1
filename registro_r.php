<?php

	$Nombre = $_POST['Nombre'];
	$Apellidos = $_POST['Apellidos'];
	$Direccion = $_POST['Direccion'];
	$Telefono = $_POST['Telefono'];
	$Usuario = $_POST['User'];
	$Password = $_POST['Password'];
	$rpass = $_POST['rpass'];
	$reqlen = strlen($Nombre) * strlen($Apellidos) * strlen($Direccion) * strlen($Telefono) * strlen($Usuario) * strlen($Password);
	if ($reqlen > 0) {
		if($Password === $rpass) {
			require("con_db.php");
			
			@mysql_query("INSERT INTO registro VALUES('','$Nombre','$Apellidos','$Direccion','$Telefono','$Usuario','$Password')");
			@mysql_close($link);
			echo 'Se ha registrado correctamente';
		} else {
			echo 'Por favor introduzca dos contraseñas identicas';
		}
		
	} else {
		echo 'Por favor rellene todos los campos';
	}
?>