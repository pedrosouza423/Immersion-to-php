<?php

class Pessoa
{
    public string $nome;
    public CPF $cpf;

    public function __construct(string $nome, CPF $cpf) {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    //Métodos Getters
    public function recuperarNome() :string
    {
        return $this->nome;
    }

    public function recuperarCPF() :string
    {
        return $this->cpf->recuperarNumero();
    }

    //Validar Nome
    public function validarNomeTitular(string $nome)
    {
      if(strlen($nome) < 5){
        echo "O precisa ter pelo menos 5 caracteres" . PHP_EOL;
        exit();
      }

    }

}