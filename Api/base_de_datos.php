<?php
$pass         = "yv4uUTbH6uAEVGH";
$user            = "compucel_api";

try
{
$conexion = new PDO('mysql:host=localhost;dbname=compucel_sena', $user, $pass, array(
    PDO::ATTR_PERSISTENT => true
));
	//echo "Me Conect�";
}

catch (Exception $e)
{
    echo "Ocurri� un error con la base de datos: " . $e->getMessage();
}
?>