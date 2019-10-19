<?php include("arriba2.php"); ?>


<?php
$cod=$_POST['chequeo'];

$conect = mysql_connect("localhost","recodo","") or die ("problemas EN la conexion");
mysql_select_db("ocgre_depositos",$conect) or die ("problemas en la seleccion EN la base de datos");
$resulta3=mysql_query ("SELECT * FROM validado WHERE codval = '$cod' ORDER BY id ASC",$conect)or die ("El usuario es incorrecto o no existe");
if ($row1 = mysql_fetch_array ($resulta3)) {
	echo "La planilla ya esta validada";
	
	
	}
else{


$conect = mysql_connect("localhost","recodo","") or die ("problemas EN la conexion");
mysql_select_db("ocgre_depositos",$conect) or die ("problemas en la seleccion EN la base de datos");
$resulta2=mysql_query ("SELECT * FROM data WHERE cod2 = '$cod' ORDER BY id ASC",$conect)or die ("El usuario es incorrecto o no existe");
while ($row = mysql_fetch_array ($resulta2)) {
	$referencia= $row['referencia'];
	$saldo= $row['saldo'];	


?>
<form action=chequin2.php method=POST>
<table>
<tr>
<td>El codigo de planilla es: </td><td><?php echo $referencia; ?>  </td>
</tr>
 <td>con un monto de: </td><td><?php echo $saldo; ?></td>
</tr>
<tr>
<td>Fecha de solicitud:</td><td><select name=dia>
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
</select><select name=mes>
<option>ENE</option>
<option>FEB</option>
<option>MAR</option>
<option>ABR</option>
<option>MAY</option>
<option>JUN</option>
<option>JUL</option>
<option>AGO</option>
<option>SEP</option>
<option>OCT</option>
<option>NOV</option>
<option>DIC</option>

</select></td>
<td>
Año <input size=5 type="text" name="ao" id="ao">
</td>
</tr>
<tr>
<center>
<input type=hidden name=codval value="<?php echo $cod; ?>">
<input type=hidden name=cod2 value="<?php echo $referencia; ?>">
<input type=hidden name=saldo value="<?php echo $saldo; ?>">
<td><input type="submit" name="Enviar"></td>
</center>
</tr>
</table>


<?php
}
}
?>

<?php include("abajo.php"); ?>
