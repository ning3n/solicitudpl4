<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<script language="javascript" type="text/javascript">
function validar(frm) {
  if (frm.emp.value.length!=8) {
    alert('FAVOR SUMINISTRAR LOS ULTIMOS 8 u 11 DIGITOS');
    frm.emp.focus();
    return false;
  }
}  
</script>
<?php include("arriba1.php"); ?>


<form id="forma" method="post" action="exitov.php" onsubmit="return validar(this)">
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
<td><input type=text name=dep size="11" maxlength="11"></td>
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
