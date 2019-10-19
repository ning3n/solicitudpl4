<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<?php include("arriba1.php");

?>

<table>
<tr>
<center><form action=recupera_pass.php method=post>
<h3>Suministre su usuario para recuperar su contraseña</h3>
Usuario: <input type=text name=usuario required>

<input type=submit value=RECUPERAR>
</form></center>
</tr>



</table>
<?php
$user=$_POST['usuario'];


$conect = mysql_connect("localhost","root","secretariaD4i123") or die ("problemas EN la conexion");
mysql_select_db("ocgre_depositos",$conect) or die ("problemas en la seleccion EN la base de datos");
$resulta2=mysql_query ("SELECT * FROM usuarios WHERE usuario = '$user' ORDER BY id ASC",$conect)or die ("El usuario es incorrecto o no existe");
while ($row = mysql_fetch_array ($resulta2)) {
	$clave= $row['clave'];
	
}
?>
<center> <h4>Su clave es: <?php echo $clave; ?></h4></center> 
<center><form action=index.php method=post>
<input type=submit value=VOLVER>
</form></center>
<?php include("abajo.php"); ?>



