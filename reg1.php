<?php

	$Nombre = $_POST['user_c'];
	$Apellidos = $_POST['dir_c'];
	$Direccion = $_POST['num_t'];
	$Telefono = $_POST['num_s'];
	$Usuario = $_POST['num_v'];
	$Password = $_POST['tip_t'];
	$rpass = $_POST['nom_p'];
	
$reqlen = strlen($Nombre) * strlen($Apellidos) * strlen($Direccion) * strlen($Telefono) * strlen($Usuario) * strlen($Password) * strlen($rpass);
		if ($reqlen > 0) {
			require("con_db.php");
			
			@mysql_query("INSERT INTO carrito VALUES('$Nombre','$Apellidos','$Direccion','$Telefono','$Usuario','$Password', '$rpass')");
			@mysql_close($link);
			echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
.aaa {
	color: #EEE;
	
}
</style>
</head>

<body class="aaa">
Se ha registrado correctamente
</body>
</html>';
		
		
	} else {
		echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
.aaa {
	color: #EEE;
	
}
</style>
</head>

<body class="aaa">
Por favor rellene todos los campos
</body>
</html>';
	}
?>