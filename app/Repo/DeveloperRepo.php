<?php

namespace App\Repo;

use Illuminate\Support\Facades\Validator;
use App\Models\InteriorDesigner;
use Illuminate\Support\Facades\Auth;
use App\Models\Developer;

Class DeveloperRepo extends AbstractRepo {

    public function listData() {
        $records = Developer::latest()->get();
        try {
            return view('front.developers.index', ['records' => $records]);
        } catch (\PDOException $ex) {
            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
        }
    }

    /**
     * @param $modelName
     * @param $id
     * @param $url
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function findOne($modelName, $id, $url) {
        $data = $modelName::findOrFail($id);
        try {
            return view($url, ['data' => $data]);
        } catch (\PDOException $ex) {
            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
        }
    }

    /**
     * @param $modelName
     * @param $id
     * @param $fk foreign key
     * @param $numberOfPagination
     * @param $url
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function listDataAsFK($modelName, $id, $fk, $numberOfPagination, $url) {
        $data = $modelName::latest()->where($fk, $id)->paginate($numberOfPagination);
        try {
            return view($url, ['data' => $data]);
        } catch (\PDOException $ex) {
            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
        }
    }

    /**
     * validation of property
     * @return object 
     */
    private function step1Validator() {
        $this->validator = Validator::make($this->custom_request->all(), [
                    'name' => 'required|unique:users|max:255',
                    'email' => 'required|integer',
                    'phone' => 'required',
                    'website' => 'required',
                    'cover_image' => 'required|image|mimes:jpg,jpeg,png|dimensions:width=1920,height=1080',
                    'logo_image' => 'required|image|mimes:jpg,jpeg,png|dimensions:width=1024,height=1024',
        ]);

        return $this->validator;
    }

    /**
     * add all data to property
     * @return json data 
     */
    public function addDeveloperStep1() {

        $this->step1Validator();
        if ($this->validator->fails()) {
            $this->result = ['code' => 100, 'result' => $this->validator->errors(), 'message' => "validator"];
        } else {           
            $developer = User::find(Auth::user()->id);
            $developer->email = $this->custom_request->get('email') !== null ? $this->custom_request->get('email') : '';
            $developer->name = $this->custom_request->get('name') !== null ? $this->custom_request->get('name') : '';
            $developer->phone = $this->custom_request->get('phone') !== null ? $this->custom_request->get('phone') : '';
            $developer->website = $this->custom_request->get('website') !== null ? $this->custom_request->get('website') : '';
            try {
                $developer->save();

                $this->result = ['code' => 200, 'result' => 'success', 'message' => "success"];
            } catch (\PDOException $ex) {

                $this->result = ['code' => 100, 'result' => $ex->getMessage(), 'message' => "error"];
                //return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
            }
        }

        return $this->result;
    }
    /**
     * validation of property
     * @return object 
     */
    private function step2Validator() {
        $this->validator = Validator::make($this->custom_request->all(), [
                    'name' => 'required|unique:users|max:255',
                    'website' => 'required',
                    'cover_image' => 'required|image|mimes:jpg,jpeg,png|dimensions:width=1920,height=1080',
                    'images.*' => 'required|image|mimes:jpg,jpeg,png|dimensions:width=1024,height=1024',
        ]);

        return $this->validator;
    }

}
