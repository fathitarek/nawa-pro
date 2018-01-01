<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class UserType extends Model
{
    use Translatable;
    protected $translatable = ['text'];

    protected $table = 'user_types';

    protected $fillable = ['text','limit'];
}
