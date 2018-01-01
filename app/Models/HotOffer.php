<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class HotOffer extends Model
{
    use Translatable;
    
    protected $table = 'hot_offers';

    protected $fillable = ['property_id','start_date','end_date','paid'
        ,'hot_offers_discount_id','hot_offers_place_id','price_after_discount','discount_value'];

     public function propertyDetails() {
         return Property::find($this->property_id);
       
    }
    
}
