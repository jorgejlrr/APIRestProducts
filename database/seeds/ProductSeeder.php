<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'prod_name' => 'Desktop 600G5 HP',
            'prod_price' => '1500',
            'prod_cat' => '1'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Motorola G6 Play',
            'prod_price' => '850',
            'prod_cat' => '1'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Memoria RAM DDR3 8Gb',
            'prod_price' => '220',
            'prod_cat' => '1'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Juego de Comedor DINA',
            'prod_price' => '479.99',
            'prod_cat' => '2'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Juego de Comedor Lyon Red',
            'prod_price' => '1399.99',
            'prod_cat' => '2'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Juego de Dormitorio Ferrara',
            'prod_price' => '1299.99',
            'prod_cat' => '2'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Adidas All Star',
            'prod_price' => '249.90',
            'prod_cat' => '3'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Nike Air Force 1',
            'prod_price' => '289.90',
            'prod_cat' => '3'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Vans Old Skool Negro',
            'prod_price' => '159',
            'prod_cat' => '3'
        ]);
    }
}
