<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Front\FrontController;
use App\Repo\MessageRepo;
use App\User;
use App\Models\Property;
use App\Models\UserFollows;
use App\Models\PropertyOptionUser;
use Illuminate\Http\Request;
use Auth;
class BrokerController extends FrontController {

    public function __construct(MessageRepo $messageRepo) {
        $this->messageRepo = $messageRepo;
    }

public function follow(Request $request){
        try {
            $validatedData = $request->validate([
                'user_id' => 'required',
                'follow_id' => 'required',
            ]);

        }catch (\PDOException $ex){
            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);

        }
    try {

        \DB::table('user_follows')->insert([
            ['user_id' =>$request->user_id, 'follow_id' => $request->follow_id]
            ]);
    }catch (\Exception $ex){
        return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);

    }
            if ($request->ajax()) {
                return response()->json(['data'=>"sucess"]);
            }else{
                return response()->json(['data'=>"failed"]);

            }
}


    public function index()
    {
        $followers = array();

        $records = User::latest()->where('user_type_id','3')->where('is_verified','1')->where('is_user','1')->get();
       // dd(count($records));
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

            //dd(in_array(9,$followers));
        }

            try {
                return view('front.broker.index', ['records' => $records,'followers'=>$followers]);
            } catch (\PDOException $ex) {
                return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
            }

    }


//    public function follow($id)
//    {
//        $record = User::latest()->where('id',$id)->where('user_type_id','3')->where('is_user','1')->first();
//       // foreach($records as $record){
//            $record->responseRate = $this->messageRepo->getUserResponseRate($id);
//            $record->user_follows = \DB::table('user_follows')->where('user_id', $id)->get()->count();
//            $record->properties_list = \DB::table('properties')->where('user_id', $id)->where('is_approved','1')->get();
//            $record->properties = \DB::table('properties')->where('user_id', $id)->where('public',1)->where('is_approved','1')->count();
//
//       // }
//       // foreach ($record->properties as $f)
////        dd($f->title);
//        foreach($record->properties_list as $property){
//            $property->price_after_discount = \DB::table('hot_offers')->where('property_id', $property->id)->get();
//            $property->cover = \DB::table('property_images')->where('property_id', $property->id)->where('is_cover',1)->first();
////            dump($property->cover->image);
////            foreach (PropertyOptionUser::where('property_id', $property->id)->get() as $key){
////    dump($key->property_option_id);
////                $property_options = \DB::table('property_options')->where('property_option_type_id', $key->property_option_type_id)->get();
////dump($property_options);
////            }
//      $my=      PropertyOptionUser::where('property_id', $property->id)->get();
//      foreach ( $my as $m) {
//          dump($m->property_option_id);
//      }
//        }
//        dd('fa');
//        $obj =new Property();
//       dd(PropertyOptionUser::where('property_id', $property['id'])->get());
//
////        dd("Fa");
//        //  [Header]
//       // $myAllUnreadMessagesCount = $this->messageRepo->getMyAllUnreadMessagesCount();
////        $myLastUnreadPublishers = $this->messageRepo->getMyLastUnreadPublishers();
////        foreach ($myLastUnreadPublishers as $myLastUnreadPublisher){
////            $myLastUnreadPublisher->lastMessage = $this->messageRepo->getLastMessage($myLastUnreadPublisher->id, Auth::id());
////        }
//
//        try {
//            return view('front.broker.follow', ['record' => $record,'property'=>$property,
//                //'myAllUnreadMessagesCount' => $myAllUnreadMessagesCount,
//               // 'myLastUnreadPublishers' => $myLastUnreadPublishers,
//            ]);
//        } catch (\PDOException $ex) {
//            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
//        }
//    }

}
