<?php

namespace Pablo\DesignPattern;

use Pablo\DesignPattern\Impostos\Imposto;

class CalculadoraDeImpostos 
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}