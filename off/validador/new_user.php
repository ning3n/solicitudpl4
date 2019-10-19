<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<?php include("arriba.php");

?>

<table>
<tr>
<center><form action=new_user2.php method=post>
Usuario<input type=text name=usuario required>
Password<input type=password name=clave required>
Correo<input type=email name=correo required>
<input type=submit value=INGRESAR>
</form></center>
</tr>



</table>
<br>
<center><form action=index.php method=post>
<input type=submit value=VOLVER>
</form></center>
<?php include("abajo.php"); ?>


