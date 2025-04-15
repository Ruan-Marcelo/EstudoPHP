<?php


$mostrarNome = true; // verdadeiro
//$mostrarNome = false; // falso  

if ($mostrarNome) {
    echo "Olá, meu nome é Ruan <hr>";
} else {
    echo "Não existe!";
}

$unidade = 71;

$vaiChover = ($unidade > 70);

if ($vaiChover) {
    print  "Vai chover";
} else {
    print  "Não vai chover";
}
