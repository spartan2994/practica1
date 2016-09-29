
<?php include ('con_db.php');?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificacion de poducto</title>
<style type="text/css">

table{
	
	font-family:Aharoni;
	font-size:15px;
	
	
	border-radius:10px
	
	}
input[type=text]{
	margin:2 2 2em 2 ;
	width:230px;
	height:30px;
	border:20px ;
	padding:1	em;
	border-radius:10px
	
	;}
input[type=submit] , form2{
	padding:1em;
	background: white;
	border:none;
	color:black;
	font-family:Aharoni;
	font-size:10px;
    border-radius:20px;
	text-decoration:none;
	
	
	}
	input[type=submit]:hover, form2:hover{
	background: #cedbe9; /* Old browsers */
background: -moz-linear-gradient(45deg, #cedbe9 0%, #aac5de 17%, #6199c7 50%, #3a84c3 51%, #419ad6 59%, #4bb8f0 71%, #3a8bc2 84%, #26558b 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#cedbe9), color-stop(17%,#aac5de), color-stop(50%,#6199c7), color-stop(51%,#3a84c3), color-stop(59%,#419ad6), color-stop(71%,#4bb8f0), color-stop(84%,#3a8bc2), color-stop(100%,#26558b)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* IE10+ */
background: linear-gradient(45deg, #cedbe9 0%,#aac5de 17%,#6199c7 50%,#3a84c3 51%,#419ad6 59%,#4bb8f0 71%,#3a8bc2 84%,#26558b 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cedbe9', endColorstr='#26558b',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
		cursor:pointer;
		}
	</style>
<link rel="stylesheet" href="estiloss1.css">
      <link rel="stylesheet" href="https://necolas.github.io/normalize.css/3.0.2/normalize.css">
      <script src="http://code.jquery.com/jquery-latest.js"></script>
	 <link rel="stylesheet" href="http://i.icomoon.io/public/temp/779b280454/UntitledProject/style.css">
</head>

<body>

<link rel="stylesheet" href="estilos3.css">
		<link rel="stylesheet" href="fonts.css">
<header>
    <nav>
     <ul class="menu">
 <li><a href="http://bogoduba.webcindario.com/producto.php">BoGoDuBa</a></li>
         
       <li><a href="http://bogoduba.webcindario.com/clientes.php">CLIENTES</a></li>
       <li><a href="http://bogoduba.webcindario.com/registro.php">MODIFICAR CLIENTES</a></li>
         
         <li><a href="http://bogoduba.webcindario.com/producto.php">PRODUCTOS</a></li>
         <li><a href="http://bogoduba.webcindario.com/modificacion_p.php">MODIFICAR  PRODUCTO</a></li>
         <li><a href="http://bogoduba.webcindario.com/venta_1.php">REGISTRO DE VENTAS</a></li>
         <li><a href="http://bogoduba.webcindario.com/vent.php">VENTAS</a></li>
         <li><a href="http://bogoduba.webcindario.com">CERRAR SESION</a></li>
     </ul>
     <div class="search_bar">
      
       <form name="form2" method="post" action="">
       <input name= "BUSCAR" type="text" id="bar" placeholder="Buscar cliente...">
       </form>
     </div>
    </nav>
</header>
<div class="main">
	     <div class="slides">
		 <img src="img/3333.jpeg" alt="">
         <img src="img/3232.jpeg" alt="">
		 <img src="img/3131.jpeg" alt="">
         <img src="img/3636.jpg" alt="">
	     
		 
		 </div>
	 	  
</div>
<p>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="jquery.slides.js"></script>
  <script>
	 $(function(){
  $(".slides").slidesjs({
    play: {
      
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 3000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 5000,
        // [number] restart delay on inactive slideshow
    }
  });
});
	 
	   </script></p>
<p>
  <script src="barra.js"></script>
      
</div>
<p>&nbsp;
   
</p>
<p><span class="main">
           
    
<?php 		
			 
			 
			 if (isset($_POST['btn1'])){
				
			 $btn2=$_POST['btn1'];
			 
			 
			 
			 	 if ($btn2=="actualizar");{
					 
					 $cod_p=$_POST['codigo_jug'];
					  
			 $cod_g=$_POST['jugador'];
			 $d_g=$_POST['posicion'];
			 $min=$_POST['fecha'];
			 $idj=$_POST['codigo'];
			 $idj1=$_POST['codigo1'];
			 $idj2=$_POST['codigo2'];
			 
			  $consulta2=@mysql_query("UPDATE `clientes` SET `nombre_cliente`='$cod_g',`ap_pat_cliente`='$d_g',`ap_mat_cliente`='$min',`direccion_cliente`='$idj',`telefono_cliente`='$idj1',`correo_cliente`='$idj2' WHERE id_cliente='$cod_p'");
			 
			 
			 

 


 @mysql_close($link);
 echo('Se actualizaron datos del cliente');


 }	
 

  }
    
  
	
 
  ?>

<?php 						 
					
					
				  if (isset($_POST['btn2'])){
			 $btn3=$_POST['btn2'];
			 
			 
			 
			 	 if ($btn3=="registrar");{
				$nomb5=$_POST['codigo_jug'];
			 $fech5=$_POST['jugador'];
			 $pos5=$_POST['posicion'];
			 $codigo_e5=$_POST['fecha'];
			 $codigo_ju5=$_POST['codigo'];
			 $codigo1_ju5=$_POST['codigo1'];
			 $codigo2_ju5=$_POST['codigo2'];
			
			 
			 $consulta3=@mysql_query("INSERT INTO `bogoduba`.`clientes`(`id_cliente`, `nombre_cliente`, `ap_pat_cliente`, `ap_mat_cliente`, `direccion_cliente`, `telefono_cliente`, `correo_cliente`) VALUES ('$nomb5','$fech5','$pos5','$codigo_e5','$codigo_ju5','$codigo1_ju5','$codigo2_ju5')");
			
			 @mysql_close($link);
			 echo'CLIENTE REGISTRADO';
			 
			  
			 
			  }	}
			  

			  ?>
              <?php 						 
					
					
				  if (isset($_POST['btn4'])){
			 $btn4=$_POST['btn4'];
			 
			 
			 
			 	 if ($btn4=="eliminar");{
					$nomb4=$_POST['codigo_jug'];
			 $consulta4=@mysql_query("DELETE  FROM `clientes` WHERE id_cliente='$nomb4'");
			 @mysql_close($link);
			 echo'CLIENTE ELIMINADO';
			  
			 
			  }	}
			  

			  ?>
              
                        
		  <?php
 
	$nombre="";
	$fecha_nac="";
		$posicion="";
		$codigo="";
		$codigo_j="";
		$imagen="";
		$id="";
		
	
	    
		if (isset($_POST['BUSCAR'])){
			
	    $consulta=@mysql_query("select * from clientes where nombre_cliente like '%".$_POST['BUSCAR']. "%' or ap_pat_cliente like '%".$_POST['BUSCAR']. "%'");
		
		
	

		  while($filas=@mysql_fetch_array($consulta)){
			   
	    
		$nombre=$filas['id_cliente'];
		$fecha_nac=$filas['nombre_cliente'];
		$posicion=$filas['ap_pat_cliente'];
		$codigo=$filas['ap_mat_cliente'];
		$codigo_j=$filas['direccion_cliente'];
		$codigo_j1=$filas['telefono_cliente'];
		$codigo_j2=$filas['correo_cliente'];
		
		}}
		@mysql_close($link);
		 ?>
<div  style="position: absolute; top: 97px; left: 10px; width: 338px; height: 69px;visibility:visible z-index:1">
<form name="form2" method="post" action="">
  </span>
         </th>
           </p>
<table width="240" border="0">
<tr>
      <td height="42" bgcolor="#DDDDDD">&nbsp;</td>
      <td>
    </tr>
   
    <tr>
      <td width="69" height="43" bgcolor="#DDDDDD">ID_cliente</td>
      <td width="726"><input type="text" name="codigo_jug" id="cod_jug" value="<?php echo $nombre ?>"  /></td>
    </tr>
    <tr>
      <td height="42" bgcolor="#DDDDDD">Nombre</td>
      <td><input type="text" name="jugador" id="jug" value="<?php echo $fecha_nac ?>" placeholder=""/></td>
    </tr>
    <tr>
      <td height="42" bgcolor="#DDDDDD">Apellidos</td>
      <td><input type="text" name="posicion" id="pos" value="<?php echo $posicion?>"  placeholder=""/></td>
    </tr>
    <tr>
      <td height="39" bgcolor="#DDDDDD"></td>
      <td><input type="text" name="fecha" id="fech" value="<?php echo $codigo ?>"  placeholder=" "/> </td>
    </tr>
    <tr>
      <td height="41" bgcolor="#DDDDDD">Direccion</td>
      <td><input type="text" name="codigo" id="cod" value="<?php echo $codigo_j ?>" placeholder="    " /></td>
    </tr>
    <tr>
      <td height="41" bgcolor="#DDDDDD">Telefono</td>
      <td><input type="text" name="codigo1" id="cod" value="<?php echo $codigo_j1 ?>" placeholder="    " /></td>
    </tr>
<tr>
      <td height="41" bgcolor="#DDDDDD">Correo</td>
      <td><input type="text" name="codigo2" id="cod" value="<?php echo $codigo_j2 ?>" placeholder="    " /></td>
    </tr>

    <tr bgcolor="#DDDDDD">
      <td height="41" colspan="2"><input type="submit" name="btn1" id="regist" value="actualizar" />
        <input type="submit" name="btn2" id="regist2" value="registrar" />
        <input type="submit" name="btn4" id="regi" value="eliminar" />
        </td>
    </tr>
    <tr bgcolor="#DDDDDD">
      <td height="41" colspan="2">&nbsp;</td>
    </tr>
</table>
  
<p>.</p>
</form>

</div>
<p><br>
	  
	  
	  
	  
</p>
	<tr>
      <td>&nbsp;</td>
      <td><p>
      <center></center>
      </p>
        <p><span class="xc">
          
	
          
          
        </span><br>
        <p>        
 




<p>

      

<p>&nbsp;</p>
<p>
   
      
	
		

	
	
		  
		
			  
			  
		  
		  
		  
           
	
	

  
</body>
</html>