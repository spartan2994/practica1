<html>
<head>
	<title> Formulario de Registro </title>
<style type="text/css">
.c {
	text-align: center;
}
.qwe {
	text-align: center;
}
body {
	background-image: url();
	background-repeat: repeat;
	color: #09F;
	background-color: #CCC;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<h1><center> <span class="qwe">Formulario de Registro </center></h1>
	<h3 class="qwe"> Todos los campos son requeridos </h3>
<form method="POST" action=""/>
  <table width="2428" border="1">
    <tr>
      <th bgcolor="#000000" scope="col">&nbsp;</th>
    </tr>
</table>
  <center><table width="200" border="1">
    <tr>
      <th height="41" scope="col"><img src="wey1.png" width="191" height="233" alt="sds"></th>
    </tr>
</table></center>
		<center><table>
			<tr>
			<td class="c">
			Nombre:
			</td>
			<td>
			  <span class="c">
			  <input type="name" name="Nombre"/>
			  </span></td>
			</tr>
			
			<tr>
			<td class="c">
			Apellidos:
			</td>
			<td>
			  <span class="c">
			  <input type="name" name="Apellidos"/>
			  </span></td>
			</tr>
			
			<tr>
			<td class="c">
			Direccion:
			</td>
			<td>
			  <span class="c">
			  <input type="name" name="Direccion"/>
			  </span></td>
			</tr>
			
			<tr>
			<td class="c">
			Telefono:
			</td>
			<td>
			  <span class="c">
			  <input type="name" name="Telefono"/>
			  </span></td>
			</tr>
			
			<tr>
			<td class="c">
			Usuario:
			</td>
			<td>
			  <span class="c">
			  <input type="name" name="User"/>
			  </span></td>
			</tr>
			
			<tr>
			<td class="c">
			Contrasena:
			</td>
			<td>
			  <span class="c">
			  <input type="password" name="Password"/>
			  </span></td>
			</tr>
			
			<tr>
			<td class="c">
			Repetir Contrasena:
			</td>
			<td>
			  <span class="c">
			  <input type="password" name="rpass"/>
			  </span></td>
			</tr>
		</table></center>
		<span class="c">
		<center><input type="submit" name="submit" value="Registrar"/><input type="reset"/> </center>
		
        <center><a href="tf2.html"><input type="button" value="Ir a login"</a><br></center>
		</span>
		<p class="c">&nbsp;</p>
		<p class="c">
		  </form>
          <div  style="position: absolute; top: 487px; left: 830px; width: 122px; height: 33px;visibility:visible z-index:1">
		  <?php
		if (isset($_POST['submit'])){
			require("registro_r - copia.php");
		}
	?>
    </div>
		  </p>
<p class="c">Copyright - 2000 - 2014 <span itemprop="name">www.bonival.com.mx</span>, TODOS LOS DERECHOS RESERVADOS. Las fotos contenidas en este site, el logotipo y las marcas son propiedad de <a href="http://www.netshoes.com.mx/search.ep?keyWords=nike&gclid=CJPH86qm48UCFQaLaQod25AAaQ#" title="www.netshoes.com.mx" itemprop="name">www.bonival.com.mx</a> Está prohibida la reproducción total o parcial, sin la expresa autorización del administrador de la tienda virtual</p>
</body>
</html>


