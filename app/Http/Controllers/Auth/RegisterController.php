<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Company;
use App\UserType;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration data.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        $type = UserType::find($data['userTypeId']);
        if($type->name == 'Company')
        {
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'userTypeId' => ['required', 'numeric'],
                'mname' => ['required', 'string', 'max:255'],
                'phone' => ['required ','digits:9'],
                'gender' => ['required', 'in:Male,Female'],
                'cImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'cName' => ['required', 'string', 'max:255'],
                'cDesc' => ['required', 'string', 'max:255'],
                'cCity' => ['required', 'string', 'max:255','exists:cities,id'],
    
            ]);
        }

        else{
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'userTypeId' => ['required', 'numeric'],
                'mname' => ['required', 'string', 'max:255'],
                'phone' => ['required ','digits:9'],
                'gender' => ['required', 'in:Male,Female'],
    
            ]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $ip = $clientIP = '127.0.0.1';
        $userData = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'userTypeId' => $data['userTypeId'],
            'deleted_at' => '',
            'fname' => $data['name'],
            'mname' => $data['mname'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'ipAddress' =>$ip,
            'gender' => $data['gender'],
        ]);
        

        $type = UserType::find($data['userTypeId']);
        if($type->name == 'Company')
        {
            //Image validation and storing code
            if(request()->hasFile('cImage'))
            {
                $filenameToStore = time().'.'.request()->cImage->getClientOriginalExtension();
                request()->cImage->move(public_path('images'), $filenameToStore);
            }
            else{
                $filenameToStore = 'noImage.jpg';
            }
            
            // 
            $companyData = new Company([
                'name' => $data['cName'],
                'description' => $data['cDesc'],
                'address' => 'add',
                'phone' => $data['phone'],
                'logoImage' => $filenameToStore,
                'city_id' => $data['cCity'],
            ]);

            $userData->company()->save($companyData);
        }




        return $userData;
    }
}
