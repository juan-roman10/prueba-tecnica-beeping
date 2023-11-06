<div>
    <div class="flex items-center justify-center min-h-screen">
        <div class="">
            <div class="overflow-auto lg:overflow-visible">
                <div class="flex lg:justify-between border-b-2 border-white-900 pb-1">
                    <h2 class="text-3xl text-white font-bold text-center">Ordenes</h2>
                </div>
                <table class="table text-white-400 border-separate space-y-6 text-sm">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="p-3">Orden</th>
                            <th class="p-3 text-left">Comprador</th>
                            <th class="p-3 text-left">Cantidad</th>
                            <th class="p-3 text-left">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr class="bg-blue-200 lg:text-black">
                            <td class="p-3 font-medium capitalize">{{ $order->order_ref }}</td>
                            <td class="p-3">{{ $order->customer_name }}</td>
                            <td class="p-3 text-center">{{ $order->ordersLines->qty }}</td>
                            <td class="p-3 uppercase">${{ $order->ordersLines->qty * $order->ordersLines->product->cost
                                }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>