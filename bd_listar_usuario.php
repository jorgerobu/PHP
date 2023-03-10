<?php
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave = '';
try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
	echo "Conexión realizada con éxito<br>";		
	$sql = 'SELECT nombre, clave, rol FROM usuario';
	/* $sql = 'SELECT nombre, clave, rol FROM usuario'; si quisieramos traernos todos los datos */
	
	$usuarios = $bd->query($sql); //Devuelve en la variable $usuarios, la constación a la petición que hacemos $sql
	echo "Número de usuarios: " . $usuarios->rowCount() . "<br>"; //cuenta el número de arrays que nos devuelve la BBDD
	
	foreach ($usuarios as $usu) { // Creamos una variable $usu para individualizar los datos de cada usuario, y le pedimos que para cada uno de ellos ($usuarios)
		print "Nombre : " . $usu['nombre']. "<br>";  // nos muestre nombre y clave
		print " Clave : " . $usu['clave'] . "<br>";
		/* print " Rol : " . $usu['rol'] . "<br>"; si quisieramos que nos devolviese tambien rol*/
	}

	

	/* ======== consulta preparada 1, parametros por orden  ===============	
	$preparada = $bd->prepare("select nombre from usuario where rol = ?");	// la incognita ? se la damos despues con array
	$preparada->execute( array(0));
	echo "Usuarios con rol 0: " .  $preparada->rowCount() . "<br>";
	foreach ($preparada as $usu) {
		print "Nombre : " . $usu['nombre'] . "<br>";
	} */


	/* =========== consulta preparada 2, parametros por nombre ==============
	$preparada_nombre = $bd->prepare("select nombre from usuario where rol = :rol");  // aquí igual pero con el pseudo elemento
	$preparada_nombre->execute( array(':rol' => 0));
	echo "Usuarios con rol 0: " .  $preparada_nombre->rowCount() . "<br>";
	foreach ($preparada_nombre  as $usu) {
		print "Nombre : " . $usu['nombre'] . "<br>";
	}	*/ 


	/* =========== consulta preparada 3, para datos de un id determinado ===============*/
	$id = 2;
	$por_id = $bd->prepare("select * from usuario where codigo = $id");
	echo "Usuario con el id: $id  <br>";  
	print "Nombre : " . $usu['nombre'] . "<br> Clave : " . $usu['clave'] . "<br> Rol : " . $usu['rol'] . "<br>";
// utiilzar eco o print es indistinto



	} catch (PDOException $e) {
		echo 'Error con la base de datos: ' . $e->getMessage();
	}	