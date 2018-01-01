@extends('front.app')
@section('page')
    <!-- start main countainer -->
    <div class="container-fluid">
        <div class="pagination-login profile-row">
            <a href="#" class="pagination  active-pagination">Home</a>
            <i class="icon-back-arrow"></i>
            <a href="#" class="pagination ">Profile</a>
            <i class="icon-back-arrow"></i>
            <a href="#" class="pagination ">My Mail Box</a>
        </div>
        <div class="mailbox-header">
            <div class="mailbox-header-left">
                <div class="active-box" id="inbox">
                    <i class="icon-email"></i>
                    <p>inbox</p>
                    <span class="num active-num">{{getMyAllPublishersMessagesCount()}}</span>
                </div>
                <a href="{{route('messages-sent-index')}}">
                <div id="sent-mail">
                    <i class="icon-search"></i>
                    <p>Sent mails</p>
                    <span>{{getMyAllSubscribersMessagesCount()}}</span>
                </div>
                </a>
                <!-- <div>
                <i class="icon-search"></i>
                <p>Drafts</p>
                <span>6</span>
            </div> -->
                <a href="{{route('messages-trash-index')}}">
                <div id="trash">
                    <i class="icon-trash"></i>
                    <p>Trash</p>
                </div>
                </a>
            </div>
            <div class="mailbox-header-right">
                <i class="icon-write"></i>
                <a href="{{route('messages-new')}}">Send New Message</a>
            </div>
        </div>
        <div class="main-message">
            <div class=" main-message-header-left">
                <div class="select-all">
                    <div>
                        <input class="checkbox checkbox3" id="checkAll" type="checkbox" />
                    </div>
                    <div>My Inbox</div>
                </div>
                <div>
                    <a href="" id="soft-delete-btn">
                        <i class="icon-trash"></i>
                    </a>
                </div>
            </div>
            <div class="row message-row">
                <div class="col-md-5 col-sm-12 col-xs-12 mail-box">
                    <div class="main-inbox">
                        <div class="messages-left-side scrollable-div">
                            @foreach($myPublishers as $myPublisher)
                              <a href="{{route('messages-inbox-view', $myPublisher->id)}}">
                                @if($myPublisher->id == $from_user)
                                    <div class="message-left active-message">
                                @else
                                    <div class="message-left">
                                @endif
                                <span class="big-checkbox">
                                        <input class="checkbox checkbox3 bulk-delete" id="checkItem" type="checkbox" value="{{$myPublisher->id}}" />
                                </span>
                                    <div class="message-list">
                                        <div>


                                                <span><img src="{{url('/storage/' .$myPublisher->avatar)}}" alt="" /></span>
                                                <span>{{$myPublisher->name}}</span>

                                        </div>
                                        <div>
                                            @php
                                                $timestamp = explode(' ', $myPublisher->lastMessage[0]['created_at']);
                                            @endphp
                                            <p>{{date('D, M d, Y', strtotime($timestamp[0]))}}</p>
                                            <p>{{date('h:i A', strtotime($timestamp[1]))}}</p>
                                        </div>
                                    </div>
                                    <div class="message-content2">
                                        @if($myPublisher->lastMessage[0]['is_read'] == 0)
                                            <span class="red-span"></span>
                                        @endif
                                        <p>
                                            {{ ($myPublisher->property) != null ? 'Request for: '.$myPublisher->property->title  : 'Direct Message:' }}
                                            <br/>
                                            <span>{{str_limit($myPublisher->lastMessage[0]['body'], 40)}}</span>
                                        </p>
                                    </div>
                                </div>
                                  </a>
                            @endforeach
                            {{--<div class="spinner">--}}
                            {{--<div class="bounce1"></div>--}}
                            {{--<div class="bounce2"></div>--}}
                            {{--<div class="bounce3"></div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12 resent scrollable-div">
                    <!-- <div class="main-message-header-right">
                    <span>
                        <i class="icon-down-arrow"></i>
                    </span>
                    <span>
                        <i class="icon-down-arrow"></i>
                    </span>
                    </div> -->
                    {{--Start Master Message--}}
                    {{--<div class="message-right-side">--}}
                    {{--<p class="property-name">--}}
                    {{--<i class="icon-search"></i> Request for--}}
                    {{--<a href="#">Property Name</a>--}}
                    {{--</p>--}}
                    {{--<!-- <h3>Is Maadi Appartmeny still available?</h3> -->--}}
                    {{--<div class="masssenger-details">--}}
                    {{--<p>From: Maha Alam</p>--}}
                    {{--<p>--}}
                    {{--<span class="gray-span"></span>Maha@yahoo.com</p>--}}
                    {{--<p>--}}
                    {{--<span class="gray-span"></span>+2 01061223354</p>--}}
                    {{--</div>--}}
                    {{--<p class="user-type">Type of user</p>--}}
                    {{--<p>--}}
                    {{--<span class="red-small-span"></span>--}}
                    {{--<span class="red-text">sent</span> Sun, Aug 13, 2017 2:43 PM</p>--}}
                    {{--</div>--}}
                    {{--<div class="message-content-text">--}}
                    {{--<p>Hi Abdullah,--}}
                    {{--<br/> Visual hierarchy is one of the most important principles behind effective web design.--}}
                    {{--We will see how you can use some very basic exercises in your own designs to put these--}}
                    {{--principles into practice.--}}
                    {{--<br/>Best Regards,--}}
                    {{--<br/> Maha Alam</p>--}}
                    {{--</div>--}}
                    {{--End Master Message--}}
                    @if(count($messages) > 0)
                        <div class="message-parent">
                            @foreach($messages as $message)
                            <div class="min-container">
                                <div class="min">
                                    <div class="message-right-side">
                                        <p class="property-name">
                                            <i class="icon-search"></i>
                                            @if($message->property != null)
                                                Request for:
                                                <a href="#">{{$message->property->title}}</a>
                                            @else
                                                Direct Message:
                                            @endif
                                        </p>
                                        <div class="masssenger-details">
                                            <p>From: {{$message->from->name}}</p>
                                            <p>
                                                <span class="gray-span"></span>{{$message->from->email}}</p>
                                            <p>
                                                <span class="gray-span"></span>{{$message->from->phone}}</p>
                                        </div>
                                        @if($message->from->user_type_id == 1)
                                            <p class="user-type">Developer</p>
                                        @elseif($message->from->user_type_id == 2)
                                            <p class="user-type">User</p>
                                        @elseif($message->from->user_type_id == 3)
                                            <p class="user-type">Broker</p>
                                        @elseif($message->from->user_type_id == 4)
                                            <p class="user-type">Interior Designer</p>
                                        @endif
                                        <p>
                                            <span class="red-small-span"></span>
                                            @if($message->is_read == 1)
                                                <span class="red-text">Delivered </span>
                                            @else
                                                <span class="red-text">Sent </span>
                                            @endif
                                            @php
                                                $timestamp = explode(' ', $message->created_at);
                                            @endphp
                                            {{date('D, M d, Y', strtotime($timestamp[0]))}}
                                            {{date('h:i A', strtotime($timestamp[1]))}}</p>
                                    </div>
                                    <div>
                                        <i class="icon-search open-message"></i>
                                        <i class="icon-back-arrow close-message"></i>
                                    </div>
                                </div>
                                <div class="message-content-text messaging">
                                    <p>{{$message->body}}</p>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    @else
                        {{--<div class="col-md-8 relax">--}}
                        {{--<i class="icon-search"></i>--}}
                        {{--<h1>Set back and relax</h1>--}}
                        {{--<h3>Your Inbox is Clean</h3>--}}
                        {{--</div>--}}
                    @endif
                    <form action="{{route('messages-new-publish')}}" method="post">
                    <div class="message-replay">
                        <div class="form-group">
                            <input type="hidden" name="to_user" id="to_user" value="{{$from_user}}">
                            <textarea class="form-control" name="body" rows="5"></textarea>
                            {{ csrf_field() }}
                        </div>
                        <div>
                            <input class=" btn-recover-pw" type="submit" name="submit" value="Send Reply">
                            {{--<a href="#" class=" btn-recover-pw" id="send-replay"> Send Reply</a>--}}
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end main countainer  -->
@endsection
