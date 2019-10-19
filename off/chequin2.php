<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<?php include("arriba2.php");

?>


<?php
$tc=$_POST['dia'];
$tc1=$_POST['mes'];
$tc2=$_POST['ao'];
$tn=$tc.$tc1.$tc2;
$cod=$_POST['codval'];
$referencia= $_POST['cod2'];
$saldo= $_POST['saldo'];
$conect = mysql_connect("localhost","recodo","") or die ("problemas EN la conexion");
mysql_select_db("ocgre_depositos",$conect) or die ("problemas EN la seleccion EN la base de datos");
$result2a=mysql_query ("INSERT into validado (codval, cod2, monto, fecha) values ('$cod','$referencia','$saldo','$tn')",$conect);


 

?>
 <h3>Validado con éxito</h3>
<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=valido.php">
	
<?php include("abajo.php"); ?>


