<?php

namespace Core\Oders;

class Product
{
    protected $name;
    protected $preco;
    protected $qtd;

    public function __construct(
        string $name,
        float $preco,
        int $qtd
    )
    {
        $this->name = $name;
        $this->preco = $preco;
        $this->qtd = $qtd;
    }

    public function total()
    {
        return $this->preco * $this->qtd;
    }

    public function totalWithTax10()
    {
        $total = $this->total();
        return ($total * 0.1) + $total;
    }


}