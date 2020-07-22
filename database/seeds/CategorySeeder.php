<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'cat_name' => 'Tecnologia'
        ]);

        DB::table('categories')->insert([
            'cat_name' => 'Dormitorio'
        ]);

        DB::table('categories')->insert([
            'cat_name' => 'Calzado'
        ]);
    }
}
