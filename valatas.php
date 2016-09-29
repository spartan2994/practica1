<?php include ('con_db.php');?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
body form {
	color: #FFF;
}
body form {
	font-weight: bold;
}
body {
	background-image: url(fondo1.jpg);
}
</style>
</head>

<body>
<form  method="post" action="">
Ingresa la cantidad:
<br>

<input type="text" name="num16" />
<br>
Nombre:
<br>
<input type="text" name="num17" />
<br>
Apellidos:
<br>
<input type="text" name="num18" />
<br>
Direccion:
<br>
<input type="text" name="num19" />
<br>
Telefono:
<br>
<input type="text" name="num20" />
<br>
Tipo de tarjeta:
<br>
<input type="text" name="num21" />
<br>
Numero de tarjeta (16 digitos):
<br>
<input type="text" name="num22" />
<br>
Numero de seguridad (ultimos 3 digitos):
<br>
<input type="text" name="num23" />
<br>

<br>
<input type=submit value="mandar pedido">
<a href="busq.php">REGRESAR</a>


</form>

</tr>
    <tr>
      
      
    </tr>
    
	<?php
	
	
	    
		
	   
			
		
	    $consulta=@mysql_query("INSERT INTO `login`.`pedido_valatas` (`precio_totalv`, `Nombre_usv`, `Apellidos_usv`, `Direccion_usv`, `Telefono_usv`, `Tipo_tarjetav`, `Numero_tarjetav`, `Numero_seguridadv`) VALUES ('".$_REQUEST['num16']."'*320, '".$_REQUEST['num17']."', '".$_REQUEST['num18']."', '".$_REQUEST['num19']."', '".$_REQUEST['num20']."', '".$_REQUEST['num21']."', '".$_REQUEST['num22']."', '".$_REQUEST['num23']."')");
		
		
			
	
		
		
		
		
		
		
		
		
	
	
?>
	<img src="11253778_830996500310423_1687650049_n.jpg" width="112" height="41" />
</body>
</html>
