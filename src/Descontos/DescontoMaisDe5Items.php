<?php

namespace Pablo\DesignPattern\Descontos;

use Pablo\DesignPattern\Orcamento;

class DescontoMaisDe5Items extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItems > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}