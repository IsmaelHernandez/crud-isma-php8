<?php

 $nombre = $_POST["nombre"];
 $edad = $_POST["edad"];
 $signo = $_POST["signo"];
 
 require_once("model/config.php");

 $sql = "INSERT INTO persona(nombre,edad,signo)VALUES('$nombre','$edad','$signo')";
 $resultado = mysqli_query($mysqli,$sql);
 
 if($resultado === TRUE){
    header("Location: index.php?mensaje=registrado");
 }
 else{
    header("Location: index.php?mensaje=error");
 }
 
 
 mysqli_close($mysqli);

?>