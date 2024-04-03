<?php

namespace Alura\Banco\Modelo\Conta;
use Alura\Banco\Modelo\Endereco;
abstract class Conta{

    private Titular $titular;
    protected float $saldo;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
    }

    public function retornaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }
    public function retornaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }
    public function retornaRua(): string {
        return $this->titular->recuperaRua();
    }
    public function retornaBairro(): string
    {
        return $this->titular->recuperaBairro();
    }
    public function retornaCidade(): string
    {
        return $this->titular->recuperaCidade();
    }
    public function Extrato(): float
    {
        return $this->saldo;
    }
    public function sacar(float $valorASacar) : void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();

        $valorsaque = $valorASacar + $tarifaSaque;

        if ($valorsaque > $this->saldo){
            echo "valor indisponível";
        }
        $this->saldo -= $valorsaque;
    }
    public function depositar(float $valorDeposito): void
    {
        if($valorDeposito < 0){
            echo "Valor inválido, informe um valor superior a 0 (zero)";
        }
        $this -> saldo += $valorDeposito;
    }
    abstract protected function percentualTarifa(): float;

}
