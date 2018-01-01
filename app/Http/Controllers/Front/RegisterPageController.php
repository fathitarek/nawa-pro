<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use App\Repo\MessageRepo;
use App\Models\City;
use App\Models\District;
use App\Models\UserType;

class RegisterPageController extends FrontController {

    public function __construct(MessageRepo $messageRepo) {
        $this->messageRepo = $messageRepo;
    }


    public function index()
    {
        $cities = City::latest()->get();
        $districts = District::latest()->get();
        $user_types = UserType::latest()->get();
        try {
            return view('front.login.register', ['cities' => $cities,'districts' => $districts,'user_types'=>$user_types

            ]);
        } catch (\PDOException $ex) {
            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
        }
    }


}
