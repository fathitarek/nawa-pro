<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use App\Repo\MessageRepo;
use App\Models\Company;

class FinanceController extends FrontController {

    public function __construct(MessageRepo $messageRepo) {
        $this->messageRepo = $messageRepo;
    }


    public function index()
    {
        $records = Company::latest()->where('service_id','2')->get();
        foreach($records as $record){
            $record->responseRate = $this->messageRepo->getUserResponseRate($record->id);
//            $record->user_follows = \DB::table('user_follows')->where('user_id', $record->id)->get()->count();
//            $record->properties = \DB::table('properties')->where('user_id', $record->id)->get()->count();
        }

        //  [Header]
        $myAllUnreadMessagesCount = $this->messageRepo->getMyAllUnreadMessagesCount();
        $myLastUnreadPublishers = $this->messageRepo->getMyLastUnreadPublishers();
        foreach ($myLastUnreadPublishers as $myLastUnreadPublisher){
            $myLastUnreadPublisher->lastMessage = $this->messageRepo->getLastMessage($myLastUnreadPublisher->id, Auth::id());
        }

        try {
            return view('front.finance.index', ['records' => $records,
                                                        'myAllUnreadMessagesCount' => $myAllUnreadMessagesCount,
                                                        'myLastUnreadPublishers' => $myLastUnreadPublishers,
            ]);
        } catch (\PDOException $ex) {
            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
        }
    }


}
