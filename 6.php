<!-- Enunciado:

Escribir un programa creando una función que pasado un
array de números nos diga la suma de todos ellos

Objetivo:

Practicar con funciones y arrays.
-->
<?php

$numeros = [25, 1, 12, 45];


function sumanumeros ($miarray){
    $sumanumeros = 0;
    for ($i=0; $i< count($miarray) ; $i++) { 
        $sumanumeros += $miarray[$i];
    }
    echo $sumanumeros;
};

sumanumeros($numeros);