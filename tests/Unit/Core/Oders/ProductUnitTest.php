<?php

namespace Tests\Unit\Core\Oders;

use Core\Oders\Product;
use PHPUnit\Framework\TestCase;

class ProductUnitTest extends TestCase
{
    public function testProductTotal()
    {
        $product = new Product('leite', 12, 10);

        $this->assertEquals(120, $product->total());
    }

    public function testProductWithTax()
    {
        $product = new Product('leite', 12, 10);

        $this->assertEquals(132, $product->totalWithTax10());
    }
}