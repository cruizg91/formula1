<?php

//$mysqli= new mysqli('mysql.hostinger.es','u640557691_46','schumi46','u640557691_46');
$mysqli= new mysqli('localhost','root','','formula1');
$usuario = $_POST["CampoNombre"];   
$password = $_POST['CampoPass'];
$sql = "SELECT * FROM users WHERE userId = '$usuario'";
if($resultado=$mysqli->query($sql)){
	$row=$resultado->fetch_assoc();
		//Si el usuario es correcto ahora validamos su contrase�a
		 if($row["password"] == $password)
		 {
		  //Creamos sesi�n
		  session_start();  
		  //Almacenamos el nombre de usuario en una variable de sesi�n usuario
		  $_SESSION['usuario'] = $usuario;  
		  
		  header("Location: main.php");
		}else{
			header("Location: index.html");
		}
}
else {
		  //En caso que la contrase�a sea incorrecta enviamos un msj y redireccionamos a login.php
		  echo "El usuario no est� activado";
   header("Location: index.html");   
} 
  
$mysqli->close();
?>