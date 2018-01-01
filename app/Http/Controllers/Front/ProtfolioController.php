<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use App\Repo\MessageRepo;
use App\User;
use App\Models\InteriorDesigner;
use App\Models\InteriorDesignersImage;
use Auth;
use App\Models\UserFollows;
class ProtfolioController extends FrontController {

    public function __construct(MessageRepo $messageRepo) {
        $this->messageRepo = $messageRepo;
    }


    public function index($id)
    {$followers = array();
        $records = User::latest()->where('id', $id)->first();
        // dd($records->name);
        //foreach($records as $record){
//            $record->responseRate = $this->messageRepo->getUserResponseRate($record->id);
        if (count($records)){


        $records->user_follows = \DB::table('user_follows')->where('follow_id', $records->id)->get()->count();
        $records->interiors = InteriorDesigner::latest()->where('user_id', $records->id)->first();
            if (Auth::user()) {
                $records->follow = UserFollows::where('follow_id',$records->id)->where('user_id', Auth::user()->id)->get();
          //  dd($records->follow);
            }
                $users = User::latest()->where('id', '!=', $records->id)->take(2)->get();
            if (!is_null($records->interiors)) {
                $records->covers = InteriorDesignersImage::latest()->where('interior_designer_id', $records->interiors->id)->where('is_cover', 1)->first();
                $records->bests = InteriorDesignersImage::latest()->where('interior_designer_id', $records->interiors->id)->where('is_best', 1)->take(3)->get();

            }
            if (count($records->follow)) {
                foreach ($records->follow as $follow_id) {

                    array_push($followers, $follow_id->follow_id);
                }
            }

        }


        //}

        //  [Header]
        $myAllUnreadMessagesCount = $this->messageRepo->getMyAllUnreadMessagesCount();
        $myLastUnreadPublishers = $this->messageRepo->getMyLastUnreadPublishers();
        foreach ($myLastUnreadPublishers as $myLastUnreadPublisher){
            $myLastUnreadPublisher->lastMessage = $this->messageRepo->getLastMessage($myLastUnreadPublisher->id, Auth::id());
        }

        try {
            return view('front.portfolio.index', ['records' => $records,'users'=>$users,'followers'=>$followers,
                                                        'myAllUnreadMessagesCount' => $myAllUnreadMessagesCount,
                                                        'myLastUnreadPublishers' => $myLastUnreadPublishers,
            ]);
        } catch (\PDOException $ex) {
            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
        }
    }

}
