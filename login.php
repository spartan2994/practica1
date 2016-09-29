
<?php

$Usuario = $_POST['id_usuario'];
$Password = $_POST['password'];

function Conectarse()
{
	if (!($link = @mysql_connect("localhost","root","root")))
	{
		echo "Error conectando a la base de datos.";
		exit();
	}
	if (! @mysql_select_db("red_social",$link))
	{
		echo "Error seleccionando la base de datos.";
		exit();
	}
	return $link;
}
$con= Conectarse();
$query = "SELECT * FROM usuario WHERE id_usuario ='".$Usuario."' AND password ='".$Password."'";
$query1 = "SELECT nombre_usuario FROM usuario WHERE id_usuario ='".$Usuario."' AND password ='".$Password."'";
$q1 = @mysql_query($query1,$con);
$q = @mysql_query($query,$con);
try{
	if( @mysql_result($q,0))
	{
		$result = @mysql_result($q,0);
		$result1 = @mysql_result($q1,0);
				echo "BIENVENIDO ";
				echo "".$result1.                "              ";
		
	}else{
		require("errorbien.php");
		
		
		
	}
}catch(Exception $error){}
@mysql_close($con)
?>
