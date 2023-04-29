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
  
  <style>
  @font-face { font-family: Formula1 Display Regular; src: url('Formula1-Regular.ttf'); } 
  	body {
		font-family: Formula1 Display Regular;
		font-size: 18px;
		font-weight: bold;
		background-attachment: fixed;	
	}
	h3 {
		font-family: Formula1 Display Regular;
		font-size: 20px;
		font-weight: bold;
		background-attachment: fixed;
	}
	.panelMiApuesta {
	  margin: 10px 0 0 100px;
	  font-family: Formula1 Display Regular;
	  font-size: 12px;
	  width: 25%;
	  float: left;
	}
	.panelGrid {
	  margin: 0 0 0 250px;	  
   	  overflow-x: auto;
	  font-family: 'formula1-display-regular-regular';
	  width: 100%;
	  float: right;  
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
$sql = "SELECT calendar.circuitId,sessioncalendar.sessionId, circuits.gpName, circuits.circuitName, seasons.year FROM seasons INNER JOIN calendar ON calendar.year=seasons.year INNER JOIN sessioncalendar ON sessioncalendar.year=calendar.year and sessioncalendar.circuitId=calendar.circuitId INNER JOIN circuits ON circuits.circuitId=calendar.circuitId WHERE seasons.isActive = '1' and calendar.isActive='1'";
$resultado=$mysqli->query($sql);
$hayResultados = true; 
$haySprintRace = false;
$circuitName = "";
while ($hayResultados==true){
	$fila = $resultado->fetch_assoc();
	if ($fila) { 
	//operaciones a realizar
		 $_SESSION['circuitId'] = $fila["circuitId"];
		 $year = $fila["year"];  
		 $circuitName = $fila["gpName"] . " - " . $fila["circuitName"]; 
		 if($fila["sessionId"]=='RAS'){
			$haySprintRace = true; 
		 }
	}else {
		$hayResultados = false;
	}
}
$circuitId=$_SESSION['circuitId'];		
	
function seleccionaColor($color,$isHeader)
{
    if(!$isHeader){
		$color1="lightskyblue";
		$color2="lightgreen";
		if($color==$color2){
			return $color1;
		} else{
			return $color2;
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
			echo '<label color: "#FFF" for=label">' . $i . 'º&nbsp-&nbsp&nbsp&nbsp&nbsp</label>';
		}else if ($i==1){
			echo '<label color: "#FFF" for=label">' . $i . 'º&nbsp-&nbsp&nbsp</label>';
		}else if ($i==10){
			echo '<label color: "#FFF" for=label">' . $i . 'º&nbsp-&nbsp</label>';
		}else{
			echo '<label color: "#FFF" for=label">' . $i . 'º&nbsp-&nbsp&nbsp</label>';
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
	echo "<div class=\"col-xs-1\" style=\"background-color:AliceBlue;\"></div>";
	while ($hayResultados==true){
		$fila = $resultado->fetch_assoc();
		if($i%2==1){
			$color = seleccionaColor($color,true);
		}
		if ($fila) { 
			 echo "<div class=\"col-xs-1\" style=\"font-family: Formula1 Display Regular;background-color:".$color.";\">". $fila["userId"] . "</div>";
			 $i=$i+1;
		}else {
			$hayResultados = false;
		}
	}
}

function createBetRows($mysqli,$event){	for($pos=1;$pos<12;$pos++){
        echo "<div class=\"row\" name=\"".$i ."th\">";
        echo "<div class=\"col-xs-1\" style=\"font-family: Formula1 Display Regular;background-color:AliceBlue;\">". $pos ."º </div>";
        
			$sql = "SELECT users.userId, ".$pos . "th FROM users LEFT JOIN bets ON bets.userId=users.userId and bets.sessionId='".$event."' Order by userOrder ASC";
			$resultado=$mysqli->query($sql);
			$hayResultados = true;
			$i=1;
			while ($hayResultados==true){
				$fila = $resultado->fetch_assoc();
				if($i%2==1){
					$color = seleccionaColor($color, false);
				}
				if ($fila) { 
					if($fila[$pos."th"]==null){
						$fila[$pos."th"]="-";
					}
					 echo "<div class=\"col-xs-1\" style=\"font-family: Formula1 Display Regular;background-color:".$color.";\">". $fila[$pos."th"] . "</div>";
					 $i=$i+1;
				}else {
					$hayResultados = false;
				}
			}
		
        echo "</div>";
    }	
}
	?>

<div align="center">
     <FONT color="#F0FC00" size="5">
    	<MARQUEE bgcolor="#000080" direction="left" width="100%"><STRONG><?php echo $circuitName; ?></STRONG></MARQUEE>
    </FONT>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">    
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Simulación</a></li>
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
  	<div color:#2EFEC8;font-weight: bold;font-size: 20px;" class="tab-pane fade in active" id="ApuestaClasificacion" role="tabpanel" aria-labelledby="nav-home-tab"> 
            <h3 style="font-size: 40px; font-weight: bold; text-align: center;" >Clasificación</h3><br>
                <!-- Panel Apuesta-->
            <div class="container-fluid" style="width:100%;">    
                 <div class="row">
                     <div class="col-md-4">
                        <div class="panelMiApuesta">
                                      <h3 style="font-weight: bold;" >Mi Apuesta</h3><br>
                                      <form id="form1" name="form1" method="post" action="apostar.php"> 
                                       <?php echo "<input type=\"hidden\" id=\"circuitIdField\" name=\"circuitId\" value=\"".$circuitId."\">"; ?>
                                       <?php echo "<input type=\"hidden\" id=\"yearField\" name=\"year\" value=\"".$year."\">"; ?>
                                      <input type="hidden" id="sessionIdField" name="sessionId" value="QUA"> 
                                      <?php createDriversCombo($mysqli); ?>
                                <br>
                                 <label for="Submit"></label>
                                    <input type="submit" name="Submit" value="Apostar" id="Submit" />
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
                                    createBetRows($mysqli,"QUA");
                                    ?>
                                 </div>
                              </div>
                        </div>
                 </div>
          </div>
     </div>
                  
    <!-- Capa Apuesta Carreras-->              
  	<div color:#2EFEC8;font-weight: bold;font-size: 20px;" class="tab-pane fade" id="ApuestaCarrera" role="tabpanel" aria-labelledby="nav-home-tab"> 
            <h3 style="font-size: 40px; font-weight: bold; text-align: center;" >Carrera</h3><br>
                <!-- Panel Apuesta-->
            <div class="container-fluid" style="width:100%;">    
                 <div class="row">
                     <div class="col-xs-4 col-md-4">
                        <div class="panelMiApuesta">
                                      <h3 style="font-weight: bold;" >Mi Apuesta</h3><br>
                                      <form id="form1" name="form1" method="post" action="apostar.php"> 
                                      <input type="hidden" id="sessionIdField" name="sessionId" value="RAC"> 
                                      <?php createDriversCombo($mysqli); ?>
                                <br>
                                 <label for="Submit"></label>
                                    <input type="submit" name="Submit" value="Apostar" id="Submit" />
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
                                    createBetRows($mysqli,"RAC");
                                    ?>
                                 </div>
                              </div>
                        </div>
                 </div>
          </div>
     </div>
    <!-- Capa Apuesta Clasificacion Sprint -->
	<div color:#2EFEC8;font-weight: bold;font-size: 20px;" class="tab-pane fade" id="ApuestaClasificacionSprint" role="tabpanel" aria-labelledby="nav-home-tab"> 
            <h3 style="font-size: 40px; font-weight: bold; text-align: center;" >Carrera</h3><br>
                <!-- Panel Apuesta-->
            <div class="container-fluid" style="width:100%;">    
                 <div class="row">
                     <div class="col-xs-4 col-md-4">
                        <div class="panelMiApuesta">
                                      <h3 style="font-weight: bold;" >Mi Apuesta</h3><br>
                                      <form id="form1" name="form1" method="post" action="apostar.php"> 
                                      <input type="hidden" id="sessionIdField" name="sessionId" value="QUS"> 
                                      <?php createDriversCombo($mysqli); ?>
                                <br>
                                 <label for="Submit"></label>
                                    <input type="submit" name="Submit" value="Apostar" id="Submit" />
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
                                    createBetRows($mysqli,"QUS");
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
  	<div color:#2EFEC8;font-weight: bold;font-size: 20px;" class="tab-pane fade" id="ApuestaClasificacion" role="tabpanel" aria-labelledby="nav-home-tab"> 
            <h3 style="font-size: 40px; font-weight: bold; text-align: center;" >Clasificación</h3><br>
                <!-- Panel Apuesta-->
            <div class="container-fluid" style="width:100%;">    
                 <div class="row">
                     <div class="col-xs-4 col-md-4">
                        <div class="panelMiApuesta">
                                      <h3 style="font-weight: bold;" >Mi Apuesta</h3><br>
                                      <form id="form1" name="form1" method="post" action="apostar.php"> 
                                      <input type="hidden" id="sessionIdField" name="sessionId" value="QUA"> 
                                      <?php createDriversCombo($mysqli); ?>
                                <br>
                                 <label for="Submit"></label>
                                    <input type="submit" name="Submit" value="Apostar" id="Submit" />
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
                                    createBetRows($mysqli,"QUA");
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
