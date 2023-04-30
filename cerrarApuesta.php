<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="refresh" content="0; url=main.php"> 


<body>
<?php 
$mysqli= new mysqli('localhost','root','','formula1');

$circuitId = $_POST["circuitId"]; 
$sessionId = $_POST["sessionId"]; 
$abrirCerrar = $_POST["abrirCerrar"]; 
$year = $_POST["year"]; 
$sql="UPDATE sessionCalendar set isActive='$abrirCerrar' where circuitId='$circuitId' and sessionId='$sessionId' and year='$year'";
mysqli_query($mysqli, $sql);
?>
</body>
</html>
