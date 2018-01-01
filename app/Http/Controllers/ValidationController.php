<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests\Request;

class ValidationController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function mainValidation($request)
    {
//        $flag=array();
        foreach ($request->except('_token') as $key => $part) {
            // $key gives you the key. 2 and 7 in your case.
          //  echo $request->input('banner');
           // dd($request);

        if (\Request::file('banner')) { $this->bannerValidator($request);}
        if (\Request::file('image')) { $this->imageValidator($request);}
        if (\Request::file('logo')) { $this->logoValidator($request);}
        if (\Request::file('photo')) { $this->photoValidator($request);}
        if (\Request::file('brochure')) {$this->brochureValidator($request);}
        if ($key=='name') { $this->nameValidator($request);}
        elseif  ($key=='display_name') { $this->display_nameValidator($request);}
        elseif ($key=='email') { $this->emailValidator($request);}
        elseif ($key=='password') { $this->passwordValidator($request);}
        elseif ($key=='slug') { $this->slugValidator($request);}
        elseif ($key=='title') { $this->titleValidator($request);}
        elseif ($key=='price') { $this->priceValidator($request);}
        elseif ($key=='longtitude') { $this->longtitudeValidator($request);}
        elseif ($key=='latitiude') { $this->latitiudeValidator($request);}
        elseif ($key=='desc') { $this->descValidator($request);}
//        elseif ($key=='photo') { $this->photoValidator($request);}
        elseif ($key=='text') {  $this->textValidator($request);}
        elseif ($key=='limit_property') { $this->limit_propertyValidator($request);}

        elseif ($key=='description') { $this->descriptionValidator($request);}
        elseif ($key=='phone') { $this->phoneValidator($request);}
        elseif ($key=='address') {$this->addressValidator($request);}
        elseif ($key=='body') {$this->bodyValidator($request);}
        elseif ($key=='height') {$this->heightValidator($request); }
        elseif ($key=='width') {$this->widthValidator($request); }
        elseif ($key=='limit_property') {$this->limit_propertyValidator($request);}
        elseif ($key=='start_date') {$this->start_dateValidator($request);}
        elseif ($key=='end_date') {$this->end_dateValidator($request);}
        elseif ($key=='paid') {$this->paidValidator($request);}
        elseif ($key=='link') {$this->linkValidator($request);}
        elseif ($key=='website') {$this->websiteValidator($request);}
        elseif ($key=='facebook') {$this->facebookValidator($request);}
        elseif ($key=='instagram') {$this->instagramValidator($request);}
        else{continue;}
    }
    }// end

    public function nameValidator($request){
        $validatedData = $request->validate([
            'name' => 'required|regex:/[a-zA-Z0-9_ ]*$/'
        ]);
        return $validatedData;
    }
    public function display_nameValidator($request){
        $validatedData = $request->validate([
            'display_name' => 'required|regex:/^[[a-zA-Z0-9_ ]*$/'
        ]);
        return $validatedData;
    }
    public function emailValidator($request){
        $validatedData = $request->validate([
            'email' => 'required|email'
        ]);
        return $validatedData;
    }
    public function passwordValidator( $request){
        $validatedData = $request->validate([
            'password' => 'required'
        ]);
        return $validatedData;
    }
    public function slugValidator( $request){
        $validatedData = $request->validate([
            'slug' => 'required'
        ]);
        return $validatedData;
    }
    public function titleValidator( $request){
        $validatedData = $request->validate([
            'title' => 'required|regex:/^[a-zA-Z0-9_ ]*$/'
        ]);
        return $validatedData;
    }
    public function priceValidator( $request){
        $validatedData = $request->validate([
            'price' => 'required|numeric|min:1'
        ]);
        return $validatedData;
    }
    public function longtitudeValidator( $request){
        $validatedData = $request->validate([
            'longtitude' => 'required|numeric'
        ]);
        return $validatedData;
    }
    public function latitiudeValidator( $request){
        $validatedData = $request->validate([
            'latitiude' => 'required|numeric'
        ]);
        return $validatedData;
    }
    public function descValidator( $request){
        $validatedData = $request->validate([
            'desc' => 'required|regex:/^[a-zA-Z0-9_ ]*$/'
        ]);
        return $validatedData;
    }
    public function photoValidator( $request){
        $validatedData = $request->validate([
            'photo' => 'required|mimes:jpeg,bmp,png'
        ]);
        return $validatedData;
    }
    public function textValidator($request){
        $validatedData = $request->validate([
            'text' => 'required|regex:/^[a-zA-Z0-9_ ]*$/'
        ]);
        return $validatedData;
    }
    public function limit_propertyValidator($request){
        $validatedData = $request->validate([
            'limit_property' => 'required|numeric'
        ]);
        return $validatedData;
    }

    public function descriptionValidator( $request){
        $validatedData = $request->validate([
            'description' => 'required'
        ]);
        return $validatedData;
    }
    public function imageValidator( $request){
        $validatedData = $request->validate([
            'image' => 'mimes:jpeg,bmp,png|required'
        ]);
        return $validatedData;
    }

    public function logoValidator( $request){
        $validatedData = $request->validate([
            'logo' => 'mimes:jpeg,bmp,png|required'
        ]);
        return $validatedData;
    }

    public function bannerValidator( $request){
        $validatedData = $request->validate([
            'banner' => 'mimes:jpeg,bmp,png|required'
        ]);
        return $validatedData;
    }
    public function phoneValidator($request){
        $validatedData = $request->validate([
            'phone' => 'required|numeric|min:1'
        ]);
        return $validatedData;
    }
    public function addressValidator($request){
        $validatedData = $request->validate([
            'address' => 'required|regex:/^[A-Za-z. -]+$/'
        ]);
        return $validatedData;
    }
    public function bodyValidator($request){
        $validatedData = $request->validate([
            'body' => 'required'
        ]);
        return $validatedData;
    }
    public function brochureValidator( $request){
    $validatedData = $request->validate([
        'brochure' => 'required|mimes:jpeg,bmp,png'
    ]);
    return $validatedData;
}
    public function heightValidator($request){
        $validatedData = $request->validate([
            'height' => 'required|numeric|regex:/^[0-9]+$/'
        ]);
        return $validatedData;
    }
    public function widthValidator($request){
        $validatedData = $request->validate([
            'width' => 'required|numeric|regex:/^[0-9]+$/'
        ]);
        return $validatedData;
    }
    public function paidValidator($request){
        $validatedData = $request->validate([
            'paid' => 'required|numeric|regex:/^[0-9]+$/'
        ]);
        return $validatedData;
    }
    public function start_dateValidator($request){
        $validatedData = $request->validate([
            'start_date' => 'required|date'
        ]);
        return $validatedData;
    }
    public function end_dateValidator($request){
        $validatedData = $request->validate([
            'end_date' => 'required|date'
        ]);
        return $validatedData;
    }
    public function linkValidator($request){
        $validatedData = $request->validate([
            'link' => 'required|url'
        ]);
        return $validatedData;
    }

    public function facebookValidator($request){
        $validatedData = $request->validate([
            'facebook' => 'required|url'
        ]);
        return $validatedData;
    }


    public function instagramValidator($request){
        $validatedData = $request->validate([
            'instagram' => 'required|url'
        ]);
        return $validatedData;
    }

    public function websiteValidator($request){
        $validatedData = $request->validate([
            'website' => 'required|url'
        ]);
        return $validatedData;
    }


}
