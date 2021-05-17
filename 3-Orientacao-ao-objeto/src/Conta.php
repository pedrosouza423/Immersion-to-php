<?php

class Conta
{
  private string $cpfTitular;
  private string $nomeTitular;
  private float $saldo;
  private static $numeroDeContas = 0;

//construtor
  public function  __construct(string $cpf, string $nome)
  {
    $this->nomeTitular = $nome;
    $this->validarNomeTitular($nome);
    $this->cpfTitular = $cpf;
    $this->saldo = 0;

    self::$numeroDeContas++;
  }

  public function sacar(float $valorASacar)
  {
    if ($valorASacar > $this->saldo) {
      echo "Saldo indisponível" . PHP_EOL;
      return;
    }

    $this->saldo -= $valorASacar;
  }

  public function depositar(float $valorADepositar): void
  {
    if ($valorADepositar < 0) {
      echo "Valor para depositar, precisa ser positivo" . PHP_EOL;
      return;
    }

    $this->saldo += $valorADepositar;
  }

  public function transferir(float $valorATransferir, Conta $contaDestino): void
  {
    if ($valorATransferir > $this->saldo) {
      echo "Erro, saldo indisponivel" . PHP_EOL;
      return;
    }

    $this->sacar($valorATransferir);
    $contaDestino->depositar($valorATransferir);
  }

  //Para ver o saldo através do echo
  public function recuperarSaldo() :float 
  {
    return $this->saldo;
  }

  //criar cpf e nome para a conta
  // public function criarCPFTitular(string $cpf) :void 
  // {
  //   $this->cpfTitular = $cpf;
  // }

  // public function criarNomeTitular(string $nome) :void 
  // {
  //   $this->nomeTitular = $nome;
  // }

  //recuperar nome e cpf
  public function recuperarNomeTitular() :string 
  {
    return $this->nomeTitular;
  }

  public function recuperarCPFTitular() :string 
  {
    return $this->cpfTitular;
  }

  private function validarNomeTitular(string $nome)
  {
    if(strlen($nome) < 5){
      echo "O precisa ter pelo menos 5 caracteres" . PHP_EOL;
      exit();
    }
  }

  public static function recuperarNumeroDeContas() :int
  {
    return self::$numeroDeContas;
  }
  

}
