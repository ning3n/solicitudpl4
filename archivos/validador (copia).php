<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<?php include("arriba1.php"); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<form action=exitov.php method=post>
<center>
<?php
$user_id=$_POST['user_id'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
?>
<table>
<tr>
<td colspan=2>FAVOR SUMINISTRAR LOS ULTIMOS 11 DIGITOS</td>
</tr>
<tr>
<td>Suministre el numero de deposito, referencia o confirmacion segun sea el caso</td>
<td><input type=text name=dep></td>
</tr>

<tr>
<td colspan=2><center><input type=submit value="Registrar pago"></center></td>
</tr>

</table>
</center>
<input type=hidden name=user_id value=<?php echo $user_id; ?>>
<input type=hidden name=usuario value=<?php echo $usuario; ?>>
<input type=hidden name=clave value=<?php echo $clave; ?>>
</form>

<form action=log.php method=post>
<input type=hidden name=user_id value=<?php echo $user_id; ?>>
<input type=hidden name=usuario value=<?php echo $usuario; ?>>
<input type=hidden name=clave value=<?php echo $clave; ?>>
<center><input type=submit value="Salir"></center>
</form>

<?php include("abajo.php"); ?>
