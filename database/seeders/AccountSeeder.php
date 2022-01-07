<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('accounts')->insert([
            'Username' => Str::random(10),
            'Password' => Hash::make('Password'),
            'Email' => Str::random(10).'@gmail.com',
            'Phone' => Str::random(10),
            'Address' => Str::random(20),
            'Fullname' => Str::random(15),
            'IsAdmin' => true,
            'Avatar' => Str::random(10),
        ]);
    }
}
