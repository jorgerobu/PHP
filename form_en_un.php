<?php
   if ($_DERVER["REQUEST_METHOD"]== "POST")
?>










<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de login</title>
</head>

<body>

<?php if(isset($err)){
    echo "<p> Revise usuario y contraseña</p>";
}?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post">
    <label for="usuario">Usuario</label>
    <input value="<?php if(isset($usuario))echo $usuario;?>"
    id="usuario" name="usuario" type="text">

    <label for="clave">Clave</label>
    <input value="<?php if(isset($usuario))echo $usuario;?>"
    id="clave" name="clave" type="password">

    <input type="submit">
    
    </form>
    
</body>
</html>