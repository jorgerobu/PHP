<?php
    /* si todo es correcto nos envía a bienvenido.html;
    si todo va mal nos envia un mensaje de error */

if($_POST['usuario']=="mario" && $_POST['clave']=="123456"){
    header("Location:bienvenido.html");
} else {
    header("Location:error.html");
}

?>