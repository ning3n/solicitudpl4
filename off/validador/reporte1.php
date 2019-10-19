<?php include("arriba.php"); ?>


<?php
$cod=$_POST['chequeo'];
$c1=0;
$c2=0;
$c3=0;
$dos=2;


$conect1 = mysql_connect("localhost","recodo","") or die ("problemas EN la conexion");
mysql_select_db("ocgre_depositos",$conect1) or die ("problemas en la seleccion EN la base de datos");
$resulta2=mysql_query ("SELECT * FROM data",$conect1)or die ("El usuario es incorrecto o no existe");
while ($row = mysql_fetch_array ($resulta2)) {

	$c1= $c1+1;
	

}

$conecta = mysql_connect("localhost","recodo","") or die ("problemas EN la conexion");
mysql_select_db("ocgre_depositos",$conecta) or die ("problemas en la seleccion EN la base de datos");
$resulta2=mysql_query ("SELECT * FROM data where SN='$dos'",$conecta)or die ("El usuario es incorrecto o no existe");
while ($row = mysql_fetch_array ($resulta2)) {

	$c2= $c2+1;
	

}
$conecto = mysql_connect("localhost","recodo","") or die ("problemas EN la conexion");
mysql_select_db("ocgre_depositos",$conecto) or die ("problemas en la seleccion EN la base de datos");
$resulta2=mysql_query ("SELECT * FROM validado",$conecta)or die ("El usuario es incorrecto o no existe");
while ($row = mysql_fetch_array ($resulta2)) {

	$c3= $c3+1;
	

}
echo "<center>";
echo "<table border=1>";
echo "<tr>";
echo "<td colspan=4>";
echo "<center>";
echo "<h1>PLANILLAS</h1>";
echo "</center>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<h2> <center> Generadas </center> </h2>";
echo "</td>";
echo "<td>";
echo "<h2> <center> Anuladas </center> </h2>";
echo "</td>";
echo "<td>";
echo "<h2> <center> Validadas </center> </h2>";
echo "</td>";
echo "<td>";
echo "<h2> <center> Por validar </center> </h2>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<h2> <center>", $c1, "</center></h2>";
echo "</td>";
echo "<td>";
echo "<h2> <center>", $c2, "</center></h2>";
echo "</td>";
echo "<td>";
$R=$c1-$c2;
$R2=$R-$c3;
echo "<h2> <center>", $c3, "</center></h2>";
echo "</td>";
echo "<td>";
echo "<h2> <center>", $R2, "</center></h2>";
echo "</td>";
echo "</tr>";



echo "</table>";
echo "</center>";
?>





<?php include("abajo.php"); ?>
