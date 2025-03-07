<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Thoriq', 'email' => 'tafgaming2801@gmail.com', 'password' => bcrypt('12345678')],
            ['name' => 'Tokir Haji', 'email' => 'ngetesdoang05@gmail.com', 'password' => bcrypt('12345678')],
            ['name' => 'Tokir', 'email' => 'thoriq.akhtar49@sma.belajar.id', 'password' => bcrypt('12345678')],
        ];
        \App\Models\User::insert($data);
}
}

