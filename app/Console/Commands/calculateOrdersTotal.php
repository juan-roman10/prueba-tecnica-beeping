<?php

namespace App\Console\Commands;

use App\Jobs\ProcessOrders;
use App\Models\Order;
use Illuminate\Console\Command;

class calculateOrdersTotal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:orders:total';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command calculates the total of orders';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ProcessOrders::dispatch($this->calculateOrdersTotal());
        $this->info('Command executed');
        return 0;
    }

    private function calculateOrdersTotal()
    {
        $orders = Order::with('ordersLines')->get();

        $total = 0;
        foreach ($orders as $order) {
            $subtotal = $this->calculateOrderSubtotal($order);
            $total += $subtotal;
        }
        return $total;
    }

    private function calculateOrderSubtotal($order)
    {
        $total = 0;
        $total += $order->ordersLines->qty * $order->ordersLines->product->cost;
        return $total;
    }
}
