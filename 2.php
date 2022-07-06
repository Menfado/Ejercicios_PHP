<!-- Crear un código que pasado un número, nos diga si es par o impar.

Objetivo:

Realizar operaciones aritméticas simples con un valor pasado por parámetro. -->
<?php

if(!isset($_GET["numero"])){
    echo "NUMERO NO ESTA SETEADO";
} else {
    $numero=$_GET["numero"];

if($numero % 2 == 0){
    echo   "ES PAR TONY";
} else {
    echo "ES IMPAR TONYYYYYY!";
};
};



?>