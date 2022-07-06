<!--
Enunciado:

Dado 2 ficheros, si la extensión termina en .exe poner en mayúscula
el nombre del fichero, y si termina en .db imprimirlo en minúculas.

Es decir, si los ficheros son pepe.exe y Ana.db, el resultado tiene
que ser PEPE.EXE y ana.db

Objetivo:

Familiarizarse con el tratamiento de strings -->


<?php
$fichero1 = 'FicheroEjecutable.exe';
$fichero2 = 'FicheroDeBaseDeDatos.db';

// Me creo un array con los ficheros a tratar
$ficheros = [$fichero1, $fichero2];

foreach ($ficheros as $fichero) {

    if (strpos($fichero, '.exe')) {
        echo strtoupper("$fichero\n");
    } elseif (strpos($fichero, '.db')) {
        echo strtolower("$fichero\n");
    }
}

