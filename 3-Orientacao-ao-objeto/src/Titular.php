<?php

class Titular
{
    private string $nome;
    private CPF $cpf;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNome() :string
    {
        return $this->nome;
    }

    public function recuperarCPF() :CPF
    {
        return $this->cpf;
    }

    private function validarNomeTitular(string $nome)
    {
      if(strlen($nome) < 5){
        echo "O precisa ter pelo menos 5 caracteres" . PHP_EOL;
        exit();
      }

    }

}

