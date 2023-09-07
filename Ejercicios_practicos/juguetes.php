<?php

function estantes($edad) {
    switch($edad) {
        case $edad<5:
            echo "El juguete va en la parte inferior de la bodega";
        break;
        case $edad = 5 < 7:
            echo "El juguete va en la parte media de la bodega";
        break;
        case $edad>7:
            echo "El juguete va en la parte alta de la bodega";
        break;
        default:
            echo "El juguete va a un lado de la bodega";
    }
}

estantes(12);

?>