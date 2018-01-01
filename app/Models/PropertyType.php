<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class PropertyType extends Model
{
    use Translatable;
    protected $translatable = ['text'];

    protected $table = 'property_types';

    protected $fillable = [ 'text'];
}
