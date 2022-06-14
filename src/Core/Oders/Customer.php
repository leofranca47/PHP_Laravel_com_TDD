<?php

namespace Core\Oders;

class Customer
{
    protected $name;
    public function __construct(
        string $name
    )
    {
        $this->name = $name;
    }

    public function changeName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}