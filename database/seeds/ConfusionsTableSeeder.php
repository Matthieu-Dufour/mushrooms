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
            'mushroom2_id' => '3',
        ]);
        DB::table('confusions')->insert([
            'mushroom1_id' => '3',
            'mushroom2_id' => '1',
        ]);


        DB::table('confusions')->insert([
            'mushroom1_id' => '4',
            'mushroom2_id' => '5',
        ]);
        DB::table('confusions')->insert([
            'mushroom1_id' => '5',
            'mushroom2_id' => '4',
        ]);
        DB::table('confusions')->insert([
            'mushroom1_id' => '4',
            'mushroom2_id' => '1',
        ]);
        DB::table('confusions')->insert([
            'mushroom1_id' => '1',
            'mushroom2_id' => '4',
        ]);


        DB::table('confusions')->insert([
            'mushroom1_id' => '5',
            'mushroom2_id' => '1',
        ]);
        DB::table('confusions')->insert([
            'mushroom1_id' => '1',
            'mushroom2_id' => '5',
        ]);
        
        DB::table('confusions')->insert([
            'mushroom1_id' => '6',
            'mushroom2_id' => '7',
        ]);
        DB::table('confusions')->insert([
            'mushroom1_id' => '6',
            'mushroom2_id' => '1',
        ]);
        
        DB::table('confusions')->insert([
            'mushroom1_id' => '7',
            'mushroom2_id' => '6',
        ]);
        DB::table('confusions')->insert([
            'mushroom1_id' => '1',
            'mushroom2_id' => '6',
        ]);

        DB::table('confusions')->insert([
            'mushroom1_id' => '7',
            'mushroom2_id' => '8',
        ]);

        DB::table('confusions')->insert([
            'mushroom1_id' => '8',
            'mushroom2_id' => '7',
        ]);
    }
}