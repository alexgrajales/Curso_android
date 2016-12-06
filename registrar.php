<?php
include("conectarse.php");
$conexion=conectar();
$cedula=$_POST['cedula'];
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$contra=$_POST["contra"];
$insercion="INSERT INTO `usuario`(`cedula`, `nombre`, `correo`, `contrasena`) VALUES ('$cedula','$nombre','$correo','$contra')";
mysqli_query($conexion, $insercion);
mysqli_close($conexion)
?>