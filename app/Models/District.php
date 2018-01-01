<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class District extends Model
{
    use Translatable;
    protected $translatable = ['text'];

    protected $table = 'districts';

    protected $fillable = ['text','longtitude','latitiude','city_id'];
}
