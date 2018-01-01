<?php
/**
 * Created by PhpStorm.
 * User: MagedGHAZOULY
 * Date: 29/12/17
 * Time: 01:19 م
 */
namespace App\Http\Controllers\Front;

use App\Repo\ProfileRepo;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
//use Input;
use Form;
use Html;

class ProfileController extends FrontController
{
    public function __construct(ProfileRepo $profileRepo) {
        $this->profileRepo = $profileRepo;
    }

    public function index(){

        // [main]
        $user = $this->profileRepo->getUser();

        $userFollowersCount = $this->profileRepo->getUserFollowersCount();
        $userFollowingsCount = $this->profileRepo->getUserFollowingsCount();

        // [Following List]
        $userDevelopersFollowings = $this->profileRepo->getUserDevelopersFollowings();
//         $userBrokersFollowings = $this->profileRepo->getUserBrokersFollowings();
//  dd($userBrokersFollowings );
//        $userDesignersFollowings = $this->profileRepo->getUserDesignersFollowings();


        return view('front.profile.index', compact('user', 'userFollowersCount', 'userFollowingsCount', 'userFollowings', 'userDevelopersFollowings', 'userBrokersFollowings', 'userDesignersFollowings'));
    }
}
