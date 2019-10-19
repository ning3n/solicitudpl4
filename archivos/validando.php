<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script>
	function validar()
	{
        var nombre=document.forms.MiFormulario.nombre;
       
 
        if(nombre.value.length<8)
        {
            // el nombre tiene mas de un caracter
	    alert('FAVOR SUMINISTRAR LOS ULTIMOS 8 u 11 DIGITOS');
	    nombre.focus();
            nombre.style.borderColor="#ff0000";
            var nombreOk=false;
            
        }else{
	    
            var nombreOk=true;
            // el nombre es incorrecto
            
        }
 
        
        // Si el nombre y el código son correctos...
        if(nombreOk && codigoOk)
            return true;
 
        // Si devuelve false, no permite que se envie el formulario
        return false;
	}
	</script>
</head>

<?php include("arriba1.php"); ?>


<form id="forma" method="post" action="hola.php" onsubmit="return validar();" name="MiFormulario">
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
<td><input type=text size="11" maxlength="11" required name="nombre" onsubmit=validar();></td>
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
