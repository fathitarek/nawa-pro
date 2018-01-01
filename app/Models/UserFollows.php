<?php
/**
 * Created by PhpStorm.
 * User: sunmedia
 * Date: 29/12/17
 * Time: 07:00 م
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFollows extends Model
{
    protected $table = 'user_follows';
    protected $fillable = ['user_id', 'follow_id'];

//    public function followers(){
//        return $this->belongsTo('App\User', 'id', 'user_id');
//    }
//
//    public function followings(){
//        return $this->belongsTo('App\User','id', 'user_id');
//    }
}