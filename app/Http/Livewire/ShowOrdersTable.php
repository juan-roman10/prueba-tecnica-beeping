<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class ShowOrdersTable extends Component
{
    public function render()
    {
        $orders = Order::with('ordersLines')->get();
        return view('livewire.show-orders-table', ["orders" => $orders]);
    }
}
