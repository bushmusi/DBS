<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\UserType;
use App\City;


// // "View" is t

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        
        view()->composer(['login', 'auth.register'], function ($view) {

            $types = UserType::where([ 
                ['name','!=','Encoder'],
                ['name','!=','Admin']
            ])->get();
    
            $cities = City::with('state')->get();

            $data = [
                'UserTypeList' => $types,
                'CityList' => $cities
            ];
    
            $view->with($data);
        });


    }
}
