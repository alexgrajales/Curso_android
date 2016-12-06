<?php
function conectar()
    
{
    define('host', 'localhost');
    define('usuario', 'root');
    define('contra', '');
    define('nombrebd', 'registrocc');    
    $conexion = mysqli_connect(host, usuario, contra, nombrebd) or die("no se pudo conectar");
     return $conexion;    
}

?>