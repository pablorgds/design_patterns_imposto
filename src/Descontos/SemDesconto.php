<?php

namespace Pablo\DesignPattern\Descontos;

use Pablo\DesignPattern\Orcamento;

class SemDesconto extends Desconto
{
    function __construct()
    {
        parent::__construct(null);
    }

    public function calculaDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}