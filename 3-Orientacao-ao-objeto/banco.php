<?php

require 'src/Conta.php';

$primeiraConta = new Conta("123.456.789-01", "Pedro Souza");

var_dump($primeiraConta);

$primeiraConta->depositar(2000);
$primeiraConta->sacar(100);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarCPFTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

