<?php
// Tipo objeto em JavaScript
// Aqui é um array associativo

$conta1 = [
    "titular" => "Pedro",
    "saldo" => 45000
];

$conta2 = [
    'titular' => 'Matheus',
    'saldo' => 300
];

$constasCorrentes = [$conta1, $conta2];

for($i=0; $i < count($constasCorrentes); $i++){
    echo $constasCorrentes[$i]['titular'] . PHP_EOL;
}