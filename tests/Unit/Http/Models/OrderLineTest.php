<?php

namespace Tests\Unit\Http\Models;

use Tests\TestCase;
use App\Models\OrderLine;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderLineTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if model order_line exists.
     *
     * @return void
     */
    public function test_order_line_exists()
    {
        $order_line = OrderLine::factory()->create();
        $this->assertModelExists($order_line);
    }
}
