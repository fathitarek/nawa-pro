<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Carbon\Carbon;

class LoginController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
     */

use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        $this->middleware('guest')->except('logout','redirectToProvider','handleProviderCallback');
    }

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($service) {
        return Socialite::driver($service)->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleProviderCallback($service) {
        $is_verified = $is_featured = 0;
        $is_social = $role_id = $user_type_id = 1;
        $user_types = \DB::table('user_types')->where('id', $user_type_id)->first();
        if ($service === 'facebook') {$social_type = 1;}
        if ($service === 'google') {$social_type = 2;}

        $user = Socialite::driver($service)->user();
       //return $user->getId();
//        $user->token;
        $foundEmail = \DB::table('users')->where('email', $user->getEmail())->first();
//         dd(is_null($foundEmail));
        if (is_null($foundEmail)) {
            try {
               \DB::table('users')->insert([
                    [
                        'name' => $user->getName(),
                        'email' => $user->getEmail(),
                        'avatar' => $user->getAvatar(),
                        'password' => $user->token,
                        'phone'=>0,
                        'is_verified' => $is_verified,
                        'is_featured' => $is_featured,
                        'is_social' => $is_social,
                        'social_type' => $social_type,
//                       'created_at'=>date('Y-m-d H:i:s'),
                        'created_at' => Carbon::now()->toDateTimeString(),
                        'role_id' => $role_id,
                        'user_type_id' => $user_type_id,
                        'property_limit_user' => $user_types->limit_property,
                        'city_id'=>0,
                        'district_id'=>0
                    ]
                ]);
              //  \Auth::login($foundEmail, true);
               // $authUser = \Auth::user();
                \Auth::loginUsingId($foundEmail->id);

                // $userAuth = User::where(['email' => $user->getEmail()])->first();
                //\Auth::login($foundEmail);
                return redirect('/');
            } catch (\PDOException $ex) {
                return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
            }
        } else {
            return redirect('/signIn')->with('error', 'This e-mail is aleardy used!');
        }

//        try {
//            return view($url, ['data' => $data]);
//        } catch (\PDOException $ex) {
//            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
//        }
//        $user->getName().
//        $user->getEmail().
//        $user->getAvatar().
//             $is_verified.
//             $is_featured.
//             $social_type;
    }

}
