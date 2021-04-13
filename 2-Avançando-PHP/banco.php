<?php
// Tipo objeto em JavaScript
// Aqui é um array associativo

// Código e dev
$devs = [
    '038.986.861-24' => [
        'titular' => 'Pedro',
        'idade' => 19,
        'saldo' => 3500
    ],
    '099.654.861-12' => [
        'titular' => 'Maik',
        'idade' => 18,
        'saldo' => 400
    ],
    '223.358.987-37' => [
        'titular' => 'Fernando',
        'idade' => 20,
        'saldo' => 350
    ],

];

$devs['038.986.861-24']['saldo'] -= 1500;

foreach($devs as $cpf => $dev){
    echo $cpf . " ". $dev['titular'] . " " . $dev['saldo'] . PHP_EOL;
}