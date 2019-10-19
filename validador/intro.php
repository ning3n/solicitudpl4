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
<?php include("arriba.php");
$user_id=$_POST['user_id']; 
$saldo=$_POST['saldo']; 
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$variable=$_POST['variable'];
$tramite1=$_POST['tramite'];
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
{ $tramite="Habilitado a 45 dias"; }
if ($variable==$habiltar2)
{ $tramite="Habilitado a 90 dias"; }
?>

<form name ="Hola" action=calculador.php method=post>
Su saldo es: <?php echo $saldo; ?> BsF
 Tipo de Tramite: <?php echo $tramite;?>
<table>
<tr><th colspan=3>Seleccione SI o NO y Cantidad de Documentos</th></tr>

<tr>
</table>
<table border=1>
<tr>
<th><?php echo $titulo;?></th>
<th>Cant.</th>
<!--onclick="document.Hola.v1.disabled = false;"-->
</tr>
<tr>
<td><select name=globales onChange="activar1(this);" required>
<option value="No">No</option>
<option value="Si">Si</option>

</select>
Notas Certificadas Globales</td>
<td><select name=v1<?php echo $legolas;?>  id="v1" onChange="" required disabled><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>

</tr>
<tr>



<td><select name=aprobatorias onChange="activar2(this);" required>
<option value="No">No</option>
<option value="Si">Si</option>

</select>
Notas Certificadas Aprobatorias</td>
<td><select name=v2<?php echo $legolas;?> id="v2"required disabled><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td></tr>

<tr>
<td>

<select name=titulos onChange="activar3(this);" required>
<option value="No">No</option>
<option value="Si">Si</option>

</select>
Titulos Certificados</td><td><select name=v3<?php echo $legolas;?> id="v3" required disabled><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>

</tr>
<tr>

<td><select name=acta onChange="activar4(this);" required>
<option value="No">No</option>
<option value="Si">Si</option>

</select>
Acta de Grado</td><td><select name=v4<?php echo $legolas;?> id="v4" required disabled><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>

</tr>
<tr>

<td><select name=otros onChange="activar5(this);" required>
<option value="No">No</option>
<option value="Si">Si</option>

</select>

Otros</td><td><select name=v5<?php echo $legolas;?> id="v5" required disabled><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>

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









<input type=submit name=generar value="Generar Solicitud"></td>
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
<?php include("abajo.php"); ?>
<!--<input type="radio" name="equipos" onclick="onclick="document.nombreForm.idSelect.disabled = false; document.nombreForm.idInputTexto.disabled = true; idSelect.disabled = !this.checked; idInputTexto.disabled = this.checked;"/>-->


