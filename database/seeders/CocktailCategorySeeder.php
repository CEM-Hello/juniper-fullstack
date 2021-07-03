<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CocktailCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cocktail_categories')->insert([
            'title' => 'gin',
            'image_url' => '/img/CHIPS.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('cocktail_categories')->insert([
            'title' => 'tequila',
            'image_url' => '/img/CHIPS.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('cocktail_categories')->insert([
            'title' => 'vodka',
            'image_url' => '/img/CHIPS.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('cocktail_categories')->insert([
            'title' => 'whiskey',
            'image_url' => '/img/CHIPS.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
