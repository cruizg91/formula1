<!DOCTYPE html>
<html lang="en">
<head>
  <title>MOTOGP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <style type="text/css">
  #apDiv1 {
	position: absolute;
	left: 318px;
	top: 182px;
	width: 616px;
	height: 232px;
	z-index: 1;
}
  #apDiv2 {
	position: absolute;
	left: 104px;
	top: 276px;
	width: 423px;
	height: 31px;
	z-index: 1;
}
  #apDiv3 {
	position: absolute;
	left: 488px;
	top: 286px;
	width: 307px;
	height: 138px;
	z-index: 1;
}
  #apDiv4 {
	position: absolute;
	left: 900px;
	top: 294px;
	width: 500px;
	height: 127px;
	z-index: 1;
}body {
	background-size: cover;
	width: 100%;
	background-color: #CCCCCC;
	color: #FFF;
	background-image: url(asfalto.jpg);
	background-repeat: no-repeat;
	background-position: center top;
}
#Layer2{
	color: #000;
	background-color: #CCCCCC;
	}
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body font-size: 20px;">
<?php
error_reporting(0);
$conexion= mysql_connect('mysql.hostinger.es','u640557691_46','schumi46')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('u640557691_46')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

session_start(); 
$usuario= $_SESSION['usuario'];

$result = mysql_query("SELECT * FROM actual WHERE id = '1'");
$row = mysql_fetch_array($result);
$sesion=$row["sesionactual"];
$circuito=$row["circuitoActual"];
$_SESSION['usuario']=$usuario;
$_SESSION['sesion']=$sesion;
$result = mysql_query("SELECT * FROM calendario WHERE idC = '$circuito'");
$row = mysql_fetch_array($result);
$circuito=$row["circuito"];
if($sesion%2==1)
	$dia="CALIFICACIÓN";
	else
		$dia="CARRERA";
		
	?>



    <div>
    <p align="center"><?php echo $circuito ?> : <?php echo $dia ?><br /><br/>
    </div>
<div class="container" style="width:auto">
  <h2>Apuestas</h2>
  <ul class="nav nav-tabs">
    <!--<li class="active"><a data-toggle="tab" href="#home">Home</a></li>-->
    <!--<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Home
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a data-toggle="tab" href="#menu1">Clasificación de Pilotos</a></li>
      <li><a data-toggle="tab" href="#menu2">Clasificación de Escuderias</a></li>
      <li><a data-toggle="tab" href="#menu3">Asignar Puntos</a></li> 
    </ul>
    </li>-->
  
   <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Apuestas
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a data-toggle="tab" href="#MotoGPApuestas">MotoGP</a></li>
      <li><a data-toggle="tab" href="#Moto2Apuestas">Moto2</a></li>
      <li><a data-toggle="tab" href="#Moto3Apuestas">Moto3</a></li>
    </ul>
  </li>
  </ul>

  <div class="tab-content">
      <div id="home" class="tab-pane fade">
          <h3>Home</h3>
          <p>Home</p>
      </div>
  <!--MOTOGP-->
       <div color:#2EFEC8;font-weight: bold;font-size: 20px;" id="MotoGPApuestas" class="tab-pane fade in active">
          <h3 style="font-size: 40px;">MOTOGP</h3>
          <div id="Layer2">
              <form id="form1" name="form1" method="post" action="apostarMotoGP.php">
                <label for="select">1º-</label>
                <select name="select" id="select">
                <option value="DOV">DOV 4</option>
                <option value="ZAR">ZAR 5</option>
                <option value="BAR">BAR 8</option>
                <option value="PET">PET 9</option>
                <option value="ABR">ABR 17</option>
                <option value="BAU">BAU 19</option>
                <option value="LOW">LOW 22</option>
                <option value="VIN">VIN 25</option>
                <option value="PED">PED 26</option>
                <option value="IAN">IAN 29</option>
                <option value="CRU">CRU 35</option>
                <option value="SMI">SMI 38</option>
                <option value="AES">AES 41</option>
                <option value="RIN">RIN 42</option>
                <option value="MIL">MIL 43</option>
                <option value="PES">PES 44</option>
                <option value="RED">RED 45</option>
                <option value="ROS">ROS 46</option>
                <option value="RAB">RAB 53</option>
                <option value="BAZ">BAZ 76</option>
                <option value="MAQ">MAQ 93</option>
                <option value="FOL">FOL 94</option>
                <option value="LOR">JL 99</option>
                </select>
                <label color: "#FFF" for="label">2º-</label>
                <select name="select2" id="label">
                <option value="DOV">DOV 4</option>
                <option value="ZAR">ZAR 5</option>
                <option value="BAR">BAR 8</option>
                <option value="PET">PET 9</option>
                <option value="ABR">ABR 17</option>
                <option value="BAU">BAU 19</option>
                <option value="LOW">LOW 22</option>
                <option value="VIN">VIN 25</option>
                <option value="PED">PED 26</option>
                <option value="IAN">IAN 29</option>
                <option value="CRU">CRU 35</option>
                <option value="SMI">SMI 38</option>
                <option value="AES">AES 41</option>
                <option value="RIN">RIN 42</option>
                <option value="MIL">MIL 43</option>
                <option value="PES">PES 44</option>
                <option value="RED">RED 45</option>
                <option value="ROS">ROS 46</option>
                <option value="RAB">RAB 53</option>
                <option value="BAZ">BAZ 76</option>
                <option value="MAQ">MAQ 93</option>
                <option value="FOL">FOL 94</option>
                <option value="LOR">JL 99</option>
                </select>
                <label for="label2">3º-</label>
                <select name="select3" id="label2">
                <option value="DOV">DOV 4</option>
                <option value="ZAR">ZAR 5</option>
                <option value="BAR">BAR 8</option>
                <option value="PET">PET 9</option>
                <option value="ABR">ABR 17</option>
                <option value="BAU">BAU 19</option>
                <option value="LOW">LOW 22</option>
                <option value="VIN">VIN 25</option>
                <option value="PED">PED 26</option>
                <option value="IAN">IAN 29</option>
                <option value="CRU">CRU 35</option>
                <option value="SMI">SMI 38</option>
                <option value="AES">AES 41</option>
                <option value="RIN">RIN 42</option>
                <option value="MIL">MIL 43</option>
                <option value="PES">PES 44</option>
                <option value="RED">RED 45</option>
                <option value="ROS">ROS 46</option>
                <option value="RAB">RAB 53</option>
                <option value="BAZ">BAZ 76</option>
                <option value="MAQ">MAQ 93</option>
                <option value="FOL">FOL 94</option>
                <option value="LOR">LOR 99</option>
                </select>
                <label for="label3">11º-</label>
                <select name="select11" id="select11">
                <option value="DOV">DOV 4</option>
                <option value="ZAR">ZAR 5</option>
                <option value="BAR">BAR 8</option>
                <option value="PET">PET 9</option>
                <option value="ABR">ABR 17</option>
                <option value="BAU">BAU 19</option>
                <option value="LOW">LOW 22</option>
                <option value="VIN">VIN 25</option>
                <option value="PED">PED 26</option>
                <option value="IAN">IAN 29</option>
                <option value="CRU">CRU 35</option>
                <option value="SMI">SMI 38</option>
                <option value="AES">AES 41</option>
                <option value="RIN">RIN 42</option>
                <option value="MIL">MIL 43</option>
                <option value="PES">PES 44</option>
                <option value="RED">RED 45</option>
                <option value="ROS">ROS 46</option>
                <option value="RAB">RAB 53</option>
                <option value="BAZ">BAZ 76</option>
                <option value="MAQ">MAQ 93</option>
                <option value="FOL">FOL 94</option>
                <option value="LOR">LOR 99</option>
                </select>
                <label for="Submit"></label>
                <input type="submit" name="Submit" value="Apostar" id="Submit" />
              </form>
    	</div>
    <table id="MotoGPApuestasGrid" style="margin:auto" border="5">
         <tr>
          <td rowspan="8">MOTOGP</td>
          <td>&nbsp;</td>
          <td colspan="2">QATAR</td>
          <td colspan="2">ARGENTINA</td>
          <td colspan="2">AMÉRICAS</td>
          <td colspan="2">ESPAÑA</td>
          <td colspan="2">FRANCIA</td>
          <td colspan="2">ITALIA</td>
          <td colspan="2">CATALUÑA</td>
          <td colspan="2">P.BAJOS</td>
          <td colspan="2">ALEMANIA</td>
          <td colspan="2">REP.CHECA</td>
          <td colspan="2">AUSTRIA</td>
          <td colspan="2">GRAN BRETAÑA</td>
          <td colspan="2">SAN MARINO</td>
          <td colspan="2">ARAGÓN</td>
          <td colspan="2">JAPÓN</td>
          <td colspan="2">AUSTRALIA</td>
          <td colspan="2">MALASIA</td>
          <td colspan="2">VALENCIA</td>
          
        </tr>
        <tr>
          
          <td>&nbsp;</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
          <td width="50px">Q</td>
          <td width="50px">R</td>
        </tr>
        <tr>
        <?php
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='1' and categoria='1'") or die("ERROR");
        $row = mysql_fetch_array($result);
        $primero1=$row["primero"];
        $segundo1=$row["segundo"];
        $tercero1=$row["tercero"];
        $once1=$row["once"];
        $puntos1=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='2' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero2=$row["primero"];
        $segundo2=$row["segundo"];
        $tercero2=$row["tercero"];
        $once2=$row["once"];
        $puntos2=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='3' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero3=$row["primero"];
        $segundo3=$row["segundo"];
        $tercero3=$row["tercero"];
        $once3=$row["once"];
        $puntos3=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='4' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero4=$row["primero"];
        $segundo4=$row["segundo"];
        $tercero4=$row["tercero"];
        $once4=$row["once"];
        $puntos4=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='5' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero5=$row["primero"];
        $segundo5=$row["segundo"];
        $tercero5=$row["tercero"];
        $once5=$row["once"];
        $puntos5=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='6' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero6=$row["primero"];
        $segundo6=$row["segundo"];
        $tercero6=$row["tercero"];
        $once6=$row["once"];
        $puntos6=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='7' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero7=$row["primero"];
        $segundo7=$row["segundo"];
        $tercero7=$row["tercero"];
        $once7=$row["once"];
        $puntos7=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='8' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero8=$row["primero"];
        $segundo8=$row["segundo"];
        $tercero8=$row["tercero"];
        $once8=$row["once"];
        $puntos8=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='9' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero9=$row["primero"];
        $segundo9=$row["segundo"];
        $tercero9=$row["tercero"];
        $once9=$row["once"];
        $puntos9=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='10' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero10=$row["primero"];
        $segundo10=$row["segundo"];
        $tercero10=$row["tercero"];
        $once10=$row["once"];
        $puntos10=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='11' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero11=$row["primero"];
        $segundo11=$row["segundo"];
        $tercero11=$row["tercero"];
        $once11=$row["once"];
        $puntos11=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='12' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero12=$row["primero"];
        $segundo12=$row["segundo"];
        $tercero12=$row["tercero"];
        $once12=$row["once"];
        $puntos12=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='13' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero13=$row["primero"];
        $segundo13=$row["segundo"];
        $tercero13=$row["tercero"];
        $once13=$row["once"];
        $puntos13=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='14' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero14=$row["primero"];
        $segundo14=$row["segundo"];
        $tercero14=$row["tercero"];
        $once14=$row["once"];
        $puntos14=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='15' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero15=$row["primero"];
        $segundo15=$row["segundo"];
        $tercero15=$row["tercero"];
        $once15=$row["once"];
        $puntos15=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='16' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero16=$row["primero"];
        $segundo16=$row["segundo"];
        $tercero16=$row["tercero"];
        $once16=$row["once"];
        $puntos16=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='17' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero17=$row["primero"];
        $segundo17=$row["segundo"];
        $tercero17=$row["tercero"];
        $once17=$row["once"];
        $puntos17=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='18' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero18=$row["primero"];
        $segundo18=$row["segundo"];
        $tercero18=$row["tercero"];
        $once18=$row["once"];
        $puntos18=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='19' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero19=$row["primero"];
        $segundo19=$row["segundo"];
        $tercero19=$row["tercero"];
        $once19=$row["once"];
        $puntos19=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='20' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero20=$row["primero"];
        $segundo20=$row["segundo"];
        $tercero20=$row["tercero"];
        $once20=$row["once"];
        $puntos20=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='21' and categoria='1'") or die("ERROR");
        $row = mysql_fetch_array($result);
        $primero21=$row["primero"];
        $segundo21=$row["segundo"];
        $tercero21=$row["tercero"];
        $once21=$row["once"];
        $puntos21=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='22' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero22=$row["primero"];
        $segundo22=$row["segundo"];
        $tercero22=$row["tercero"];
        $once22=$row["once"];
        $puntos22=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='23' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero23=$row["primero"];
        $segundo23=$row["segundo"];
        $tercero23=$row["tercero"];
        $once23=$row["once"];
        $puntos23=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='24' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero24=$row["primero"];
        $segundo24=$row["segundo"];
        $tercero24=$row["tercero"];
        $once24=$row["once"];
        $puntos24=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='25' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero25=$row["primero"];
        $segundo25=$row["segundo"];
        $tercero25=$row["tercero"];
        $once25=$row["once"];
        $puntos25=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='26' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero26=$row["primero"];
        $segundo26=$row["segundo"];
        $tercero26=$row["tercero"];
        $once26=$row["once"];
        $puntos26=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='27' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero27=$row["primero"];
        $segundo27=$row["segundo"];
        $tercero27=$row["tercero"];
        $once27=$row["once"];
        $puntos27=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='28' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero28=$row["primero"];
        $segundo28=$row["segundo"];
        $tercero28=$row["tercero"];
        $once28=$row["once"];
        $puntos28=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='29' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero29=$row["primero"];
        $segundo29=$row["segundo"];
        $tercero29=$row["tercero"];
        $once29=$row["once"];
        $puntos29=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='30' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero30=$row["primero"];
        $segundo30=$row["segundo"];
        $tercero30=$row["tercero"];
        $once30=$row["once"];
        $puntos30=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='31' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero31=$row["primero"];
        $segundo31=$row["segundo"];
        $tercero31=$row["tercero"];
        $once31=$row["once"];
        $puntos31=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='32' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero32=$row["primero"];
        $segundo32=$row["segundo"];
        $tercero32=$row["tercero"];
        $once32=$row["once"];
        $puntos32=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='33' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero33=$row["primero"];
        $segundo33=$row["segundo"];
        $tercero33=$row["tercero"];
        $once33=$row["once"];
        $puntos33=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='34' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero34=$row["primero"];
        $segundo34=$row["segundo"];
        $tercero34=$row["tercero"];
        $once34=$row["once"];
        $puntos34=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='35' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero35=$row["primero"];
        $segundo35=$row["segundo"];
        $tercero35=$row["tercero"];
        $once35=$row["once"];
        $puntos35=$row["puntos"];
        
        $result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='36' and categoria='1'");
        $row = mysql_fetch_array($result);
        $primero36=$row["primero"];
        $segundo36=$row["segundo"];
        $tercero36=$row["tercero"];
        $once36=$row["once"];
        $puntos36=$row["puntos"];
            
        ?>
          
          <td>1&ordm;</td>
          <td><?php echo "$primero1"; ?></td>
          <td><?php echo "$primero2"; ?></td>
          <td><?php echo "$primero3"; ?></td>
          <td><?php echo "$primero4"; ?></td>
          <td><?php echo "$primero5"; ?></td>
          <td><?php echo "$primero6"; ?></td>
          <td><?php echo "$primero7"; ?></td>
          <td><?php echo "$primero8"; ?></td>
          <td><?php echo "$primero9"; ?></td>
          <td><?php echo "$primero10"; ?></td>
          <td><?php echo "$primero11"; ?></td>
          <td><?php echo "$primero12"; ?></td>
          <td><?php echo "$primero13"; ?></td>
          <td><?php echo "$primero14"; ?></td>
          <td><?php echo "$primero15"; ?></td>
          <td><?php echo "$primero16"; ?></td>
          <td><?php echo "$primero17"; ?></td>
          <td><?php echo "$primero18"; ?></td>
          <td><?php echo "$primero19"; ?></td>
          <td><?php echo "$primero20"; ?></td>
          <td><?php echo "$primero21"; ?></td>
          <td><?php echo "$primero22"; ?></td>
          <td><?php echo "$primero23"; ?></td>
          <td><?php echo "$primero24"; ?></td>
          <td><?php echo "$primero25"; ?></td>
          <td><?php echo "$primero26"; ?></td>
          <td><?php echo "$primero27"; ?></td>
          <td><?php echo "$primero28"; ?></td>
          <td><?php echo "$primero29"; ?></td>
          <td><?php echo "$primero30"; ?></td>
          <td><?php echo "$primero31"; ?></td>
          <td><?php echo "$primero32"; ?></td>
          <td><?php echo "$primero33"; ?></td>
          <td><?php echo "$primero34"; ?></td>
          <td><?php echo "$primero35"; ?></td>
          <td><?php echo "$primero36"; ?></td>
        </tr>
        <tr>
          
          <td>2&ordm;</td>
          <td><?php echo "$segundo1"; ?></td>
          <td><?php echo "$segundo2"; ?></td>
          <td><?php echo "$segundo3"; ?></td>
          <td><?php echo "$segundo4"; ?></td>
          <td><?php echo "$segundo5"; ?></td>
          <td><?php echo "$segundo6"; ?></td>
          <td><?php echo "$segundo7"; ?></td>
          <td><?php echo "$segundo8"; ?></td>
          <td><?php echo "$segundo9"; ?></td>
          <td><?php echo "$segundo10"; ?></td>
          <td><?php echo "$segundo11"; ?></td>
          <td><?php echo "$segundo12"; ?></td>
          <td><?php echo "$segundo13"; ?></td>
          <td><?php echo "$segundo14"; ?></td>
          <td><?php echo "$segundo15"; ?></td>
          <td><?php echo "$segundo16"; ?></td>
          <td><?php echo "$segundo17"; ?></td>
          <td><?php echo "$segundo18"; ?></td>
          <td><?php echo "$segundo19"; ?></td>
          <td><?php echo "$segundo20"; ?></td>
          <td><?php echo "$segundo21"; ?></td>
          <td><?php echo "$segundo22"; ?></td>
          <td><?php echo "$segundo23"; ?></td>
          <td><?php echo "$segundo24"; ?></td>
          <td><?php echo "$segundo25"; ?></td>
          <td><?php echo "$segundo26"; ?></td>
          <td><?php echo "$segundo27"; ?></td>
          <td><?php echo "$segundo28"; ?></td>
          <td><?php echo "$segundo29"; ?></td>
          <td><?php echo "$segundo30"; ?></td>
          <td><?php echo "$segundo31"; ?></td>
          <td><?php echo "$segundo32"; ?></td>
          <td><?php echo "$segundo33"; ?></td>
          <td><?php echo "$segundo34"; ?></td>
          <td><?php echo "$segundo35"; ?></td>
          <td><?php echo "$segundo36"; ?></td>
        </tr>
        <tr>
          
          <td>3&ordm;</td>
            
          <td><?php echo "$tercero1"; ?></td>
          <td><?php echo "$tercero2"; ?></td>
          <td><?php echo "$tercero3"; ?></td>
          <td><?php echo "$tercero4"; ?></td>
          <td><?php echo "$tercero5"; ?></td>
          <td><?php echo "$tercero6"; ?></td>
          <td><?php echo "$tercero7"; ?></td>
          <td><?php echo "$tercero8"; ?></td>
          <td><?php echo "$tercero9"; ?></td>
          <td><?php echo "$tercero10"; ?></td>
          <td><?php echo "$tercero11"; ?></td>
          <td><?php echo "$tercero12"; ?></td>
          <td><?php echo "$tercero13"; ?></td>
          <td><?php echo "$tercero14"; ?></td>
          <td><?php echo "$tercero15"; ?></td>
          <td><?php echo "$tercero16"; ?></td>
          <td><?php echo "$tercero17"; ?></td>
          <td><?php echo "$tercero18"; ?></td>
          <td><?php echo "$tercero19"; ?></td>
          <td><?php echo "$tercero20"; ?></td>
          <td><?php echo "$tercero21"; ?></td>
          <td><?php echo "$tercero22"; ?></td>
          <td><?php echo "$tercero23"; ?></td>
          <td><?php echo "$tercero24"; ?></td>
          <td><?php echo "$tercero25"; ?></td>
          <td><?php echo "$tercero26"; ?></td>
          <td><?php echo "$tercero27"; ?></td>
          <td><?php echo "$tercero28"; ?></td>
          <td><?php echo "$tercero29"; ?></td>
          <td><?php echo "$tercero30"; ?></td>
          <td><?php echo "$tercero31"; ?></td>
          <td><?php echo "$tercero32"; ?></td>
          <td><?php echo "$tercero33"; ?></td>
          <td><?php echo "$tercero34"; ?></td>
          <td><?php echo "$tercero35"; ?></td>
          <td><?php echo "$tercero36"; ?></td>
        </tr>
        <tr>
        <td>11º</td>
            
          <td><?php echo "$once1"; ?></td>
          <td><?php echo "$once2"; ?></td>
          <td><?php echo "$once3"; ?></td>
          <td><?php echo "$once4"; ?></td>
          <td><?php echo "$once5"; ?></td>
          <td><?php echo "$once6"; ?></td>
          <td><?php echo "$once7"; ?></td>
          <td><?php echo "$once8"; ?></td>
          <td><?php echo "$once9"; ?></td>
          <td><?php echo "$once10"; ?></td>
          <td><?php echo "$once11"; ?></td>
          <td><?php echo "$once12"; ?></td>
          <td><?php echo "$once13"; ?></td>
          <td><?php echo "$once14"; ?></td>
          <td><?php echo "$once15"; ?></td>
          <td><?php echo "$once16"; ?></td>
          <td><?php echo "$once17"; ?></td>
          <td><?php echo "$once18"; ?></td>
          <td><?php echo "$once19"; ?></td>
          <td><?php echo "$once20"; ?></td>
          <td><?php echo "$once21"; ?></td>
          <td><?php echo "$once22"; ?></td>
          <td><?php echo "$once23"; ?></td>
          <td><?php echo "$once24"; ?></td>
          <td><?php echo "$once25"; ?></td>
          <td><?php echo "$once26"; ?></td>
          <td><?php echo "$once27"; ?></td>
          <td><?php echo "$once28"; ?></td>
          <td><?php echo "$once29"; ?></td>
          <td><?php echo "$once30"; ?></td>
          <td><?php echo "$once31"; ?></td>
          <td><?php echo "$once32"; ?></td>
          <td><?php echo "$once33"; ?></td>
          <td><?php echo "$once34"; ?></td>
          <td><?php echo "$once35"; ?></td>
          <td><?php echo "$once36"; ?></td>
        </tr>
        
       <tr>
          <td>Puntos</td>
          <td><?php echo "$puntos1"; ?></td>
          <td><?php echo "$puntos2"; ?></td>
          <td><?php echo "$puntos3"; ?></td>
          <td><?php echo "$puntos4"; ?></td>
          <td><?php echo "$puntos5"; ?></td>
          <td><?php echo "$puntos6"; ?></td>
          <td><?php echo "$puntos7"; ?></td>
          <td><?php echo "$puntos8"; ?></td>
          <td><?php echo "$puntos9"; ?></td>
          <td><?php echo "$puntos10"; ?></td>
          <td><?php echo "$puntos11"; ?></td>
          <td><?php echo "$puntos12"; ?></td>
          <td><?php echo "$puntos13"; ?></td>
          <td><?php echo "$puntos14"; ?></td>
          <td><?php echo "$puntos15"; ?></td>
          <td><?php echo "$puntos16"; ?></td>
          <td><?php echo "$puntos17"; ?></td>
          <td><?php echo "$puntos18"; ?></td>
          <td><?php echo "$puntos19"; ?></td>
          <td><?php echo "$puntos20"; ?></td>
          <td><?php echo "$puntos21"; ?></td>
          <td><?php echo "$puntos22"; ?></td>
          <td><?php echo "$puntos23"; ?></td>
          <td><?php echo "$puntos24"; ?></td>
          <td><?php echo "$puntos25"; ?></td>
          <td><?php echo "$puntos26"; ?></td>
          <td><?php echo "$puntos27"; ?></td>
          <td><?php echo "$puntos28"; ?></td>
          <td><?php echo "$puntos29"; ?></td>
          <td><?php echo "$puntos30"; ?></td>
          <td><?php echo "$puntos31"; ?></td>
          <td><?php echo "$puntos32"; ?></td>
          <td><?php echo "$puntos33"; ?></td>
          <td><?php echo "$puntos34"; ?></td>
          <td><?php echo "$puntos35"; ?></td>
          <td><?php echo "$puntos36"; ?></td>
        </tr>
      </table>
      
    </div>   
    <div color:#2EFEC8;font-weight: bold;font-size: 20px;" id="Moto2Apuestas" class="tab-pane fade">
      <h3 style="font-size: 40px;">MOTO2</h3>
      <div id="Layer2">
  <form id="form2" name="form2" method="post" action="apostarMoto2.php">
    <label for="select">1º-</label>
    <select name="select" id="select">
	<option value="RAF">Raffin 2</option>
	<option value="LOC">Locatelli 5</option>
	<option value="BAL">Baldasarri 7</option>
	<option value="NAV">Navarro 9</option>
	<option value="MAR">Marini 10</option>
	<option value="COR">Cortese 11</option>
	<option value="LUT">Luthi 12</option>
	<option value="SIM">Simeon 19</option>
	<option value="MOR">Morbidelli 21</option>
	<option value="SCH">Schrotter 23</option>
	<option value="COR">Corsi 24</option>
	<option value="LEC">Lecuona 27</option>
	<option value="NAK">Nakagami 30</option>
	<option value="VIN">Viñales 32</option>
	<option value="QUA">Quartararo 40</option>
	<option value="BIN">Binder 41</option>
	<option value="BAG">Bagnaia 42</option>
	<option value="OLI">Oliveira 44</option>
	<option value="NAG">Nagashima 45</option>
	<option value="BAS">Bassani 47</option>
    <option value="APO">A.Pons 49</option>
	<option value="KEN">Kent 52</option>
	<option value="PAS">Passini 54</option>
    <option value="SYA">Syahrin 55</option>
    <option value="EPO">E.Pons 57</option>
    <option value="MAZ">Manzi 62</option>
    <option value="HER">Hernandez 68</option>
    <option value="MAQ">Marquez 73</option>
    <option value="AEG">Aegerter 77</option>
    <option value="GAR">Gardner 87</option>
    <option value="PAW">Pawi 89</option>
    <option value="VIE">Vierge 97</option>
    </select>
    <label for="label">2º-</label>
    <select name="select2" id="label">
	<option value="RAF">Raffin 2</option>
	<option value="LOC">Locatelli 5</option>
	<option value="BAL">Baldasarri 7</option>
	<option value="NAV">Navarro 9</option>
	<option value="MAR">Marini 10</option>
	<option value="COR">Cortese 11</option>
	<option value="LUT">Luthi 12</option>
	<option value="SIM">Simeon 19</option>
	<option value="MOR">Morbidelli 21</option>
	<option value="SCH">Schrotter 23</option>
	<option value="COR">Corsi 24</option>
	<option value="LEC">Lecuona 27</option>
	<option value="NAK">Nakagami 30</option>
	<option value="VIN">Viñales 32</option>
	<option value="QUA">Quartararo 40</option>
	<option value="BIN">Binder 41</option>
	<option value="BAG">Bagnaia 42</option>
	<option value="OLI">Oliveira 44</option>
	<option value="NAG">Nagashima 45</option>
	<option value="BAS">Bassani 47</option>
    <option value="APO">A.Pons 49</option>
	<option value="KEN">Kent 52</option>
	<option value="PAS">Passini 54</option>
    <option value="SYA">Syahrin 55</option>
    <option value="EPO">E.Pons 57</option>
    <option value="MAZ">Manzi 62</option>
    <option value="HER">Hernandez 68</option>
    <option value="MAQ">Marquez 73</option>
    <option value="AEG">Aegerter 77</option>
    <option value="GAR">Gardner 87</option>
    <option value="PAW">Pawi 89</option>
    <option value="VIE">Vierge 97</option>
    </select>
    <label for="label2">3º-</label>
    <select name="select3" id="label2">
	<option value="RAF">Raffin 2</option>
	<option value="LOC">Locatelli 5</option>
	<option value="BAL">Baldasarri 7</option>
	<option value="NAV">Navarro 9</option>
	<option value="MAR">Marini 10</option>
	<option value="COR">Cortese 11</option>
	<option value="LUT">Luthi 12</option>
	<option value="SIM">Simeon 19</option>
	<option value="MOR">Morbidelli 21</option>
	<option value="SCH">Schrotter 23</option>
	<option value="COR">Corsi 24</option>
	<option value="LEC">Lecuona 27</option>
	<option value="NAK">Nakagami 30</option>
	<option value="VIN">Viñales 32</option>
	<option value="QUA">Quartararo 40</option>
	<option value="BIN">Binder 41</option>
	<option value="BAG">Bagnaia 42</option>
	<option value="OLI">Oliveira 44</option>
	<option value="NAG">Nagashima 45</option>
	<option value="BAS">Bassani 47</option>
    <option value="APO">A.Pons 49</option>
	<option value="KEN">Kent 52</option>
	<option value="PAS">Passini 54</option>
    <option value="SYA">Syahrin 55</option>
    <option value="EPO">E.Pons 57</option>
    <option value="MAZ">Manzi 62</option>
    <option value="HER">Hernandez 68</option>
    <option value="MAQ">Marquez 73</option>
    <option value="AEG">Aegerter 77</option>
    <option value="GAR">Gardner 87</option>
    <option value="PAW">Pawi 89</option>
    <option value="VIE">Vierge 97</option>
    </select>
    <label for="label3">11º-</label>
    <select name="select11" id="select11">
	<option value="RAF">Raffin 2</option>
	<option value="LOC">Locatelli 5</option>
	<option value="BAL">Baldasarri 7</option>
	<option value="NAV">Navarro 9</option>
	<option value="MAR">Marini 10</option>
	<option value="COR">Cortese 11</option>
	<option value="LUT">Luthi 12</option>
	<option value="SIM">Simeon 19</option>
	<option value="MOR">Morbidelli 21</option>
	<option value="SCH">Schrotter 23</option>
	<option value="COR">Corsi 24</option>
	<option value="LEC">Lecuona 27</option>
	<option value="NAK">Nakagami 30</option>
	<option value="VIN">Viñales 32</option>
	<option value="QUA">Quartararo 40</option>
	<option value="BIN">Binder 41</option>
	<option value="BAG">Bagnaia 42</option>
	<option value="OLI">Oliveira 44</option>
	<option value="NAG">Nagashima 45</option>
	<option value="BAS">Bassani 47</option>
    <option value="APO">A.Pons 49</option>
	<option value="KEN">Kent 52</option>
	<option value="PAS">Passini 54</option>
    <option value="SYA">Syahrin 55</option>
    <option value="EPO">E.Pons 57</option>
    <option value="MAZ">Manzi 62</option>
    <option value="HER">Hernandez 68</option>
    <option value="MAQ">Marquez 73</option>
    <option value="AEG">Aegerter 77</option>
    <option value="GAR">Gardner 87</option>
    <option value="PAW">Pawi 89</option>
    <option value="VIE">Vierge 97</option>
    </select>
    <label for="Submit"></label>
    <input type="submit" name="Submit" value="Apostar" id="Submit" />
  </form>
</div>
<table style="margin:auto" border="5">
     <tr>
      <td rowspan="8">MOTO2</td>
      <td>&nbsp;</td>
      <td colspan="2">QATAR</td>
      <td colspan="2">ARGENTINA</td>
      <td colspan="2">AMÉRICAS</td>
      <td colspan="2">ESPAÑA</td>
      <td colspan="2">FRANCIA</td>
      <td colspan="2">ITALIA</td>
      <td colspan="2">CATALUÑA</td>
      <td colspan="2">P.BAJOS</td>
      <td colspan="2">ALEMANIA</td>
      <td colspan="2">REP.CHECA</td>
      <td colspan="2">AUSTRIA</td>
      <td colspan="2">GRAN BRETAÑA</td>
      <td colspan="2">SAN MARINO</td>
      <td colspan="2">ARAGÓN</td>
      <td colspan="2">JAPÓN</td>
      <td colspan="2">AUSTRALIA</td>
      <td colspan="2">MALASIA</td>
      <td colspan="2">VALENCIA</td>
      
    </tr>
	<tr>
	  
      <td>&nbsp;</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
	  <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
    </tr>
    <tr>
	<?php
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='1' and categoria='2'") or die("ERROR");
	$row = mysql_fetch_array($result);
	$primero1=$row["primero"];
	$segundo1=$row["segundo"];
	$tercero1=$row["tercero"];
	$once1=$row["once"];
	$puntos1=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='2' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero2=$row["primero"];
	$segundo2=$row["segundo"];
	$tercero2=$row["tercero"];
	$once2=$row["once"];
	$puntos2=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='3' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero3=$row["primero"];
	$segundo3=$row["segundo"];
	$tercero3=$row["tercero"];
	$once3=$row["once"];
	$puntos3=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='4' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero4=$row["primero"];
	$segundo4=$row["segundo"];
	$tercero4=$row["tercero"];
	$once4=$row["once"];
	$puntos4=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='5' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero5=$row["primero"];
	$segundo5=$row["segundo"];
	$tercero5=$row["tercero"];
	$once5=$row["once"];
	$puntos5=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='6' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero6=$row["primero"];
	$segundo6=$row["segundo"];
	$tercero6=$row["tercero"];
	$once6=$row["once"];
	$puntos6=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='7' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero7=$row["primero"];
	$segundo7=$row["segundo"];
	$tercero7=$row["tercero"];
	$once7=$row["once"];
	$puntos7=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='8' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero8=$row["primero"];
	$segundo8=$row["segundo"];
	$tercero8=$row["tercero"];
	$once8=$row["once"];
	$puntos8=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='9' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero9=$row["primero"];
	$segundo9=$row["segundo"];
	$tercero9=$row["tercero"];
	$once9=$row["once"];
	$puntos9=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='10' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero10=$row["primero"];
	$segundo10=$row["segundo"];
	$tercero10=$row["tercero"];
	$once10=$row["once"];
	$puntos10=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='11' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero11=$row["primero"];
	$segundo11=$row["segundo"];
	$tercero11=$row["tercero"];
	$once11=$row["once"];
	$puntos11=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='12' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero12=$row["primero"];
	$segundo12=$row["segundo"];
	$tercero12=$row["tercero"];
	$once12=$row["once"];
	$puntos12=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='13' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero13=$row["primero"];
	$segundo13=$row["segundo"];
	$tercero13=$row["tercero"];
	$once13=$row["once"];
	$puntos13=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='14' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero14=$row["primero"];
	$segundo14=$row["segundo"];
	$tercero14=$row["tercero"];
	$once14=$row["once"];
	$puntos14=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='15' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero15=$row["primero"];
	$segundo15=$row["segundo"];
	$tercero15=$row["tercero"];
	$once15=$row["once"];
	$puntos15=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='16' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero16=$row["primero"];
	$segundo16=$row["segundo"];
	$tercero16=$row["tercero"];
	$once16=$row["once"];
	$puntos16=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='17' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero17=$row["primero"];
	$segundo17=$row["segundo"];
	$tercero17=$row["tercero"];
	$once17=$row["once"];
	$puntos17=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='18' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero18=$row["primero"];
	$segundo18=$row["segundo"];
	$tercero18=$row["tercero"];
	$once18=$row["once"];
	$puntos18=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='19' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero19=$row["primero"];
	$segundo19=$row["segundo"];
	$tercero19=$row["tercero"];
	$once19=$row["once"];
	$puntos19=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='20' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero20=$row["primero"];
	$segundo20=$row["segundo"];
	$tercero20=$row["tercero"];
	$once20=$row["once"];
	$puntos20=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='21' and categoria='2'") or die("ERROR");
	$row = mysql_fetch_array($result);
	$primero21=$row["primero"];
	$segundo21=$row["segundo"];
	$tercero21=$row["tercero"];
	$once21=$row["once"];
	$puntos21=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='22' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero22=$row["primero"];
	$segundo22=$row["segundo"];
	$tercero22=$row["tercero"];
	$once22=$row["once"];
	$puntos22=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='23' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero23=$row["primero"];
	$segundo23=$row["segundo"];
	$tercero23=$row["tercero"];
	$once23=$row["once"];
	$puntos23=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='24' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero24=$row["primero"];
	$segundo24=$row["segundo"];
	$tercero24=$row["tercero"];
	$once24=$row["once"];
	$puntos24=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='25' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero25=$row["primero"];
	$segundo25=$row["segundo"];
	$tercero25=$row["tercero"];
	$once25=$row["once"];
	$puntos25=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='26' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero26=$row["primero"];
	$segundo26=$row["segundo"];
	$tercero26=$row["tercero"];
	$once26=$row["once"];
	$puntos26=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='27' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero27=$row["primero"];
	$segundo27=$row["segundo"];
	$tercero27=$row["tercero"];
	$once27=$row["once"];
	$puntos27=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='28' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero28=$row["primero"];
	$segundo28=$row["segundo"];
	$tercero28=$row["tercero"];
	$once28=$row["once"];
	$puntos28=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='29' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero29=$row["primero"];
	$segundo29=$row["segundo"];
	$tercero29=$row["tercero"];
	$once29=$row["once"];
	$puntos29=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='30' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero30=$row["primero"];
	$segundo30=$row["segundo"];
	$tercero30=$row["tercero"];
	$once30=$row["once"];
	$puntos30=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='31' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero31=$row["primero"];
	$segundo31=$row["segundo"];
	$tercero31=$row["tercero"];
	$once31=$row["once"];
	$puntos31=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='32' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero32=$row["primero"];
	$segundo32=$row["segundo"];
	$tercero32=$row["tercero"];
	$once32=$row["once"];
	$puntos32=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='33' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero33=$row["primero"];
	$segundo33=$row["segundo"];
	$tercero33=$row["tercero"];
	$once33=$row["once"];
	$puntos33=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='34' and categoria='1'");
	$row = mysql_fetch_array($result);
	$primero34=$row["primero"];
	$segundo34=$row["segundo"];
	$tercero34=$row["tercero"];
	$once34=$row["once"];
	$puntos34=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='35' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero35=$row["primero"];
	$segundo35=$row["segundo"];
	$tercero35=$row["tercero"];
	$once35=$row["once"];
	$puntos35=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='36' and categoria='2'");
	$row = mysql_fetch_array($result);
	$primero36=$row["primero"];
	$segundo36=$row["segundo"];
	$tercero36=$row["tercero"];
	$once36=$row["once"];
	$puntos36=$row["puntos"];
		
	?>
      
      <td>1&ordm;</td>
      <td><?php echo "$primero1"; ?></td>
      <td><?php echo "$primero2"; ?></td>
      <td><?php echo "$primero3"; ?></td>
      <td><?php echo "$primero4"; ?></td>
      <td><?php echo "$primero5"; ?></td>
      <td><?php echo "$primero6"; ?></td>
      <td><?php echo "$primero7"; ?></td>
      <td><?php echo "$primero8"; ?></td>
      <td><?php echo "$primero9"; ?></td>
      <td><?php echo "$primero10"; ?></td>
	  <td><?php echo "$primero11"; ?></td>
      <td><?php echo "$primero12"; ?></td>
      <td><?php echo "$primero13"; ?></td>
      <td><?php echo "$primero14"; ?></td>
      <td><?php echo "$primero15"; ?></td>
      <td><?php echo "$primero16"; ?></td>
      <td><?php echo "$primero17"; ?></td>
      <td><?php echo "$primero18"; ?></td>
      <td><?php echo "$primero19"; ?></td>
      <td><?php echo "$primero20"; ?></td>
	  <td><?php echo "$primero21"; ?></td>
      <td><?php echo "$primero22"; ?></td>
      <td><?php echo "$primero23"; ?></td>
      <td><?php echo "$primero24"; ?></td>
      <td><?php echo "$primero25"; ?></td>
      <td><?php echo "$primero26"; ?></td>
      <td><?php echo "$primero27"; ?></td>
      <td><?php echo "$primero28"; ?></td>
      <td><?php echo "$primero29"; ?></td>
      <td><?php echo "$primero30"; ?></td>
	  <td><?php echo "$primero31"; ?></td>
      <td><?php echo "$primero32"; ?></td>
      <td><?php echo "$primero33"; ?></td>
      <td><?php echo "$primero34"; ?></td>
      <td><?php echo "$primero35"; ?></td>
      <td><?php echo "$primero36"; ?></td>
    </tr>
    <tr>
      
      <td>2&ordm;</td>
      <td><?php echo "$segundo1"; ?></td>
      <td><?php echo "$segundo2"; ?></td>
      <td><?php echo "$segundo3"; ?></td>
      <td><?php echo "$segundo4"; ?></td>
      <td><?php echo "$segundo5"; ?></td>
      <td><?php echo "$segundo6"; ?></td>
      <td><?php echo "$segundo7"; ?></td>
      <td><?php echo "$segundo8"; ?></td>
      <td><?php echo "$segundo9"; ?></td>
      <td><?php echo "$segundo10"; ?></td>
	  <td><?php echo "$segundo11"; ?></td>
      <td><?php echo "$segundo12"; ?></td>
      <td><?php echo "$segundo13"; ?></td>
      <td><?php echo "$segundo14"; ?></td>
      <td><?php echo "$segundo15"; ?></td>
      <td><?php echo "$segundo16"; ?></td>
      <td><?php echo "$segundo17"; ?></td>
      <td><?php echo "$segundo18"; ?></td>
      <td><?php echo "$segundo19"; ?></td>
      <td><?php echo "$segundo20"; ?></td>
	  <td><?php echo "$segundo21"; ?></td>
      <td><?php echo "$segundo22"; ?></td>
      <td><?php echo "$segundo23"; ?></td>
      <td><?php echo "$segundo24"; ?></td>
      <td><?php echo "$segundo25"; ?></td>
      <td><?php echo "$segundo26"; ?></td>
      <td><?php echo "$segundo27"; ?></td>
      <td><?php echo "$segundo28"; ?></td>
      <td><?php echo "$segundo29"; ?></td>
      <td><?php echo "$segundo30"; ?></td>
	  <td><?php echo "$segundo31"; ?></td>
      <td><?php echo "$segundo32"; ?></td>
      <td><?php echo "$segundo33"; ?></td>
      <td><?php echo "$segundo34"; ?></td>
      <td><?php echo "$segundo35"; ?></td>
      <td><?php echo "$segundo36"; ?></td>
    </tr>
    <tr>
      
      <td>3&ordm;</td>
     	
	  <td><?php echo "$tercero1"; ?></td>
      <td><?php echo "$tercero2"; ?></td>
      <td><?php echo "$tercero3"; ?></td>
      <td><?php echo "$tercero4"; ?></td>
      <td><?php echo "$tercero5"; ?></td>
      <td><?php echo "$tercero6"; ?></td>
      <td><?php echo "$tercero7"; ?></td>
      <td><?php echo "$tercero8"; ?></td>
      <td><?php echo "$tercero9"; ?></td>
      <td><?php echo "$tercero10"; ?></td>
	  <td><?php echo "$tercero11"; ?></td>
      <td><?php echo "$tercero12"; ?></td>
      <td><?php echo "$tercero13"; ?></td>
      <td><?php echo "$tercero14"; ?></td>
      <td><?php echo "$tercero15"; ?></td>
      <td><?php echo "$tercero16"; ?></td>
      <td><?php echo "$tercero17"; ?></td>
      <td><?php echo "$tercero18"; ?></td>
      <td><?php echo "$tercero19"; ?></td>
      <td><?php echo "$tercero20"; ?></td>
	  <td><?php echo "$tercero21"; ?></td>
      <td><?php echo "$tercero22"; ?></td>
      <td><?php echo "$tercero23"; ?></td>
      <td><?php echo "$tercero24"; ?></td>
      <td><?php echo "$tercero25"; ?></td>
      <td><?php echo "$tercero26"; ?></td>
      <td><?php echo "$tercero27"; ?></td>
      <td><?php echo "$tercero28"; ?></td>
      <td><?php echo "$tercero29"; ?></td>
      <td><?php echo "$tercero30"; ?></td>
	  <td><?php echo "$tercero31"; ?></td>
      <td><?php echo "$tercero32"; ?></td>
      <td><?php echo "$tercero33"; ?></td>
      <td><?php echo "$tercero34"; ?></td>
      <td><?php echo "$tercero35"; ?></td>
      <td><?php echo "$tercero36"; ?></td>
    </tr>
	<tr>
	<td>11º</td>
		
	  <td><?php echo "$once1"; ?></td>
      <td><?php echo "$once2"; ?></td>
      <td><?php echo "$once3"; ?></td>
      <td><?php echo "$once4"; ?></td>
      <td><?php echo "$once5"; ?></td>
      <td><?php echo "$once6"; ?></td>
      <td><?php echo "$once7"; ?></td>
      <td><?php echo "$once8"; ?></td>
      <td><?php echo "$once9"; ?></td>
      <td><?php echo "$once10"; ?></td>
	  <td><?php echo "$once11"; ?></td>
      <td><?php echo "$once12"; ?></td>
      <td><?php echo "$once13"; ?></td>
      <td><?php echo "$once14"; ?></td>
      <td><?php echo "$once15"; ?></td>
      <td><?php echo "$once16"; ?></td>
      <td><?php echo "$once17"; ?></td>
      <td><?php echo "$once18"; ?></td>
      <td><?php echo "$once19"; ?></td>
      <td><?php echo "$once20"; ?></td>
	  <td><?php echo "$once21"; ?></td>
      <td><?php echo "$once22"; ?></td>
      <td><?php echo "$once23"; ?></td>
      <td><?php echo "$once24"; ?></td>
      <td><?php echo "$once25"; ?></td>
      <td><?php echo "$once26"; ?></td>
      <td><?php echo "$once27"; ?></td>
      <td><?php echo "$once28"; ?></td>
      <td><?php echo "$once29"; ?></td>
      <td><?php echo "$once30"; ?></td>
	  <td><?php echo "$once31"; ?></td>
      <td><?php echo "$once32"; ?></td>
      <td><?php echo "$once33"; ?></td>
      <td><?php echo "$once34"; ?></td>
      <td><?php echo "$once35"; ?></td>
      <td><?php echo "$once36"; ?></td>
	</tr>
	
   <tr>
      <td>Puntos</td>
      <td><?php echo "$puntos1"; ?></td>
      <td><?php echo "$puntos2"; ?></td>
      <td><?php echo "$puntos3"; ?></td>
      <td><?php echo "$puntos4"; ?></td>
      <td><?php echo "$puntos5"; ?></td>
      <td><?php echo "$puntos6"; ?></td>
      <td><?php echo "$puntos7"; ?></td>
      <td><?php echo "$puntos8"; ?></td>
      <td><?php echo "$puntos9"; ?></td>
      <td><?php echo "$puntos10"; ?></td>
	  <td><?php echo "$puntos11"; ?></td>
      <td><?php echo "$puntos12"; ?></td>
      <td><?php echo "$puntos13"; ?></td>
      <td><?php echo "$puntos14"; ?></td>
      <td><?php echo "$puntos15"; ?></td>
      <td><?php echo "$puntos16"; ?></td>
      <td><?php echo "$puntos17"; ?></td>
      <td><?php echo "$puntos18"; ?></td>
      <td><?php echo "$puntos19"; ?></td>
      <td><?php echo "$puntos20"; ?></td>
	  <td><?php echo "$puntos21"; ?></td>
      <td><?php echo "$puntos22"; ?></td>
      <td><?php echo "$puntos23"; ?></td>
      <td><?php echo "$puntos24"; ?></td>
      <td><?php echo "$puntos25"; ?></td>
      <td><?php echo "$puntos26"; ?></td>
      <td><?php echo "$puntos27"; ?></td>
      <td><?php echo "$puntos28"; ?></td>
      <td><?php echo "$puntos29"; ?></td>
      <td><?php echo "$puntos30"; ?></td>
	  <td><?php echo "$puntos31"; ?></td>
      <td><?php echo "$puntos32"; ?></td>
      <td><?php echo "$puntos33"; ?></td>
      <td><?php echo "$puntos34"; ?></td>
      <td><?php echo "$puntos35"; ?></td>
      <td><?php echo "$puntos36"; ?></td>
    </tr>
  </table>
</div>   
<!--MOTO3-->
    <div color:#2EFEC8;font-weight: bold;font-size: 20px;" id="Moto3Apuestas" class="tab-pane fade">
      <h3 style="font-size: 40px;">MOTO2</h3>
      <div id="Layer2">
  <form id="form3" name="form3" method="post" action="apostarMoto3.php">
    <label for="select">1º-</label>
    <select name="select" id="select">
	<option value="PUL">Pulkkinen 4</option>
	<option value="FEN">Fenati 5</option>
	<option value="HER">Herrera 6</option>
	<option value="NOR">Norrodin 7</option>
	<option value="BUL">Bulega 8</option>
	<option value="LOI">Loi 11</option>
	<option value="BEZ">Bezzechi 12</option>
	<option value="ARB">Arbolino 14</option>
	<option value="MIG">Migno 16</option>
	<option value="MCP">Mcphee 17</option>
    <option value="ROD">Rodrigo 97</option>
    <option value="DIG">Di Giannantonio 21</option>
    <option value="ANT">Antonelli 23</option>
	<option value="SUZ">Suzuki 24</option>
	<option value="TOB">Toba 27</option>
	<option value="BAS">Bastianini 33</option>
	<option value="MIR">Mir 36</option>
	<option value="BID">Binder 40</option>
	<option value="ATI">Atiratphuvapat 41</option>
	<option value="RAM">Ramirez 42</option>
	<option value="CAN">Canet 44</option>
	<option value="DPO">Dalla Porta 48</option>
	<option value="GUE">Guevara 58</option>
    <option value="BEN">Bendsneyder 64</option>
	<option value="GET">Getti 65</option>
	<option value="SAS">Sasaki 71</option>
    <option value="ARE">Arenas 75</option>
    <option value="KOR">Kornfeil 84</option>
    <option value="MAR">Martin 88</option>
    <option value="DAN">Danilo 95</option>
    <option value="PAG">Pagliani 96</option>
    </select>
    <label for="label">2º-</label>
    <select name="select2" id="label">
	<option value="PUL">Pulkkinen 4</option>
	<option value="FEN">Fenati 5</option>
	<option value="HER">Herrera 6</option>
	<option value="NOR">Norrodin 7</option>
	<option value="BUL">Bulega 8</option>
	<option value="LOI">Loi 11</option>
	<option value="BEZ">Bezzechi 12</option>
	<option value="ARB">Arbolino 14</option>
	<option value="MIG">Migno 16</option>
	<option value="MCP">Mcphee 17</option>
    <option value="ROD">Rodrigo 97</option>
    <option value="DIG">Di Giannantonio 21</option>
    <option value="ANT">Antonelli 23</option>
	<option value="SUZ">Suzuki 24</option>
	<option value="TOB">Toba 27</option>
	<option value="BAS">Bastianini 33</option>
	<option value="MIR">Mir 36</option>
	<option value="BID">Binder 40</option>
	<option value="ATI">Atiratphuvapat 41</option>
	<option value="RAM">Ramirez 42</option>
	<option value="CAN">Canet 44</option>
	<option value="DPO">Dalla Porta 48</option>
	<option value="GUE">Guevara 58</option>
    <option value="BEN">Bendsneyder 64</option>
	<option value="GET">Getti 65</option>
	<option value="SAS">Sasaki 71</option>
    <option value="ARE">Arenas 75</option>
    <option value="KOR">Kornfeil 84</option>
    <option value="MAR">Martin 88</option>
    <option value="DAN">Danilo 95</option>
    <option value="PAG">Pagliani 96</option>
    </select>
    <label for="label2">3º-</label>
    <select name="select3" id="label2">
	<option value="PUL">Pulkkinen 4</option>
	<option value="FEN">Fenati 5</option>
	<option value="HER">Herrera 6</option>
	<option value="NOR">Norrodin 7</option>
	<option value="BUL">Bulega 8</option>
	<option value="LOI">Loi 11</option>
	<option value="BEZ">Bezzechi 12</option>
	<option value="ARB">Arbolino 14</option>
	<option value="MIG">Migno 16</option>
	<option value="MCP">Mcphee 17</option>
    <option value="ROD">Rodrigo 97</option>
    <option value="DIG">Di Giannantonio 21</option>
    <option value="ANT">Antonelli 23</option>
	<option value="SUZ">Suzuki 24</option>
	<option value="TOB">Toba 27</option>
	<option value="BAS">Bastianini 33</option>
	<option value="MIR">Mir 36</option>
	<option value="BID">Binder 40</option>
	<option value="ATI">Atiratphuvapat 41</option>
	<option value="RAM">Ramirez 42</option>
	<option value="CAN">Canet 44</option>
	<option value="DPO">Dalla Porta 48</option>
	<option value="GUE">Guevara 58</option>
    <option value="BEN">Bendsneyder 64</option>
	<option value="GET">Getti 65</option>
	<option value="SAS">Sasaki 71</option>
    <option value="ARE">Arenas 75</option>
    <option value="KOR">Kornfeil 84</option>
    <option value="MAR">Martin 88</option>
    <option value="DAN">Danilo 95</option>
    <option value="PAG">Pagliani 96</option>
    </select>
    <label for="label3">11º-</label>
    <select name="select11" id="select11">
	<option value="PUL">Pulkkinen 4</option>
	<option value="FEN">Fenati 5</option>
	<option value="HER">Herrera 6</option>
	<option value="NOR">Norrodin 7</option>
	<option value="BUL">Bulega 8</option>
	<option value="LOI">Loi 11</option>
	<option value="BEZ">Bezzechi 12</option>
	<option value="ARB">Arbolino 14</option>
	<option value="MIG">Migno 16</option>
	<option value="MCP">Mcphee 17</option>
    <option value="ROD">Rodrigo 97</option>
    <option value="DIG">Di Giannantonio 21</option>
    <option value="ANT">Antonelli 23</option>
	<option value="SUZ">Suzuki 24</option>
	<option value="TOB">Toba 27</option>
	<option value="BAS">Bastianini 33</option>
	<option value="MIR">Mir 36</option>
	<option value="BID">Binder 40</option>
	<option value="ATI">Atiratphuvapat 41</option>
	<option value="RAM">Ramirez 42</option>
	<option value="CAN">Canet 44</option>
	<option value="DPO">Dalla Porta 48</option>
	<option value="GUE">Guevara 58</option>
    <option value="BEN">Bendsneyder 64</option>
	<option value="GET">Getti 65</option>
	<option value="SAS">Sasaki 71</option>
    <option value="ARE">Arenas 75</option>
    <option value="KOR">Kornfeil 84</option>
    <option value="MAR">Martin 88</option>
    <option value="DAN">Danilo 95</option>
    <option value="PAG">Pagliani 96</option>
    </select>
    <label for="Submit"></label>
    <input type="submit" name="Submit" value="Apostar" id="Submit" />
  </form>
</div>
<table style="margin:auto" border="5">
     <tr>
      <td rowspan="8">MOTO3</td>
      <td>&nbsp;</td>
      <td colspan="2">QATAR</td>
      <td colspan="2">ARGENTINA</td>
      <td colspan="2">AMÉRICAS</td>
      <td colspan="2">ESPAÑA</td>
      <td colspan="2">FRANCIA</td>
      <td colspan="2">ITALIA</td>
      <td colspan="2">CATALUÑA</td>
      <td colspan="2">P.BAJOS</td>
      <td colspan="2">ALEMANIA</td>
      <td colspan="2">REP.CHECA</td>
      <td colspan="2">AUSTRIA</td>
      <td colspan="2">GRAN BRETAÑA</td>
      <td colspan="2">SAN MARINO</td>
      <td colspan="2">ARAGÓN</td>
      <td colspan="2">JAPÓN</td>
      <td colspan="2">AUSTRALIA</td>
      <td colspan="2">MALASIA</td>
      <td colspan="2">VALENCIA</td>
      
    </tr>
	<tr>
	  
      <td>&nbsp;</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
	  <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
      <td width="50px">Q</td>
      <td width="50px">R</td>
    </tr>
    <tr>
	<?php
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='1' and categoria='3'") or die("ERROR");
	$row = mysql_fetch_array($result);
	$primero1=$row["primero"];
	$segundo1=$row["segundo"];
	$tercero1=$row["tercero"];
	$once1=$row["once"];
	$puntos1=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='2' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero2=$row["primero"];
	$segundo2=$row["segundo"];
	$tercero2=$row["tercero"];
	$once2=$row["once"];
	$puntos2=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='3' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero3=$row["primero"];
	$segundo3=$row["segundo"];
	$tercero3=$row["tercero"];
	$once3=$row["once"];
	$puntos3=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='4' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero4=$row["primero"];
	$segundo4=$row["segundo"];
	$tercero4=$row["tercero"];
	$once4=$row["once"];
	$puntos4=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='5' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero5=$row["primero"];
	$segundo5=$row["segundo"];
	$tercero5=$row["tercero"];
	$once5=$row["once"];
	$puntos5=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='6' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero6=$row["primero"];
	$segundo6=$row["segundo"];
	$tercero6=$row["tercero"];
	$once6=$row["once"];
	$puntos6=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='7' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero7=$row["primero"];
	$segundo7=$row["segundo"];
	$tercero7=$row["tercero"];
	$once7=$row["once"];
	$puntos7=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='8' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero8=$row["primero"];
	$segundo8=$row["segundo"];
	$tercero8=$row["tercero"];
	$once8=$row["once"];
	$puntos8=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='9' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero9=$row["primero"];
	$segundo9=$row["segundo"];
	$tercero9=$row["tercero"];
	$once9=$row["once"];
	$puntos9=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='10' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero10=$row["primero"];
	$segundo10=$row["segundo"];
	$tercero10=$row["tercero"];
	$once10=$row["once"];
	$puntos10=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='11' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero11=$row["primero"];
	$segundo11=$row["segundo"];
	$tercero11=$row["tercero"];
	$once11=$row["once"];
	$puntos11=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='12' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero12=$row["primero"];
	$segundo12=$row["segundo"];
	$tercero12=$row["tercero"];
	$once12=$row["once"];
	$puntos12=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='13' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero13=$row["primero"];
	$segundo13=$row["segundo"];
	$tercero13=$row["tercero"];
	$once13=$row["once"];
	$puntos13=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='14' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero14=$row["primero"];
	$segundo14=$row["segundo"];
	$tercero14=$row["tercero"];
	$once14=$row["once"];
	$puntos14=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='15' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero15=$row["primero"];
	$segundo15=$row["segundo"];
	$tercero15=$row["tercero"];
	$once15=$row["once"];
	$puntos15=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='16' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero16=$row["primero"];
	$segundo16=$row["segundo"];
	$tercero16=$row["tercero"];
	$once16=$row["once"];
	$puntos16=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='17' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero17=$row["primero"];
	$segundo17=$row["segundo"];
	$tercero17=$row["tercero"];
	$once17=$row["once"];
	$puntos17=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='18' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero18=$row["primero"];
	$segundo18=$row["segundo"];
	$tercero18=$row["tercero"];
	$once18=$row["once"];
	$puntos18=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='19' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero19=$row["primero"];
	$segundo19=$row["segundo"];
	$tercero19=$row["tercero"];
	$once19=$row["once"];
	$puntos19=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='20' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero20=$row["primero"];
	$segundo20=$row["segundo"];
	$tercero20=$row["tercero"];
	$once20=$row["once"];
	$puntos20=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='21' and categoria='3'") or die("ERROR");
	$row = mysql_fetch_array($result);
	$primero21=$row["primero"];
	$segundo21=$row["segundo"];
	$tercero21=$row["tercero"];
	$once21=$row["once"];
	$puntos21=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='22' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero22=$row["primero"];
	$segundo22=$row["segundo"];
	$tercero22=$row["tercero"];
	$once22=$row["once"];
	$puntos22=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='23' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero23=$row["primero"];
	$segundo23=$row["segundo"];
	$tercero23=$row["tercero"];
	$once23=$row["once"];
	$puntos23=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='24' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero24=$row["primero"];
	$segundo24=$row["segundo"];
	$tercero24=$row["tercero"];
	$once24=$row["once"];
	$puntos24=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='25' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero25=$row["primero"];
	$segundo25=$row["segundo"];
	$tercero25=$row["tercero"];
	$once25=$row["once"];
	$puntos25=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='26' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero26=$row["primero"];
	$segundo26=$row["segundo"];
	$tercero26=$row["tercero"];
	$once26=$row["once"];
	$puntos26=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='27' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero27=$row["primero"];
	$segundo27=$row["segundo"];
	$tercero27=$row["tercero"];
	$once27=$row["once"];
	$puntos27=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='28' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero28=$row["primero"];
	$segundo28=$row["segundo"];
	$tercero28=$row["tercero"];
	$once28=$row["once"];
	$puntos28=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='29' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero29=$row["primero"];
	$segundo29=$row["segundo"];
	$tercero29=$row["tercero"];
	$once29=$row["once"];
	$puntos29=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='30' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero30=$row["primero"];
	$segundo30=$row["segundo"];
	$tercero30=$row["tercero"];
	$once30=$row["once"];
	$puntos30=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='31' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero31=$row["primero"];
	$segundo31=$row["segundo"];
	$tercero31=$row["tercero"];
	$once31=$row["once"];
	$puntos31=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='32' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero32=$row["primero"];
	$segundo32=$row["segundo"];
	$tercero32=$row["tercero"];
	$once32=$row["once"];
	$puntos32=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='33' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero33=$row["primero"];
	$segundo33=$row["segundo"];
	$tercero33=$row["tercero"];
	$once33=$row["once"];
	$puntos33=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='34' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero34=$row["primero"];
	$segundo34=$row["segundo"];
	$tercero34=$row["tercero"];
	$once34=$row["once"];
	$puntos34=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='35' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero35=$row["primero"];
	$segundo35=$row["segundo"];
	$tercero35=$row["tercero"];
	$once35=$row["once"];
	$puntos35=$row["puntos"];
	
	$result = mysql_query("SELECT * FROM apuestas WHERE idU = '$usuario' and sesion='36' and categoria='3'");
	$row = mysql_fetch_array($result);
	$primero36=$row["primero"];
	$segundo36=$row["segundo"];
	$tercero36=$row["tercero"];
	$once36=$row["once"];
	$puntos36=$row["puntos"];
		
	?>
      
      <td>1&ordm;</td>
      <td><?php echo "$primero1"; ?></td>
      <td><?php echo "$primero2"; ?></td>
      <td><?php echo "$primero3"; ?></td>
      <td><?php echo "$primero4"; ?></td>
      <td><?php echo "$primero5"; ?></td>
      <td><?php echo "$primero6"; ?></td>
      <td><?php echo "$primero7"; ?></td>
      <td><?php echo "$primero8"; ?></td>
      <td><?php echo "$primero9"; ?></td>
      <td><?php echo "$primero10"; ?></td>
	  <td><?php echo "$primero11"; ?></td>
      <td><?php echo "$primero12"; ?></td>
      <td><?php echo "$primero13"; ?></td>
      <td><?php echo "$primero14"; ?></td>
      <td><?php echo "$primero15"; ?></td>
      <td><?php echo "$primero16"; ?></td>
      <td><?php echo "$primero17"; ?></td>
      <td><?php echo "$primero18"; ?></td>
      <td><?php echo "$primero19"; ?></td>
      <td><?php echo "$primero20"; ?></td>
	  <td><?php echo "$primero21"; ?></td>
      <td><?php echo "$primero22"; ?></td>
      <td><?php echo "$primero23"; ?></td>
      <td><?php echo "$primero24"; ?></td>
      <td><?php echo "$primero25"; ?></td>
      <td><?php echo "$primero26"; ?></td>
      <td><?php echo "$primero27"; ?></td>
      <td><?php echo "$primero28"; ?></td>
      <td><?php echo "$primero29"; ?></td>
      <td><?php echo "$primero30"; ?></td>
	  <td><?php echo "$primero31"; ?></td>
      <td><?php echo "$primero32"; ?></td>
      <td><?php echo "$primero33"; ?></td>
      <td><?php echo "$primero34"; ?></td>
      <td><?php echo "$primero35"; ?></td>
      <td><?php echo "$primero36"; ?></td>
    </tr>
    <tr>
      
      <td>2&ordm;</td>
      <td><?php echo "$segundo1"; ?></td>
      <td><?php echo "$segundo2"; ?></td>
      <td><?php echo "$segundo3"; ?></td>
      <td><?php echo "$segundo4"; ?></td>
      <td><?php echo "$segundo5"; ?></td>
      <td><?php echo "$segundo6"; ?></td>
      <td><?php echo "$segundo7"; ?></td>
      <td><?php echo "$segundo8"; ?></td>
      <td><?php echo "$segundo9"; ?></td>
      <td><?php echo "$segundo10"; ?></td>
	  <td><?php echo "$segundo11"; ?></td>
      <td><?php echo "$segundo12"; ?></td>
      <td><?php echo "$segundo13"; ?></td>
      <td><?php echo "$segundo14"; ?></td>
      <td><?php echo "$segundo15"; ?></td>
      <td><?php echo "$segundo16"; ?></td>
      <td><?php echo "$segundo17"; ?></td>
      <td><?php echo "$segundo18"; ?></td>
      <td><?php echo "$segundo19"; ?></td>
      <td><?php echo "$segundo20"; ?></td>
	  <td><?php echo "$segundo21"; ?></td>
      <td><?php echo "$segundo22"; ?></td>
      <td><?php echo "$segundo23"; ?></td>
      <td><?php echo "$segundo24"; ?></td>
      <td><?php echo "$segundo25"; ?></td>
      <td><?php echo "$segundo26"; ?></td>
      <td><?php echo "$segundo27"; ?></td>
      <td><?php echo "$segundo28"; ?></td>
      <td><?php echo "$segundo29"; ?></td>
      <td><?php echo "$segundo30"; ?></td>
	  <td><?php echo "$segundo31"; ?></td>
      <td><?php echo "$segundo32"; ?></td>
      <td><?php echo "$segundo33"; ?></td>
      <td><?php echo "$segundo34"; ?></td>
      <td><?php echo "$segundo35"; ?></td>
      <td><?php echo "$segundo36"; ?></td>
    </tr>
    <tr>
      
      <td>3&ordm;</td>
     	
	  <td><?php echo "$tercero1"; ?></td>
      <td><?php echo "$tercero2"; ?></td>
      <td><?php echo "$tercero3"; ?></td>
      <td><?php echo "$tercero4"; ?></td>
      <td><?php echo "$tercero5"; ?></td>
      <td><?php echo "$tercero6"; ?></td>
      <td><?php echo "$tercero7"; ?></td>
      <td><?php echo "$tercero8"; ?></td>
      <td><?php echo "$tercero9"; ?></td>
      <td><?php echo "$tercero10"; ?></td>
	  <td><?php echo "$tercero11"; ?></td>
      <td><?php echo "$tercero12"; ?></td>
      <td><?php echo "$tercero13"; ?></td>
      <td><?php echo "$tercero14"; ?></td>
      <td><?php echo "$tercero15"; ?></td>
      <td><?php echo "$tercero16"; ?></td>
      <td><?php echo "$tercero17"; ?></td>
      <td><?php echo "$tercero18"; ?></td>
      <td><?php echo "$tercero19"; ?></td>
      <td><?php echo "$tercero20"; ?></td>
	  <td><?php echo "$tercero21"; ?></td>
      <td><?php echo "$tercero22"; ?></td>
      <td><?php echo "$tercero23"; ?></td>
      <td><?php echo "$tercero24"; ?></td>
      <td><?php echo "$tercero25"; ?></td>
      <td><?php echo "$tercero26"; ?></td>
      <td><?php echo "$tercero27"; ?></td>
      <td><?php echo "$tercero28"; ?></td>
      <td><?php echo "$tercero29"; ?></td>
      <td><?php echo "$tercero30"; ?></td>
	  <td><?php echo "$tercero31"; ?></td>
      <td><?php echo "$tercero32"; ?></td>
      <td><?php echo "$tercero33"; ?></td>
      <td><?php echo "$tercero34"; ?></td>
      <td><?php echo "$tercero35"; ?></td>
      <td><?php echo "$tercero36"; ?></td>
    </tr>
	<tr>
	<td>11º</td>
		
	  <td><?php echo "$once1"; ?></td>
      <td><?php echo "$once2"; ?></td>
      <td><?php echo "$once3"; ?></td>
      <td><?php echo "$once4"; ?></td>
      <td><?php echo "$once5"; ?></td>
      <td><?php echo "$once6"; ?></td>
      <td><?php echo "$once7"; ?></td>
      <td><?php echo "$once8"; ?></td>
      <td><?php echo "$once9"; ?></td>
      <td><?php echo "$once10"; ?></td>
	  <td><?php echo "$once11"; ?></td>
      <td><?php echo "$once12"; ?></td>
      <td><?php echo "$once13"; ?></td>
      <td><?php echo "$once14"; ?></td>
      <td><?php echo "$once15"; ?></td>
      <td><?php echo "$once16"; ?></td>
      <td><?php echo "$once17"; ?></td>
      <td><?php echo "$once18"; ?></td>
      <td><?php echo "$once19"; ?></td>
      <td><?php echo "$once20"; ?></td>
	  <td><?php echo "$once21"; ?></td>
      <td><?php echo "$once22"; ?></td>
      <td><?php echo "$once23"; ?></td>
      <td><?php echo "$once24"; ?></td>
      <td><?php echo "$once25"; ?></td>
      <td><?php echo "$once26"; ?></td>
      <td><?php echo "$once27"; ?></td>
      <td><?php echo "$once28"; ?></td>
      <td><?php echo "$once29"; ?></td>
      <td><?php echo "$once30"; ?></td>
	  <td><?php echo "$once31"; ?></td>
      <td><?php echo "$once32"; ?></td>
      <td><?php echo "$once33"; ?></td>
      <td><?php echo "$once34"; ?></td>
      <td><?php echo "$once35"; ?></td>
      <td><?php echo "$once36"; ?></td>
	</tr>
	
   <tr>
      <td>Puntos</td>
      <td><?php echo "$puntos1"; ?></td>
      <td><?php echo "$puntos2"; ?></td>
      <td><?php echo "$puntos3"; ?></td>
      <td><?php echo "$puntos4"; ?></td>
      <td><?php echo "$puntos5"; ?></td>
      <td><?php echo "$puntos6"; ?></td>
      <td><?php echo "$puntos7"; ?></td>
      <td><?php echo "$puntos8"; ?></td>
      <td><?php echo "$puntos9"; ?></td>
      <td><?php echo "$puntos10"; ?></td>
	  <td><?php echo "$puntos11"; ?></td>
      <td><?php echo "$puntos12"; ?></td>
      <td><?php echo "$puntos13"; ?></td>
      <td><?php echo "$puntos14"; ?></td>
      <td><?php echo "$puntos15"; ?></td>
      <td><?php echo "$puntos16"; ?></td>
      <td><?php echo "$puntos17"; ?></td>
      <td><?php echo "$puntos18"; ?></td>
      <td><?php echo "$puntos19"; ?></td>
      <td><?php echo "$puntos20"; ?></td>
	  <td><?php echo "$puntos21"; ?></td>
      <td><?php echo "$puntos22"; ?></td>
      <td><?php echo "$puntos23"; ?></td>
      <td><?php echo "$puntos24"; ?></td>
      <td><?php echo "$puntos25"; ?></td>
      <td><?php echo "$puntos26"; ?></td>
      <td><?php echo "$puntos27"; ?></td>
      <td><?php echo "$puntos28"; ?></td>
      <td><?php echo "$puntos29"; ?></td>
      <td><?php echo "$puntos30"; ?></td>
	  <td><?php echo "$puntos31"; ?></td>
      <td><?php echo "$puntos32"; ?></td>
      <td><?php echo "$puntos33"; ?></td>
      <td><?php echo "$puntos34"; ?></td>
      <td><?php echo "$puntos35"; ?></td>
      <td><?php echo "$puntos36"; ?></td>
    </tr>
  </table>
</div>
  </div>
  
</div>
</body>
</html>
