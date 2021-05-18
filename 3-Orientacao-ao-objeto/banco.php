<?php

require 'src/Conta.php';
require 'src/Titular.php';
require 'src/CPF.php';
require 'src/Endereco.php';

$endereco = new Endereco("Valparaiso", "Etapa A", "17", "21");
$pedro = new Titular(new CPF("123.456.789-01"), "Pedro Souza", $endereco);
$primeiraConta = new Conta($pedro);

// var_dump($primeiraConta);

$primeiraConta->depositar(2000);
$primeiraConta->sacar(100);

// echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
// echo $primeiraConta->recuperarCPFTitular() . PHP_EOL;
// echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$ana = new Titular(new CPF("123.456.789-55"), "Ana Luiza", $endereco);
$segundaConta = new Conta($ana);
var_dump($segundaConta);

// echo Conta::recuperarNumeroDeContas();
