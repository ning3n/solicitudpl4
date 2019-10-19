<?php

$conect = mysql_connect("localhost","recodo","") or die ("problemas EN la conexion");
mysql_select_db("ocgre_depositos",$conect) or die ("problemas EN la seleccion EN la base de datos");
$result2a=mysql_query ("SELECT * FROM general",$conect)or die ("EL Numero de deposito o referencia no se encuentra");
while ($row1a = mysql_fetch_array ($result2a)) {

 $va1= $row1a['id'] ;
 $va3= $row1a['monto'] ;
$cos=100000;
$total=$va3/$cos;


$cambio="UPDATE general SET monto='$total' Where id='$va1' ";

$result=mysql_query($cambio,$conect);

}
  
?>
