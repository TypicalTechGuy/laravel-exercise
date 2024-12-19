<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
        ['name' => 'Apple', 'description' => 'Organic red apple', 'quantity' => 20, 'price' => 5000, 'category_id' => 1],
        ['name' => 'Banana', 'description' => 'Organic yellow banana', 'quantity' => 50, 'price' => 3000, 'category_id' => 1]
        ]);
    }
}
