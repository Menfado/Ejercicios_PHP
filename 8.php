<!--En un fichero php, crear una función que al pasarle una frase en string te la convierta a "estado del messenger". ¿Que es esto? Pues por ejemplo:
Si la frase original tiene un "que" que se convierta a "k", si es un "por qué" que haga "xQ". Podeis hacer 5 o 6 cambios de palabras.
Ademas de esto, teneis que poner aleatoriamente en la frase letras mayusculas y minusculas indiferentemente. 
Y como extra, quitadle todas las tildes a la frase original

<?php

$frase= "hola, qué haces. Nada, por qué? jajaja";

$palabraBien= ["hola", "qué", "nada", "por qué", "jajaja"];
$palabraMsn= ["ola", "k", "nah", "xk", "xD"];


$fraseMsn= str_replace($palabraBien, $palabraMsn, $frase);


echo $fraseMsn;






$fraseDePrueba = "Hola buenas tardes, me llamo Jesús, encantado de conocerte.";

function textToMessenger($frase){
    $textoConvertido = str_replace(
        ["h", "bu", "ll", "q", "de", "ce"],
        ["", "w", "y", "k", "d", "z"],
        strtolower($frase));
        //Aqui le quito las tildes a lo que he generado con el primer str_replace
    $textoConvertido = eliminarTildes($textoConvertido);
    $textoConvertido = mayusculasAleatorias($textoConvertido);
    
        return $textoConvertido;
};

function eliminarTildes($frase){
    return str_replace(
        ["á", "é", "í", "ó", "ú"],
        ["a", "e", "i", "o", "u"],
        $frase
    );
}

function mayusculasAleatorias($frase){
    for($i=0; $i < strlen($frase); $i++){
        if(rand(0,1)) {
            $frase[$i] = strtoupper($frase[$i]);
        }
    }

    return $frase;
}






echo textToMessenger($fraseDePrueba);




