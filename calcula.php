<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Calcula</title>
</head>

<body>
	<?php
	$conexion= mysql_connect('mysql.hostinger.es','u568836709_admin','9K9w76gdVY')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('u568836709_f1')or die ('Error al seleccionar la Base de Datos: '.mysql_error());


$result = mysql_query("SELECT * FROM actual WHERE id = '1'");
$row = mysql_fetch_array($result);
$sesion=$row["sesionactual"];

$primero = $_POST["select"];   
$segundo = $_POST['select2'];
$tercero = $_POST["select3"];   
$once = $_POST['select11'];

mysql_query("INSERT INTO resultados(sesion, primero, segundo, tercero, once, abandonos) VALUES ('$sesion','$primero','$segundo','$tercero','$once','$out')");
$idu=1;
while($idu<6){
$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$idu' and sesion='$sesion'");
$row = mysql_fetch_array($result);

if($primero==$row["primero"] && $segundo==$row["segundo"] && $tercero==$row["tercero"] && $once==$row["once"] && $out==$row["abandonos"]){
$puntos1=30;
}
else if($primero==$row["primero"] && $segundo==$row["segundo"] && $tercero==$row["tercero"] && $once==$row["once"] && $out!=$row["abandonos"]){
$puntos1=20;
}
else if($primero==$row["primero"] && $segundo==$row["segundo"] && $tercero==$row["tercero"] && $once!=$row["once"] && $out==$row["abandonos"]){
$puntos1=11;
}
else if($primero==$row["primero"] && $segundo==$row["segundo"] && $tercero==$row["tercero"] && $once!=$row["once"] && $out!=$row["abandonos"]){
$puntos1=6;
}
else{
$puntos1=0;
	if($primero==$row["primero"]){
		$puntos1= $puntos1 + 1;
		if($segundo==$row["segundo"]){
			$puntos1=$puntos1+2;
			if($tercero==$row["tercero"]){
				$puntos1=$puntos1+3;
				}
		}
		if($segundo!=$row["segundo"]){
			if($tercero==$row["tercero"]){
				$puntos1=$puntos1+2;
				}
		}
	}	
	else {
		if($segundo==$row["segundo"]){
			$puntos1=$puntos1+1;
			if($tercero==$row["tercero"]){
				$puntos1=$puntos1+2;
				}
		}
		else
			if($tercero==$row["tercero"]){
				$puntos1=$puntos1+1;
				}
	}
	if($once==$row["once"])
				$puntos1=$puntos1+11;
	
}
mysql_query("update apuestas set puntos='$puntos1' where idU='$idu' and sesion='$sesion'")or die ('Error al seleccionar en la Base de Datos: '.mysql_error());
$result = mysql_query("SELECT * FROM usuarios WHERE idU = '$idu'");
$row = mysql_fetch_array($result);
$pt=$row["puntos"]+puntos1;

mysql_query("update usuarios set puntos='$pt' where idU='$idu'")or die ('Error al seleccionar en la Base de Datos: '.mysql_error());
$idu=$idu+1;
}
/*$result = mysql_query("SELECT * FROM actual WHERE id = '1'");
$row = mysql_fetch_array($result);
$s=$row["sesionActual"];
echo $s;
mysql_query("update actual set sesionActual='$s' where id='1'")or die ('Error al seleccionar en la Base de Datos: '.mysql_error());*/
	?>



</body>
</html>
