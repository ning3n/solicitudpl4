<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script language="javascript">
	document.onkeydown = function(){ 
	if(window.event && window.event.keyCode == 116)         
	{ 
     	window.event.keyCode = 505; 
     	}
if(window.event && window.event.keyCode == 505) 
     { 
     return false;    
     } 
	} 
</script>
<script>
	
document.onkeydown = function(e) 
{ 
if(e) 
document.onkeypress = function(){return true;} 

var evt = e?e:event; 
if(evt.keyCode==116) 
{ 
if(e) 
document.onkeypress = function(){return false;} 
else 
{ 
evt.keyCode = 0; 
evt.returnValue = false; 
} 
} 
} 
</script>
<!--<script>
 function efe() {
      
    }
</script>-->
</head>
<body onkeydown="function();">
<?php include("arriba1.php"); 
$var=$_POST['Holi']; 

if (!isset($_POST['Holi'])) {
   //Código de validación de datos
echo"123";
}
?>
<form action=indexotros.php method='post'>
<input type="text" name="Holi" placheholder="HOLI">
<input type=submit value=eeee>
</form>
<?php include("abajo.php"); ?>


