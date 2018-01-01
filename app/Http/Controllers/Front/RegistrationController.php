<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use App\Repo\DockRepo;
use App\User;
use App\Models\District;

class RegistrationController extends FrontController {

    public function __construct() {
        //$this->DockRepo = $dock_repo;
    }
    public function getDistricts($city_id){
        try{
        $data=District::latest()->where("city_id",$city_id)->get();
            //if ($request->ajax()) {
                return response()->json(['data'=>$data]);
           // }else{
              //  rturn response()->json(['data'=>"failed"]);

           // }
    }catch (\Exception $ex){
return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);

}
    }




    public function index()
    {
        $records = User::latest()->where('user_type_id','1')->where('is_user','1')->get();
       // dump($records);
        try {
            return view('front.login.register', ['records' => $records]);
        } catch (\PDOException $ex) {
            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
        }
    }


}
