<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Product;

final class ProductShouldTest extends TestCase
{
    /** @test */
    public function ReturnsPriceIncTax(): void
    {
        $product = new Product('Kaas', 1);
        $this->assertEquals(1.21, $product->getRealPrice());
    }
}