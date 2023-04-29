<?php

//$mysqli= new mysqli('mysql.hostinger.es','u640557691_46','schumi46','u640557691_46');
$mysqli= new mysqli('localhost','root','','formula1');
$usuario = $_POST["CampoNombre"];   
$password = $_POST['CampoPass'];
$sql = "SELECT * FROM users WHERE userId = '$usuario'";
if($resultado=$mysqli->query($sql)){
	$row=$resultado->fetch_assoc();
		//Si el usuario es correcto ahora validamos su contraseña
		 if($row["password"] == $password)
		 {
		  //Creamos sesión
		  session_start();  
		  //Almacenamos el nombre de usuario en una variable de sesión usuario
		  $_SESSION['usuario'] = $usuario;  
		  
		  header("Location: main.php");
		}else{
			header("Location: index.html");
		}
}
else {
		  //En caso que la contraseña sea incorrecta enviamos un msj y redireccionamos a login.php
		  echo "El usuario no está activado";
   header("Location: index.html");   
} 
  
$mysqli->close();
?>