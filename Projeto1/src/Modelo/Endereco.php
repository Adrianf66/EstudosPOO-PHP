<?php

namespace Alura\Banco\Modelo;
class Endereco
{
    private string $lagradouro;
    private string $bairro;
    private string $cidade;

    public function __construct(string $lagradouro, string $bairro, string $cidade)
    {
        $this->lagradouro = $lagradouro;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
    }

    public function retornaLagradouro(): string
    {
        return $this->lagradouro;
    }

    public function retornaBairro(): string
    {
        return $this->bairro;
    }

    public function retornaCidade(): string
    {
        return $this->cidade;
    }


}