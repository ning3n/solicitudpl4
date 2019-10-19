<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<?php include("arriba.php"); ?>
<?php

if (empty($_POST['user_id'])) {

echo '<script language="javascript">alert("No se Puede actualizar la pagina! sera redireccionado .");</script>';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=index.php">';


}

$validar=$_POST['dep'];
$user_id=$_POST['user_id'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

 

$conect = mysql_connect("localhost","root","secretariaD4i123") or die ("problemas EN la conexion");
mysql_select_db("ocgre_depositos",$conect) or die ("problemas EN la seleccion EN la base de datos");
$result2a=mysql_query ("SELECT * FROM general WHERE referencia LIKE '%$validar' ORDER BY id ASC",$conect)or die ("EL Numero de deposito o referencia no se encuentra");
if ($row2a = mysql_fetch_array ($result2a)) {

 $id= $row2a['id'] ;
 $referencia= $row2a['referencia'] ;
 $monto2= $row2a['monto'] ;
 $fecha= $row2a['fecha'] ;
 $total1= "1" ;



$conecta = mysql_connect("localhost","root","secretariaD4i123") or die ("problemas en la conexion");
mysql_select_db("ocgre_depositos",$conecta) or die ("problemas en la seleccion en la base de datos");
$busca = mysql_query("INSERT INTO validador_dep (user_id,ref,monto,fecha,total) VALUES ('$user_id','$referencia','$monto2','$fecha','$total1')", $conecta); 

                       



$conectae = mysql_connect("localhost","root","secretariaD4i123") or die ("problemas en la conexion");
mysql_select_db("ocgre_depositos",$conecta) or die ("problemas en la seleccion en la base de datos");

mysql_query("DELETE FROM general WHERE id='$id'",$conectae);






?>
<h1>Deposito cargado con exito</h1>
<table>
<tr>
<td>Referencia</td>
<td>Monto</td>
</tr>
<tr>
<td><?php echo $referencia?></td>
<td><?php echo $monto2?></td>
</tr>
</table>
<!--<h2>Desea registrar otro?</h2>-->
<table>
<!---<tr><td>
<form action=validador.php method=post>
<input type=hidden name=user_id value=<?php echo $user_id; ?>>
<input type=hidden name=usuario value=<?php echo $usuario; ?>>
<input type=hidden name=clave value=<?php echo $clave; ?>>
<input type=submit value=SI>
</form></td><td>
<form action=index_pla.php method=post>
<input type=hidden name=user_id value=<?php echo $user_id; ?>>
<input type=hidden name=usuario value=<?php echo $usuario; ?>>
<input type=hidden name=clave value=<?php echo $clave; ?>>
<input type=submit value=NO>
</form>
</td></tr>--->
<tr>
<form action=log2.php method=post>
<input type=hidden name=user_id value=<?php echo $user_id; ?>>
<input type=hidden name=usuario value=<?php echo $usuario; ?>>
<input type=hidden name=clave value=<?php echo $clave; ?>>
<input type=submit value=Continuar>
</form>
</td></tr>

</table>

<?php
}else{
?>

<h1>Número de depósito no existe en nuestra base de datos,
verifique:
1.- Si registró correctamente ULTIMOS  ONCE (11) dígitos del numero de
planilla, confirmación o referencia.
2.- Si ya han transcurrido 48 horas después de realizado el pago.
</h1>
<form action=log.php method=post>
<input type=hidden name=user_id value=<?php echo $user_id; ?>>
<input type=hidden name=usuario value=<?php echo $usuario; ?>>
<input type=hidden name=clave value=<?php echo $clave; ?>>
<center><input type=submit value=Continuar></center>
</form>

<!---<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=index.php">--->

<?php
}
?>
<?php include("abajo.php"); ?>
