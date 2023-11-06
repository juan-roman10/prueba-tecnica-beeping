<?php

namespace Tests\Unit\Http\Models;

use Tests\TestCase;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if model Product exists.
     *
     * @return void
     */
    public function test_product_exists()
    {
        $product = Product::factory()->create();
        $this->assertModelExists($product);
    }
}
