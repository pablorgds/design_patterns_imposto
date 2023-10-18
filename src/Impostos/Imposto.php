<?php

namespace Pablo\DesignPattern\Impostos;

use Pablo\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}