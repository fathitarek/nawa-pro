<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\UserType;
use App\Models\District;
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'city_id'=>'required',
            'district_id'=>'required',
            'user_type_id'=>'required',
            'terms_checked'=>'accepted',
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
        $user_types = UserType::latest()->where('id',$data['user_type_id'])->first();
//dd($user_types->limit_property);
        $data['property_limit_user']=$user_types->limit_property;
      //  dd($data['property_limit_user']);
        return User::create([
            'name' => $data['first_name']." ".$data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'city_id'=>$data['city_id'],
            'district_id'=>$data['district_id'],
            'user_type_id'=>$data['user_type_id'],
            'role_id'=>2,
            'is_verified'=>0,
            'is_featured'=>0,
            'is_social'=>0,
            'social_type'=>0,
            'phone'=>0,
            'property_limit_user'=> $data['property_limit_user'],
        ]);
    }

}
