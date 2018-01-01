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
                <div class="active-box" id="inbox">
                    <i class="icon-email"></i>
                    <p>inbox</p>
                    <span class="num active-num">{{getMyAllPublishersMessagesCount()}}</span>
                </div>
                </a>
                <a href="{{route('messages-sent-index')}}">
                <div id="sent-mail">
                    <i class="icon-send-mail"></i>
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
            <div class="mailbox-header-right mailbox-header-right-custom">
                <i class="icon-write"></i>
                <a href="{{route('messages-new')}}">Send New Message</a>
            </div>
        </div>
        <div class="main-message">
            <div class="main-message-header">
                <div>Send New Message</div>
                <div>
                    <a href="{{route('messages-inbox-index')}}">Back to inbox</a>
                </div>
            </div>
            <div class="send-new-message send-new-message-custom">
                {{--<form action="{{route('messages-publish', $from_user)}}" method="post">--}}
                    {{--<input type="text" name="body" id="body" placeholder="Enter your message here..." value="">--}}
                    {{--<input type="hidden" name="from_user" id="from_user" value="{{$from_user}}">--}}
                    {{--{{ csrf_field() }}--}}
                    {{--<input type="submit" name="submit" value="send" id="ajax_publish">--}}
                {{--</form>--}}

                <form action="{{route('messages-new-publish')}}" method="post">
                    <div class="form-group">
                        <input type="text" name="to_user" class="form-control email-to" placeholder="Enter the recipient Email address">
                    </div>
                    <div>
                        <p>Add Subject</p>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="body" id="new-message" rows="5"></textarea>
                    </div>
                    {{ csrf_field() }}

                    <div class="send-discrab">
                        <input type="submit" name="submit" class=" btn-recover-pw" value="Send Message">
                        {{--<a class=" btn-recover-pw">Send Message</a>--}}
                        <a class="cancel-btn" href="{{route('messages-new')}}">Discard</a>

                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- end main countainer  -->

@endsection