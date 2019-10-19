<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<?php include("arriba.php"); echo '<script language="javascript">alert("Pregrado y Postgrado se debe generar en planillas diferentes!");</script>'; ?>
<?php
if (empty($_POST['usuario'])) {

echo '<script language="javascript">alert("No se Puede actualizar la pagina! sera redireccionado .");</script>';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=index.php">';


}

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];


$conect = mysql_connect("localhost","root","secretariaD4i123") or die ("problemas EN la conexion");
mysql_select_db("ocgre_depositos",$conect) or die ("problemas EN la seleccion EN la base de datos");
$result2a=mysql_query ("SELECT * FROM usuarios WHERE usuario = '$usuario' and clave = '$clave' ORDER BY id ASC",$conect)or die ("EL Numero de deposito o referencia no se encuentra");
if ($row2a = mysql_fetch_array ($result2a)) {
 $id= $row2a['id'] ;

?>

<center> 
<table>
<tr>
<td>
<form action=validador.php method=post>
<input type=hidden name=user_id value="<?php echo $id; ?>">
<input type=hidden name=usuario value="<?php echo $usuario; ?>">
<input type=hidden name=clave value="<?php echo $clave; ?>">
<input type=submit value="Registrar Pago">
</form>
</td>
<form action=pro/index_pla.php method=post>
<input type=hidden name=user_id value="<?php echo $id; ?>">
<input type=hidden name=usuario value="<?php echo $usuario; ?>">
<input type=hidden name=clave value="<?php echo $clave; ?>">
<input type=submit value="Solo Programas">
</form>
<td>
</td>
<td>
<form action=index_pla.php method=post>
<input type=hidden name=user_id value="<?php echo $id; ?>">
<input type=hidden name=usuario value="<?php echo $usuario; ?>">
<input type=hidden name=clave value="<?php echo $clave; ?>">
<input type=submit value="Diferentes Documentos">
</form>
</td>





</tr></table>
</center>

<?php
}else{
?>

<h1>Alguno de los datos estan incorrectos o no existe en nuestra base de datos.</h1>
<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=index.php">

<?php
}
?>
<center> 
<table>
<tr>
<td>
<form action=bye.php method=post>
<input type=submit value="Salir">
</form>
</td><td>
</td></tr></table>
</center>
<?php include("abajo.php"); ?>
