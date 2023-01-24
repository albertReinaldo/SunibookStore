<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ryan',
            'email' => 'ryan.christian@binus.ac.id',
            'is_admin' => true,
            'google_id' => null,
            'password' => Hash::make('12345678'),
            'confirm_password' => Hash::make('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Guest',
            'email' => 'guest@gmail.com',
            'is_admin' => false,
            'google_id' => null,
            'password' => Hash::make('123456'),
            'confirm_password' => Hash::make('123456')
        ]);
    }
}
