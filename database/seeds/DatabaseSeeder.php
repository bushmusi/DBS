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

        $this->call([
            StatesTableSeeder::class,
            UserTypeTableSeeder::class,
            CityTableSeeder::class,
            ItemTypeTableSeeder::class,

        ]);


        factory(App\User::class, 100)->create()->each(function ($user) {
            if($user->userTypeId == 5)
            {
                $companyData = factory(App\Company::class)->make();
                $user->company()->save($companyData);
            }
        });
        
        factory(App\ItemPost::class, 100)->create()->each(function ($itemPost) {
    

            $wilshList = factory(App\WishList::class,3)->make();
            $itemPost->wishlists()->saveMany($wilshList);

            if($itemPost->itemTypeID == '1'){

                $houseData = factory(App\House::class)->make();
                $itemPost->house()->save($houseData);

                
                if($houseData->type == 'Mall'){
                    $housePicture = factory(App\Picture::class,3)->states('house_mall')->make();
                    $itemPost->pictures()->saveMany($housePicture);
                }

                elseif( $houseData->type == 'Apartama'){
                    $housePicture = factory(App\Picture::class,3)->states('house_apartama')->make();
                    $itemPost->pictures()->saveMany($housePicture);
                }

                else{
                    $housePicture = factory(App\Picture::class,3)->states('house_real_estate')->make();
                    $itemPost->pictures()->saveMany($housePicture);
                }
            }
            else{
                $carData = factory(App\Car::class)->make();
                $itemPost->car()->save($carData);
                $carPicture = factory(App\Picture::class,3)->states('car')->make();
                $itemPost->pictures()->saveMany($carPicture);
            }
            
        });
    }
}
