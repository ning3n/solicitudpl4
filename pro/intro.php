<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<script>
function activar1(obj){
  if(obj.value=='Si')
         document.getElementById("v1").disabled=false;
  else
         document.getElementById("v1").disabled=true;
	 
}
function activar2(obj){
  if(obj.value=='Si')
         document.getElementById("v2").disabled=false;
  else
         document.getElementById("v2").disabled=true;
}
function activar3(obj){
  if(obj.value=='Si')
         document.getElementById("v3").disabled=false;
  else
         document.getElementById("v3").disabled=true;
}
function activar4(obj){
  if(obj.value=='Si')
         document.getElementById("v4").disabled=false;
  else
         document.getElementById("v4").disabled=true;
}
function activar5(obj){
  if(obj.value=='Si')
         document.getElementById("v5").disabled=false;
  else
         document.getElementById("v5").disabled=true;
}

</script>
<?php include("arriba1.php");

if (empty($_POST['user_id'])) {

echo '<script language="javascript">alert("No se Puede actualizar la pagina! sera redireccionado .");</script>';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=index.php">';


}
$user_id=$_POST['user_id']; 
$saldo=$_POST['saldo']; 
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$variable=$_POST['variable'];
$tramite1=$_POST['tramite'];
$topic=$_POST['topic'];
      

$normal=1;
$habiltar1=2;
$habiltar2=3;




if ($tramite1==$normal)
{ $titulo="Legalizadas (fuera del pais)";
$legolas="L";
 }
if ($tramite1==$habiltar1)
{ $titulo="No Legalizadas (uso nacional)"; 
$legolas="N";
}



if ($variable==$normal)
{ $tramite="Normal"; }
if ($variable==$habiltar1)
{ $tramite="Habilitado a 60 dias"; }
if ($variable==$habiltar2)
{ $tramite="Habilitado a 120 dias"; }
?>

<form name ="Hola" action=calculador.php method=post>
Su saldo es: <?php echo $saldo; ?> BsF
 Tipo de Tramite: <?php echo $tramite;?>
<table>
<tr><th colspan=3>Seleccione SI o NO y Cantidad de PROGRAMAS</th></tr>

<tr>
</table>
<table border=1>
<tr>
<th><?php echo $titulo;?></th>
<th>Cant.</th>
<!--onclick="document.Hola.v1.disabled = false;"-->
</tr>
<tr>

<td><select name=otros onChange="activar5(this);" required>
<option value="No">No</option>
<option value="Si">Si</option>

</select>

Programas</td><td><select name=v5<?php echo $legolas;?> id="v5" required disabled><option></option><option>1</option></select></td>

</tr>
</table>
<table>
<tr>
<td>

<input type=hidden name=user_id value="<?php echo $user_id; ?>">
<input type=hidden name=usuario value=<?php echo $usuario; ?>>
<input type=hidden name=clave value=<?php echo $clave; ?>>
<input type=hidden name=saldo value="<?php echo $saldo; ?>">
<input type=hidden name=variable value="<?php echo $variable; ?>">
<input type=hidden name=tramite1 value="<?php echo $tramite1; ?>">









<input type=submit name=generar value="Continuar"></td>
</tr>

</table>
</form>

<center>
<h5>Debe seleccionar SI para poder elegir una cantidad</h5>
</center>
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


<?php



 include("abajo.php"); ?>
<!--<input type="radio" name="equipos" onclick="onclick="document.nombreForm.idSelect.disabled = false; document.nombreForm.idInputTexto.disabled = true; idSelect.disabled = !this.checked; idInputTexto.disabled = this.checked;"/>-->


