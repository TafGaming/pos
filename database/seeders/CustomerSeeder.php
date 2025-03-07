<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $categories = \App\Models\Customer::all();

        foreach ($categories as $category) {
            for ($i = 0; $i < 5; $i++) {
                \App\Models\Product::create([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'address' => $faker->address,
                    'phone' => $faker->numberBetween(81100000000, 85799999999),
                ]);
            }
 }
}
}