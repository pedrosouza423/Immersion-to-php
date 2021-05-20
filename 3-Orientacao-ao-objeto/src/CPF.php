<?php

class CPF
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function recuperarNumero() :string
    {
        return $this->cpf;
    }

}

