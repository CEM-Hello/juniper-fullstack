<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //created users
        DB::table('roles')->insert([
            'title' => 'Admin'
        ]);

        DB::table('roles')->insert([
            'title' => 'Employee',
        ]);
        
        //assigned user a role
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 2,
        ]);
    }
}
