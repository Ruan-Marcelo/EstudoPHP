<?php

//tipos de array
// $carros = array('Palio', 'Uno', 'Fiesta');
$carros = ['Palio', 'Uno', 'Fiesta'];

//echo $carros; // imprime o array mas da erro
//print_r($carros); // jeito certo de imprimir o array

//debug
//var_dump($carros);

foreach ($carros as $car) {
    echo $car . "<hr>";
}
