<?php

namespace Alura\Banco\Modelo;
class Pessoa
{
    protected string $nome;
    protected Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaTamanhoNome($this->nome);
    }
    public function recuperaNome(): string
    {
        return $this->nome;
    }
    public function recuperaCpf(): string
    {
        return $this->cpf->retornaCpf();
    }
    protected function validaTamanhoNome($nome)
    {
        if(strlen($nome)<5)
        {
            echo PHP_EOL . "O nome $nome não possui a quantidade mínima de 5 caracteres";
            exit();
        }
    }
}