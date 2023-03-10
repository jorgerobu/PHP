<?php
    $arquivo = fopen("fichero_ejemplo.txt", "r");
    if ($arquivo === False){
        echo "No se encuentra o no se pudo leer<br>";
    }else{
        while( !feof($arquivo) ){
            $car = fgetc($arquivo);
            echo $car;
        }
    }
    fclose($arquivo);
?>

