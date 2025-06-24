<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();
        return view(view: 'order.index', data: compact(var_name: 'pizzas'));
    }
public function store(Request $request): RedirectResponse
{
    $request->validate([
        'pizzas' => 'required|string',
    ]);

    $pizzaNames = explode( separator: ',', string: $request->pizzas);
    $pizzaCounts = array_count_values(array: $pizzaNames);

    $order = Order::create();

    foreach ($pizzaCounts as $pizzaName => $quantity) {
        $pizza = Pizza::where(column: 'name', operator: $pizzaName)->first();

        if ($pizza) {
            $order->pizzas()->attach(ids: $pizza->id, attributes: ['quantity' => $quantity]);
        }
    }

    return redirect()->route(route: 'order.index')->with(key: 'success', value: 'Order placed successfully!');
}
}
