<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class PropertyAd extends Model
{


    protected $table = 'property_ads';

    protected $fillable = ['image','dimension_id'];
}
