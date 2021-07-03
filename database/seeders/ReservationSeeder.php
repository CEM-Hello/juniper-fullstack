<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,20) as $index){
            DB::table('reservations')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'date' => $faker->dateTimeThisMonth('now', 'America/Los_Angeles'),
                'time' => rand(6,10),
                'guests_total' => rand(1,6),
                'seating' => rand(1,2),
                'updated_at' => $faker->dateTimeThisMonth('now', 'America/Los_Angeles'), 
                'created_at' => $faker->dateTimeThisMonth('now', 'America/Los_Angeles')
            ]);
        }
    }
}
