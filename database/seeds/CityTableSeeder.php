<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cities')->insert(array(
                array(
                    'state_id' => '9',
                    'name' => 'Gulelia',
                ),
                array(
                    'state_id' => '9',
                    'name' => 'Kality',
                ),
                array(
                    'state_id' => '9',
                    'name' => 'Yeka',
                ),
                array(
                    'state_id' => '9',
                    'name' => 'Bole',
                ),
                array(
                    'state_id' => '9',
                    'name' => 'Arada',
                ),
                array(
                    'state_id' => '9',
                    'name' => 'Nefas Silk',
                ),
                array(
                    'state_id' => '9',
                    'name' => 'kolfie kerniao',
                ),
                array(
                    'state_id' => '9',
                    'name' => 'Addis ketema',
                ),
                array(
                    'state_id' => '9',
                    'name' => 'Cherkos ',
                ),
        ));
    }
}
