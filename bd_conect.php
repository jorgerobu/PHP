<?php
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1'; // encapsulamiento: para no poner directamente nuestros datos en los motores de conexión, y así que no puedan acceder a ellos
$usuario = 'root';
$clave = '';
try {
    $bd = new PDO($cadena_conexion, $usuario, $clave, array(PDO::ATTR_PERSITENT => TRUE));  // PDO es un motor de conexión a BBDD
} catch (PDOException $e) { // si no ocure esto y lo vuelco a una variable
    echo 'Error con la base de datos: ' . $e->getMessage();
} 