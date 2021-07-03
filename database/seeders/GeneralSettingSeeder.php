<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Juniper Distilling Company',
            'logo_image_url' => '/img/clipart-restaurant-restaurant-logo-5.png',
            'address_1' => '945 ELLIOTT AVE W',
            'address_2' => '',
            'city' => 'SEATTLE',
            'state' => 'WA',
            'zipcode' => '98119',
            'phone_number' => '206-219-8652',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
