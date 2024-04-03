<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario;
class CalculadorDeBonificacoes
{
    private float $totalBonificacoes = 0;
    public function adicionaBonificacaode(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculoBonificacao();
    }
    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}