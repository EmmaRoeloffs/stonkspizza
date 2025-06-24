<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    public function test_order_can_be_created_with_pizzas()
    {

        $pizza = Pizza::create([
            'name' => 'Test Pizza',
            'price' => 12.50,
            'img' => 'test.png'
        ]);


        $order = Order::create();
        $order->pizzas()->attach($pizza->id, ['quantity' => 2]);

       
        $this->assertDatabaseHas('orders', ['id' => $order->id]);
        $this->assertDatabaseHas('order_pizza', [
            'order_id' => $order->id,
            'pizza_id' => $pizza->id,
            'quantity' => 2
        ]);
    }
}
