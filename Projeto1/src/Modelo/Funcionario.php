<?php

namespace Alura\Banco\Modelo;
class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, string $cargo, float $salario)
    {
        $this->salario = $salario;
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }
    public function recuperaSalario(): float
    {
        return $this->salario;
    }
    public function alteraNome(string $nome): void
    {
        $this->validaTamanhoNome($nome);
        $this->nome = $nome;
    }
    public function retornaCargo(): string
    {
        return $this->cargo;
    }
    public function calculoBonificacao(): float
    {
        return $this->salario * 0.1;
    }

}