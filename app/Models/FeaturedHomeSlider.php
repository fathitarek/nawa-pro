<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use App\Models\Property;


class FeaturedHomeSlider extends Model
{
    use Translatable;
    protected $translatable = ['link'];
    protected $table = 'featured_home_sliders';

    protected $fillable = ['link','banner','property_id'];

    public function propertyDetails() {
        return Property::find($this->property_id);
        //return $this->belongsTo('App\Models\Property')->get();
    }
}
