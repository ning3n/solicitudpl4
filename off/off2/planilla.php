<!DOCTYPE html>
<html>
<head>
<title>Planillas</title>
<?php
if (empty($_POST['user_id'])) {

echo '<script language="javascript">alert("No se Puede actualizar la pagina! sera redireccionado .");</script>';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL=index.php">';


}?>
<script>
function nobackbutton(){
   window.location.hash="no-back-button";
   window.location.hash="Again-No-back-button" 
   window.onhashchange=function(){window.location.hash="no-back-button";}
}
</script>
</head>

<body onload="nobackbutton();">
<center><table>
<tr>
<td>
<IMG SRC=LogoULA.jpg WIDTH=70 HEIGHT=80 align=left></td>
<td>
UNIVERSIDAD DE LOS ANDES
<br>SECRETARIA
<br>OCGRE
<br>M&Eacute;RIDA-VENEZUELA
</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
<table border=2  cellpadding=3 div style="border-radius: 30px;" align=center> <td style="border: hidden"> SOLICITUD DE CERTIFICACIONES </td></table>
</td>
</tr>
<tr>
<td>
</td>
<td>
</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>

<td colspan=10><?php

$user_id=$_POST['user_id']; 
$usuario=$_POST['usuario'];
$clave=$_POST['clave']; 
$diagh=$_POST['diag'];
$mesgh=$_POST['mesg'];
$aogh=$_POST['aog'];
$papara="1992";
if ($aogh<=$papara)
{
echo "<h4>Archivo</h4></td><td><h4>Historico</h4>";
} 
?></td>

<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>



<td colspan=4>
 
<?php
echo $vFE=date("d-m-y");
$user_id=$_POST['user_id']; 
$usuario=$_POST['usuario'];
$clave=$_POST['clave']; 
$diagh=$_POST['diag'];
$mesgh=$_POST['mesg'];
$aogh=$_POST['aog'];

$numerolod=rand();
$numerolod2=rand();
echo "-";
 echo $numerolod;
 ?>
</td>
</tr>
</table></center>

<?php
$cambio=2;
$inicial=1;
$cambios="U";
$user_id=$_POST['user_id'];
$resta1=$_POST['resta'];
//$resta=$resta1/1000;
$resta=$resta1;
$referencia=$cambios.$resta;
$fecha=0101;
$total1=1;

$conect = mysql_connect("localhost","root","secretariaD4i123") or die ("problemas EN la conexion");
mysql_select_db("ocgre_depositos",$conect) or die ("problemas EN la seleccion EN la base de datos");
$result2a=mysql_query ("SELECT * FROM validador_dep WHERE user_id = '$user_id' ORDER BY id ASC",$conect)or die ("EL Numero de deposito o referencia no se encuentra");
while ($row2a = mysql_fetch_array ($result2a)) {

 
$cambio="UPDATE validador_dep SET total='$cambio' Where user_id='$user_id' and total='$inicial'";

$result=mysql_query($cambio,$conect);

}
//$init="INSERT INTO validador_dep (user_id,ref,monto,fecha,total) VALUES ('$user_id','$referencia','$resta','$fecha','$total1')"; 
//$result2=mysql_query($init,$conect);






function chunk_split_unicode($str, $l = 76, $e = "\r\n") {
    $tmp = array_chunk(
        preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY), $l);
    $str = "";
    foreach ($tmp as $t) {
        $str .= join("", $t) . $e;
    }
    return $str;
}

$tramite1=$_POST['tramite1'];
$nop=1;
$sip=2;
if ($tramite1==$nop)
{ $tramiteF="Legalizadas"; }
if ($tramite1==$sip)
{ $tramiteF="No Legalizadas"; }

$saldo=$_POST['saldo'];
$tipoc=$_POST['tipoc'];
$cedula=$_POST['cedula'];
$dia=$_POST['dia'];
$mes=$_POST['mes'];
$ao=$_POST['ao'];
$telefono=$_POST['telefono'];
$apellido=$_POST['apellido'];
$nombre=$_POST['nombre'];
$diag=$_POST['diag'];
$mesg=$_POST['mesg'];
$aog=$_POST['aog'];
$facultad=$_POST['facultad'];
$escuela=$_POST['escuela'];
$titulo=$_POST['titulo'];
$notas=$_POST['notas']; 
$variable=$_POST['variable'];
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
$email=$_POST['email']; 
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
$vFE=date("d-m-y");




$check1="Si";
$check2="No";

$conecta = mysql_connect("localhost","root","secretariaD4i123") or die ("problemas EN la conexion");
mysql_select_db("ocgre_depositos",$conecta) or die ("problemas EN la seleccion EN la base de datos");
$ini="INSERT INTO data (saldo,tipoc,cedula,dia,mes,ao,telefono,apellido,nombre,diag,mesg,aog,facultad,escuela,titulo,notas,variable,globalesL,aprobatoriasL,titulosL,actaL,otrosL,globalesN,aprobatoriasN,titulosN,actaN,otrosN,email,v1,v2,v3,v4,v5,v6,v7,v8,v9,v10,user_id,resta,referencia,cod2,vefe)VALUES('$saldo','$tipoc','$cedula','$dia','$mes','$ao','$telefono','$apellido','$nombre','$diag','$mesg','$aog','$facultad','$escuela','$titulo','$notas','$variable','$globalesL','$aprobatoriasL','$titulosL','$actaL','$otrosL','$globalesN','$aprobatoriasN','$titulosN','$actaN','$otrosN','$email','$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$user_id','$resta','$numerolod2','$numerolod','$vFE')";
//(,,aprobatoriasN,)VALUES()"; 
$result=mysql_query($ini,$conecta);


/*
style="border-width: 1px;border: solid; border-color: #00FF00;"
*/
?>
<table border=2 cellpadding=3 div style="border-radius: 20px;" align=center width="960">
<tr style="border-color: #FFFFFF">
<td style="border-radius: 40px; " align=center boder=2 >1. DATOS PERSONALES</td>
<td style="border: hidden"><u><center><font size=2>|<?php echo $tipoc;?></u>|</center></td>
<td style="border: hidden"><center>
<u><font size=2>|<?php $cedula=chunk_split($cedula, 1, " | ");
echo $cedula;?></u></center></td>
<td style="border: hidden"><center><u><font size=2>|<?php echo $dia;?> | <?php echo $mes;?> | <?php echo $ao;?>|</u></center></td>



<td  style="border: hidden"><center><u><font size=2>|<?php $telefono=chunk_split($telefono, 1, " | "); 
echo $telefono;?></u></center></td>
</tr>
<tr style="border-color: #FFFFFF">
<td style="border: hidden"></td><td style="border: hidden" style="border-color: #FFFFFF"><center><font size=2>V o E</center></td>
<td style="border: hidden" style="border-color: #FFFFFF"><center><font size=2>Cedula de Identidad</center></td>
<td style="border: hidden" style="border-color: #FFFFFF"><center><font size=2>Fecha de Nacimiento</center></td>
<td style="border: hidden" style="border-color: #FFFFFF"><center><font size=2>Telefono</center></td>
</tr>
<tr style="border-color: #FFFFFF">

<td style="border: hidden" colspan=4><font size=2>Apellidos <u><font size=2><?php $apellido=chunk_split($apellido, 1, " | ");
$str=$_POST['apellido'];
$apellido=chunk_split_unicode($str, 1, " | ");
echo $apellido;?></u></td></tr>
<tr style="border-color: #FFFFFF">
<td style="border: hidden" style="border-color: #FFFFFF" colspan=3><font size=2>Nombres <u><font size=2><?php $nombre=chunk_split($nombre, 1, " | ");
$str=$_POST['nombre'];
$nombre=chunk_split_unicode($str, 1, " | ");
echo $nombre;?></u></td>
<td style="border: hidden" style="border-color: #FFFFFF" colspan=4><font size=2>Correo electr&oacute;nico: <?php echo $email;?></td>

</tr>





</tr>
</table>

<table border=2 cellpadding=3 div style="border-radius: 20px;" align=center width="960">
<tr>
<td style="border-radius: 40px; " align=center boder=2>2. DATOS ACADEMICOS</td>
<td style="border: hidden"></td>
<td style="border: hidden"><center><font size=2>Fecha de Grado <u><?php echo $diag;?> | <?php echo $mesg;?> | <?php echo $aog;?></center></u></td>	
<td style="border: hidden"></td>
</tr>

<tr>
<td align=center><font size=2><?php $facultad=chunk_split($facultad, 1, "  ");
$str=$_POST['facultad'];
$facultad=chunk_split_unicode($str, 1, " | ");
echo $facultad;?></td>
<td  align=center colspan=2><font size=2><?php $escuela=chunk_split($escuela, 1, "  ");
$str=$_POST['escuela'];
$escuela=chunk_split_unicode($str, 1, " | ");
echo $escuela;?></td>
</tr>
<tr>
<td style="border: hidden" align=center><font size=2>Facultad o Nucleo</td>
<td style="border: hidden" align=center colspan=2><center><font size=2>Escuela</center></td>
</tr>
<tr>
<td align=center colspan=4><font size=2><?php $titulo=chunk_split($titulo, 1, "  ");
$str=$_POST['titulo'];
$titulo=chunk_split_unicode($str, 1, " | "); 
echo $titulo;?></td>
</tr>
<tr>
<td style="border: hidden" align=center colspan=4><font size=2>Titulo o Grado Obtenido</td>
</tr>
</table>
<table border=2 cellpadding=3 div style="border-radius: 20px;" align=center width="960">
<tr><td style="border-radius: 40px; " align=center boder=2 >3. TIPO DE SOLICITUD</td> 
<?php
if ($globalesL==$check1){
?>
<td style="border: hidden"><input type="radio" id="radio1" name=prp01 readonly checked onclick="javascript: return false;"/>

<font size=2>Notas Certificadas Globales Legalizadas(<?php echo $v1;?>)</font></td>
<?php
}
?>
<?php
if ($globalesL==$check2){
?>
<td style="border: hidden"><input type="radio" name=prp01 onclick="javascript: return false;"/>
<font size=2>Notas Certificadas Globales Legalizadas</td>
<?php
}
?>

<?php
if ($globalesN==$check1){
?>
<td style="border: hidden"><input type="radio" name=prp02 readonly checked onclick="javascript: return false;"/>
<font size=2>Notas Certificadas Globales Normales(<?php echo $v2;?>)</td>
<?php
}
?>
<?php
if ($globalesN==$check2){
?>
<td style="border: hidden"><input type="radio" name=prp02 onclick="javascript: return false;"/>
<font size=2>Notas Certificadas Globales Normales</td>
<?php
}
?>

</tr>
<tr>

<td style="border: hidden">Tramite: <b><?php echo $variable; ?> &nbsp;&nbsp;&nbsp;<font size=5>(<?php echo $tramiteF; ?>)</font></b> </td>
<?php
if ($aprobatoriasL==$check1){
?>
<td style="border: hidden"><input type="radio" name=prp3 readonly checked onclick="javascript: return false;"/>
<font size=2>Notas Certificadas Aprobatorias Legalizadas(<?php echo $v3;?>)</td>
<?php
}
?>
<?php
if ($aprobatoriasL==$check2){
?>
<td style="border: hidden"><input type="radio" name=prp3 onclick="javascript: return false;"/>
<font size=2>Notas Certificadas Aprobatorias Legalizadas</td>
<?php
}
?>
<?php
if ($aprobatoriasN==$check1){
?>
<td style="border: hidden"><input type="radio" name=prp4 readonly checked onclick="javascript: return false;"/>
<font size=2>Notas Certificadas Aprobatorias Normales(<?php echo $v4;?>)</td>
<?php
}
?>
<?php
if ($aprobatoriasN==$check2){
?>
<td style="border: hidden"><input type="radio" name=prp4 onclick="javascript: return false;"/>
<font size=2>Notas Certificadas Aprobatorias Normales</td>
<?php
}
?>
</tr>

<tr>

<?php
if ($notas==$check1){
?>
<td style="border: hidden"><input type="radio" name=prp5 readonly checked onclick="javascript: return false;"/>
<font size=2>Desea promedio de Notas</td>
<?php
}
?>
<?php
if ($notas==$check2){
?>
<td style="border: hidden"><input type="radio" name=prp5 onclick="javascript: return false;"/>
<font size=2>Desea promedio de Notas</td>
<?php
}
?>


<?php
if ($titulosL==$check1){
?>

<td style="border: hidden"><input type="radio" name=prp6 readonly checked onclick="javascript: return false;"/>
<font size=2>Titulos Certificados (Fondo Negro) Legalizados(<?php echo $v5;?>)</td>
<?php
}
?>
<?php
if ($titulosL==$check2){
?>

<td style="border: hidden"><input type="radio" name=prp6 onclick="javascript: return false;"/>
<font size=2>Titulos Certificados (Fondo Negro) Legalizados</td>
<?php
}
?>

<?php
if ($titulosN==$check1){
?>

<td style="border: hidden"><input type="radio" name=prp7 readonly checked onclick="javascript: return false;"/>
<font size=2>Titulos Certificados (Fondo Negro) Normales(<?php echo $v6;?>)</td>
<?php
}
?>
<?php
if ($titulosN==$check2){
?>

<td style="border: hidden"><input type="radio" name=prp7 onclick="javascript: return false;"/>
<font size=2>Titulos Certificados (Fondo Negro) Normales</td>
<?php
}
?>
</tr>



<tr>

<?php
if ($actaL==$check1){
?>
<td style="border: hidden"></td>


<td style="border: hidden"><input type="radio" name=prp8 readonly checked onclick="javascript: return false;"/>
<font size=2>Acta de Grado Legalizada(<?php echo $v7;?>)</td>
<?php
}
?>
<?php
if ($actaL==$check2){
?>
<td style="border: hidden"></td>


<td style="border: hidden"><input type="radio" name=prp8 onclick="javascript: return false;"/>
<font size=2>Acta de Grado Legalizada</td>
<?php
}
?>
<?php
if ($actaN==$check1){
?>



<td style="border: hidden"><input type="radio" name=prp9 readonly checked onclick="javascript: return false;"/>
<font size=2>Acta de Grado Normal(<?php echo $v8;?>)</td>
<?php
}
?>
<?php
if ($actaN==$check2){
?>



<td style="border: hidden"><input type="radio" name=prp9 onclick="javascript: return false;"/>
<font size=2>Acta de Grado Normal</td>
<?php
}
?>
</tr>
<tr>

<?php
if ($otrosL==$check1){
?>
<td style="border: hidden"></td>


<td style="border: hidden"><input type="radio" name=prp10 readonly checked onclick="javascript: return false;"/>
<font size=2>Otros Legalizados(<?php echo $v9;?>) _____________________</td>
<?php
}
?>
<?php
if ($otrosL==$check2){
?>
<td style="border: hidden"></td>


<td style="border: hidden"><input type="radio" name=prp10 onclick="javascript: return false;"/>
<font size=2>Otros Legalizados</td>
<?php
}
?>
<?php
if ($otrosN==$check1){
?>



<td style="border: hidden"><input type="radio" name=prp11 readonly checked onclick="javascript: return false;"/>
<font size=2>Otros Normal(<?php echo $v10;?>) _____________________</td>
<?php
}
?>
<?php
if ($otrosN==$check2){
?>



<td style="border: hidden"><input type="radio" name=prp11 onclick="javascript: return false;"/>
<font size=2>Otros Normal</td>
<?php
}
?>
</tr>

</table>
<table border=2 cellpadding=3 div style="border-radius: 20px;" align=center width="960">
<tr style="border-color: #FFFFFF">
<td style="border-radius: 40px; " align=center boder=2 >4.DEPOSITO </td>
</tr>
<tr>
<td style="border: hidden" style="border-color: #FFFFFF"><font size=2>Numero de Verificacion </td>
<td style="border: hidden"><u><font size=2>|<?php $numerolod2=chunk_split($numerolod2, 1, " | "); echo $numerolod2;?></u>|</td>
<td style="border: hidden"><font size=2>Monto</td>
<td style="border: hidden"><u><font size=2><?php $saldo=chunk_split($saldo, 1, "  ");
echo $saldo;?><font size=2>BsS</u></td>

</tr>
<!---<tr>
<td style="border: hidden" style="border-color: #FFFFFF"><font size=2>Nombre del depositante</td>
<td style="border: hidden">
<u><font size=2>|<?php $nombredeposito=chunk_split($nombredeposito, 1, " | ");
$str=$_POST['nombredeposito'];
$nombredeposito=chunk_split_unicode($str, 1, " | ");
echo $nombredeposito;?></u></td>
<td style="border: hidden"><font size=2>Fecha</td>
<td style="border: hidden"><u><font size=2>|<?php echo $fecha1;?> | <?php echo $fecha2;?> | <?php echo $fecha3;?> |</u></td>




</tr>--->
</table>

<table border=1 cellspacing=4 cellpadding=3 div style="border-radius: 10px;" align=center width="960">
<tr> <td style="border-radius: 10px;">5. DATOS DEL EMPLEADO RECEPTOR </td></tr>
<tr> <td style="border: hidden"><center>__________________________________</center></td><td style="border: hidden"><center>______________________</center></td><td style="border: hidden"><center>_______________________</center></td></tr>
<tr>
<td style="border: hidden" align=center><font size=2>Firma del funcionario receptor</td>
<td style="border: hidden" align=center><font size=2>Fecha de solicitud</td>
<td style="border: hidden" align=center><font size=2>Fecha de entrega</td>
</tr>
<tr>
<td style="border: hidden" align=center colspan=3><font size=2>Fecha de control <?php echo $vFE=date("d-m-y");?></td>

</tr>

</table>
<br>
<center>	--------------------------------------------------------------------------------------------------------------------------------------------------------------</center><br>
<table border=2  cellpadding=3 div style="border-radius: 30px;" align=center>



<td style="border: hidden"><font size=2> COMPROBANTE DE SOLICITUD </td> </table><center><?php  echo $numerolod; ?></center>
<table border=2 cellpadding=3 div style="border-radius: 20px;" align=center width="960">
<tr style="border-color: #FFFFFF">
<td style="border-radius: 10px; " align=center boder=2 ><font size=2>1. DATOS PERSONALES</td>
<td style="border: hidden"><center><font size=2>V o E <u>|<?php echo $tipoc;?></u>|</center></td>
<td style="border: hidden"><center><font size=2>Cedula de Identidad
<u>|<?php 
echo $cedula;?></u></center></td>
</tr>

<tr style="border-color: #FFFFFF">
<td style="border: hidden"><font size=2>Apellidos</td>
<td style="border: hidden" colspan=4><u><?php
echo $apellido;?></u></td></tr>
<tr style="border-color: #FFFFFF">
<td style="border: hidden" style="border-color: #FFFFFF"><font size=2>Nombres</td>
<td style="border: hidden" colspan=4><u><?php 
echo $nombre;?></u></td>
</tr>
<tr>
<td align=center colspan=4><font size=2><?php 
 
echo $titulo;?></td>
</tr>
<tr>
<td style="border: hidden" align=center colspan=4><font size=2>Titulo o Grado Obtenido</td>
</tr>

<table border=2 cellpadding=3 div style="border-radius: 20px;" align=center width="960">
<tr><td style="border-radius: 40px; " align=center boder=2 ><font size=2>2. TIPO DE SOLICITUD</td> 
<?php
if ($globalesL==$check1){
?>
<td style="border: hidden"><input type="radio" name=prp011 readonly checked onclick="javascript: return false;"/>
<font size=2>Notas Certificadas Globales Legalizadas(<?php echo $v1;?>)</font></td>
<?php
}
?>
<?php
if ($globalesL==$check2){
?>
<td style="border: hidden"><input type="radio" name=prp011 onclick="javascript: return false;"/>
<font size=2>Notas Certificadas Globales Legalizadas</td>
<?php
}
?>

<?php
if ($globalesN==$check1){
?>
<td style="border: hidden"><input type="radio" name=prp012 readonly checked onclick="javascript: return false;"/>
<font size=2>Notas Certificadas Globales Normales(<?php echo $v2;?>)</td>
<?php
}
?>
<?php
if ($globalesN==$check2){
?>
<td style="border: hidden"><input type="radio" name=prp012 onclick="javascript: return false;"/>
<font size=2>Notas Certificadas Globales Normales</td>
<?php
}
?>

</tr>
<tr>

<td style="border: hidden">Tramite: <b><?php echo $variable; ?> &nbsp;&nbsp;&nbsp;<font size=5>(<?php echo $tramiteF; ?>)</font></b></td>
<?php
if ($aprobatoriasL==$check1){
?>
<td style="border: hidden"><input type="radio" name=prp13 readonly checked onclick="javascript: return false;"/>
<font size=2>Notas Certificadas Aprobatorias Legalizadas(<?php echo $v3;?>)</td>
<?php
}
?>
<?php
if ($aprobatoriasL==$check2){
?>
<td style="border: hidden"><input type="radio" name=prp13 onclick="javascript: return false;"/>
<font size=2>Notas Certificadas Aprobatorias Legalizadas</td>
<?php
}
?>
<?php
if ($aprobatoriasN==$check1){
?>
<td style="border: hidden"><input type="radio" name=prp14 readonly checked onclick="javascript: return false;"/>
<font size=2>Notas Certificadas Aprobatorias Normales(<?php echo $v4;?>)</td>
<?php
}
?>
<?php
if ($aprobatoriasN==$check2){
?>
<td style="border: hidden"><input type="radio" name=prp14 onclick="javascript: return false;"/>
<font size=2>Notas Certificadas Aprobatorias Normales</td>
<?php
}
?>
</tr>

<tr>

<?php
if ($notas==$check1){
?>
<td style="border: hidden"><input type="radio" name=prp15 readonly checked onclick="javascript: return false;"/>
<font size=2>Desea promedio de Notas</td>
<?php
}
?>
<?php
if ($notas==$check2){
?>
<td style="border: hidden"><input type="radio" name=prp15 onclick="javascript: return false;"/>
<font size=2>Desea promedio de Notas</td>
<?php
}
?>


<?php
if ($titulosL==$check1){
?>

<td style="border: hidden"><input type="radio" name=prp16 readonly checked onclick="javascript: return false;"/>
<font size=2>Titulos Certificados Legalizados(<?php echo $v5;?>)</td>
<?php
}
?>
<?php
if ($titulosL==$check2){
?>

<td style="border: hidden"><input type="radio" name=prp16 onclick="javascript: return false;"/>
<font size=2>Titulos Certificados Legalizados</td>
<?php
}
?>

<?php
if ($titulosN==$check1){
?>

<td style="border: hidden"><input type="radio" name=prp17 readonly checked onclick="javascript: return false;"/>
<font size=2>Titulos Certificados Normales(<?php echo $v6;?>)</td>
<?php
}
?>
<?php
if ($titulosN==$check2){
?>

<td style="border: hidden"><input type="radio" name=prp17 onclick="javascript: return false;"/>
<font size=2>Titulos Certificados Normales</td>
<?php
}
?>
</tr>



<tr>

<?php
if ($actaL==$check1){
?>
<td style="border: hidden"></td>


<td style="border: hidden"><input type="radio" name=prp18 readonly checked onclick="javascript: return false;"/>
<font size=2>Acta de Grado Legalizada(<?php echo $v7;?>)</td>
<?php
}
?>
<?php
if ($actaL==$check2){
?>
<td style="border: hidden"></td>


<td style="border: hidden"><input type="radio" name=prp18 onclick="javascript: return false;"/>
<font size=2>Acta de Grado Legalizada</td>
<?php
}
?>
<?php
if ($actaN==$check1){
?>



<td style="border: hidden"><input type="radio" name=prp19 readonly checked onclick="javascript: return false;"/>
<font size=2>Acta de Grado Normal(<?php echo $v8;?>)</td>
<?php
}
?>
<?php
if ($actaN==$check2){
?>



<td style="border: hidden"><input type="radio" name=prp19 onclick="javascript: return false;"/>
<font size=2>Acta de Grado Normal</td>
<?php
}
?>
</tr>
<tr>

<?php
if ($otrosL==$check1){
?>
<td style="border: hidden"></td>


<td style="border: hidden"><input type="radio" name=prp110 readonly checked onclick="javascript: return false;"/>
<font size=2>Otros Legalizados(<?php echo $v9;?>) _____________________</td>
<?php
}
?>
<?php
if ($otrosL==$check2){
?>
<td style="border: hidden"></td>


<td style="border: hidden"><input type="radio" name=prp110 onclick="javascript: return false;"/>
<font size=2>Otros Legalizados</td>
<?php
}
?>
<?php
if ($otrosN==$check1){
?>



<td style="border: hidden"><input type="radio" name=prp111 readonly checked onclick="javascript: return false;"/>
<font size=2>Otros Normal(<?php echo $v10;?>) _____________________</td>
<?php
}
?>
<?php
if ($otrosN==$check2){
?>



<td style="border: hidden"><input type="radio" name=prp111 onclick="javascript: return false;"/>
<font size=2>Otros Normal</td>
<?php
}
?>
</tr>
</table>
<table border=1 cellspacing=4 cellpadding=3 div style="border-radius: 10px;" align=center width="960">
<tr> <td style="border-radius: 10px;"><font size=2>3. DATOS DEL EMPLEADO RECEPTOR </td></tr>
<tr> <td style="border: hidden"><center>__________________________________</center></td><td style="border: hidden"><center>______________________</center></td><td style="border: hidden"><center>_______________________</center></td></tr>
<tr>
<td style="border: hidden" align=center colspan=3><font size=2>Fecha de control <?php echo $vFE=date("d-m-y");?></td>

</tr>
<tr>
<td style="border: hidden" align=center><font size=2>Firma del funcionario receptor</td>
<td style="border: hidden" align=center><font size=2>Fecha de solicitud</td>
<td style="border: hidden" align=center><font size=2>Fecha de entrega</td>
</tr>


</tr>

<tr>
<td colspan=2 style="border: hidden"><center><input type='button' name='imprimir' value='Imprimir' onclick='window.print();'></form></td><td style="border: hidden">
<form action=validador.php method=post>
<input type=hidden name=user_id value=<?php echo $user_id; ?>>
<input type=hidden name=usuario value=<?php echo $usuario; ?>>
<input type=hidden name=clave value=<?php echo $clave; ?>>
<input type=submit value="Registrar Nuevo Deposito"></form>

</td><td style="border: hidden"><form action=index.php><input type=submit value=Salir></form></td>
</tr>

</table>

</body>
</html>



