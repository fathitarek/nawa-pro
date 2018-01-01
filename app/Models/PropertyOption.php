<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class PropertyOption extends Model
{
    use Translatable;
    protected $translatable = ['text'];

    protected $table = 'property_options';

    protected $fillable = [ 'text'];
    
    public function results() {
        return $this->hasMany('App\Models\PropertyOptionResult');
    }
}
