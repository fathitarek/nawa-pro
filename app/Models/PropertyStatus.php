<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class PropertyStatus extends Model
{
    use Translatable;
    protected $translatable = ['text'];

    protected $table = 'property_statuses';

    protected $fillable = [ 'text'];
}
