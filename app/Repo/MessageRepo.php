<?php
/**
 * Created by PhpStorm.
 * User: MagedGHAZOULY
 * Date: 19/12/17
 * Time: 01:19 م
 */
namespace App\Repo;

use App\Models\Message;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


Class MessageRepo extends AbstractRepo
{

    protected $validator;

    /**
     * validation of property
     * @return object
     */
    private function messageValidator() {

        $this->validator = Validator::make($this->custom_request->all(), [
            //needs 'regex' validation against scripting chars.
            'body'      =>  'required|max:255',
            //needs 'different' validation against 'from_user' value.
//            'to_user'   =>  'required'
        ]);
        return $this->validator;
    }

    /**
     * send message body whether from the center
     * @return json data
     */
    public function sendMessage() {
        $this->messageValidator();
        if ($this->validator->fails()) {
            return $this->validator;
        } else {
            $message = new Message();
            $message->from_user = Auth::id();
            $to_user = trim($this->custom_request->get('to_user'));
            if (filter_var($to_user, FILTER_VALIDATE_EMAIL)){
                $user  = User::where('email', $to_user)->get();
                $message->to_user = $user[0]['id'];
            }
            else{
                $message->to_user = $to_user;
            }
            $message->body = $this->custom_request->get('body') !== null ? $this->custom_request->get('body') : '';
            $message->is_read = 0;

            if($message->save()){
                return $message->to_user;
            }
        }
    }

    public function getMessages($from_user){

        $messages = Message::where('from_user', $from_user)->where('to_user', Auth::id())
                            ->orWhere('from_user', Auth::id())->where('to_user', $from_user)
                            ->latest()->paginate(5);

        $unreadMessages = $messages->where('is_read', '0');
        if (count($unreadMessages) > 0){
            foreach ($unreadMessages as $unreadMessage){
                $unreadMessage->update(['is_read' => '1']);
            }
        }
        return $messages;
    }

    public function getSpamMessages($from_user){

        $messages = Message::onlyTrashed()
            ->where('deleted_at', '!=', '2018-01-01 00:00:00')
            ->where('from_user', $from_user)->where('to_user', Auth::id())
            ->orWhere('from_user', Auth::id())->where('to_user', $from_user)
            ->get();

        $unreadMessages = $messages->where('is_read', '0');
        if (count($unreadMessages) > 0){
            foreach ($unreadMessages as $unreadMessage){
                $unreadMessage->update(['is_read' => '1']);
            }
        }
        return $messages;
    }

    // [POPUP]
    public function getMyLastUnreadPublishers(){
        $usersIds = Message::where('to_user', Auth::id())
                            ->where('is_read', '!=', 1)
                            ->take(3)
                            ->pluck('from_user')->toArray();
        $myLastUnreadPublishers = User::whereIn('id', array_unique($usersIds))->get();
        return $myLastUnreadPublishers;
    }

    // [INBOX]
    public function getMyPublishers(){
        $usersIds = Message::where('to_user', Auth::id())
                            ->pluck('from_user')->toArray();
        $myPublishers = User::whereIn('id', array_unique($usersIds))->get();
        return $myPublishers;
    }

    // [SENT]
    public function getMySubscribers(){
        $usersIds = Message::where('from_user', Auth::id())->pluck('to_user')->toArray();
        $mySubscribers = User::whereIn('id', array_unique($usersIds))->get();
        return $mySubscribers;
    }

    // [TRASH]
    public function getMySpammers(){
        $usersIds = Message::onlyTrashed()
            ->where('deleted_at', '!=', '2018-01-01 00:00:00')
            ->where('to_user', Auth::id())
            ->pluck('from_user')->toArray();
        $mySpammers = User::whereIn('id', array_unique($usersIds))->get();
        return $mySpammers;
    }

    public function getLastMessage($from_user, $to_user){
        $lastMessage = Message::where('from_user', $from_user)->where('to_user', $to_user)
            ->take(1)->get();
        return $lastMessage;
    }

    public function getLastSpamMessage($from_user, $to_user){
        $lastMessage = Message::onlyTrashed()->where('from_user', $from_user)->where('to_user', $to_user)
            ->latest()->take(1)->get();
        return $lastMessage;
    }

    public function getUnreadMessagesCount($from_user, $to_user){
        $unreadMessagesCount = Message::where('from_user', $from_user)
                                        ->where('to_user', $to_user)
                                        ->where('is_read', '!=' , 1)
                                        ->get()
                                        ->count();
        return $unreadMessagesCount;
    }

    public function getMyAllUnreadMessagesCount(){
        $myAllUnreadMessagesCount = Message::where('to_user', Auth::id())
                                        ->where('is_read', '!=' , 1)
                                        ->get()
                                        ->count();
        return $myAllUnreadMessagesCount;
    }

    public function getMyAllPublishersMessagesCount(){
        $myAllPublishersMessagesCount = Message::where('to_user', Auth::id())
                                                ->get()
                                                ->count();
        return $myAllPublishersMessagesCount;
    }

    public function getMyAllSubscribersMessagesCount(){
        $myAllSubscribersMessagesCount = Message::where('from_user', Auth::id())
                                                ->get()
                                                ->count();
        return $myAllSubscribersMessagesCount ;
    }

    public function getUserResponseRate($to_user){

        $userAllMessages = Message::where('to_user', $to_user)
                                    ->get()
                                    ->count();

        if($userAllMessages > 0){

            $userReadMessages = Message::where('to_user', $to_user)
                ->where('is_read', 1)
                ->get()
                ->count();

            if($userReadMessages > 0){
                $userResponseRate = ($userReadMessages / $userAllMessages) * 100 ;
            }

            return $userResponseRate = 0;
        }
        return $userResponseRate = 'nomsgs';

    }

    public function softDeleteConversation($from_user){

        $messagesIds = Message::where('from_user', $from_user)->where('to_user', Auth::id())
                                ->orWhere('from_user', Auth::id())->where('to_user', $from_user)
                                ->pluck('id')->toArray();

        Message::whereIn('id', array_unique($messagesIds))->delete();
    }

    public function hardDeleteConversation($from_user){

        $messagesIds = Message::onlyTrashed()
            ->where('deleted_at', '!=', '2018-01-01 00:00:00')
            ->where('from_user', $from_user)->where('to_user', Auth::id())
            ->orWhere('from_user', Auth::id())->where('to_user', $from_user)
            ->pluck('id')->toArray();

        Message::onlyTrashed()->whereIn('id', array_unique($messagesIds))
            ->update(['deleted_at' => date("2018-01-01 00:00:00") ]);
    }

}