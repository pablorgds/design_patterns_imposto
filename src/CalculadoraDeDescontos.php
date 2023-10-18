<?php

namespace Pablo\DesignPattern;

use Pablo\DesignPattern\Descontos\DescontoMaisDe500Reais;
use Pablo\DesignPattern\Descontos\DescontoMaisDe5Items;
use Pablo\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos 
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
      $cadeiaDeDescontos = new DescontoMaisDe5Items(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );
      return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}