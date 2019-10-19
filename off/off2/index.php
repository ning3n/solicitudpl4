<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<?php include("arriba.php"); echo '<script language="javascript">alert("Pregrado y Postgrado se debe generar en planillas diferentes!");</script>'; ?>
<center><form action=log.php method=post>
Usuario<input type=text name=usuario>
Contraseña<input type=password name=clave>
<input type=submit value=entrar>
</form>
<h3>Si aun no tienes usuario registrate <a href=new_user.php>aqui</a></h3>
<h5>¿Perdiste tu contraseña? recuperala <a href=recupera_pass.php>aqui</a></h5>
</center>
<?php include("abajo.php"); ?>
