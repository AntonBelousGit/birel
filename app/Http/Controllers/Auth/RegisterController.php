<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'surname' => ['required', 'string', 'max:255'],
            'linkedin' => ['nullable', 'string', 'max:255'],
            'fund_address' => ['nullable', 'string', 'max:255'],
            'fund_name' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'receive_news' => ['nullable'],
            'type' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        /**
         * undocumented constant
         **/
        if($data['type'] == 0){
            return User::create([
                'name' => $data['name'],
                'surname' => $data['surname'],
                // 'linkedin' => $data['linkedin'],
                'fund_address' => $data['fund_address'],
                'fund_name' => $data['fund_name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'receive_news' => $data['receive_news'] ?? null,
                'type' => $data['type'],
            ]);
        }else{

        }
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'linkedin' => $data['linkedin'],
            // 'fund_address' => $data['fund_address'],
            // 'fund_name' => $data['fund_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'receive_news' => $data['receive_news'] ?? null,
            'type' => $data['type'],
        ]);
    }
}