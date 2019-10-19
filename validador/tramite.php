<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<?php include("arriba.php"); ?>


<?php
$user_id=$_POST['user_id'];
$tramite=$_POST['tramite'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$saldo=0;
$tota=1;
$conect = mysql_connect("localhost","recodo","") or die ("problemas EN la conexion");
mysql_select_db("ocgre_depositos",$conect) or die ("problemas EN la seleccion EN la base de datos");
$result2a=mysql_query ("SELECT * FROM validador_dep WHERE user_id = '$user_id' and total='$tota' ORDER BY id ASC",$conect)or die ("EL Numero de deposito o referencia no se encuentra");
while ($row2a = mysql_fetch_array ($result2a)) {

 $monto_BD= $row2a['monto'];
 
$saldo=$saldo+$monto_BD;
}

$total1=round($saldo);
$total=$total1*1000;
?>
Su saldo es: <?php echo $total; ?> BsF
<center>
<table border=1>
<tr><th colspan=3>Seleccione Tipo del tramite:</th></tr>
<tr><td><center><form action=intro.php method=post>
<input type=hidden name=user_id value="<?php echo $user_id; ?>">
<input type=hidden name=usuario value=<?php echo $usuario; ?>>
<input type=hidden name=clave value=<?php echo $clave; ?>>
<input type=hidden name=saldo value="<?php echo $total; ?>">
<input type=hidden name=tramite value="<?php echo $tramite; ?>">
<input type=submit value="Normal (120 dias)"></center>
<input type=hidden name=variable value="<?php $variable=1; echo $variable; ?>"></form>

</td><td><center><form action=intro.php method=post>
<input type=hidden name=user_id value="<?php echo $user_id; ?>">
<input type=hidden name=usuario value=<?php echo $usuario; ?>>
<input type=hidden name=clave value=<?php echo $clave; ?>>
<input type=hidden name=saldo value="<?php echo $total; ?>">
<input type=hidden name=tramite value="<?php echo $tramite; ?>">
<input type=submit value="Habilitado a 90 dias"></center>
<input type=hidden name=variable value="<?php $variable=3; echo $variable; ?>"></form>
</td>
<td><center><form action=intro.php method=post>
<input type=hidden name=user_id value="<?php echo $user_id; ?>">
<input type=hidden name=usuario value=<?php echo $usuario; ?>>
<input type=hidden name=clave value=<?php echo $clave; ?>>
<input type=hidden name=saldo value="<?php echo $total; ?>">
<input type=hidden name=tramite value="<?php echo $tramite; ?>">
<input type=submit value="Habilitado a 45 dias"></center>
<input type=hidden name=variable value="<?php $variable=2; echo $variable; ?>"></form>
</td>
</tr>


</table>
</center>

<?php




?>
<center> 
<table>
<tr>
<td>
<form action=log.php method=post>
<input type=hidden name=user_id value=<?php echo $user_id; ?>>
<input type=hidden name=usuario value=<?php echo $usuario; ?>>
<input type=hidden name=clave value=<?php echo $clave; ?>>
<input type=submit value="Volver">
</form>
</td><td>
</td></tr></table>
</center>
<?php include("abajo.php"); ?>


