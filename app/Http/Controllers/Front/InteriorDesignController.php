<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use App\Repo\DockRepo;
use App\Repo\MessageRepo;
use App\User;
use App\Models\UserFollows;
use Auth;
class InteriorDesignController extends FrontController {

    public function __construct(MessageRepo $messageRepo) {
        $this->messageRepo = $messageRepo;
    }
//    public function __construct(DockRepo $dock_repo) {
//        $this->DockRepo = $dock_repo;
//    }

//    public function index() {
//        $data=$this->DockRepo->listData('App\Models\InteriorDesigner',10,'front.dock.interior_design.index');
//        return $data;
//    }
//    public function find($id){
//        $data=$this->DockRepo->findOne('App\Models\InteriorDesigner',$id,'front.dock.interior_design.find');
//        return $data;
//    }

//    public function follow(Request $request){
//        try {
//            $validatedData = $request->validate([
//                'user_id' => 'required',
//                'follow_id' => 'required',
//            ]);
//
//        }catch (\PDOException $ex){
//            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
//
//        }
//        try {
//
//            \DB::table('user_follows')->insert([
//                ['user_id' =>$request->user_id, 'follow_id' => $request->follow_id]
//            ]);
//        }catch (\Exception $ex){
//            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
//
//        }
//        if ($request->ajax()) {
//            return response()->json(['data'=>"sucess"]);
//        }else{
//            return response()->json(['data'=>"failed"]);
//
//        }
//    }

    public function index()
    {
        $followers = array();
        $records = User::latest()->where('user_type_id', '4')->where('is_verified', '1')->where('is_user', '1')->get();
        if(count($records)) {
        foreach ($records as $record) {
            $record->responseRate = $this->messageRepo->getUserResponseRate($record->id);
            $record->user_follows = \DB::table('user_follows')->where('follow_id', $record->id)->get()->count();
            $record->properties = \DB::table('properties')->where('user_id', $record->id)->get()->count();
            if (Auth::user()) {
                $record->follow = UserFollows::select('follow_id')->where('user_id', Auth::user()->id)->get();
            }
        }
            if (count($record->follow)) {
                foreach ($record->follow as $follow_id) {

                    array_push($followers, $follow_id->follow_id);
                }
            }
        //  [Header]
//        $myAllUnreadMessagesCount = $this->messageRepo->getMyAllUnreadMessagesCount();
//        $myLastUnreadPublishers = $this->messageRepo->getMyLastUnreadPublishers();
//        foreach ($myLastUnreadPublishers as $myLastUnreadPublisher) {
//            $myLastUnreadPublisher->lastMessage = $this->messageRepo->getLastMessage($myLastUnreadPublisher->id, Auth::id());
//        }
    }
        try {
            return view('front.dock.interior_design.index', ['records' => $records,'followers'=>$followers
//                'myAllUnreadMessagesCount' => $myAllUnreadMessagesCount,
//                'myLastUnreadPublishers' => $myLastUnreadPublishers,
            ]);
        } catch (\PDOException $ex) {
            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
        }
    }
}
