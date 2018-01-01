<?php
/**
 * Created by PhpStorm.
 * User: MagedGHAZOULY
 * Date: 29/12/17
 * Time: 01:19 م
 */
namespace App\Repo;

use App\User;
use App\Models\Property;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


Class ProfileRepo extends AbstractRepo
{

    public function getUser()
    {
        $user = User::where('id', Auth::id())->first();
        return $user;
    }

    public function getUserFollowersCount(){
        $userFollowersCount = User::find(Auth::id())->followers()->count();
        return $userFollowersCount;
    }

    // [Followings]
    public function getUserFollowings(){
        $userFollowings = User::find(Auth::id())->with('followings');
        return $userFollowings;
    }

    public function getUserDevelopersFollowings(){
        $userDevelopersFollowings = User::find(Auth::id())->where('user_type_id', 1)->get();
        return $userDevelopersFollowings;
    }

    public function getUserBrokersFollowings(){
        $userBrokersFollowings = User::where('id', Auth::id())->where('user_type_id', 3)->get();
        return $userBrokersFollowings ;
    }

    public function getUserDesignersFollowings(){
        $userDesignersFollowings = User::where('id', Auth::id())->where('user_type_id', 4)->followings();
        return $userDesignersFollowings ;
    }

    public function getUserFollowingsCount(){
        $userFollowingsCount = User::find(Auth::id())->followings()->count();
        return $userFollowingsCount;
    }

    public function getUserProperties(){
        $properties = Property::where('user_id', Auth::id())->get();
        return $properties;
    }
}