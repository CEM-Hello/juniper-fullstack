<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Billy Santos',
            'email' => 'billy@gmail.com',
            'password' => Hash::make('12345678'),
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Cindy Jonson',
            'email' => 'cindy@gmail.com',
            'password' => Hash::make('12345678'),
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
