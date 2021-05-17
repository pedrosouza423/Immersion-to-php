<?php

require 'src/Conta.php';
require 'src/Titular.php';
require 'src/CPF.php';

$pedro = new Titular(new CPF("123.456.789-01"), "Pedro Souza");
$primeiraConta = new Conta($pedro);

// var_dump($primeiraConta);

$primeiraConta->depositar(2000);
$primeiraConta->sacar(100);

// echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
// echo $primeiraConta->recuperarCPFTitular() . PHP_EOL;
// echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$ana = new Titular(new CPF("123.456.789-55"), "Ana Luiza");
$segundaConta = new Conta($ana);
var_dump($segundaConta);

// echo Conta::recuperarNumeroDeContas();
