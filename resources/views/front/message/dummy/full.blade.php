@extends('front.app')
@section('page')

    <!-- start main countainer -->
    <div class="container-fluid">
        <div class="pagination-login">
            <a href="#" class="pagination  active-pagination">Home</a>
            <i class="icon-back-arrow"></i>
            <a href="#" class="pagination ">Profile</a>
            <i class="icon-back-arrow"></i>
            <a href="#" class="pagination ">My Mail Box</a>
        </div>
        <div class="mailbox-header">
            <div class="mailbox-header-left">
                <div class="active-box" id="inbox">
                    <i class="icon-search"></i>
                    <p>inbox</p>
                    <span class="num active-num">{{$myAllPublishersMessagesCount}}</span>
                </div>
                <div id="sent-mail">
                    <i class="icon-search"></i>
                    <p>Sent mails</p>
                    <span>{{$myAllSubscribersMessagesCount}}</span>
                </div>
                <!-- <div>
                <i class="icon-search"></i>
                <p>Drafts</p>
                <span>6</span>
            </div> -->
                <div id="trash">
                    <i class="icon-search"></i>
                    <p>Trash</p>
                </div>
            </div>
            <div class="mailbox-header-right">
                <i class="icon-search"></i>
                <a href="send-new-message.html">Send New Message</a>
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
                    <i class="icon-search" id="delete-messager"></i>
                </div>
            </div>

            <div class="message-row">
                <div class="col-md-5 col-sm-12 col-xs-12 mail-box">
                    <div class="main-inbox">
                        <div class="messages-left-side scrollable-div">
                            @foreach($myPublishers as $myPublisher)
                                <a href="{{route('messages-view-inbox', $myPublisher->id)}}">
                                @if($myPublisher->id == $from_user)
                                <div class="message-left active-message">
                                @else
                                <div class="message-left">
                                @endif
                                    <div class="message-list">
                                        <div>
                                            <span>
                                                <input class="checkbox checkbox3" id="checkItem" type="checkbox" />
                                            </span>
                                            <span>
                                                <img src="{{url('/storage/' .$myPublisher->avatar)}}" alt="" /> </span>
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
                                            <span>{{$myPublisher->lastMessage[0]['body']}}</span>
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

                    <div class="main-sent-mail" hidden>
                        <div class="messages-left-side scrollable-div">
                            @foreach($mySubscribers as $mySubscriber)
                                <a href="{{route('messages-view-sent', $mySubscriber->id)}}">
                                    @if($mySubscriber->id == $from_user)
                                        <div class="message-left active-message">
                                    @else
                                        <div class="message-left">
                                    @endif
                                    <div class="message-list">
                                        <div>
                                        <span>
                                            <input class="checkbox checkbox3" id="checkItem" type="checkbox" />
                                        </span>
                                                            <span>
                                            <img src="{{url('/storage/' .$mySubscriber->avatar)}}" alt="" /> </span>
                                                <span>{{$mySubscriber->name}}</span>
                                            </div>
                                            <div>
                                                @php
                                                    $timestamp = explode(' ', $mySubscriber->lastMessage[0]['created_at']);
                                                @endphp
                                                <p>{{date('D, M d, Y', strtotime($timestamp[0]))}}</p>
                                                <p>{{date('h:i A', strtotime($timestamp[1]))}}</p>
                                            </div>
                                        </div>
                                        <div class="message-content2">
                                            @if($mySubscriber->lastMessage[0]['is_read'] == 0)
                                                <span class="red-span"></span>
                                            @endif
                                            <p>
                                                {{ ($mySubscriber->property) != null ? 'Request for: '.$mySubscriber->property->title  : 'Direct Message:' }}
                                                <br/>
                                                <span>{{$mySubscriber->lastMessage[0]['body']}}</span>
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

                    <div class="main-trash" hidden>
                        <div class="messages-left-side scrollable-div">
                            @foreach($mySpammers as $mySpammer)
                                <a href="{{route('messages-view-trash', $mySpammer->id)}}">
                                    @if($mySpammer->id == $from_user)
                                        <div class="message-left active-message">
                                            @else
                                                <div class="message-left">
                                                    @endif
                                                    <div class="message-list">
                                                        <div>
                                            <span>
                                                <input class="checkbox checkbox3" id="checkItem" type="checkbox" />
                                            </span>
                                                            <span>
                                            <img src="{{url('/storage/' .$mySpammer->avatar)}}" alt="" /> </span>
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
                                            <span>{{$mySpammer->lastMessage[0]['body']}}</span>
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
                    @else
                        {{--<div class="col-md-8 relax">--}}
                            {{--<i class="icon-search"></i>--}}
                            {{--<h1>Set back and relax</h1>--}}
                            {{--<h3>Your Inbox is Clean</h3>--}}
                        {{--</div>--}}

                    @endif

                    <div class="message-replay">
                        <div class="form-group">
                            <textarea class="form-control " rows="5"></textarea>
                        </div>
                        <div>
                            <a href="#" class=" btn-recover-pw" id="send-replay"> Send Reply</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- end main countainer  -->

@endsection