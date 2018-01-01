<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class Contact extends Model
{
    use Translatable;
    protected $translatable = ['name','message'];

    protected $table = 'contacts';

    protected $fillable = ['name','email','message','phone'];
}
