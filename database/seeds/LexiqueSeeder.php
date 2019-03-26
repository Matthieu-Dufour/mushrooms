<?php

use Illuminate\Database\Seeder;

class LexiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lexiques')->insert([
            'mot' => 'aaaa',
            'definition' => 'definition aaaa',
        ]);

        DB::table('lexiques')->insert([
            'mot' => 'bbbb',
            'definition' => 'definition bbbb',
        ]);

        DB::table('lexiques')->insert([
            'mot' => 'cccc',
            'definition' => 'definition cccc',
        ]);
    }
}
