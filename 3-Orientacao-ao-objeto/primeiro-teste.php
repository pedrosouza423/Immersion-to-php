<?php

require 'src/Conta.php';

$umaNovaConta = new Conta();


$umaNovaConta->saldo = 200;
$umaNovaConta->cpfTitular = '123.456.789-01';
$umaNovaConta->nomeTitular = 'Pedro H F Souza';

// var_dump($umaNovaConta);

$segundaConta = new Conta();
$segundaConta->saldo = 100;
$segundaConta->cpfTitular = '123.456.789-02';
$segundaConta->nomeTitular = 'Wilson Teixeira';

var_dump($umaNovaConta);
var_dump($segundaConta);

