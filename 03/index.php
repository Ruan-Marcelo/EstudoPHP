<?php

$obj = new stdClass();

$obj->nome = 'Ruan';
$obj->cpf = "47795214862";
$obj->email = "teste@teste.com";

$cadastro = [
    "nome" => "Ruan",
    "cpf" => "1234567",
    "email" => "tt@tt.com",
];

$rlCadastro = (object) $cadastro;



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 STDCLASS</title>
</head>

<body>
    <ul>
        <li>Nome: <?= $rlCadastro->nome ?></li>
        <li>CPF: <?= $rlCadastro->cpf ?></li>
        <li>EMAIL: <?= $rlCadastro->email ?></li>
    </ul>
</body>

</html>