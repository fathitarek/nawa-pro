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
                <a href="{{route('messages-inbox-index')}}">
                <div id="inbox">
                        <i class="icon-email"></i>
                        <p>inbox</p>
                        <span class="num active-num">{{getMyAllPublishersMessagesCount()}}</span>
                </div>
                </a>
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
                <div class="active-box" id="trash">
                    <i class="icon-trash"></i>
                    <p>Trash</p>
                </div>
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
                    <div>My Trash</div>
                </div>
                <div>
                    <a href="" id="hard-delete-btn">
                        <i class="icon-trash"></i>
                    </a>
                </div>
            </div>

            <div class="row message-row">
                <div class="col-md-5 col-sm-12 col-xs-12 mail-box">
                    <div class="main-trash">
                        <div class="messages-left-side scrollable-div">
                            @foreach($mySpammers as $mySpammer)
                              <a href="{{route('messages-trash-view', $mySpammer->id)}}">
                                @if($mySpammer->id == $from_user)
                                <div class="message-left active-message">
                                @else
                                <div class="message-left">
                                @endif
                                <span class="big-checkbox">
                                        <input class="checkbox checkbox3 bulk-delete" id="checkItem" type="checkbox" value="{{$mySpammer->id}}" />
                                </span>
                                    <div class="message-list">
                                        <div>


                                            <span><img src="{{url('/storage/' .$mySpammer->avatar)}}" alt="" /> </span>
                                            <span>{{$mySpammer->name}}</span>

                                            </div>
                                            <div>
                                                @php
                                                    $timestamp = explode(' ', $mySpammer->lastMessage[0]['created_at']);
                                                @endphp
                                                <p>{{date('D, M d, Y', strtotime($timestamp[0]))}}</p>
                                                <p>{{date('h:i A', strtotime($timestamp[1]))}}</p>
                                            </div>
                                        </div>
                                        <div class="message-content2">
                                            @if($mySpammer->lastMessage[0]['is_read'] == 0)
                                                <span class="red-span"></span>
                                            @endif
                                            <p>
                                                {{ ($mySpammer->property) != null ? 'Request for: '.$mySpammer->property->title  : 'Direct Message:' }}
                                                <br/>
                                                <span>{{str_limit($mySpammer->lastMessage[0]['body'], 40)}}</span>
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
            </div>

        </div>
    </div>
    <!-- end main countainer  -->

@endsection
