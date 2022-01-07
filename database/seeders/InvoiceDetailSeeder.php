<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InvoiceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('invoice_details')->insert([
            'InvoiceId' => 1,
            'ProductId' => 1,
            'Quantity' => 1,
            'UnitPrice' => 1,
        ]);
    }
}
