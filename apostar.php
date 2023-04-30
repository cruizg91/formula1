<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Apostar</title>

</head>

<body>
	<?php
function apostar($year,$circuitId,$sessionId,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11){
	$mysqli= new mysqli('localhost','root','','formula1');
	session_start(); 
	$usuario= $_SESSION['usuario'];
	$_SESSION['usuario']=$usuario;
	$values=array();
	if(!empty($p1)){
		array_push($values, $p1);
	}
	if(!empty($p2)){
		array_push($values, $p2);
	}
	if(!empty($p3)){
		array_push($values, $p3);
	}
	if(!empty($p4)){
		array_push($values, $p4);
	}
	if(!empty($p5)){
		array_push($values, $p5);
	}
	if(!empty($p6)){
		array_push($values, $p6);
	}
	if(!empty($p7)){
		array_push($values, $p7);
	}
	if(!empty($p8)){
		array_push($values, $p8);
	}
	if(!empty($p9)){
		array_push($values, $p9);
	}
	if(!empty($p10)){
		array_push($values, $p10);
	}
	if(!empty($p11)){
		array_push($values, $p11);
	}
	
	if(count(array_keys($values, $p1))>1 || count(array_keys($values, $p2))>1 || count(array_keys($values, $p3))>1 || count(array_keys($values, $p4))>1 || count(array_keys($values, $p5))>1 || count(array_keys($values, $p6))>1 || count(array_keys($values, $p7))>1 || count(array_keys($values, $p8))>1 || count(array_keys($values, $p9))>1 || count(array_keys($values, $p10))>1 || count(array_keys($values, $p11))>1){
		alert("Valores repetidos");
		echo "HEY";
		$hayResultados=false;	
	}
	
	$sql = "SELECT bets.userId FROM bets INNER JOIN sessioncalendar ON sessioncalendar.year = bets.year and sessioncalendar.circuitId= bets.circuitId and sessioncalendar.sessionId=bets.sessionId and sessioncalendar.isActive=1 WHERE bets.userId='$usuario' and bets.circuitId='$circuitId' and bets.sessionId='$sessionId'  and bets.year=(select year from seasons where isActive=1)";
	$resultado=$mysqli->query($sql);
	$hayResultados=true;
	while ($hayResultados==true){
		$fila = $resultado->fetch_assoc();
		if ($fila) {
			$hayResultados=false;
			$sql="UPDATE bets SET  ";
			if(!empty($p1))
				$sql= $sql."1th = '$p1' ,";
			if(!empty($p2))
				$sql= $sql."2th = '$p2' ,";
			if(!empty($p3))
				$sql= $sql."3th = '$p3' ,";
			if(!empty($p4))
				$sql= $sql."4th = '$p4' ,";
			if(!empty($p5))
				$sql= $sql."5th = '$p5' ,";
			if(!empty($p6))
				$sql= $sql."6th = '$p6' ,";
			if(!empty($p7))
				$sql= $sql."7th = '$p7' ,";
			if(!empty($p8))
				$sql= $sql."8th = '$p8' ,";
			if(!empty($p9))
				$sql= $sql."9th = '$p9' ,";
			if(!empty($p10))
				$sql= $sql."10th = '$p10 ',";
			if(!empty($p11))
				$sql= $sql."11th = '$p11',";
			$sql =substr_replace($sql ,"", -1);
			$sql = $sql . " WHERE userId = '$usuario' AND circuitId = '$circuitId' AND sessionId = '$sessionId' AND bets.year = $year";		
			mysqli_query($mysqli, $sql);	
		}else {
			$sql = "SELECT isActive FROM sessioncalendar WHERE sessioncalendar.year = '$year' and sessioncalendar.circuitId= '$circuitId' and sessioncalendar.sessionId='$sessionId'";
			$hayResultados2=true;
			$hayResultados=false;
			$resultado=$mysqli->query($sql);
			while ($hayResultados2==true){
				$fila = $resultado->fetch_assoc();
				if ($fila) {
					$hayResultados2=false;
					if($fila["isActive"]==1){
						$sql="INSERT INTO bets(userId,circuitId,sessionId,year,1th,2th,3th,4th,5th,6th,7th,8th,9th,10th,11th) VALUES ('$usuario','$circuitId','$sessionId','$year','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$p11')";
					mysqli_query($mysqli, $sql);
					}
				}else{
					$hayResultados2=false;
				}				
			}
		}
	  }
}
	?>
</body>
</html>
