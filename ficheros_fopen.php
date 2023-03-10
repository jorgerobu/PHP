<?php
$arquivo = fopen("fichero_ejemplo.txt", "r");
if ($arquivo === False){
    echo "No se encuentra fichero_ejemplo.txt<br>";
}else{
    echo "fichero_ejemplo.txt se abrió con éxito<br>";
}

$arquivo = fopen("fichero_dous.txt", "w");
if ($arquivo === False){
    echo "No se encuentra fichero_dous.txt<br>";
}else{
    echo "fichero_dous.txt se creó con éxito<br>";
}

/*
$arquivo = fopen("fichero_no_exite.txt", "r");
if ($arquivo === False){
    echo "No se encuentra fichero_no_exite.txt<br>";
}else{
    echo "fichero_no_exite.txt se abrió con éxito<br>";
}*/
