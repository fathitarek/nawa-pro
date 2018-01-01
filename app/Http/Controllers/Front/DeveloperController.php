<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use App\Repo\MessageRepo;
use App\User;
use Auth;
use App\Models\UserFollows;

class DeveloperController extends FrontController {

    public function __construct(MessageRepo $messageRepo) {
        $this->messageRepo = $messageRepo;
    }


    public function index()
    {
        $followers = array();
        $records = User::latest()->where('is_verified','1')->where('user_type_id','1')->where('is_user','1')->get();
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
            $myAllUnreadMessagesCount = $this->messageRepo->getMyAllUnreadMessagesCount();
            $myLastUnreadPublishers = $this->messageRepo->getMyLastUnreadPublishers();
            foreach ($myLastUnreadPublishers as $myLastUnreadPublisher) {
                $myLastUnreadPublisher->lastMessage = $this->messageRepo->getLastMessage($myLastUnreadPublisher->id, Auth::id());
            }
        }
        try {
            return view('front.developers.index', ['records' => $records,'followers'=>$followers,
                                                        'myAllUnreadMessagesCount' => $myAllUnreadMessagesCount,
                                                        'myLastUnreadPublishers' => $myLastUnreadPublishers,
            ]);
        } catch (\PDOException $ex) {
            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
        }
    }
    public function viewStep1()
    {
        return view('front.developers.step1');
    }
    public function viewStep2()
    {
        return view('front.developers.step2');
    }


}
