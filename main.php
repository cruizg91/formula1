<!DOCTYPE html>
<html lang="en">
<head>

  <title>F1 Experts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://www.dafontfree.net/embed/Zm9ybXVsYTEtZGlzcGxheS1yZWd1bGFyLXJlZ3VsYXImZGF0YS81MTMvZi8xOTQxODYvRm9ybXVsYTEtUmVndWxhcl93ZWJfMC50dGY" rel="stylesheet" type="text/css"/>
  <script><!-- prevent resubmit form when refreshing-->
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
  <style>
  @media screen and (min-width: 320px) and (max-width: 767px) and (orientation: portrait) {
  html {
    transform: rotate(-90deg);
    transform-origin: left top;
    width: 100vh;
    height: 100vw;
    overflow-x: hidden;
    position: absolute;
    top: 100%;
    left: 0;
  }
}
  @font-face { font-family: Formula1 Display Regular; src: url('Formula1-Regular.ttf'); } 
  	body {
		font-family: Formula1 Display Regular;
		font-size: 18px;
		font-weight: bold;
		background-attachment: fixed;			
		background-image: url(asfalto.jpg);
		background-repeat: no-repeat;
		background-position: center top;
	}
	h3 {
		font-family: Formula1 Display Regular;
		font-size: 20px;
		font-weight: bold;
		background-attachment: fixed;
	}
	.panelMiApuesta {
	  margin: 10px 0 0 20px;
	  font-family: Formula1 Display Regular;
	  font-size: 12px;
	  width: 25%;
	  float: left;
	}
	.panelGrid {
	  margin: 90 90 90 0px;	  
   	  overflow-x: scroll;
	  font-family: 'formula1-display-regular-regular';
	  width: 100%;
	  float: right;
	}
	label {
	  color: white;
	  
	}
</style>
 </head>
<body font-size: 20px;">

<?php

error_reporting(0);
$mysqli= new mysqli('localhost','root','','formula1');
//$conexion= mysql_connect('mysql.hostinger.es','u640557691_46','schumi46')or die ('Ha fallado la conexión: '.mysql_error());
//mysql_select_db('u640557691_46')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
 
$usuario= $_SESSION['usuario'];

//Recuperar circuito y sesiones activas
$sql = "SELECT calendar.circuitId,sessioncalendar.sessionId, circuits.gpName, circuits.circuitName, seasons.year, sessioncalendar.isActive, sessioncalendar.current FROM seasons INNER JOIN calendar ON calendar.year=seasons.year INNER JOIN sessioncalendar ON sessioncalendar.year=calendar.year and sessioncalendar.circuitId=calendar.circuitId INNER JOIN circuits ON circuits.circuitId=calendar.circuitId WHERE seasons.isActive = '1' and calendar.isActive='1'";
$resultado=$mysqli->query($sql);
$hayResultados = true; 
$haySprintRace = false;
 
$quaClosed = false;
$racClosed = false;
$qusClosed = false;
$rasClosed = false;
$circuitName = "";
while ($hayResultados==true){
	$fila = $resultado->fetch_assoc();
	if ($fila) { 
	//operaciones a realizar
		 $_SESSION['circuitId'] = $fila["circuitId"];
		 
		 if($fila["current"]==1 && $_SESSION['currentTab']==NULL){
			 $_SESSION['currentTab']=$fila["sessionId"];
		 }
		 $year = $fila["year"];  
		 $circuitName = $fila["gpName"] . " - " . $fila["circuitName"]; 
		 if($fila["sessionId"]=='QUA' && $fila["isActive"]==0){
			$quaClosed = true; 
		 }
		 if($fila["sessionId"]=='RAC' && $fila["isActive"]==0){
			$racClosed = true; 
		 }
		 if($fila["sessionId"]=='QUS' && $fila["isActive"]==0){
			$haySprintRace = true;
			$qusClosed =true; 
		 }
		 if($fila["sessionId"]=='RAS'){
			 if( $fila["isActive"]==0){
				$rasClosed =true; 
			 }
			$haySprintRace = true; 
		 }
	}else {
		$hayResultados = false;
	}
}
$circuitId=$_SESSION['circuitId'];		
	
function seleccionaColor($puntos,$sessionId,$isHeader)
{
    if(!$isHeader){
		if($sessionId=="QUA" ||$sessionId=="QUS"){
			if($puntos==2.25){
				return "#D9BE4C";
			} else if($puntos==2){
				return "#D0D2D7";
			} else if($puntos==1.75){
				return "#C07A50";
			} else{
				return "#FFF4BC";	
			}
		} else if($sessionId=="RAC" ||$sessionId=="RAS"){
			if( $puntos >= 25){
				return "#D9BE4C";
			} else if($puntos >= 18){
				return "#D0D2D7";
			} else if($puntos >= 15){
				return "#C07A50";
			} else{
				return "#FFF4BC";	
			}
		}
		
	}else{
		return "AliceBlue";	
	}
}
function createDriversCombo($mysqli){
    $sql = "SELECT driverId, driverName FROM drivers order by driverOrder ASC";
	
    for($i=1;$i<12;$i++){					
        $resultado=$mysqli->query($sql);
        $hayResultados = true;					
		if($i<10){
			echo '<label color: "#FFFFFF" for=label">' . $i . 'º&nbsp-&nbsp&nbsp&nbsp&nbsp</label>';
		}else if ($i==1){
			echo '<label color: "#FFFFFF" for=label">' . $i . 'º&nbsp-&nbsp&nbsp</label>';
		}else if ($i==10){
			echo '<label color: "#FFFFFF" for=label">' . $i . 'º&nbsp-&nbsp</label>';
		}else{
			echo '<label color: "#FFFFFF" for=label">' . $i . 'º&nbsp-&nbsp&nbsp</label>';
		}                     
        echo '<select name="select' . $i . '">';
		echo '<option value="">-</option>';
        while ($hayResultados==true){		
            $fila = $resultado->fetch_assoc();
            if ($fila) { 
            echo '<option value="' . htmlspecialchars($fila['driverId']) . '">' 
            . htmlspecialchars($fila['driverName']) 
            . '</option>';
            }else {
                $hayResultados = false;
            }		
        }
        echo '</select><br>';
    }
}

function createGridHeader($mysqli){
	$sql = "SELECT userId FROM users Order by userOrder ASC";
	$resultado=$mysqli->query($sql);
	$hayResultados = true;
	$i=1;
	echo "<div class=\"col-xs-1\"></div>";
	while ($hayResultados==true){
		$fila = $resultado->fetch_assoc();
		if($i%2==1){
			$color = seleccionaColor(NULL,NULL,true);
		}
		if ($fila) { 
			 echo "<div class=\"col-xs-1\" style=\"font-family: Formula1 Display Regular;background-color:".$color.";\">". $fila["userId"] . "</div>";
			 $i=$i+1;
		}else {
			$hayResultados = false;
		}
	}										
	echo "<div class=\"col-xs-1\" style=\"font-family: Formula1 Display Regular;background-color:".$color.";\">Results</div>";
}

function createBetRows($mysqli,$sessionId,$circuitId,$year){
	for($pos=1;$pos<12;$pos++){
        echo "<div class=\"row\" name=\"".$i ."th\">";
        echo "<div class=\"col-xs-1\" style=\"font-family: Formula1 Display Regular;border-top: 1px solid;background-color:AliceBlue;\">". $pos ."º </div>";
        
			$sql = "SELECT users.userId, ".$pos . "th, color FROM users LEFT JOIN bets ON bets.userId=users.userId and bets.sessionId='".$sessionId."' and circuitId='".$circuitId."' and year='".$year."'"." INNER JOIN teams ON teams.teamId=users.teamId Order by userOrder ASC";
			//echo $sql;
			$resultado=$mysqli->query($sql);
			$sqlR = "SELECT * FROM results WHERE circuitId='".$circuitId."' and sessionId='".$sessionId."' and year='".$year."'";
			//echo $sqlR;
			$resultadoR=$mysqli->query($sqlR);
			$filaR = $resultadoR->fetch_assoc();
			$hayResultados = true;
			$i=1;
			while ($hayResultados==true){
				$fila = $resultado->fetch_assoc();
				if ($fila) { 
					if($fila[$pos."th"]==null){
						$fila[$pos."th"]="-";
					}
					 echo "<div class=\"col-xs-1\" style=\"font-family: Formula1 Display Regular;border-top: 1px solid;background-color:".$fila["color"].";\">". $fila[$pos."th"] . "</div>";
					 $i=$i+1;
				}else {
					$hayResultados = false;
				}
			}
			echo "<div class=\"col-xs-1\" style=\"font-family: Formula1 Display Regular;border-top: 1px solid;background-color:AliceBlue;\">". $filaR[$pos."th"] . "</div>";
        echo "</div>";
    }
		
	createPointsRows($mysqli,$sessionId,$circuitId,$year);
}
function createPointsRows($mysqli,$sessionId,$circuitId,$year){
	echo "<br>";//puntuaciones
	echo "<div class=\"row\" name=\"".$i ."th\">";
        echo "<div class=\"col-xs-1\" style=\"font-family: Formula1 Display Regular;border-top: 1px solid;background-color:AliceBlue;\">Puntos</div>";
		
		if($sessionId=='RAC' || $sessionId=='RAS'){
			$sql = "SELECT users.userId, total, points FROM users LEFT JOIN betresults ON betresults.userId=users.userId and sessionId='".$sessionId."' and circuitId='".$circuitId."' and year='".$year."'"." Order by userOrder ASC";
		}else {
			if($sessionId=='QUA'){
				$nextSession='RAC';
			}else{
				$nextSession='RAS';
			}
			$sql = "SELECT users.userId, extrapoints as points FROM users LEFT JOIN bets ON bets.userId=users.userId and sessionId='".$nextSession."' and circuitId='".$circuitId."' and year='".$year."'"." Order by userOrder ASC";
		}
		
		$resultadoT=$mysqli->query($sql);
		$hayResultados=true;
		while ($hayResultados==true){
				$fila = $resultadoT->fetch_assoc();				
				if ($fila) { 
					if($fila[$pos."th"]==null){
						$fila[$pos."th"]="-";
					}
					$color=seleccionacolor($fila["points"],$sessionId,false);
					 echo "<div class=\"col-xs-1\" style=\"font-family: Formula1 Display Regular;border-top: 1px solid;border-left: 1px solid;background-color:".$color."\">". $fila["points"] . "</div>";
					 $i=$i+1;
				}else {
					$hayResultados = false;
				}
	    }
		echo "</div>";
		echo "<div class=\"row\" name=\"".$i ."th\">";
        echo "<div class=\"col-xs-1\" style=\"font-family: Formula1 Display Regular;border-top: 1px solid;background-color:AliceBlue;\">Total</div>";
		$sql = "SELECT users.userId, total, points FROM users LEFT JOIN betresults ON betresults.userId=users.userId and betresults.sessionId='".$sessionId."' and circuitId='".$circuitId."' and year='".$year."'"." Order by userOrder ASC";
		
		$resultado=$mysqli->query($sql);
		$resultadoT=$resultado;
		$hayResultados=true;
		$i=1;
		while ($hayResultados==true){
				$fila = $resultado->fetch_assoc();	
				if($i%2==1){
					$color = seleccionaColor($color,$sessionId, false);
				}			
				if ($fila) { 
					if($fila[$pos."th"]==null){
						$fila[$pos."th"]="-";
					}
					 echo "<div class=\"col-xs-1\" style=\"font-family: Formula1 Display Regular;border-top: 1px solid;border-left: 1px solid;background-color:#FBE568;\">". $fila["total"] . "</div>";
					 $i=$i+1;
				}else {
					$hayResultados = false;
				}
	    }
		echo "</div>";
	for($pos=1;$pos<12;$pos++){
	    echo "<div class=\"row\" name=\"".$i ."th\">";
        echo "<div class=\"col-xs-1\" style=\"font-family: Formula1 Display Regular;border-top: 1px solid;background-color:AliceBlue;\">". $pos ."º </div>";
		$sql = "SELECT users.userId, ".$pos . "th FROM users LEFT JOIN betresults ON betresults.userId=users.userId and betresults.sessionId='".$sessionId."' and circuitId='".$circuitId."' and year='".$year."'"." Order by userOrder ASC";
		$resultado=$mysqli->query($sql);
		$hayResultados=true;
		while ($hayResultados==true){
				$fila = $resultado->fetch_assoc();				
				if ($fila) { 
					if($fila[$pos."th"]==null){
						$fila[$pos."th"]="-";
					}
					 echo "<div class=\"col-xs-1\" style=\"font-family: Formula1 Display Regular;border-top: 1px solid;border-left: 1px solid;background-color:AliceBlue;\">". $fila[$pos."th"] . "</div>";
					 $i=$i+1;
				}else {
					$hayResultados = false;
				}
	    }
		 echo "</div>";
	}
}
/*
function crearPanelMiApuesta($year,$circuitId,$sessionId,$isClosed){
	echo "<div class=\"col-md-4\">";
                        echo "<div class=\"panelMiApuesta\">";
                                      echo "<h3 style=\"font-weight: bold;\" >Mi Apuesta</h3><br>";
                                      echo "<form id=\"form1\" name=\"form1\" method=\"post\"> ";
                                       echo "<input type=\"hidden\" id=\"circuitIdField\" name=\"circuitId\" value=\"".$circuitId."\">";
                                        echo "<input type=\"hidden\" id=\"yearField\" name=\"year\" value=\"".$year."\">"; 
                                      echo "<input type=\"hidden\" id=\"sessionIdField\" name=\"sessionId\" value=\"".$sessionId."\">"; 
                                       createDriversCombo($mysqli);
									 echo "<br>";
									  if(!$isClosed){
										  echo "<label for=\"Submit\"></label>";
									 	  echo "<input type=\"submit\" name=\"Submit\" value=\"Apostar\" id=\"Submit\"/>"; 
									  }
									  if(!$isClosed){
										 echo "<input type=\"hidden\" id=\"abrirCerrarField\" name=\"abrirCerrar\" value=\"0\">";
										 echo "<label for=\"Close\"></label>";
										 echo "<input type=\"submit\" name=\"Close\" value=\"Cerrar Apuesta\" id=\"Close\"/>"; 
									 } else{
										 echo "<input type=\"hidden\" id=\"abrirCerrarField\" name=\"abrirCerrar\" value=\"1\">";
										 echo "<label for=\"Open\"></label>";
										 echo "<input type=\"submit\" name=\"Open\" value=\"Abrir Apuesta\" id=\"Open\"/>";
									 }
									  echo "<label for=\"Close\"></label>";
									  echo "<input type=\"submit\" name=\"Calcular\" value=\"Calcular\" id=\"Calcular\"/>";
									
									 echo "</form>";
                        echo "</div>";
                      echo "</div>";
	
}*/

//FIN FUNCIONES
	
	if(isset($_POST['Close'])||isset($_POST['Open'])) {
			include 'cerrarApuesta.php';
			cerrarApuesta($_POST["year"],$_POST['sessionId'],$_POST['circuitId'],$_POST['abrirCerrar']);
			$_SESSION['currentTab']=$_POST['sessionId'];
			header("Refresh:0");
    }
	if(isset($_POST['Submit'])) {
			include 'apostar.php';	
			apostar($_POST["year"],$_POST['circuitId'],$_POST['sessionId'],$_POST['select1'],$_POST['select2'],$_POST['select3'],$_POST['select4'],$_POST['select5'],$_POST['select6'],$_POST['select7'],$_POST['select8'],$_POST['select9'],$_POST['select10'],$_POST['select11']);
			$_SESSION['currentTab']=$_POST['sessionId'];
    }
	if(isset($_POST['Calcular'])) {
			include 'calcula.php';
			calcula($_POST["year"],$_POST['sessionId'],$_POST['circuitId'],$_POST['select1'],$_POST['select2'],$_POST['select3'],$_POST['select4'],$_POST['select5'],$_POST['select6'],$_POST['select7'],$_POST['select8'],$_POST['select9'],$_POST['select10'],$_POST['select11']);			
			$_SESSION['currentTab']=$_POST['sessionId'];
    }
	?>

<div align="center">
     <FONT color="#F0FC00" size="5">
    	<MARQUEE  direction="left" width="100%"><STRONG><img src='login.png' height:"90" width="90"/><?php echo $circuitName; ?></STRONG></MARQUEE>
    </FONT>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">    
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Apuestas <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a data-toggle="tab" href="#ApuestaClasificacion">Clasificación</a></li>
          <?php
		  if($haySprintRace){
			  echo "<li><a href=\"#ApuestaClasificacionSprint\">Clasificación Sprint</a></li>";
			  echo "<li><a href=\"#ApuestaCarreraSprint\">Carrera Sprint</a></li>";
		  }
		  ?>
          <li><a data-toggle="tab" href="#ApuestaCarrera">Carrera</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Clasificaciones <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Mundial de Pilotos</a></li>
          <li><a href="#">Mundial de Escuderias</a></li>
        </ul>
      </li>
      <li><a href="#">Historial</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<!-- Capa Tabs -->  
<div class="tab-content" id="nav-tabContent">

	<!-- Capa Apuesta Clasificacion -->
  	<?php
	if($_SESSION['currentTab']=='QUA'){
    	echo "<br><div color:#2EFEC8;font-weight: bold;font-size: 20px; class=\"tab-pane fade in active\" id=\"ApuestaClasificacion\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\"> ";
	}else{
		echo "<br><div color:#2EFEC8;font-weight: bold;font-size: 20px; class=\"tab-pane fade\" id=\"ApuestaClasificacion\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\"> ";
	}
	?>
            <h3 style="font-size: 40px; color: white; font-weight: bold; text-align: center;" >Clasificación</h3><br>
                <!-- Panel Apuesta-->
            <div class="container-fluid" style="width:100%;">    
                 <div class="row">
                     <div class="col-md-3">
                        <div class="panelMiApuesta">
                                      <h3 style="font-weight: bold;" >Mi Apuesta</h3><br>
                                      <form id="form1" name="form1" method="post"> 
                                       <?php echo "<input type=\"hidden\" id=\"circuitIdField\" name=\"circuitId\" value=\"".$circuitId."\">";
                                        echo "<input type=\"hidden\" id=\"yearField\" name=\"year\" value=\"".$year."\">"; ?>
                                      <input type="hidden" id="sessionIdField" name="sessionId" value="QUA"> 
                                      <?php createDriversCombo($mysqli);
									 echo "<br>";
									  if(!$quaClosed){
										  echo "<label for=\"Submit\"></label>";
									 	  echo "<input type=\"submit\" name=\"Submit\" value=\"Apostar\" id=\"Submit\"/>"; 
									  }
									  if(!$quaClosed){
										 echo "<input type=\"hidden\" id=\"abrirCerrarField\" name=\"abrirCerrar\" value=\"0\">";
										 echo "<label for=\"Close\"></label>";
										 echo "<input type=\"submit\" name=\"Close\" value=\"Cerrar Apuesta\" id=\"Close\"/>"; 
									 } else{
										 echo "<input type=\"hidden\" id=\"abrirCerrarField\" name=\"abrirCerrar\" value=\"1\">";
										 echo "<label for=\"Open\"></label>";
										 echo "<input type=\"submit\" name=\"Open\" value=\"Abrir Apuesta\" id=\"Open\"/>";
									 }
									  echo "<label for=\"Close\"></label>";
									  echo "<input type=\"submit\" name=\"Calcular\" value=\"Calcular\" id=\"Calcular\"/>";
									?>
									 </form>
                        </div>
                      </div>
                      <div class="col-md-8">
                            <div class="panelGrid">
                                <div class="container-fluid" style="text-align:center;">
                                    <div class="row" name="header">
                                    <?php 
                                        createGridHeader($mysqli);
                                    echo "</div>";
                                    createBetRows($mysqli,"QUA",$circuitId,$year);
                                    ?>
                                 </div>
                              </div>
                        </div>
                 </div>
          </div>
     </div>
                  
    <!-- Capa Apuesta Carreras-->              
  	<?php
	if($_SESSION['currentTab']=='RAC'){
    	echo "<br><div color:#2EFEC8;font-weight: bold;font-size: 20px; class=\"tab-pane fade in active\" id=\"ApuestaCarrera\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\"> ";
	}else{
		echo "<br><div color:#2EFEC8;font-weight: bold;font-size: 20px; class=\"tab-pane fade\" id=\"ApuestaCarrera\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\"> ";
	}
	?>
            <h3 style="font-size: 40px; color:white; font-weight: bold; text-align: center;" >Carrera</h3><br>
                <!-- Panel Apuesta-->
            <div class="container-fluid" style="width:100%;">    
                 <div class="row">
                     <div class="col-md-4">
                        <div class="panelMiApuesta">
                                      <h3 style="font-weight: bold;" >Mi Apuesta</h3><br>
                                      <form id="form1" name="form1" method="post"> 
                                       <?php echo "<input type=\"hidden\" id=\"circuitIdField\" name=\"circuitId\" value=\"".$circuitId."\">";
                                        echo "<input type=\"hidden\" id=\"yearField\" name=\"year\" value=\"".$year."\">"; ?>
                                      <input type="hidden" id="sessionIdField" name="sessionId" value="RAC"> 
                                      <?php createDriversCombo($mysqli);
									 echo "<br>";
									  if(!$quaClosed){
										  echo "<label for=\"Submit\"></label>";
									 	  echo "<input type=\"submit\" name=\"Submit\" value=\"Apostar\" id=\"Submit\"/>"; 
									  }
									  if(!$quaClosed){
										 echo "<input type=\"hidden\" id=\"abrirCerrarField\" name=\"abrirCerrar\" value=\"0\">";
										 echo "<label for=\"Close\"></label>";
										 echo "<input type=\"submit\" name=\"Close\" value=\"Cerrar Apuesta\" id=\"Close\"/>"; 
									 } else{
										 echo "<input type=\"hidden\" id=\"abrirCerrarField\" name=\"abrirCerrar\" value=\"1\">";
										 echo "<label for=\"Open\"></label>";
										 echo "<input type=\"submit\" name=\"Open\" value=\"Abrir Apuesta\" id=\"Open\"/>";
									 }
									  echo "<label for=\"Close\"></label>";
									  echo "<input type=\"submit\" name=\"Calcular\" value=\"Calcular\" id=\"Calcular\"/>";
									?>
									 </form>
                        </div>
                      </div>
                      <div class="col-md-8">
                            <div class="panelGrid">
                                <div class="container-fluid" style="text-align:center;">
                                    <div class="row" name="header">
                                    <?php 
                                        createGridHeader($mysqli);
                                    echo "</div>";
                                    createBetRows($mysqli,"RAC",$circuitId,$year);
                                    ?>
                                 </div>
                              </div>
                        </div>
                 </div>
          </div>
     </div>
    <!-- Capa Apuesta Clasificacion Sprint -->
    <?php
	if($_SESSION['currentTab']=='RAC'){
    	echo "<br><div color:#2EFEC8;font-weight: bold;font-size: 20px; class=\"tab-pane fade in active\" id=\"ApuestaClasificacionSprint\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\"> ";
	}else{
		echo "<br><div color:#2EFEC8;font-weight: bold;font-size: 20px; class=\"tab-pane fade\" id=\"ApuestaClasificacionSprint\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\"> ";
	}
	?>
            <h3 style="font-size: 40px; color: white; font-weight: bold; text-align: center;" >Carrera Sprint</h3><br>
                <!-- Panel Apuesta-->
            <div class="container-fluid" style="width:100%;">    
                 <div class="row">
                     <div class="col-md-4">
                        <div class="panelMiApuesta">
                                      <h3 style="font-weight: bold;" >Mi Apuesta</h3><br>
                                      <form id="form1" name="form1" method="post"> 
                                       <?php echo "<input type=\"hidden\" id=\"circuitIdField\" name=\"circuitId\" value=\"".$circuitId."\">";
                                        echo "<input type=\"hidden\" id=\"yearField\" name=\"year\" value=\"".$year."\">"; ?>
                                      <input type="hidden" id="sessionIdField" name="sessionId" value="RAS"> 
                                      <?php createDriversCombo($mysqli);
									 echo "<br>";
									  if(!$quaClosed){
										  echo "<label for=\"Submit\"></label>";
									 	  echo "<input type=\"submit\" name=\"Submit\" value=\"Apostar\" id=\"Submit\"/>"; 
									  }
									  if(!$quaClosed){
										 echo "<input type=\"hidden\" id=\"abrirCerrarField\" name=\"abrirCerrar\" value=\"0\">";
										 echo "<label for=\"Close\"></label>";
										 echo "<input type=\"submit\" name=\"Close\" value=\"Cerrar Apuesta\" id=\"Close\"/>"; 
									 } else{
										 echo "<input type=\"hidden\" id=\"abrirCerrarField\" name=\"abrirCerrar\" value=\"1\">";
										 echo "<label for=\"Open\"></label>";
										 echo "<input type=\"submit\" name=\"Open\" value=\"Abrir Apuesta\" id=\"Open\"/>";
									 }
									  echo "<label for=\"Close\"></label>";
									  echo "<input type=\"submit\" name=\"Calcular\" value=\"Calcular\" id=\"Calcular\"/>";
									?>
									 </form>
                        </div>
                      </div>
                      <div class="col-md-8">
                            <div class="panelGrid">
                                <div class="container-fluid" style="text-align:center;">
                                    <div class="row" name="header">
                                    <?php 
                                        createGridHeader($mysqli);
                                    echo "</div>";
                                    createBetRows($mysqli,"RAS",$circuitId,$year);
                                    ?>
                                 </div>
                              </div>
                        </div>
                 </div>
          </div>
     </div>
                  
    <!-- Capa Apuesta Carreras Sprint-->              
<div class="tab-content" id="nav-tabContent">

	<!-- Capa Apuesta Clasificacion -->
    <?php
	if($_SESSION['currentTab']=='RAC'){
    	echo "<br><div color:#2EFEC8;font-weight: bold;font-size: 20px; class=\"tab-pane fade in active\" id=\"ApuestaClasificacion\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\"> ";
	}else{
		echo "<br><div color:#2EFEC8;font-weight: bold;font-size: 20px; class=\"tab-pane fade\" id=\"ApuestaClasificacion\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\"> ";
	}
	?> 
            <h3 style="font-size: 40px; font-weight: bold; text-align: center;" >Clasificación Sprint</h3><br>
                <!-- Panel Apuesta-->
            <div class="container-fluid" style="width:100%;">    
                 <div class="row">
                     <div class="col-md-4">
                        <div class="panelMiApuesta">
                                      <h3 style="font-weight: bold;" >Mi Apuesta</h3><br>
                                      <form id="form1" name="form1" method="post"> 
                                       <?php echo "<input type=\"hidden\" id=\"circuitIdField\" name=\"circuitId\" value=\"".$circuitId."\">";
                                        echo "<input type=\"hidden\" id=\"yearField\" name=\"year\" value=\"".$year."\">"; ?>
                                      <input type="hidden" id="sessionIdField" name="sessionId" value="QUS"> 
                                      <?php createDriversCombo($mysqli);
									 echo "<br>";
									  if(!$quaClosed){
										  echo "<label for=\"Submit\"></label>";
									 	  echo "<input type=\"submit\" name=\"Submit\" value=\"Apostar\" id=\"Submit\"/>"; 
									  }
									  if(!$quaClosed){
										 echo "<input type=\"hidden\" id=\"abrirCerrarField\" name=\"abrirCerrar\" value=\"0\">";
										 echo "<label for=\"Close\"></label>";
										 echo "<input type=\"submit\" name=\"Close\" value=\"Cerrar Apuesta\" id=\"Close\"/>"; 
									 } else{
										 echo "<input type=\"hidden\" id=\"abrirCerrarField\" name=\"abrirCerrar\" value=\"1\">";
										 echo "<label for=\"Open\"></label>";
										 echo "<input type=\"submit\" name=\"Open\" value=\"Abrir Apuesta\" id=\"Open\"/>";
									 }
									  echo "<label for=\"Close\"></label>";
									  echo "<input type=\"submit\" name=\"Calcular\" value=\"Calcular\" id=\"Calcular\"/>";
									?>
									 </form>
                        </div>
                      </div>
                      <div class="col-md-8">
                            <div class="panelGrid">
                                <div class="container-fluid" style="text-align:center;">
                                    <div class="row" name="header">
                                    <?php 
                                        createGridHeader($mysqli);
                                    echo "</div>";
                                    createBetRows($mysqli,"QUS",$circuitId,$year);
                                    ?>
                                 </div>
                              </div>
                        </div>
                 </div>
          </div>
     </div>
    
  
</div><!--div tab-content -->  
      
     
</div>    
</body>
</html>