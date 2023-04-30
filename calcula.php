<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

</head>

<body>
	<?php
function calcula($year,$sessionId,$circuitId,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11){
	$mysqli= new mysqli('localhost','root','','formula1');
	
	$pArray = array(1 => $p1, 2 => $p2, 3 => $p3, 4=> $p4, 5 => $p5, 6 => $p6, 7 => $p7, 8 => $p8, 9 => $p9, 10 => $p10, 11 => $p11);
	
	//valores
	$v1 =  0; 
	$v2 =  0;
	$v3 =  0;
	$v4 =  0; 
	$v5 =  0;
	$v6 =  0; 
	$v7 =  0;
	$v8 =  0;
	$v9 =  0; 
	$v10 = 0;     
	$v11 = 0;     
	$vTotal = 0;
	$vIa=0;
	$isIA=true;
	//valores IA
	$ia1 =  0; 
	$ia2 =  0;
	$ia3 =  0;
	$ia4 =  0; 
	$ia5 =  0;
	$ia6 =  0; 
	$ia7 =  0;
	$ia8 =  0;
	$ia9 =  0; 
	$ia10 = 0;     
	$ia11 = 0; 
	
	
	//inserta en la tabla de results
	$sql="INSERT INTO results(circuitId,sessionId,year,1th,2th,3th,4th,5th,6th,7th,8th,9th,10th,11th) VALUES ('$circuitId','$sessionId','$year','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$p11') ON DUPLICATE KEY UPDATE 1th='$p1',2th='$p2',3th='$p3',4th='$p4',5th='$p5',6th='$p6',7th='$p7',8th='$p8',9th='$p9',10th='$p10',11th='$p11'";
	$resultado=$mysqli->query($sql);
	
	//recupera las apuestas de los usuarios
	$sql= "SELECT users.userId, 1th,2th,3th,4th,5th,6th,7th,8th,9th,10th,11th,extrapoints FROM users LEFT JOIN bets ON users.userId=bets.userId and sessionId='$sessionId' and circuitId='$circuitId' and year='$year' order by userOrder ASC";
	$resultado=$mysqli->query($sql);
	$hayResultados =true;
	while ($hayResultados==true){
		$fila = $resultado->fetch_assoc();
		if ($fila) {			
			$userId=$fila["userId"];
			//echo "<br><br>usuario ".$fila["userId"];
			if(!empty($fila["1th"])){ //Hay apuesta, se calcula la puntuacion del usuario
				$arrayVal = array();
				for($pos=1;$pos<12;$pos++){
					$key = array_search($fila[$pos."th"], $pArray);
					if ($key !== false){
						//echo "<br> pos: " . $pos;
						//echo " driver: " . $fila[$pos."th"];
						//echo " key: " . $key;
						if($key==$pos){
							array_push($arrayVal, 1+0.05*$pos);
							//echo " val: ". 1+0.05*$pos;
						}else if($key==$pos+1 || $key==$pos-1){
							//echo " val: 0.5";
							array_push($arrayVal, 0.5);
						}else if($key==$pos+2 || $key==$pos-2){
							//echo " val: 0.25";
							array_push($arrayVal, 0.25);
						}else{
							//echo " val: 0";
							array_push($arrayVal, 0);
						}
					}else{
							//echo "<br> pos: " . $pos;
							//echo " driver: " . $fila[$pos."th"];
							//echo " key: " . $key;
							//echo " val: 0";
						array_push($arrayVal, 0);
					}
				}
				$v1 = $arrayVal[0];
				$v2 = $arrayVal[1];
				$v3 = $arrayVal[2];
				$v4 = $arrayVal[3];
				$v5 = $arrayVal[4];
				$v6 = $arrayVal[5];
				$v7 = $arrayVal[6];
				$v8 = $arrayVal[7];
				$v9 = $arrayVal[8];
				$v10 = $arrayVal[9];
				$v11 = $arrayVal[10];
				$vTotal= $v1 + $v2 + $v3 + $v4 + $v5 + $v6 + $v7 + $v8 + $v9 + $v10 + $v11;
				if(!empty($fila["extrapoints"])){
					$vTotal= $vTotal + $fila["extrapoints"];
				}
				if($isIA){
					$isIA=false;
					$ia1 =  $v1; 
					$ia2 =  $v2;
					$ia3 =  $v3;
					$ia4 =  $v4;
					$ia5 =  $v5;
					$ia6 =  $v6; 
					$ia7 =  $v7;
					$ia8 =  $v8;
					$ia9 =  $v9; 
					$ia10 = $v10;     
					$ia11 = $v11; 
					$vIA=$vTotal;
				}
					
			} else{ //si no hay apuesta completa, se pone puntuacion de la IA
				$v1 = $ia1;
				$v2 = $ia2;
				$v3 = $ia3;
				$v4 = $ia4;
				$v5 = $ia5;
				$v6 = $ia6;
				$v7 = $ia7;
				$v8 = $ia8;
				$v9 = $ia9;
				$v10 = $ia10;
				$v11 = $ia11;
				$vTotal = $vIA;
			}
			//echo "<br> vTotal= ". $vTotal;
			//insertar en tabla bets results
			if(!empty($sessionId)){//evitar insert raro
				$sqlI ="INSERT INTO betresults (userId,circuitId,sessionId,year,1th,2th,3th,4th,5th,6th,7th,8th,9th,10th,11th,total) VALUES('$userId','$circuitId','$sessionId','$year','$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11','$vTotal') ON DUPLICATE KEY UPDATE 1th='$v1',2th='$v2',3th='$v3',4th='$v4',5th='$v5',6th='$v6',7th='$v7',8th='$v8',9th='$v9',10th='$v10',11th='$v11',total='$vTotal'";
				$resultadoI=$mysqli->query($sqlI);
			}
			$vTotal=0;
		}else {
			$hayResultados = false;
		}
	}
	
	//asignar puntos y posiciones
	$arrayPuntuable = array();
	$sql= "SELECT 1th,2th,3th,4th,5th,6th,7th,8th,9th,10th FROM points where sessionId='QUA'";
	//echo $sql;
		if($resultado=$mysqli->query($sql)){
			$fila=$resultado->fetch_assoc();
			 array_push($arrayPuntuable, $fila["1th"], $fila["2th"], $fila["3th"], $fila["4th"], $fila["5th"], $fila["6th"], $fila["7th"], $fila["8th"], $fila["9th"], $fila["10th"]);
		}
	$sql = "SELECT betresults.userId,total,historychampionships.position FROM betresults INNER JOIN historychampionships ON historychampionships.userId=betresults.userId and historychampionships.year=betresults.year-1 WHERE circuitId='$circuitId' and sessionId='$sessionId' and betresults.year='$year' ORDER BY total DESC,position DESC";
	$resultado=$mysqli->query($sql);
	//echo $sql;
	$hayResultados=true;
	$arrPos=0;
	while ($hayResultados==true){
		$fila = $resultado->fetch_assoc();
		$userId=$fila["userId"];
		if ($fila) { 
			if($sessionId=='QUA' || $sessionId=='QUS'){	//si es qualy insertar todos los usuarios en bets y asignar extrapoints 	
				if($sessionId=='QUA'){				
					$sql="INSERT INTO bets(userId,circuitId,sessionId,year,extrapoints) VALUES ('$userId','$circuitId','RAC','$year','$arrayPuntuable[$arrPos]') ON DUPLICATE KEY UPDATE extrapoints='$arrayPuntuable[$arrPos]'";
					$resultadoI=$mysqli->query($sql);
				} else{
					$sql="INSERT INTO bets(userId,circuitId,sessionId,year,extrapoints) VALUES ('$userId','$circuitId','RAS','$year','$arrayPuntuable[$arrPos]') ON DUPLICATE KEY UPDATE extrapoints='$arrayPuntuable[$arrPos]'";
					$resultadoI=$mysqli->query($sqlI);
				}
				$arrPos++;
			}else if($sessionId=='RAC' || $sessionId=='RAS'){//si es carrera asignar los puntos
				$sqlI ="UPDATE betresults SET points='$arrayPuntuable[$arrPos]' WHERE userId='$userId' and circuitId='$circuitId' and sessionId='$sessionId'  and year='$year'";
				$resultadoI=$mysqli->query($sqlI);
			}	 
		}else {
			$hayResultados = false;
		}
	}
}
?>



</body>
</html>
