<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class PropertyOptionResult extends Model
{
    use Translatable;
    protected $translatable = ['text'];

    protected $table = 'property_option_results';

    protected $fillable = ['text','property_option_id'];
}
