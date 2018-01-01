<?php

function getUserFavouritesCount(){
        $userFavouritesCount =  \DB::table('user_favourite_properties')->where('user_id', Auth::id())->get()->count();
        return $userFavouritesCount;
}

function getMyAllUnreadMessagesCount(){
    $myAllUnreadMessagesCount = \App\Models\Message::where('to_user', Auth::id())
        ->where('is_read', '!=' , 1)
        ->get()
        ->count();
    return $myAllUnreadMessagesCount;
}

function getMyLastUnreadPublishers(){
    $usersIds = \App\Models\Message::where('to_user', Auth::id())
        ->where('is_read', '!=', 1)
        ->take(3)
        ->pluck('from_user')->toArray();
    $myLastUnreadPublishers = \App\User::whereIn('id', array_unique($usersIds))->get();
    return $myLastUnreadPublishers;
}

function getLastMessage($from_user, $to_user){
    $lastMessage = \App\Models\Message::where('from_user', $from_user)->where('to_user', $to_user)
        ->take(1)->get();
    return $lastMessage;
}

function getMyAllPublishersMessagesCount(){
    $myAllPublishersMessagesCount = \App\Models\Message::where('to_user', Auth::id())
        ->get()
        ->count();
    return $myAllPublishersMessagesCount;
}

function getMyAllSubscribersMessagesCount(){
    $myAllSubscribersMessagesCount = \App\Models\Message::where('from_user', Auth::id())
        ->get()
        ->count();
    return $myAllSubscribersMessagesCount ;
}

