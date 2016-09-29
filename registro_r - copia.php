<?php

	$ID = $_POST['ID'];
	$PRODUCTO = $_POST['PRODUCTO'];
	$ADMIN = $_POST['ADMIN'];
	$FECHA = $_POST['FECHA'];
	$CANTIDAD = $_POST['CANTIDAD'];

	$reqlen = strlen($ID) * strlen($PRODUCTO) * strlen($ADMIN) * strlen($FECHA) * strlen($CANTIDAD);
	
	if ($reqlen >  0) {
	
		
			require("con_db.php");
			
			@mysql_query("INSERT INTO ventas VALUES('','$ID','$PRODUCTO','$ADMIN','$FECHA','$CANTIDAD')");
				$consulta=@mysql_query("select (precio * cantidad_producto) as total_venta from ventas inner join productos where id_producto_vent = id_producto and id_venta =  (select max(id_venta) from ventas)");
			
			
			
	    
		
		
	

		  while($filas=@mysql_fetch_array($consulta)){
	    $total=$filas['total_venta'];
	    
	    echo 'El monto total es de: $';
			echo $total;
		}
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
Se ha registrado correctamente la venta.
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
Por favor rellene todos los campos este no es el monto final
</body>
</html>';
	}
?>