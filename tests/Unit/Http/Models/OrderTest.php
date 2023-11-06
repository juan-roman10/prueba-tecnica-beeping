<?php

namespace Tests\Unit\Http\Models;

use Tests\TestCase;
use App\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if model order exists.
     *
     * @return void
     */
    public function test_order_exists()
    {
        $order = Order::factory()->create();
        $this->assertModelExists($order);
    }
}
