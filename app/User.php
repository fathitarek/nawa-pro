<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','district_id','city_id','phone','property_limit_user',
        'user_type_id','role_id','is_verified','is_featured','is_social','social_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function favouriteProperties(){
        return $this->belongsToMany('App\Models\Property','user_favourite_properties','user_id','property_id');
    }

    public function followers(){
        return $this->hasMany('App\Models\UserFollows','user_id','id');
    }

    public function followings(){
        return $this->hasMany('App\Models\UserFollows','follow_id', 'id');
    }
    public function myProperties()
    {
        return $this->hasMany('App\Models\Property','user_id','id');
    }

}
