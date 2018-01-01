<?php
/**
 * Created by PhpStorm.
 * User: MagedGHAZOULY
 * Date: 19/12/17
 * Time: 01:19 م
 */
namespace App\Http\Controllers\Front;

use App\Models\Message;
use App\Models\Property;
use App\User;
use App\Http\Controllers\Front\FrontController;
use App\Repo\MessageRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Input;
use Form;
use Html;

class MessageController extends FrontController
{
    public function __construct(MessageRepo $message_repo) {
        $this->messageRepo = $message_repo;
    }

//    public function index(){
//
//        // [INBOX]
//        $myAllPublishersMessagesCount = $this->messageRepo->getMyAllPublishersMessagesCount();
//        $myPublishers = $this->messageRepo->getMyPublishers();
//        foreach ($myPublishers as $myPublisher){
//            $myPublisher->lastMessage = $this->messageRepo->getLastMessage($myPublisher->id, Auth::id());
//            $myPublisher->propertyId = $myPublisher->lastMessage[0]['related_id'];
//            if($myPublisher->propertyId != null){
//                $myPublisher->property = Property::find($myPublisher->propertyId);
//            }
//            $myPublisher->unreadMessagesCount = $this->messageRepo->getUnreadMessagesCount($myPublisher->id, Auth::id());
//        }
//
//        // [SENT]
//        $myAllSubscribersMessagesCount = $this->messageRepo->getMyAllSubscribersMessagesCount();
//        $mySubscribers = $this->messageRepo->getMySubscribers();
//        foreach ($mySubscribers as $mySubscriber){
//            $mySubscriber->lastMessage = $this->messageRepo->getLastMessage(Auth::id(), $mySubscriber->id);
//        }
//
//        // [TRASH]
//        $mySpammers = $this->messageRepo->getMySpammers();
//        foreach ($mySpammers as $mySpammer){
//            $mySpammer->lastMessage = $this->messageRepo->getLastSpamMessage($mySpammer->id, Auth::id());
//        }
//
//        return view('front.message.index', compact('myAllUnreadMessagesCount', 'myAllPublishersMessagesCount', 'myAllSubscribersMessagesCount', 'myLastUnreadPublishers', 'myPublishers', 'myPublisherLastMessageTitle', 'mySubscribers', 'mySpammers'));
//
//    }

    public function inboxIndex(){

        // [INBOX]
        $myAllPublishersMessagesCount = $this->messageRepo->getMyAllPublishersMessagesCount();
        $myAllSubscribersMessagesCount = $this->messageRepo->getMyAllSubscribersMessagesCount();
        $myPublishers = $this->messageRepo->getMyPublishers();
        foreach ($myPublishers as $myPublisher){
            $myPublisher->lastMessage = $this->messageRepo->getLastMessage($myPublisher->id, Auth::id());
            $myPublisher->propertyId = $myPublisher->lastMessage[0]['related_id'];
            if($myPublisher->propertyId != null){
                $myPublisher->property = Property::find($myPublisher->propertyId);
            }
            $myPublisher->unreadMessagesCount = $this->messageRepo->getUnreadMessagesCount($myPublisher->id, Auth::id());
        }
        return view('front.message.inbox.index', compact('from_user', 'myAllPublishersMessagesCount', 'myAllSubscribersMessagesCount', 'myAllUnreadMessagesCount', 'myLastUnreadPublishers', 'messages', 'myPublishers', 'mySubscribers', 'mySpammers'));
    }

    public function inboxView(Request $request, $from_user){

        // [INBOX]
        $myAllPublishersMessagesCount = $this->messageRepo->getMyAllPublishersMessagesCount();
        $myAllSubscribersMessagesCount = $this->messageRepo->getMyAllSubscribersMessagesCount();
        $myPublishers = $this->messageRepo->getMyPublishers();
        foreach ($myPublishers as $myPublisher){
            $myPublisher->lastMessage = $this->messageRepo->getLastMessage($myPublisher->id, Auth::id());
            $myPublisher->propertyId = $myPublisher->lastMessage[0]['related_id'];
            if($myPublisher->propertyId != null){
                $myPublisher->property = Property::find($myPublisher->propertyId);
            }
            $myPublisher->unreadMessagesCount = $this->messageRepo->getUnreadMessagesCount($myPublisher->id, Auth::id());
        }

        // [MAIN]
        $messages = $this->messageRepo->getMessages($from_user, Auth::id());
        foreach ($messages as $message){
            if($message->related_id != null){
                $message->property = Property::find($message->related_id);
            }
        }

        if ($request->ajax()) {
            $view = view('front.message.main_scroll', compact('messages'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('front.message.inbox.view', compact('from_user', 'myAllPublishersMessagesCount', 'myAllSubscribersMessagesCount', 'myAllUnreadMessagesCount', 'myLastUnreadPublishers', 'messages', 'myPublishers', 'mySubscribers', 'mySpammers'));
    }

    public function sentIndex(){

        // [SENT]
        $myAllPublishersMessagesCount = $this->messageRepo->getMyAllPublishersMessagesCount();
        $myAllSubscribersMessagesCount = $this->messageRepo->getMyAllSubscribersMessagesCount();
        $mySubscribers = $this->messageRepo->getMySubscribers();
        foreach ($mySubscribers as $mySubscriber){
            $mySubscriber->lastMessage = $this->messageRepo->getLastMessage(Auth::id(), $mySubscriber->id);
            $mySubscriber->propertyId = $mySubscriber->lastMessage[0]['related_id'];
            if($mySubscriber->propertyId != null){
                $mySubscriber->property = Property::find($mySubscriber->propertyId);
            }
        }

        return view('front.message.sent.index', compact('from_user', 'myAllPublishersMessagesCount', 'myAllSubscribersMessagesCount', 'myAllUnreadMessagesCount', 'myLastUnreadPublishers', 'messages', 'myPublishers', 'mySubscribers', 'mySpammers'));
    }

    public function sentView(Request $request, $from_user){

        // [SENT]
        $myAllPublishersMessagesCount = $this->messageRepo->getMyAllPublishersMessagesCount();
        $myAllSubscribersMessagesCount = $this->messageRepo->getMyAllSubscribersMessagesCount();
        $mySubscribers = $this->messageRepo->getMySubscribers();
        foreach ($mySubscribers as $mySubscriber){
            $mySubscriber->lastMessage = $this->messageRepo->getLastMessage(Auth::id(), $mySubscriber->id);
            $mySubscriber->propertyId = $mySubscriber->lastMessage[0]['related_id'];
            if($mySubscriber->propertyId != null){
                $mySubscriber->property = Property::find($mySubscriber->propertyId);
            }
        }

        // [MAIN]
        $messages = $this->messageRepo->getMessages($from_user);
        foreach ($messages as $message){
            if($message->related_id != null){
                $message->property = Property::find($message->related_id);
            }
        }

        if ($request->ajax()) {
            $view = view('front.message.main_scroll', compact('messages'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('front.message.sent.view', compact('from_user', 'myAllPublishersMessagesCount', 'myAllSubscribersMessagesCount', 'myAllUnreadMessagesCount', 'myLastUnreadPublishers', 'messages', 'myPublishers', 'mySubscribers', 'mySpammers'));
    }

    public function trashIndex(){

        // [TRASH]
        $myAllPublishersMessagesCount = $this->messageRepo->getMyAllPublishersMessagesCount();
        $myAllSubscribersMessagesCount = $this->messageRepo->getMyAllSubscribersMessagesCount();
        $mySpammers = $this->messageRepo->getMySpammers();
        foreach ($mySpammers as $mySpammer){
            $mySpammer->lastMessage = $this->messageRepo->getLastSpamMessage($mySpammer->id, Auth::id());
            $mySpammer->propertyId = $mySpammer->lastMessage[0]['related_id'];
            if($mySpammer->propertyId != null){
                $mySpammer->property = Property::find($mySpammer->propertyId);
            }
        }

        return view('front.message.trash.index', compact('from_user','myAllUnreadMessagesCount', 'myAllPublishersMessagesCount', 'myAllSubscribersMessagesCount', 'messages', 'myPublishers', 'mySubscribers', 'mySpammers'));
    }

    public function trashView(Request $request, $from_user){

        // [TRASH]
        $myAllPublishersMessagesCount = $this->messageRepo->getMyAllPublishersMessagesCount();
        $myAllSubscribersMessagesCount = $this->messageRepo->getMyAllSubscribersMessagesCount();
        $mySpammers = $this->messageRepo->getMySpammers();
        foreach ($mySpammers as $mySpammer){
            $mySpammer->lastMessage = $this->messageRepo->getLastSpamMessage($mySpammer->id, Auth::id());
            $mySpammer->propertyId = $mySpammer->lastMessage[0]['related_id'];
            if($mySpammer->propertyId != null){
                $mySpammer->property = Property::find($mySpammer->propertyId);
            }
        }

        // [MAIN]
        $messages = $this->messageRepo->getSpamMessages($from_user);

        if ($request->ajax()) {
            $view = view('front.message.main_scroll', compact('messages'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('front.message.trash.view', compact('from_user','myAllUnreadMessagesCount', 'myAllPublishersMessagesCount', 'myAllSubscribersMessagesCount', 'messages', 'myPublishers', 'mySubscribers', 'mySpammers'));
    }

    public function newMessage(){
        return view('front.message.new', compact('myAllUnreadMessagesCount','myLastUnreadPublishers',  'myAllPublishersMessagesCount', 'myAllSubscribersMessagesCount'));
    }

    public function publishNewMessage(){
        $to_user = $this->messageRepo->sendMessage();
        return redirect()->route('messages-sent-view', $to_user);
    }

    public function publishNewRequest($to_user){
        $this->messageRepo->sendMessage();
        return redirect()->route('messages-view', $to_user);
    }

    public function softDelete(Request $request){
        if($request->ajax() != null){
            foreach ($request->choices as $choice){
                $this->messageRepo->softDeleteConversation($choice);
            }
        }
        return redirect()->route('messages-trash-view', $choice);
    }

    public function hardDelete(Request $request){
        if($request->ajax() != null){
            foreach ($request->choices as $choice){
                $this->messageRepo->hardDeleteConversation($choice);
            }
        }
        return redirect()->route('messages-trash-view', $choice);
    }

}
