<?php

// $nombre = "Camila";
// $apellido = "Rojas";

//concatenando
// echo $nombre.' '.$apellido;

// Para crear una funcion se utiliza la palabra reservada "function"

function concatenar($nombre, $apellido) {
    echo $nombre.' '.$apellido;
}

concatenar("Camila", "Rojas");

function sumarNumeros($numeros) {
    $suma = 0;
    for ($i=0; $i < 4; $i++) {
        $suma = $suma + $numeros[$i];
    }
    echo "La suma de los valores del array es: ".$suma;
}
$numeros = array(1,2,3,4);
sumarNumeros($numeros);
?>