<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('states')->insert(array(
            array(
              'name' => 'Amhara',
            ),
            array(
                'name' => 'Tigray',
            ),
            array(
                'name' => 'Oromia',
            ),
            array(
                'name' => 'Afar',
            ),
            array(
                'name' => 'Somali',
            ),
            array(
                'name' => 'SNNP',
            ),
            array(
                'name' => 'Binshangul',
            ),
            array(
                'name' => 'Gambela',
            ),
            array(
                'name' => 'Addis Ababa',
            ),
            array(
                'name' => 'Dire Dawa',
            ),
        ));
    }
}
