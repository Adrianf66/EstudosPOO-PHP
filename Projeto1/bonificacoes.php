<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Cpf, Funcionario};
use Alura\Banco\Service\CalculadorDeBonificacoes;

$umFuncionario = new Funcionario('Adrian', new Cpf('123'), 'Desevnvolverdor Back-end Jr', 1000);

$umaFuncionaria = new Funcionario ('Sabrina', new Cpf('321'), 'Desenvolvedora Front-end Jr', 3000);

$controlador = new CalculadorDeBonificacoes();
$controlador->adicionaBonificacaode($umFuncionario);
$controlador->adicionaBonificacaode($umaFuncionaria);
echo $controlador->recuperaTotal();
