<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf,String $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }
    public function recuperaRua(): string
    {
        return $this->endereco->retornaLagradouro();
    }

    public function recuperaBairro(): string
    {
        return $this->endereco->retornaBairro();
    }

    public function recuperaCidade(): string
    {
        return $this->endereco->retornaCidade();
    }

}
