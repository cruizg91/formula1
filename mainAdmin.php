<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Principal</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:110px;
	top:236px;
	width:1019px;
	height:2186px;
	z-index:1;
	background-color: #999999;
}
#Layer2 {
	position: absolute;
	left: 346px;
	top: 196px;
	width: 997px;
	height: 364px;
	z-index: 2;
	background-color: #999999;
}
#Layer3 {
	position:absolute;
	left:144px;
	top:65px;
	width:377px;
	height:104px;
	z-index:3;
	background-color: #99FFFF;
}
body {
	background-color: #333333;
}
#Layer4 {
	position:absolute;
	left:753px;
	top:106px;
	width:105px;
	height:42px;
	z-index:4;
}
-->
</style>
</head>

<body>
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
<div id="Layer2">
  <form id="form1" name="form1" method="post" action="calculaGP.php">
    <label for="select">1º-</label>
    <select name="select" id="select">
	<option value="DOV">Dovizioso 4</option>
                <option value="ZAR">Zarco 5</option>
                <option value="BAR">Barberá 8</option>
                <option value="PET">Petrucci 9</option>
                <option value="ABR">Abraham 17</option>
                <option value="BAU">Bautista 19</option>
                <option value="LOW">Lowes 22</option>
                <option value="VIN">Viñales 25</option>
                <option value="PED">Pedrosa 26</option>
                <option value="IAN">Iannone 29</option>
                <option value="CRU">Crutchlow 35</option>
                <option value="SMI">Smith 38</option>
                <option value="AES">A.Espargaró 41</option>
                <option value="RIN">Rins 42</option>
                <option value="MIL">Miler 43</option>
                <option value="PES">P.Espargaró 44</option>
                <option value="RED">Redding 45</option>
                <option value="ROS">Rossi 46</option>
                <option value="RAB">Rabat 53</option>
                <option value="BAZ">Baz 76</option>
                <option value="MAQ">Marquez 93</option>
                <option value="FOL">Folger 94</option>
                <option value="LOR">Tontenzo 99</option>
    </select>
    <label for="label">2º-</label>
    <select name="select2" id="label">
	<option value="DOV">Dovizioso 4</option>
                <option value="ZAR">Zarco 5</option>
                <option value="BAR">Barberá 8</option>
                <option value="PET">Petrucci 9</option>
                <option value="ABR">Abraham 17</option>
                <option value="BAU">Bautista 19</option>
                <option value="LOW">Lowes 22</option>
                <option value="VIN">Viñales 25</option>
                <option value="PED">Pedrosa 26</option>
                <option value="IAN">Iannone 29</option>
                <option value="CRU">Crutchlow 35</option>
                <option value="SMI">Smith 38</option>
                <option value="AES">A.Espargaró 41</option>
                <option value="RIN">Rins 42</option>
                <option value="MIL">Miler 43</option>
                <option value="PES">P.Espargaró 44</option>
                <option value="RED">Redding 45</option>
                <option value="ROS">Rossi 46</option>
                <option value="RAB">Rabat 53</option>
                <option value="BAZ">Baz 76</option>
                <option value="MAQ">Marquez 93</option>
                <option value="FOL">Folger 94</option>
                <option value="LOR">Tontenzo 99</option>
    </select>
    <label for="label">3º-</label>
    <select name="select3" id="label">
				<option value="DOV">Dovizioso 4</option>
                <option value="ZAR">Zarco 5</option>
                <option value="BAR">Barberá 8</option>
                <option value="PET">Petrucci 9</option>
                <option value="ABR">Abraham 17</option>
                <option value="BAU">Bautista 19</option>
                <option value="LOW">Lowes 22</option>
                <option value="VIN">Viñales 25</option>
                <option value="PED">Pedrosa 26</option>
                <option value="IAN">Iannone 29</option>
                <option value="CRU">Crutchlow 35</option>
                <option value="SMI">Smith 38</option>
                <option value="AES">A.Espargaró 41</option>
                <option value="RIN">Rins 42</option>
                <option value="MIL">Miler 43</option>
                <option value="PES">P.Espargaró 44</option>
                <option value="RED">Redding 45</option>
                <option value="ROS">Rossi 46</option>
                <option value="RAB">Rabat 53</option>
                <option value="BAZ">Baz 76</option>
                <option value="MAQ">Marquez 93</option>
                <option value="FOL">Folger 94</option>
                <option value="LOR">Tontenzo 99</option>
    </select>
    <label for="label3">8º-</label>
    <select name="select11" id="select11">
	<option value="DOV">Dovizioso 4</option>
                <option value="ZAR">Zarco 5</option>
                <option value="BAR">Barberá 8</option>
                <option value="PET">Petrucci 9</option>
                <option value="ABR">Abraham 17</option>
                <option value="BAU">Bautista 19</option>
                <option value="LOW">Lowes 22</option>
                <option value="VIN">Viñales 25</option>
                <option value="PED">Pedrosa 26</option>
                <option value="IAN">Iannone 29</option>
                <option value="CRU">Crutchlow 35</option>
                <option value="SMI">Smith 38</option>
                <option value="AES">A.Espargaró 41</option>
                <option value="RIN">Rins 42</option>
                <option value="MIL">Miler 43</option>
                <option value="PES">P.Espargaró 44</option>
                <option value="RED">Redding 45</option>
                <option value="ROS">Rossi 46</option>
                <option value="RAB">Rabat 53</option>
                <option value="BAZ">Baz 76</option>
                <option value="MAQ">Marquez 93</option>
                <option value="FOL">Folger 94</option>
                <option value="LOR">Tontenzo 99</option>
    </select>
    <label for="Submit"></label>
    <input type="submit" name="Submit" value="Calcular MotoGP" id="Submit" />
  </form>
  <p>&nbsp;</p>
  <form id="form2" name="form2" method="post" action="calcula2.php">
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
	<option value="PAS">Pasini 54</option>
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
	<option value="PAS">Pasini 54</option>
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
    <label for="label">3º-</label>
    <select name="select3" id="label">
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
                    <option value="PAS">Pasini 54</option>
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
    <label for="label3">8º-</label>
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
                <option value="PAS">Pasini 54</option>
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
    <input type="submit" name="Submit" value="Puntuar Moto2" id="Submit" />
  </form>
 <p>&nbsp;</p>
  <form id="form3" name="form3" method="post" action="calcula3.php">
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
	<option value="OET">Oettl 65</option>
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
	<option value="OET">Oettl 65</option>
	<option value="SAS">Sasaki 71</option>
    <option value="ARE">Arenas 75</option>
    <option value="KOR">Kornfeil 84</option>
    <option value="MAR">Martin 88</option>
    <option value="DAN">Danilo 95</option>
    <option value="PAG">Pagliani 96</option>
    </select>
    <label for="label">3º-</label>
    <select name="select3" id="label">
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
	<option value="OET">Oettl 65</option>
	<option value="SAS">Sasaki 71</option>
    <option value="ARE">Arenas 75</option>
    <option value="KOR">Kornfeil 84</option>
    <option value="MAR">Martin 88</option>
    <option value="DAN">Danilo 95</option>
    <option value="PAG">Pagliani 96</option>
    </select>
    <label for="label3">8º-</label>
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
	<option value="OET">Oettl 65</option>
	<option value="SAS">Sasaki 71</option>
    <option value="ARE">Arenas 75</option>
    <option value="KOR">Kornfeil 84</option>
    <option value="MAR">Martin 88</option>
    <option value="DAN">Danilo 95</option>
    <option value="PAG">Pagliani 96</option>
    </select>
    <label for="Submit"></label>
    <input type="submit" name="Submit" value="Puntuar Moto3" id="Submit" />
  </form>
</div>
<div id="Layer3">
<p align="center"><?php echo $circuito ?> : <?php echo $dia ?><br /><br/>
<?php echo $usuario;?></p></div>
<div id="Layer4">
  <form id="form2" name="form2" method="post" action="cerrar.php">
    <label for="label3">categoria-</label>
    <select name="categoria" id="categoria">
	<option value="1">MotoGP</option>
	<option value="2">Moto2</option>
	<option value="3">Moto3</option>
    </select>
    <label for="label3"></label>
    <input type="submit" name="Submit2" value="Cerrar Apuestas" id="label3" />
  </form>
</div>
</body>
</html>
