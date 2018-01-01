<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class FrontRole extends Model
{
    
    

    protected $table = 'front_roles';

    protected $fillable = ['user_type_id','front_slug_id'];
}
