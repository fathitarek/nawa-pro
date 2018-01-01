<?php

namespace App\Repo;

use Illuminate\Support\Facades\Validator;
use App\Models\Property;
use App\Models\PurposePosting;
use App\Models\PropertyStatus;
use App\Models\PropertyType;
use App\Models\PropertyForm;
use App\Models\District;
use App\Models\Developer;
use App\Models\DegreeOwnership;
use App\Models\PropertyOption;
use App\Models\HotOffer;
use App\Models\PropertyOptionUser;
use App\Models\PropertyImage;
use Illuminate\Support\Facades\Auth;

Class PropertyRepo extends AbstractRepo {

    protected $validator;
    protected $optionValidator;
    protected $step3Validator;
    protected $hotOfferValidator;
    private $result = array();

    /**
     * validation of property
     * @return object 
     */
    private function propertyValidator() {
        $this->validator = Validator::make($this->custom_request->all(), [
                    'title' => 'required|unique:properties|max:255',
                    'price' => 'required|integer',
                    'property_type_id' => 'required',
                    'property_form_id' => 'required',
                    'purpose_posting_id' => 'required',
                    'degree_ownership_id' => 'required',
                    'property_status_id' => 'required',
                    'developer_id' => 'required',
                    'longtitude' => 'required',
                    'latitiude' => 'required',
                    'address' => 'required'
        ]);

        return $this->validator;
    }

    /**
     * validation of hot offer
     * @return object 
     */
    private function hotOfferValidator() {
        $this->hotOfferValidator = Validator::make($this->custom_request->all(), [
                    'discount_value' => 'required|integer',
                    'price_after_discount' => 'required|integer',
        ]);
        return $this->hotOfferValidator;
    }

    /**
     * show options for the property
     * @return array
     */
    public function showOptions() {
        $result['purpose_postings'] = PurposePosting::all();
        $result['property_statuses'] = PropertyStatus::all();
        $result['property_types'] = PropertyType::all();
        $result['property_forms'] = PropertyForm::all();
        $result['districts'] = District::all();
        $result['developers'] = Developer::all();
        $result['degree_ownerships'] = DegreeOwnership::all();
        $result['property_options'] = PropertyOption::all();
        return $result;
    }

    /**
     * show property options for the property
     * @return array
     */
    public function showPropertyOptions() {
        $result['number_options'] = PropertyOption::where('property_option_type_id', 5)->get();
        $result['select_options'] = PropertyOption::where('property_option_type_id', 2)->get();
        $result['text_options'] = PropertyOption::where('property_option_type_id', 1)->get();
        return $result;
    }

    /**
     * add all data to property
     * @return json data 
     */
    public function addPropertyStep1() {

        $this->propertyValidator();
        if ($this->validator->fails()) {
            $this->result = ['code' => 100, 'result' => $this->validator->errors(), 'message' => "validator"];
        } else {

            if ($this->custom_request->get('discount_value') != '') {

                $this->hotOfferValidator();
                if ($this->hotOfferValidator->fails()) {
                    $this->result = ['code' => 100, 'result' => $this->hotOfferValidator->errors(), 'message' => "validator"];
                    return $this->result;
                }
            }
            $property = new Property();
            $property->title = $this->custom_request->get('title') !== null ? $this->custom_request->get('title') : '';
            $property->price = $this->custom_request->get('price') !== null ? $this->custom_request->get('price') : 0;
            $property->property_type_id = $this->custom_request->get('property_type_id') !== null ? $this->custom_request->get('property_type_id') : 0;
            $property->property_form_id = $this->custom_request->get('property_form_id') !== null ? $this->custom_request->get('property_form_id') : 0;
            $property->purpose_posting_id = $this->custom_request->get('purpose_posting_id') !== null ? $this->custom_request->get('purpose_posting_id') : 0;
            $property->address = $this->custom_request->get('address') !== null ? $this->custom_request->get('address') : '';
            $property->degree_ownership_id = $this->custom_request->get('degree_ownership_id') !== null ? $this->custom_request->get('degree_ownership_id') : 0;
            $property->property_status_id = $this->custom_request->get('property_status_id') !== null ? $this->custom_request->get('property_status_id') : 0;
            $property->developer_id = $this->custom_request->get('developer_id') !== null ? $this->custom_request->get('developer_id') : 0;
            $property->longtitude = $this->custom_request->get('longtitude') !== null ? $this->custom_request->get('longtitude') : 0;
            $property->latitiude = $this->custom_request->get('latitiude') !== null ? $this->custom_request->get('latitiude') : 0;
            $property->public = $this->custom_request->get('public') !== null ? $this->custom_request->get('public') : 0;
            try {
                $property->save();
                if ($this->custom_request->get('discount_value') != '') {
                    $hot_offer = new HotOffer();
                    $hot_offer->property_id = $property->id;
                    $hot_offer->discount_value = $this->custom_request->get('discount_value') !== null ? $this->custom_request->get('discount_value') : 0;
                    $hot_offer->price_after_discount = $this->custom_request->get('price_after_discount') !== null ? $this->custom_request->get('price_after_discount') : 0;
                    $hot_offer->save();
                }
                $this->result = ['code' => 200, 'result' => $property->title, 'message' => "success"];
            } catch (\PDOException $ex) {
                
                $this->result = ['code' => 100, 'result' => $ex->getMessage(), 'message' => "error"];
                //return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
            }
        }
        
        return $this->result;
    }

    /**
     * validation of images of property
     * @return object 
     */
    protected function optionValidator() {
        $this->optionValidator = Validator::make($this->custom_request->all(), [
                    'optionrequired.*' => 'required',
        ]);


        return $this->optionValidator;
    }

    /**
     * add all data to property
     * @return json data 
     */
    public function addPropertyStep2() {

        $this->optionValidator();

        if ($this->optionValidator->fails()) {

            $this->result = ['code' => 100, 'result' => $this->optionValidator->errors(), 'message' => "validator"];
        } else {
            $title = $this->custom_request->get('title');
            //dd($this->custom_request->all());
            $property = Property::where('title', $title)->first();

            $option_optional = $this->custom_request->get('optionoptional');
            foreach ($option_optional as $key_optional => $data_optional) {
                $property_option_user = new PropertyOptionUser();
                $property_option_user->property_id = $property['id'];
                $property_option_user->property_option_id = $key_optional;
                $property_option_user->value = $data_optional;

                try {
                    $property_option_user->save();
                } catch (\PDOException $ex) {
                    $this->result = ['code' => 100, 'result' => $ex->getMessage(), 'message' => "error"];
                    return $this->result;
                    //return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
                }
            }
            $option_required = $this->custom_request->get('optionrequired');
            foreach ($option_required as $key_required => $data_required) {
                $property_option_user = new PropertyOptionUser();
                $property_option_user->property_id = $property['id'];
                $property_option_user->property_option_id = $key_required;
                $property_option_user->value = $data_required;
                try {
                    $property_option_user->save();
                } catch (\PDOException $ex) {
                    $this->result = ['code' => 100, 'result' => $ex->getMessage(), 'message' => "error"];
                    return $this->result;
                    //return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
                }
            }
            $this->result = ['code' => 200, 'result' => $property['title'], 'message' => "success"];
        }
        return $this->result;
    }

    public function checkStep2($title) {
        $property = Property::where('title', $title)->first();
        $property_option_user = PropertyOptionUser::where('property_id', $property['id'])->count();
        return $property_option_user;
    }

    /**
     * validation of images of property
     * @return object 
     */
    protected function step3Validator() {
        $this->step3Validator = Validator::make($this->custom_request->all(), [
                    'cover_image' => 'required|image|mimes:jpg,jpeg,png|dimensions:width=1920,height=1080',
                    'images.*' => 'required|image|mimes:jpg,jpeg,png|dimensions:width=1024,height=1024',
                    'public' => 'required',
                    'agree' => 'accepted'
        ]);

        return $this->step3Validator;
    }

    public function addPropertyStep3() {

        $this->step3Validator();

        if ($this->step3Validator->fails()) {

            $this->result = ['code' => 100, 'result' => $this->step3Validator->errors(), 'message' => "validator"];
        } else {
            $title = $this->custom_request->get('title');

            $property = Property::where('title', $title)->first();
            //$additional_comments=$this->custom_request->get('additional_comments');

            $property->additional_comments = $this->custom_request->get('additional_comments') !== null ? $this->custom_request->get('additional_comments') : 0;
            $property->public = $this->custom_request->get('public') !== null ? $this->custom_request->get('public') : 0;
            if(Auth::check())
            {
               $property->user_id=Auth::id(); 
            }
            try {
                $property->save();
            } catch (\PDOException $ex) {
                $this->result = ['code' => 100, 'result' => $e->getMessage(), 'message' => "error"];
                return $this->result;
            }

            if ($this->custom_request->hasFile('cover_image') && $this->custom_request->file('cover_image')->isValid()) {
                $cover_image = md5(time() . str_random(16)) . '.' . $this->custom_request->file('cover_image')->clientExtension();
                try {
                    $destinationPath = public_path('/property-images');
                    $this->custom_request->file('cover_image')->move($destinationPath, $cover_image);
                    $property_image = new PropertyImage();
                    $property_image->property_id = $property['id'];
                    $property_image->is_cover = 1;
                    $property_image->image = $cover_image;
                    try {
                        $property_image->save();
                    } catch (\PDOException $ex) {
                        $this->result = ['code' => 100, 'result' => $ex->getMessage(), 'message' => "error"];
                        return $this->result;
                    }
                } catch (\Exception $e) {
                    $this->result = ['code' => 100, 'result' => $e->getMessage(), 'message' => "error"];
                    return $this->result;
                }
            }
            $images = $this->custom_request->file('images');
            foreach ($images as $key => $image) {
                $other_image = md5(time() . str_random(16)) . '.' . $image->clientExtension();
                try {
                    $destinationPath = public_path('/property-images');
                    $image->move($destinationPath, $other_image);
                    $property_image = new PropertyImage();
                    $property_image->property_id = $property['id'];
                    $property_image->is_cover = 0;
                    $property_image->image = $other_image;
                    try {
                        $property_image->save();
                    } catch (\PDOException $ex) {
                        $this->result = ['code' => 100, 'result' => $ex->getMessage(), 'message' => "error"];
                        return $this->result;
                    }
                } catch (\Exception $e) {
                    $this->result = ['code' => 100, 'result' => $e->getMessage(), 'message' => "error"];
                    return $this->result;
                }
            }
            $this->result = ['code' => 200, 'result' => 'final', 'message' => "success"];
        }
        return $this->result;
    }

    public function checkStep3($title) {
        $property = Property::where('title', $title)->first();
        $property_image = PropertyImage::where('property_id', $property['id'])->count();
        return $property_image;
    }

    public function viewDetails($title) {
        $property = Property::where('title', $title)->first();
        $result['property'] = $property;
        $result['property_cover_image'] = PropertyImage::where('property_id', $property['id'])->where('is_cover', 1)->first();
        $result['other_images'] = PropertyImage::where('property_id', $property['id'])->where('is_cover', 0)->where('is_best', 1)->limit(3)->get();
        $result['property_option_results'] = PropertyOptionUser::where('property_id', $property['id'])->get();


        $result['hot_offer'] = HotOffer::where('property_id', $property['id'])->first();
        $property_type_id = $property['property_type_id'];
        $purpose_posting_id = $property['purpose_posting_id'];
        $result['similar_properties'] = Property::
                where([
    ['id', '!=', $property['id']],
    ['property_type_id', '=', $property_type_id],
    ['purpose_posting_id', '=', $purpose_posting_id],
])->limit(6)->get();
        
                
        
//dd($result['similar_properties']->optionuser()->toArray());
        return $result;
    }
    public function filterData()
    {
        $query=Property::where('is_approved',1);
         if($this->custom_request->query('property_type_id') != null)
        {
            $query->where('property_type_id',$this->custom_request->query('property_type_id'));
        }
        if($this->custom_request->query('purpose_posting_id') != null)
        {
            $query->where('purpose_posting_id',$this->custom_request->query('purpose_posting_id'));
        }
        if($this->custom_request->query('district_id') != null)
        {
            $query->where('district_id',$this->custom_request->query('district_id'));
        }
         if($this->custom_request->query('degree_ownership_id') != null)
        {
            $query->where('degree_ownership_id',$this->custom_request->query('degree_ownership_id'));
        }
         if($this->custom_request->query('property_status_id') != null)
        {
            $query->where('property_status_id',$this->custom_request->query('property_status_id'));
        }
         if($this->custom_request->query('min_price') != null && $this->custom_request->query('max_price') != null)
        {
             $min_price=intval($this->custom_request->query('min_price')) * 1000000;
             $max_price=intval($this->custom_request->query('max_price')) * 1000000;
            $query->where('price', '>=', $min_price);
                $query->where('price', '<=', $max_price);
        }
        $results['count']=$query->count();
        if($this->custom_request->query('offset') != null)
        {
            $skip_offset=$this->custom_request->query('offset') * 9;
           
        }
        else
        {
            $skip_offset = 0;
        }
        $results['properties']=$query->skip($skip_offset)->limit(9)->get();
        return $results;
        
        
        
        
    }

}
