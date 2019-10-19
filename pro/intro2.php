<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<?php include("arriba1.php"); ?>


<?php

if (empty($_POST['user_id'])) {

echo '<script language="javascript">alert("No se Puede actualizar la pagina! sera redireccionado .");</script>';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=index.php">';


}
$user_id=$_POST['user_id'];
$tramite=$_POST['tramite'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$total=$_POST['saldo'];
$variable=$_POST['variable'];
     

?>
Su saldo es: <?php echo $total; ?> BsF
<center>
<table border=1>
<tr><th colspan=3>Seleccione:</th></tr>
<tr><td><center><form action=intro.php method=post>
<input type=hidden name=user_id value="<?php echo $user_id; ?>">
<input type=hidden name=usuario value="<?php echo $usuario; ?>">
<input type=hidden name=clave value="<?php echo $clave; ?>">
<input type=hidden name=saldo value="<?php echo $total; ?>">
<input type=hidden name=tramite value="<?php echo $tramite; ?>">

<input type=hidden name=variable value="<?php  echo $variable; ?>">
<input type=submit value="Programas y Pensum">
</center>
<input type=hidden name=topic value="<?php $topic=2; ?>">
</form>

</td><td><center><form action=intro.php method=post>
<input type=hidden name=user_id value="<?php echo $user_id; ?>">
<input type=hidden name=usuario value="<?php echo $usuario; ?>">
<input type=hidden name=clave value="<?php echo $clave; ?>">
<input type=hidden name=saldo value="<?php echo $total; ?>">
<input type=hidden name=tramite value="<?php echo $tramite; ?>">

<input type=hidden name=variable value="<?php echo $variable; ?>">
<input type=submit value="Otros documentos"></center>
<input type=hidden name=topic value="<?php $topic=1; ?>">
</form>
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


