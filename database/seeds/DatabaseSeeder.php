<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ComestibiliteTableSeeder::class);
        $this->call(EcologieTableSeeder::class);
        $this->call(OdeurTableSeeder::class);
        $this->call(TypeTrophiqueTableSeeder::class);
        $this->call(GroupeTableSeeder::class);
        $this->call(MushroomsTableSeeder::class);
        $this->call(LexiqueSeeder::class);
        $this->call(ConfusionsTableSeeder::class);
        $this->call(FavoriteSeeder::class);
    }
}
