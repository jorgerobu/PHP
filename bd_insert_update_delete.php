<?php
// datos conexión
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave = '';
try {
	// conectar
    $bd = new PDO($cadena_conexion, $usuario, $clave);	
	echo "Conexión realizada con éxito<br>";	

	// insertar nuevo usario
	$ins = "insert into usuario(nombre, clave, rol) values('Alberto', '33333', '1');";
	$resul = $bd->query($ins);	

	//comprobar errores
	if($resul) {
		echo "insert correcto <br>";
		echo "Filas insertadas: " . $resul->rowCount() . "<br>";
	}else print_r( $bd -> errorinfo());	

	// para los autoincrementos
	echo "Código de la fila insertada" . $bd->lastInsertId() . "<br>"; 

	// actualizar  OJO LO CAMBIARIAMOS A TODOS LOS USUARIOS DE LA TABLA
	$upd = "update usuario set rol =  0 where rol = 1";
	$resul = $bd->query($upd);

	//comprobar errores
	if($resul){
		echo "update correcto <br>";
		echo "Filas actualizadas: " . $resul->rowCount() . "<br>";
	}else print_r( $bd -> errorinfo());	

	// borrar
	$del = "delete from usuario where nombre = 'Alberto'";
	$resul = $bd->query($del);	

	//comprobar errores
	if($resul){
		echo "delete correcto <br>";
		echo "Filas borradas: " . $resul->rowCount() . "<br>";
	}else print_r( $bd -> errorinfo());
	
} catch (PDOException $e) {
	echo 'Error con la base de datos: ' . $e->getMessage();
} 
