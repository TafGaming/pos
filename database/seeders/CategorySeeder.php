<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Makanan', 'description' => 'Kategori makanan'],
            ['name' => 'Minuman', 'description' => 'Kategori minuman'],
            ['nama' => 'Pakaian', 'keterangan' => 'Kategori pakaian'],
            ['name' => 'Elektronik', 'description' => 'Kategori elektronik'],
        ];
        \App\Models\Category::insert($data);
 }
}