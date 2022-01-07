<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('carts')->insert([
            'AccountId' => 1,
            'ProductId' => 1,
            'Quantity' => 1,
        ]);
    }
}
