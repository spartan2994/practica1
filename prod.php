<?php include ('con_db.php');?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
body {
	background-image: url(fondo1.jpg);
	color: #FFF;
	font-weight: bold;
}
</style>
</head>

<body>
<form  method="post" action="">
Ingresa la cantidad:
<br>

<input type="text" name="num" />
<br>
Nombre:
<br>
<input type="text" name="num1" />
<br>
Apellidos:
<br>
<input type="text" name="num2" />
<br>
Direccion:
<br>
<input type="text" name="num3" />
<br>
Telefono:
<br>
<input type="text" name="num4" />
<br>
Tipo de tarjeta:
<br>
<input type="text" name="num5" />
<br>
Numero de tarjeta (16 digitos):
<br>
<input type="text" name="num6" />
<br>
Numero de seguridad (ultimos 3 digitos):
<br>
<input type="text" name="num7" />
<br>

<br>
<input type=submit value="mandar pedido">
<a href="busq.php">REGRESAR</a>


</form>
<tr>
  <td colspan="8">&nbsp;</td>
    </tr>
    <tr>
      
      
    </tr>
    
	<?php
	
	
	    
		
	    $consulta=@mysql_query("INSERT INTO `login`.`p
		edidos_llantas michellin` (`precio_total`, `Nombre_us`, `Apellidos_us`, `Direccion_us`, `Telefono_us`, `Tipo_tarjeta`, `Numero_tarjeta`, `Numero_seguridad`) VALUES ('".$_REQUEST['num']."'*700, '".$_REQUEST['num1']."', '".$_REQUEST['num2']."', '".$_REQUEST['num3']."', '".$_REQUEST['num4']."', '".$_REQUEST['num5']."', '".$_REQUEST['num6']."', '".$_REQUEST['num7']."')");
		
		
		
	
	
?>
	<img src="11253778_830996500310423_1687650049_n.jpg" width="112" height="41" />
</body>
</html>
