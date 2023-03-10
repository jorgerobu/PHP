<?php
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave = '';
try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
	echo "Conexión realizada con éxito<br>";


	// comenzar la transacción
	$bd->beginTransaction();	// le decimos a la conexión si resuelve correcto llege al final, pero si algo va mal anula.
	$ins = "insert into usuario(nombre, clave, rol) values('Fernando', '33333', '1')";
	$resul = $bd->query($ins);
	
	
	// se repite la consulta
	// falla porque el nombre es unique

	if(!$resul){
		echo "Error: " . print_r($bd->errorinfo());
		// deshace el primer cambio
		$bd->rollback();   
		echo "<br>Transacción anulada<br>";
	}else{
		// si hubiera ido bien...
		$bd->commit();  //Envio
	}	
} catch (PDOException $e) {
    echo 'Error al conectar: ' . $e->getMessage();
} 