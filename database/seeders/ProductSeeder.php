<?php

namespace Database\Seeders;

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
        //
        DB::table('products')->insert([
            'SKU' => Str::random(10),
            'Name' => Str::random(10),
            'Description' => Str::random(10),
            'Price' => 1,
            'Stock' => 1,
            'ProductTypeId' => 1,
            'Image' => Str::random(10),
        ]);
    }
}
