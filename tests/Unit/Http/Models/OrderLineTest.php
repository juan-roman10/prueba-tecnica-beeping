<?php

namespace Tests\Unit\Http\Models;

use Tests\TestCase;
use App\Models\OrdersLine;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrdersLineTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if model order_line exists.
     *
     * @return void
     */
    public function test_order_line_exists()
    {
        $order_line = OrdersLine::factory()->create();
        $this->assertModelExists($order_line);
    }
}
