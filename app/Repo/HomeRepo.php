<?php

namespace App\Repo;

use Illuminate\Support\Facades\Validator;
use App\Models\Property;
use App\Models\PurposePosting;
use App\Models\HotOffer;
use App\Models\FeaturedHomeSlider;
use App\User;

Class HomeRepo extends AbstractRepo {

    private $result = array();

    /**
     * show options for the property
     * @return array
     */
    public function showMain() {

        $result['featured_home_sliders'] = FeaturedHomeSlider::all();
        $result['hot_offers'] = HotOffer::where('hot_offers_place_id', 1)->get();
        $result['properties'] = Property::where([
                        
                        ['is_approved', '=', '1'],
                ])->orderBy('is_prime','desc')->limit(6)->get();
        
        $result['count_property'] = Property::count();

        return $result;
    }
    public function loadResult() {
        
         if($this->custom_request->query('offset') != null)
        {
            $skip_offset=$this->custom_request->query('offset') * 6;
           
        }
        else
        {
            $skip_offset = 0;
        }
        $results['properties']=Property::where('is_approved',1)->orderBy('is_prime','desc')->skip($skip_offset)->limit(4)->get();
        return $results;
    }
    public function searchResult()
    {
       
        $search_field=$this->custom_request->query('search_field');
        $result['developers']='';
        $result['brokers']='';
        $result['properties']='';
        if($search_field != '')
        {
         if($this->custom_request->query('developers') == 'true' || $this->custom_request->query('all_website') == 'true')
        {
            $result['developers']=User::where([
    ['is_verified', '=', '1'],
    ['name', 'like', '%'.$search_field.'%'],
    ['id', '!=', '1'],
    ['user_type_id', '=', '1']
])->limit(5)->get();
           
           
        }
        
         if($this->custom_request->query('brokers') == 'true' || $this->custom_request->query('all_website') == 'true')
        {
            $result['brokers']=User::where([
    ['is_verified', '=', '1'],
    ['name', 'like', '%'.$search_field.'%'],
    ['id', '!=', '1'],
    ['user_type_id', '=', '3']
])->limit(5)->get();
           
           
        }
        
         if($this->custom_request->query('properties') == 'true' || $this->custom_request->query('all_website') == 'true')
        {
            $result['properties']=Property::where([
    ['is_approved', '=', '1'],
    ['title', 'like', '%'.$search_field.'%'],
])->limit(5)->get();
           
           
        }
        $result['search']=$this->custom_request->query('search_field');
        }
       return $result;
    }

}
