<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca};
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

$cpfAdrian = new Cpf('123.456.789-10');
$endereco = new Endereco('Rua ta', 'Bairro tal', 'Cidade tal');
$Adrian = new Titular($cpfAdrian, 'Adrian Oliveira', $endereco);
$primeiraConta = new ContaCorrente($Adrian);
$segundaConta = new ContaPoupanca(new Titular (new Cpf('987.654.321-10'), 'Sabrina Oliveira', $endereco));
$primeiraConta->depositar(100);

$primeiraConta->sacar(200);
//$primeiraConta->setNomeTitular('Adrian Oliveira');
//$primeiraConta->setCpfTitular('123.456.789-10');

//var_dump($primeiraConta);
echo "O titular: " . $primeiraConta->retornaCpfTitular() . " - " . $primeiraConta->retornaNomeTitular() . PHP_EOL;
echo "Saldo: R$ " . $primeiraConta->Extrato();
echo PHP_EOL . "Morador do endereço " . $primeiraConta->retornaRua(). ", " . $primeiraConta->retornaBairro(). ", " . $primeiraConta->retornaCidade();

echo PHP_EOL . "O titular: " . $segundaConta->retornaCpfTitular() . " - " . $segundaConta->retornaNomeTitular() . PHP_EOL;
echo "Saldo: R$ " . $segundaConta->Extrato();
echo PHP_EOL . "Morador do endereço " . $segundaConta->retornaRua(). ", " . $segundaConta->retornaBairro(). ", " . $segundaConta->retornaCidade();