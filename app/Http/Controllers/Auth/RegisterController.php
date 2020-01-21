<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use DB;
use App\User;
use App\User_Info;
use App\Family;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        Family::create([
            'address' => $data['address'],
            'city' => $data['city'],
            'home_state' => $data['home_state'],
            'zip_code' => $data['zip_code']
        ]);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'dob' => $data['dateofbirth'],
            'secondary_email' => $data['secondaryemail'],
            'primary_phone' => $data['primaryNo'],
            'secondary_phone' => $data['secondaryNo'],
            'is_parent ' => $data['radio2'],
            'allergies' => $data['allergies'],
            'is_photo' => $data['radio1'],
            'emer_name' => $data['emergname'],
            'emer_phone ' => $data['emergno'],
            'emer_relation' => $data['emergrel'],
            'family_id' => $nextId
        ]);
    }
}
