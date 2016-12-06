<?php
include("conectarse.php");
$conexion=conectar();
$consulta = "Select * From usuario";
$resultado = mysqli_query($conexion, $consulta);
$jasonarray = array();
if (mysqli_num_rows($resultado))
{
	while ($row = mysqli_fetch_object($resultado)) {
		$jasonarray[] = $row;
	}

}
echo json_encode($jasonarray);
mysqli_close($conexion)
?>
