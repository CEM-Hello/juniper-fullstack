<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SocialSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_settings')->insert([
            'facebook_url' => "https://www.facebook.com",
            'instagram_url' => "https://www.instagram.com",
            'yelp_url' => "https://www.yelp.com",
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
