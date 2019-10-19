<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script>
	function validar()
	{
        var nombre=document.forms.MiFormulario.dep;
       
 
        if(nombre.value.length<8)
        {
            // Faltan digitos
	    alert('FAVOR SUMINISTRAR LOS ULTIMOS 8 u 11 DIGITOS');
	    nombre.focus();
            nombre.style.borderColor="#ff0000";
            var nombreOk=false;
            
        }else{
	    
            var nombreOk=true;
            // codigo completo
            
        }
 
        
        // Si el codigo es correcto...
        if(nombreOk)
            return true;
 
        // Si devuelve false, no permite que se envie el formulario
        return false;
	}
	</script>
</head>

<?php include("arriba.php"); ?>


<form id="forma" method="post" action="exitov.php" onsubmit="return validar();" name="MiFormulario">
<center>
<?php
if (empty($_POST['user_id'])) {

echo '<script language="javascript">alert("No se Puede actualizar la pagina! sera redireccionado .");</script>';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=index.php">';

}

$user_id=$_POST['user_id'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

   
?>
<table>
<tr>
<td colspan=2><p bgcolor=red>FAVOR SUMINISTRAR LOS ULTIMOS 11 DIGITOS Y VERIFICAR QUE EL MONTO CORREPONDA A LO DEPOSITADO</p></td>
</tr>
<tr>
<td>Suministre el numero de deposito, referencia o confirmacion segun sea el caso</td>
<td><input type=text name="dep" size="11" maxlength="11" required onsubmit=validar();></td>
</tr>

<tr>
<td>Ingrese fecha correspondiente al pago <select name=dd>
<option>DD</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select>
<select name=mm>
<option>MM</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>
<input type=text name=ao required onsubmit=validar(); size=4 value="AAAA"></td>
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
