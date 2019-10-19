<?php include("arriba.php"); 
$user_id=$_POST['user_id']; 
$saldo=$_POST['saldo'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave']; 
$variable=$_POST['variable'];
$tramite1=$_POST['tramite1'];

$globales=$_POST['globales'];
$v2=$_POST['v1N'];
$aprobatorias=$_POST['aprobatorias'];
$v4=$_POST['v2N'];
$titulos=$_POST['titulos'];
$v6=$_POST['v3N'];
$acta=$_POST['acta'];
$v8=$_POST['v4N'];
$otros=$_POST['otros'];
$v10=$_POST['v5N'];


$v1=$_POST['v1L'];
$v3=$_POST['v2L'];
$v5=$_POST['v3L'];
$v7=$_POST['v4L'];
$v9=$_POST['v5L'];



$normal=1;
$habiltar1=2;
$habiltar2=3;

$check1="Si";
$check2="No";








if ($tramite1==$normal)
{ $titulo="Legalizadas (fuera del pais)"; 
if ($variable==$normal)
{ $tramite="Normal";

$costo1=3000;
$costo2=2500;
$costo3=2500;
$costo4=2500;
$costo5=2500;

$sumador1=$v1*$costo1;
$sumador2=$v3*$costo2;
$sumador3=$v5*$costo3;
$sumador4=$v7*$costo4;
$sumador5=$v9*$costo5;

$totalizador=$sumador1+$sumador2+$sumador3+$sumador4+$sumador5;

 }
if ($variable==$habiltar1)
{ $tramite="Habilitado a 45 dias";

$costo1=7000;
$costo2=6000;
$costo3=6000;
$costo4=6000;
$costo5=6000;

$sumador1=$v1*$costo1;
$sumador2=$v3*$costo2;
$sumador3=$v5*$costo3;
$sumador4=$v7*$costo4;
$sumador5=$v9*$costo5;

$totalizador=$sumador1+$sumador2+$sumador3+$sumador4+$sumador5;
 }
if ($variable==$habiltar2)
{ $tramite="Habilitado a 90 dias"; 

$costo1=5000;
$costo2=4000;
$costo3=4000;
$costo4=4000;
$costo5=4000;

$sumador1=$v1*$costo1;
$sumador2=$v3*$costo2;
$sumador3=$v5*$costo3;
$sumador4=$v7*$costo4;
$sumador5=$v9*$costo5;

$totalizador=$sumador1+$sumador2+$sumador3+$sumador4+$sumador5;
}
}

if ($tramite1==$habiltar1)
{ $titulo="No Legalizadas (uso nacional)"; 
if ($variable==$normal)
{ $tramite="Normal";
$costo1=2500;
$costo2=2000;
$costo3=2000;
$costo4=2000;
$costo5=2000;

$sumador1=$v2*$costo1;
$sumador2=$v4*$costo2;
$sumador3=$v6*$costo3;
$sumador4=$v8*$costo4;
$sumador5=$v10*$costo5;

$totalizador=$sumador1+$sumador2+$sumador3+$sumador4+$sumador5;

 }
if ($variable==$habiltar1)
{ $tramite="Habilitado a 45 dias";
$costo1=6000;
$costo2=5000;
$costo3=5000;
$costo4=5000;
$costo5=5000;

$sumador1=$v2*$costo1;
$sumador2=$v4*$costo2;
$sumador3=$v6*$costo3;
$sumador4=$v8*$costo4;
$sumador5=$v10*$costo5;

$totalizador=$sumador1+$sumador2+$sumador3+$sumador4+$sumador5;

 }
if ($variable==$habiltar2)
{ $tramite="Habilitado a 90 dias"; 
$costo1=4500;
$costo2=3500;
$costo3=3500;
$costo4=3500;
$costo5=3500;

$sumador1=$v2*$costo1;
$sumador2=$v4*$costo2;
$sumador3=$v6*$costo3;
$sumador4=$v8*$costo4;
$sumador5=$v10*$costo5;

$totalizador=$sumador1+$sumador2+$sumador3+$sumador4+$sumador5;

}

}
?>
<table>
<tr><td>
Su saldo es: <?php echo $saldo;  ?> BsF y su
</td><td>

Total a pagar es de: <?php echo $totalizador; ?> BsF
</td></tr>
</table>

<?php
if ($tramite1==$normal){
if ($globales==$check1){
//$v1=$v1;
$globalesL=$globales;
}
if ($aprobatorias==$check1){
//$v3=$v2;
$aprobatoriasL=$aprobatorias;
}
if ($titulos==$check1){
//$v5=$v3;
$titulosL=$titulos;
}
if ($acta==$check1){
//$v7=$v4;
$actaL=$acta;
}
if ($otros==$check1){
//$v9=$v5;
$otrosL=$otros;
}
}

if ($tramite1==$habiltar1){
if ($globales==$check1){
//$v2=$v1;
$globalesN=$globales;
}
if ($aprobatorias==$check1){
//$v4=$v2;
$aprobatoriasN=$aprobatorias;
}
if ($titulos==$check1){
//$v6=$v3;
$titulosN=$titulos;
}
if ($acta==$check1){
//$v8=$v4;
$actaN=$acta;
}
if ($otros==$check1){
//$v10=$v5;
$otrosN=$otros;
}
}



if ($tramite1==$normal){
if ($globales==$check2){
$globalesL=$globales;
}
if ($aprobatorias==$check2){
$aprobatoriasL=$aprobatorias;
}
if ($titulos==$check2){
$titulosL=$titulos;
}
if ($acta==$check2){
$actaL=$acta;
}
if ($otros==$check2){
$otrosL=$otros;
}
}

if ($tramite1==$habiltar1){
if ($globales==$check2){
$globalesN=$globales;
}
if ($aprobatorias==$check2){
$aprobatoriasN=$aprobatorias;
}
if ($titulos==$check2){
$titulosN=$titulos;
}
if ($acta==$check2){
$actaN=$acta;
}
if ($otros==$check2){
$otrosN=$otros;
}
}


////////////////////////////////////////////////////
if ($saldo>=$totalizador){


$resta=$saldo-$totalizador;
?>

<form action=datos.php method=post>
<input type=hidden name=user_id value=<?php echo $user_id; ?>>
<input type=hidden name=usuario value=<?php echo $usuario; ?>>
<input type=hidden name=clave value=<?php echo $clave; ?>>
<input type=hidden name=variable value="<?php echo $variable; ?>">
<input type=hidden name=tramite1 value="<?php echo $tramite1; ?>">
<input type=hidden name=saldo value="<?php echo $totalizador; ?>">
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
<input type=submit value="Continuar">

</form>

<?php
}else{
?>
<form action=index.php method=post>

</form>
<?php
}
?>
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








