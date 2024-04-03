<?php

namespace Alura\Banco\Modelo;
use Alura\Banco\Modelo\Pessoa;
class Cpf
{
    private string $cpf;

    public function __construct($cpf)
    {
        $this->cpf = $cpf;
    }

    public function retornaCpf(): String
    {
        return $this->cpf;
    }
}