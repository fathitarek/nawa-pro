<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class PropertyOptionUser extends Model
{
    use Translatable;
    protected $translatable = ['value'];

    protected $table = 'property_option_users';

    protected $fillable = ['property_id','property_option_id','property_option_result_id','value'];
    
    public function propertyOption() {
        
        return $this->belongsTo('App\Models\PropertyOption')->first();
    }
    
    
}
