<!--Dado el siguiente array:

$colores = ['blanco', 'verde, 'rojo'];



Escribir un script que muestre los colores de la2 siguientes maneras:



* Separados por comas



ej: blanco, verde, rojo



* Como una lista html, estando los elementos ordenados alfabéticamente



ej:

<ul>

<li>blanco</li>

<li>rojo</li>

<li>verde</li>

</ul>




Objetivo:



Familiarizarse con el tratamiento de arrays -->

<?php

$colores = ['blanco', 'verde', 'rojo'];

$losColores = implode(", ", $colores);

echo "$losColores";


echo "<ul>";

for($i = 0; $i < count($colores); $i++){

  echo "<li>$colores[$i]</li>";

};
   echo "</ul>";