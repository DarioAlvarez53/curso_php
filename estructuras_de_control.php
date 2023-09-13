<?php
    /* las estructuras de control son herraminetas para hacer validacion e iteraciones en el codigo, contamos con
        if, else, while, do-while, for, foreach, switch
    */

// Estructura de control "if/else", se usa para si sucede una condicion ejecute una accion
/*
$valorA = 5;

if($valorA == 10) {
    echo "Es igual a 10"; //echo devuelve el resultado de una condicion
} else {
    echo "No es igual a 10";
}
*/
// Estructura de control "while/do-while", esto es un ciclo que se ejuta cuando se cumple una condicion

/*
$i = 0;

while($i <= 10) {
    echo $i++;
}
*/
/*
do {
    echo $i++; //primero se ejecuta el ciclo
} while ($i <= 10); // y despues la condicion
*/

// Estructura de control "for/foreach", esto es un ciclo que permite pasar por un array en cada una de sus posiciones

$arr = array(1,2,3,4);
for($i=0; $i<4; $i++) {
    echo $arr[$i];
}

?>