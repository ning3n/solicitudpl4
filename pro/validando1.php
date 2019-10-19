<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
 
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
            // 
            
        }
 
        
        // Si el nombre y el código son correctos...
        if(nombreOk && codigoOk)
            return true;
 
        // Si devuelve false, no permite que se envie el formulario
        return false;
	}
	</script>
 
	<style>
	input[type=text] {border:1px solid #808080;}
	input[type=submit] {display:block;}
	form span {display:inline-block;width:100px;}
	</style>
</head>
 
<body>
 
 
<form action="hola.php" method="post" onsubmit="return validar();" name="MiFormulario">
    <span>Nombre:</span> <input type="text" name="nombre" onsubmit=validar();>
    <br><span>Código:</span> <input type="text" name="codigo" onkeyup=validar();> (4 caracteres)
    <input type="submit" value="Enviar">
</form>
 
 
</body>
</html>
