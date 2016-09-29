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
	background-color: #CCC;
	color: #CCC;
}
.xvxc {
	color: #000;
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
.aw {
	color: #444;
	font-size: xx-large;
}
.sd {
	color: #3CF;
	font-family: "AR BERKLEY";
}
.s {
	color: #09F;
	font-family: "AR BERKLEY";
}
.ss {
	font-family: "AR BERKLEY";
	color: #444;
}
</style>
</head>

<body>
<div style="color: #09F; font-size: 36px; font-weight: bold; font-family: 'Agency FB';">
<center>
  <form name="form1" method="post" action="">
  <DIV  STYLE="position: absolute; top: 66px; left: 1088px; width: 69px; height: 33px;visibility:visible z-index:1"> <a href="inicio_registro2.php"><img src="registro.png"
                id="imgreg"
                onmouseover="imgreg.src='registro1.png'"
                onmouseout="imgreg.src='registro.png';"/></a>
                </div>
  <DIV  STYLE="position: absolute; top: 66px; left: 965px; width: 69px; height: 33px;visibility:visible z-index:1"> <a href="tf2.html"><img src="login.png"
                id="imglog"
                onmouseover="imglog.src='login1.png'"
                onmouseout="imglog.src='login.png';"/></a>
                </div>
  <DIV  STYLE="position: absolute; top: 39px; left: 705px; width: 69px; height: 33px;visibility:visible z-index:1"> <a href="tf.html"><img src="productos.png"
                id="imgpro"
                onmouseover="imgpro.src='productos1.png'"
                onmouseout="imgpro.src='productos.png';"/></a>
                </div>
  <DIV  STYLE="position: absolute; top: 40px; left: 523px; width: 69px; height: 33px;visibility:visible z-index:1"> <a href="tf.html"><img src="nosotros.png"
                id="imgno"
                onmouseover="imgno.src='nosotros1.png'"
                onmouseout="imgno.src='nosotros.png';"/></a>
    </div>
  <DIV  STYLE="position: absolute; top: 40px; left: 369px; width: 69px; height: 33px;visibility:visible z-index:1"> <a href="tf.html"><img src="blog.png"
                id="img"
                onmouseover="img.src='blog1.png'"
                onmouseout="img.src='blog.png';"/></a>
    </div>
                
   <DIV  STYLE="position: absolute; top: 42px; left: 206px; width: 82px; height: 26px;visibility:visible z-index:1"> <a href="tf.html"><img src="ofertas.png"
                id="imgen"
                onmouseover="imgen.src='ofertas1.png'"
                onmouseout="imgen.src='ofertas.png';"/></a>
                </div>
  <DIV STYLE="position: absolute; top: 15px; left: 949px; width: 242px; height: 40px;visibility:visible z-index:1"> 
           <img src="bus.png" width="216" height="38" />
         </div>
         
    </span><span class="xvxc">
 <DIV STYLE="position: absolute; top: 23px; left: 950px; width: 202px; height: 38px;visibility:visible z-index:1">
   <input name="BUSCAR" type="text" value="" />
   </div>
        <h2>
    <span class="xvxc">
 <td colspan="6" bgcolor="#0099FF">
       <div style="color: blue;">
         <h2><span class="xvxc">
           <DIV STYLE="position: absolute; top: 19px; left: 1136px; width: 36px; height: 36px;visibility:visible z-index:1"> 
             <input type=image src="icon.png">
        </div>
         </h2>
       </div>
       <label>
         <?php 
if (isset($_GET['Id_producto'])){
    echo '<p>Producto:'.$_GET['Id_producto'].'</p>';
}
?>
         <span class="aw"><br />
         <p>PARA COMPRAR NECESITAS REGISTRARTE          
         <p>O INICIAR SESION<br />
           </label>
        <DIV STYLE="position: absolute; top: 17px; left: 23px; width: 160px; height: 54px; visibility:visible z-index:1; font-size: larger; font-family: 'AR BERKLEY';"> <a href="fut_in.php"><img src="logobon.png" alt="logo" width="162" height="59" /></a>
          </div>
         <DIV STYLE="position: absolute; top: 63px; left: 1051px; width: 21px; height: 33px; visibility:visible z-index:1; font-size: larger; font-family: 'AR BERKLEY';">
         <img src="barralog.png" alt="bar" width="13" height="31" />
         </div>
         </p>
         <p>&nbsp; </p>
      <p>&nbsp;</p>
    

 </form>
 </center>



    
 </h2>
</div>
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
      <td><p>&nbsp;</p></td>
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
            <td bgcolor="#999999" class="asd">&nbsp;</td>
            <td bgcolor="#999999">&nbsp;</td>
          </tr>
          <tr>
            <td height="123" colspan="2" bgcolor="#D6D6D6"><span class="zsdf"><center>
              <a href="inicio_registro2.php"><img src="../Ramon/comprar.jpg" width="151" height="71" /></a>
            </center></span></td>
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
     
    
</p>
<p>&nbsp;</p>
</body>


</html>
