<?php

//Realizar um deposito
function depositar (array $conta, float $valor) :array {
    if($valor < 0 ){
        mensagem("Depositos precisam ser positivos");
    }else{
        $conta['saldo'] += $valor;
        mensagem("$conta[titular] realizou um deposito de R$$valor");
        mensagem("$conta[titular] possui um saldo de $conta[saldo]");
    }
    
    echo PHP_EOL;

    return $conta;
}

//Realizar um saque
function sacar(array $conta, float $valor) :array {
    if($conta['saldo'] < $valor){
        mensagem("$conta[titular] não pode sacar este saldo, o seu saldo é insufieciente");
        mensagem("$conta[titular] possui um saldo de $conta[saldo]");
        echo PHP_EOL;
    }else{
        $conta['saldo'] -= $valor;
        //Tipo simples de string
        mensagem("$conta[titular] realizou um saque de $valor");

        //Tipo complexo de string
        mensagem("{$conta['titular']} possui um saldo de {$conta['saldo']}");
        echo PHP_EOL;

    }

    return $conta;
}

//Função para quebra de linha
function mensagem(string $mensagem){
    echo $mensagem . '<br>';
}

function titularComLetrasMaiusculas(array &$conta){
    $conta['titular'] = mb_strtoupper($conta['titular']);
    mensagem($conta['titular']);
}

function exibeConta(array $conta){
    ['titular' => $titular , 'saldo' => $saldo] = $conta;

    echo "<li>Titular: $titular. Saldo: $saldo </li><br>";
}