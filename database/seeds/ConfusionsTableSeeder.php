<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfusionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('confusions')->insert([
            'mushroom1_id' => '1',
            'mushroom2_id' => '2',
        ]);
        DB::table('confusions')->insert([
            'mushroom1_id' => '2',
            'mushroom2_id' => '1',
        ]);
    }
}