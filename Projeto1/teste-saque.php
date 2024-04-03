<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, ContaCorrente, ContaPoupanca};
use Alura\Banco\Modelo\{Cpf, Endereco};

$endereco = new Endereco('Rua teste', 'Bairro teste', 'Cidade teste');
$conta1 = new ContaPoupanca(new Titular(new Cpf('123'), 'Adrian', $endereco));
$conta2 = new ContaCorrente(new Titular(new Cpf('321'), 'Sabrina', $endereco));

$conta1->depositar(500);
echo "Saldo R$ ". $conta1->Extrato();

$conta2->depositar(500);
echo "O titular " . $conta2->retornaNomeTitular() . PHP_EOL . " possui saldo de R$ " . $conta1->Extrato();

$conta1->sacar(100);
$conta2->sacar(100);
$conta2->transferir();

echo PHP_EOL . "Novo Saldo após saque: R$ " . $conta1->Extrato();
echo PHP_EOL . "Novo Saldo após saque: R$ " . $conta2->Extrato();