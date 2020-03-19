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
        // $this->call(UserTypeTableSeeder::class);

        $this->call([
            StatesTableSeeder::class,
            UserTypeTableSeeder::class,
            CityTableSeeder::class,

        ]);
    }
}