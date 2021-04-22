<?php
// Tipo objeto em JavaScript
// Aqui é um array associativo

//Inlcuindo funções
require_once 'funcoes.php';

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

$devs['223.358.987-37'] = sacar($devs['223.358.987-37'], 1500);
$devs['038.986.861-24'] = depositar($devs['038.986.861-24'], 12000);
titularComLetrasMaiusculas($devs['038.986.861-24']);
unset($devs['099.654.861-12']);

//Percorrer o array
foreach($devs as $cpf => $dev){
    ['titular' => $titular, 'saldo' => $saldo ] = $dev;
    mensagem("CPF:$cpf  NOME:$titular  SALDO:$saldo");
}

