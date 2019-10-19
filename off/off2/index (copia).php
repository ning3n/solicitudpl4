<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<?php include("arriba1.php"); ?>
<?php 
$comparador1=1;
$comparador2=2;

$variable=$_POST['variable'];	



if ($variable==$comparador2)
{
?>

<center>
<table border=1>
<tr><th colspan=3>Seleccione Tiempo del tramite:<p STYLE="font-size:10">Recuerda que estos tramites son para uso nacional</p></th></tr>
<tr><td><center><form action=intro1.php method=post><input type=submit value="Normal (90 dias)"></center><input type=hidden name=variable value="<?php $variable=1; echo $variable; ?>"></form>
</td><td><center><form action=intro1.php method=post><input type=submit value="Habilitado a 30 dias"></center><input type=hidden name=variable value="<?php $variable=2; echo $variable; ?>"></form>
</td>
<td><center><form action=intro1.php method=post><input type=submit value="Habilitado a 60 dias"></center><input type=hidden name=variable value="<?php $variable=2; echo $variable; ?>"></form>
</td>
</tr>


</table>
</center>

<?php
}


if ($variable==$comparador1)
{
?>

<center>
<table border=1>
<tr><th colspan=3>Seleccione Tiempo del tramite:<p STYLE="font-size:10">Recuerda que estos tramites son con firma del Rector (para uso fuera del pais)</p></th></tr>
<tr><td><center><form action=intro1.php method=post><input type=submit value="Normal (90 dias)"></center><input type=hidden name=variable value="<?php $variable=1; echo $variable; ?>"></form>
</td><td><center><form action=intro1.php method=post><input type=submit value="Habilitado a 30 dias"></center><input type=hidden name=variable value="<?php $variable=2; echo $variable; ?>"></form>
</td>
<td><center><form action=intro1.php method=post><input type=submit value="Habilitado a 60 dias"></center><input type=hidden name=variable value="<?php $variable=2; echo $variable; ?>"></form>
</td>
</tr>


</table>
</center>

<?php
}


?>
<?php include("abajo.php"); ?>


