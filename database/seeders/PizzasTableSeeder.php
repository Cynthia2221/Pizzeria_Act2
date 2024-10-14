<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pizzas')->insert([
            ['name' => 'Margarita', 'address' => 
            'Secretario Aguilar', 'telephone' => '928656565'],
            ['name' => 'Carbonara', 'address' => 
            'Pepito Aguilar', 'telephone' => '928658976'],
        ]);
    }
}
