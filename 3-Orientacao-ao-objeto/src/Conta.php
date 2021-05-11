<?php

class Conta
{
  public string $cpfTitular;
  public string $nomeTitular;
  public float $saldo = 0;

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
}
