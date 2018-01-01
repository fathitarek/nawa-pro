<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use App\Models\PropertyType;
use App\Models\PropertyStatus;
use App\Models\PurposePosting;
use App\Models\Developer;
use App\Models\DegreeOwnership;


class Property extends Model
{
    use Translatable;
    protected $translatable = ['title'];

    protected $table = 'properties';

    public function favouriteUsers(){
        return $this->belongsToMany('App\User','user_favourite_properties','id', 'property_id');
    }

    protected $fillable = [ 'title','price','property_type_id','property_form_id','purpose_posting_id',
        'master_bedrooms','regular_bedrooms','location_id','full_bathrooms','half_bathrooms','degree_ownership_id',
        'covered_garage','outdoor_parking','property_status_id','land_area','built_up_area','developer_id','extra_rooms',
        'swimming_pools','finishing_condition','public','additional_comments'];
    public function propertyType() {
        return $this->belongsTo('App\Models\PropertyType')->first();
    }
    public function propertyStatus() {
        return $this->belongsTo('App\Models\PropertyStatus')->first();
    }
    public function purposePosting() {
        return $this->belongsTo('App\Models\PurposePosting')->first();
    }
    public function developer() {
        return $this->belongsTo('App\Models\Developer')->first();
    }
    public function degreeOwnership() {
        return $this->belongsTo('App\Models\DegreeOwnership')->first();
    }
    public function optionUser() {
        return $this->hasMany('App\Models\PropertyOptionUser')
                ->leftJoin('property_options','property_option_users.property_option_id','=','property_options.id')
                ->where('property_options.is_featured',1)
                ->get();
    }
    public function hotOffer() {
        return $this->hasOne('App\Models\HotOffer')->first();
    }
    public function coverPhoto() {
        return $this->hasOne('App\Models\PropertyImage')->where('is_cover',1)->first();
    }
    public function bestPhoto() {
        return $this->hasOne('App\Models\PropertyImage')->where('is_best',1)->orWhere('is_cover',0)->first();
    }
}
