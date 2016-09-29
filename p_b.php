<?php include ('con_db.php');?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
body {
	background-image: url(fondo1.jpg);
}
body form {
	color: #FFF;
}
body form {
	font-weight: bold;
}
</style>
</head>

<body>
<form  method="post" action="">
Ingresa la cantidad:
<br>

<input type="text" name="num8" />
<br>
Nombre:
<br>
<input type="text" name="num9" />
<br>
Apellidos:
<br>
<input type="text" name="num10" />
<br>
Direccion:
<br>
<input type="text" name="num11" />
<br>
Telefono:
<br>
<input type="text" name="num12" />
<br>
Tipo de tarjeta:
<br>
<input type="text" name="num13" />
<br>
Numero de tarjeta (16 digitos):
<br>
<input type="text" name="num14" />
<br>
Numero de seguridad (ultimos 3 digitos):
<br>
<input type="text" name="num15" />
<br>

<br>
<input type=submit value="mandar pedido">
<body tracingsrc="Imagenes/bongom.jpg" tracingopacity="100">
<a href="busq.php">REGRESAR</a>
</form>

</tr>
<tr>
      
      
    </tr>
    
	<?php
	
	
	    
		
	    $consulta=@mysql_query("INSERT INTO `login`.`pedidos_bandas` (`precio_totalb`, `Nombre_usb`, `Apellidos_usb`, `Direccion_usb`, `Telefono_usb`, `Tipo_tarjetab`, `Numero_tarjetab`, `Numero_seguridadb`) VALUES ('".$_REQUEST['num8']."'*200, '".$_REQUEST['num9']."', '".$_REQUEST['num10']."', '".$_REQUEST['num11']."', '".$_REQUEST['num12']."', '".$_REQUEST['num13']."', '".$_REQUEST['num14']."', '".$_REQUEST['num15']."')");
		
		
		
	
	
?>
	<img src="11253778_830996500310423_1687650049_n.jpg" width="112" height="41" />
</body>
</html>
