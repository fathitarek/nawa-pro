<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use App\Repo\PropertyRepo;
use Illuminate\Support\Facades\View;
use App\Repo\MessageRepo;
use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;

class PropertyController extends FrontController {

    public function __construct(PropertyRepo $property_repo, MessageRepo $message_repo) {
        $this->messageRepo = $message_repo;
        $this->propertyRepo = $property_repo;
    }

    public function viewStep1() {
       
        $result = $this->propertyRepo->showOptions();


        return view('front.property.step1', compact('result'));
    }

    public function viewStep2($title) {
        $count_result = $this->propertyRepo->checkStep2($title);

        if ($count_result == 0) {
           
            $result = $this->propertyRepo->showPropertyOptions();

            return view('front.property.step2', compact('result', 'title'));
        } else {
            return redirect()->route('property-view-step3', ['title' => $title]);
        }
    }

    public function viewStep3($title) {
        $count_result = $this->propertyRepo->checkStep2($title);

        if ($count_result != 0) {
            $count_image = $this->propertyRepo->checkStep3($title);
            if ($count_image == 0) {
                
                return view('front.property.step3', compact( 'title'));
            } else {
                return redirect()->to('/');
            }
        } else {
            return redirect()->route('property-view-step2', ['title' => $title]);
        }
    }

    public function postStep1() {
        $repo = $this->propertyRepo->addPropertyStep1();
        if ($repo['message'] == 'validator') {

            return back()->withErrors($repo['result'])->withInput();
            //return redirect()->withErrors($repo['result'],'errors');
        } else if ($repo['message'] == 'error') {
            
            return $repo['result'];
            return back()->withErrors($repo['result'])->withInput();
        } else {
            return redirect()->route('property-view-step2', ['title' => $repo['result']]);
        }
    }

    public function postStep2() {
        $repo = $this->propertyRepo->addPropertyStep2();

        if ($repo['message'] == 'validator') {
            //dd($repo['result']);
            return back()->withErrors($repo['result'])->withInput();
            //return redirect()->withErrors($repo['result'],'errors');
        } else if ($repo['message'] == 'error') {

            return back()->withErrors($repo['result'])->withInput();
        } else {
            return redirect()->route('property-view-step3', ['title' => $repo['result']]);
        }
    }

    public function postStep3() {
        $repo = $this->propertyRepo->addPropertyStep3();
        if ($repo['message'] == 'validator') {

            return back()->withErrors($repo['result'])->withInput();
            //return redirect()->withErrors($repo['result'],'errors');
        } else if ($repo['message'] == 'error') {
            return $repo['result'];
            return back()->withErrors($repo['result'])->withInput();
        } else {
            if (Auth::check()) {
                return redirect()->to('/');
            } else {
                return redirect()->route('home-signIn');
            }
        }
    }

    public function viewDetails($title) {
       
        $result = $this->propertyRepo->viewDetails($title);

        return view('front.property.details', compact('myAllUnreadMessagesCount', 'myAllPublishersMessagesCount', 'result', 'title'));
    }
    public function getFilter(Request $request)
    {
        
        $response=$this->propertyRepo->filterData();
        $results=$response['properties'];
        $count_all=$response['count'];
        if($request->query('offset') != null)
        {
           
         return view('front.property.results',compact('results','count_all'));   
        }
        else
        {
       return view('front.property.list',compact('results','count_all'));
        }
    }
    

}
