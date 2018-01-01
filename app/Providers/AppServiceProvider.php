<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repo\MessageRepo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
//    public function __construct(MessageRepo $messageRepo)
//    {
//        $this->messageRepo = $messageRepo;
//    }
    public function boot()
    {
       // MessageRepo $messageRepo;
       // $this->messageRepo = $messageRepo;
//  [Header]
//        $myAllUnreadMessagesCount = $this->messageRepo->getMyAllUnreadMessagesCount();
//        $myLastUnreadPublishers = $this->messageRepo->getMyLastUnreadPublishers();
//        foreach ($myLastUnreadPublishers as $myLastUnreadPublisher){
//            $myLastUnreadPublisher->lastMessage = $this->messageRepo->getLastMessage($myLastUnreadPublisher->id, Auth::id());
//        }
//        View::share('myAllUnreadMessagesCount', $myAllUnreadMessagesCount);
//       // View::share('myAllUnreadMessagesCount', $myAllUnreadMessagesCount);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
