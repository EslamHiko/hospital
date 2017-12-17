<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'birth_date' => $data['birth_date'],
            'role' => $data['role'],
            'phone_number' => $data['phone_number'],
            'fb_link' => $data['fb_link'],
            'tw_link' => $data['tw_link'],
            'linkedin_link' => $data['linkedin_link'],
            'address' => $data['address'],
            'password' => bcrypt($data['password']),
        ]);
        if ($data['role'] == 'doctor') {
            Doctor::create([
            'user_id' => $user->id,
            'position' => $data['position'],
            'exp_years' => $data['exp_years'],
            'position' => $data['position'],
            'office_address' => $data['office_address'],
            'work_days' => $data['work_days']
        ]);
        }
        return $user;
    }
}
