<?php include("arriba.php"); ?>


<?php
$cod=$_POST['chequeo'];



$conect = mysql_connect("localhost","recodo","") or die ("problemas EN la conexion");
mysql_select_db("ocgre_depositos",$conect) or die ("problemas en la seleccion EN la base de datos");
$resulta2=mysql_query ("SELECT * FROM data WHERE cod2 = '$cod' ORDER BY id ASC",$conect)or die ("El usuario es incorrecto o no existe");
while ($row = mysql_fetch_array ($resulta2)) {
	$referencia= $row['referencia'];
	$saldo= $row['saldo'];	



}
?>

el codigo de planilla es:<?php echo $referencia; ?>
y fue realizado para un monto de: <?php echo $saldo; ?>



<?php include("abajo.php"); ?>
