<?php

use Illuminate\Database\Seeder;

class UserTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert(array(
            array(
              'name' => 'Admin',
              'isActive' => '1',
            ),
            array(
              'name' => 'Encoder',
              'isActive' => '1',
            ),
          ));
    }
}
