<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<?php include("arriba.php");

?>


<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$email=$_POST['correo'];

$conect = mysql_connect("localhost","root","secretariaD4i123") or die ("problemas EN la conexion");
mysql_select_db("ocgre_depositos",$conect) or die ("problemas EN la seleccion EN la base de datos");
$result2a=mysql_query ("INSERT into usuarios (usuario, clave, correo) values ('$usuario','$clave','$email')",$conect);


 

?>
 <h3>Registrado con exito</h3>
<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=index.php">
	
<?php include("abajo.php"); ?>


