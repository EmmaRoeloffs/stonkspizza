<?php

namespace Database\Seeders;

use App\Models\Pizza;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $pizzas = [
            ['name' => 'Pizza Tonno', 'price' => 9.99, 'img' => 'tonno.png'],
            ['name' => 'Pizza Hawaii', 'price' => 11.99, 'img' => 'hawaii.png'],
            ['name' => 'Pizza Pepperoni', 'price' => 10.99, 'img' => 'pepperoni.png'],
            ['name' => 'Pizza Margherita', 'price' => 8.99, 'img' => 'margherita.png'],
            ['name' => 'Pizza BBQ Chicken', 'price' => 12.99, 'img' => 'bbqchicken.png'],
            ['name' => 'Pizza Shoarma', 'price' => 9.99, 'img' => 'shoarma.png'],
            ['name' => 'Pizza Four Cheese', 'price' => 9.99, 'img' => '4 cheese.png'],
        ];

        foreach ($pizzas as $pizza) {
            Pizza::factory()->create($pizza);
        }
    }
}
