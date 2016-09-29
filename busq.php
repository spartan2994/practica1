<?php include ('con_db.php');?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
body {
	background-image: url();
	background-repeat: repeat;
	background-color: #FFF;
}
.xvxc {
	color: #666;
}
.xc {
	color: #999;
}
.zsdf {
	color: #FFF;
}
.asd {
	color: #FFF;
}
</style>
</head>

<body>
<div style="color: blue;">
 <form name="form1" method="post" action="">
   
     <td colspan="6"><center>
       <p><img src="logo.png" width="117" height="43" /></p>
       
           
           <DIV  STYLE="position: absolute; top: 46px; left: 765px; width: 69px; height: 33px;visibility:visible z-index:1">
               <input type="text" name="BUSCAR" />
               </DIV>
           </span> <img src="buscador.png" width="19" height="17" />
             <input type="submit" name="Ir" id="Ir" value="Ir" /></th>
         
     
  
 </form>
 <h2>&nbsp;</h2>
</div>

<label><?php 
if (isset($_GET['Id_producto'])){
    echo '<p>Producto:'.$_GET['Id_producto'].'</p>';
}
?></label></td>
      <td><label></label></td>
    </tr>
    <tr>
      <td colspan="8"></td>
    </tr>

    
	<p>
  <?php
	
	
	    
		if (isset($_POST['BUSCAR'])){
	    $consulta=@mysql_query("select * from productos where nombre like '%".$_POST['BUSCAR']."%'");
	}
	
	
    
     while($filas=@mysql_fetch_array($consulta)){
	    $Id_producto=$filas['Id_producto'];
        $Imagen=$filas['Imagen'];
        $Nombre=$filas['Nombre'];
		$Descripcion=$filas['Descripcion'];
		$Precio=$filas['Precio'];
		$Existencia=$filas['Existencia'];
		$Fecha=$filas['Fecha'];
		$Agregar=$filas['Consultar precio'];
		

?>
  <?php ?>
</p>
	<p><br>
	  
	  
	  
	  
</p>
	<tr>
      <td><table width="200" border="1">
        <tr>
          <th scope="col"><?php echo $Id_producto ?></th>
        </tr>
      </table>
      <p>&nbsp;</p></td>
      <td><p>&nbsp;</p>
        <img src="<?php echo $Imagen; ?>"width="180" height="214" />
        <table width="208" border="1">
          <tr>
            <th height="15" colspan="2" bgcolor="#999999" scope="col"><span class="zsdf"><?php echo $Nombre ?></span></th>
          </tr>
          <tr>
            <td height="9" bgcolor="#999999" class="asd">Tipo</td>
            <td bgcolor="#999999"><span class="zsdf"><?php echo $Descripcion ?></span></td>
          </tr>
          <tr>
            <td height="4" bgcolor="#999999" class="asd">Costo</td>
            <td bgcolor="#999999"><span class="zsdf"><?php echo $Precio ?></span></td>
          </tr>
          <tr>
            <td height="5" bgcolor="#999999" class="asd">Existenacia</td>
            <td bgcolor="#999999"><span class="zsdf"><?php echo $Existencia ?></span></td>
          </tr>
          <tr>
            <td bgcolor="#999999" class="asd">Modelo</td>
            <td bgcolor="#999999"><span class="zsdf"><?php echo $Fecha ?></span></td>
          </tr>
          <tr>
            <td height="123" colspan="2" bgcolor="#FFFFFF"><span class="zsdf"><?php echo $Agregar ?><img src="comprar.jpg" width="151" height="71" /></span></td>
          </tr>
        </table>
        <p><span class="xc">
          <?php }?>
        </span><br>
      </p></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
</tr>
    <p>
     
      </center>
</p>
<p>&nbsp;</p>
</body>
</html>
