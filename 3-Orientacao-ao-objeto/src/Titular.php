<?php

class Titular
{
    private string $nome;
    private CPF $cpf;
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    //Métodos Getters

    public function recuperarNome() :string
    {
        return $this->nome;
    }

    public function recuperarCPF() :CPF
    {
        return $this->cpf;
    }

    public function recuperarEndereco() :Endereco
    {
      return $this->endereco;
    }

    //Validar Nome
    private function validarNomeTitular(string $nome)
    {
      if(strlen($nome) < 5){
        echo "O precisa ter pelo menos 5 caracteres" . PHP_EOL;
        exit();
      }

    }

}

