<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('favorites')->insert([
            'user_id' => '2',
            'favoriteable_id' => '1',
            'favoriteable_type' => 'App\Mushroom',
        ]);
    }
}
