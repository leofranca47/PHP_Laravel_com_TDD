<?php

namespace Tests\Unit\Core\Oders;

use Core\Oders\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testAttributes()
    {
        $customer = new Customer(
            "Leo Franca"
        );
        $this->assertEquals("Leo Franca", $customer->getName());

        $customer->changeName("new name");
        $this->assertEquals("new name", $customer->getName());

        // continua modulo 2 aula 3

    }
}