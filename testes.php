<?php

use Pablo\DesignPattern\CalculadoraDeDescontos;
use Pablo\DesignPattern\CalculadoraDeImpostos;
use Pablo\DesignPattern\Impostos\Icms;
use Pablo\DesignPattern\Impostos\Iss;
use Pablo\DesignPattern\Orcamento;

require 'vendor/autoload.php';

// $calculadora = new CalculadoraDeImpostos();

// $orcamento = new Orcamento();
// $orcamento->valor = 100;

// echo $calculadora->calcula($orcamento, new Iss());


$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItems = 7;

echo $calculadora->calculaDesconto($orcamento);