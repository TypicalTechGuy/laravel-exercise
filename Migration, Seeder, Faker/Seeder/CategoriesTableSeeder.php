<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('categories')->insert ([
        ['name' => 'Fruits']
        ]);
    }
}
