<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<?php include("arriba1.php");
if (empty($_POST['user_id'])) {

echo '<script language="javascript">alert("No se Puede actualizar la pagina! sera redireccionado .");</script>';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=index.php">';


}
$user_id=$_POST['user_id']; 

$usuario=$_POST['usuario'];
$clave=$_POST['clave']; 
$user_id=$_POST['user_id'];
$tramite1=$_POST['tramite1'];
$resta=$_POST['resta'];

$globalesL=$_POST['globalesL'];
$aprobatoriasL=$_POST['aprobatoriasL'];
$titulosL=$_POST['titulosL'];
$actaL=$_POST['actaL'];
$otrosL=$_POST['otrosL'];
$globalesN=$_POST['globalesN'];
$aprobatoriasN=$_POST['aprobatoriasN'];
$titulosN=$_POST['titulosN'];
$actaN=$_POST['actaN'];
$otrosN=$_POST['otrosN'];
$v1=$_POST['v1'];
$v2=$_POST['v2'];
$v3=$_POST['v3'];
$v4=$_POST['v4'];
$v5=$_POST['v5'];
$v6=$_POST['v6'];
$v7=$_POST['v7'];
$v8=$_POST['v8'];
$v9=$_POST['v9'];
$v10=$_POST['v10'];






 
$variable=$_POST['variable'];
$saldo=$_POST['saldo'];
$normal=1;
$habiltar1=2;
$habiltar2=3;

if ($variable==$normal)
{ $tramite="Normal"; }
if ($variable==$habiltar1)
{ $tramite="Tramite a 60 dias"; /*Habilitado */ }
if ($variable==$habiltar2)
{ $tramite="Tramite a 120 dias"; /*Habilitado */ }
?>
<form action=planilla.php method=post>

<table>
<tr><th colspan=3>DATOS</th></tr>
<tr>
<td>V o E <select name=tipoc required><option></option><option>V</option><option>E</option></select></td>
<td colspan=2>Cedula<input type=text name=cedula required></td>
</tr>
<tr>
<td colspan=4>Fecha de Nacimiento<select name=dia required>
<option></option>
<option>dia</option>
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



<select name=mes required>
<option></option>
<option>mes</option>
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
<input type=text name=ao size=4></td>
</tr>
<tr>
<td colspan=4>Telefono <input type=text name=telefono required></td>
</tr>

<tr>
<td colspan=2>Apellidos <input type=text name=apellido required></td></tr><tr>
<td colspan=2>Nombres <input type=text name=nombre required></td>
</tr>
<tr>
<td colspan=4>Correo electr&oacute;nico <input type=text name=email required></td>
</tr>
<tr>
<td colspan=4>Fecha de Grado <select name=diag required>
<option></option>
<option>dia</option>
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
<select name=mesg required>
<option></option>
<option>mes</option>
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


<input type=text name=aog size=4 required></td>
</tr>


<tr>
<td colspan=3>Facultad o Nucleo <input type=text name=facultad required></td>
</tr>
<tr>
<td colspan=3>Escuela <input type=text name=escuela required></td>
</tr>

<tr>
<td colspan=4>Titulo o Grado Obtenido <input type=text name=titulo required></td>
</tr>

<tr>
<td>Tramite: <b><?php echo $tramite; ?></b><input type=hidden name=variable value="<?php $variable=$tramite; echo $variable; ?>">
</td>
<tr><td>
Desea Promedio de notas<select name=notas required>
<option>No</option>
<option>Si</option>

</select></td>
</tr>
<tr>
</table>

<table><!---
<tr><th colspan=3>Los aranceles tienen que ser cancelados en la cuenta corriente a nombre de la Universidad de Los Andes en el Banco Mercantil, numero 01050065631065242433 o portal de pagos Mercantil</th></tr>
<tr>
<td>Numero de deposito/referencia o de confirmacion</td>
<td><input type=text name=numerodedeposito></td>
</tr>
<tr>
<td>Nombre del depositante</td>
<td><input type=text name=nombredeposito></td>
</tr>
<tr>
<td>Monto</td>
<td><input type=text name=monto></td>
</tr>
<tr>
<td>Fecha del deposito</td>
<td><select name=fecha1>
<option>dia</option>
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
<select name=fecha2>
<option>mes</option>
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



<input type=text name=fecha3 size=4></td>
</tr>--->
<tr>
<td>

<input type=hidden name=saldo value="<?php echo $saldo; ?>">

<input type=hidden name=v1 value="<?php echo $v1; ?>">
<input type=hidden name=v2 value="<?php echo $v2; ?>">
<input type=hidden name=v3 value="<?php echo $v3; ?>">
<input type=hidden name=v4 value="<?php echo $v4; ?>">
<input type=hidden name=v5 value="<?php echo $v5; ?>">
<input type=hidden name=v6 value="<?php echo $v6; ?>">
<input type=hidden name=v7 value="<?php echo $v7; ?>">
<input type=hidden name=v8 value="<?php echo $v8; ?>">
<input type=hidden name=v9 value="<?php echo $v9; ?>">
<input type=hidden name=v10 value="<?php echo $v10; ?>">
<input type=hidden name=globalesL value="<?php echo $globalesL; ?>">
<input type=hidden name=aprobatoriasL value="<?php echo $aprobatoriasL; ?>">
<input type=hidden name=titulosL value="<?php echo $titulosL; ?>">
<input type=hidden name=actaL value="<?php echo $actaL; ?>">
<input type=hidden name=otrosL value="<?php echo $otrosL; ?>">
<input type=hidden name=globalesN value="<?php echo $globalesN; ?>">
<input type=hidden name=aprobatoriasN value="<?php echo $aprobatoriasN; ?>">
<input type=hidden name=titulosN value="<?php echo $titulosN; ?>">
<input type=hidden name=actaN value="<?php echo $actaN; ?>">
<input type=hidden name=otrosN value="<?php echo $otrosN; ?>">
<input type=hidden name=user_id value="<?php echo $user_id; ?>">
<input type=hidden name=resta value="<?php echo $resta; ?>">
<input type=hidden name=tramite1 value="<?php echo $tramite1; ?>">
<input type=submit name=generar value="Generar Solicitud"></td>
</tr>

</table>
</form>
	
<?php include("abajo.php"); ?>


