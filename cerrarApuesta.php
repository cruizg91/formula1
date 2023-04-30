<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 


<body>
<?php 
function cerrarApuesta($year,$sessionId,$circuitId,$abrirCerrar){
	$mysqli= new mysqli('localhost','root','','formula1');
	
	/*$circuitId = $_POST["circuitId"]; 
	$sessionId = $_POST["sessionId"]; 
	$abrirCerrar = $_POST["abrirCerrar"]; 
	$year = $_POST["year"];*/ 
	$sql="UPDATE sessionCalendar set isActive='$abrirCerrar', current='$abrirCerrar' where circuitId='$circuitId' and sessionId='$sessionId' and year='$year'";
	mysqli_query($mysqli, $sql);
	if($abrirCerrar==0){
		$sql="UPDATE sessionCalendar set current=1 where year='$year' and circuitId='$circuitId' and sessionOrder = (select sessionOrder+1 from sessioncalendar where year='$year' and circuitId='$circuitId' and sessionId='$sessionId')";
		mysqli_query($mysqli, $sql);
	}else{
		$sql="UPDATE sessionCalendar set current=0 where year='$year' and circuitId='$circuitId' and sessionId = (select sessionOrder+1 from sessioncalendar where year=$year and circuitId='$circuitId' and sessionId='$sessionId')";
		mysqli_query($mysqli, $sql);
	}
}
?>
</body>
</html>
