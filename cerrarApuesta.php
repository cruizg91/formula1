<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="0; url=mainAdmin.php"> 
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php 
$mysqli= new mysqli('mysql.hostinger.es','u640557691_46','schumi46','u640557691_46');
$categoria = $_POST["categoria"]; 
$stmt = $mysqli->prepare("update actual set apuestasCerradas='1' where id=?");
				$stmt->bind_param('i',$categoria);
				$stmt->execute();
?>
</body>
</html>
