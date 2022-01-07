<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('invoices')->insert([
            'Code' => Str::random(10),
            'AccountId' => 1,
            'IssuedDate' => Carbon::now(),
            'ShippingAddress' => Str::random(10),
            'ShippingPhone' => Str::random(20),
            'Total' => 1,
        ]);
    }
}
