<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $orders = \App\Models\Order::all();

        foreach ($orders as $order) {
            for ($i = 0; $i < 5; $i++) {
                \App\Models\OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $faker->numberBetween(1, 40),
                    'qty' => $faker->numberBetween(1, 100),
                    'price' => $faker->randomFloat(2, 1000, 100000),
                ]);
            }
        }
    }
}
