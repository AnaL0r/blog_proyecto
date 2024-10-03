<?php

if ($numero < 10) {
    echo'el numero es menor a 10';
}
elseif ($numero == 10){
    echo'el numero es igual a 10';
}
else {
    echo'el numero es mayor a 10';
}  

$numero = 90;

switch ($numero){
    case ($numero < 10):
        echo'el numero es menor a 10';
        break;
    case ($numero == 10):
        echo'el numero es igual a 10';
        break;
    case ($numero > 10):
        echo'el numero es mayor a 10';
        break;
}

