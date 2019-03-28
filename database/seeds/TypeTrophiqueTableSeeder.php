<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeTrophiqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Type_Trophique')->insert([
            'status' => 'Photoorganohétérotrophe',
        ]);
        DB::table('Type_Trophique')->insert([
            'status' => 'Photoorganoautotrophe',
        ]);
        DB::table('Type_Trophique')->insert([
            'status' => 'Photolithohétérotrophe',
        ]);
        DB::table('Type_Trophique')->insert([
            'status' => 'Photolithoautotrophe',
        ]);
        DB::table('Type_Trophique')->insert([
            'status' => 'Chimioorganohétérotrophe',
        ]);
        DB::table('Type_Trophique')->insert([
            'status' => 'Chimioorganoautotrophe',
        ]);
        DB::table('Type_Trophique')->insert([
            'status' => 'Chimiolithohétérotrophe',
        ]);
        DB::table('Type_Trophique')->insert([
            'status' => 'Chimiolithoautotrophe',
        ]);
    }
}