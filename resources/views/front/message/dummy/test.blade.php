<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chat</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="top-right links">
            <a href="{{ url('/home') }}">Home</a>
    </div>

    <div class="content">
        <div class="title">{{Auth::user()->name}}'s Inbox</div>
        <br>

        <h3>[INBOX]</h3>
        @if(count($myPublishers) > 0)
            @foreach($myPublishers as $myPublisher)

                {{--{{ Form::open(array('url' => url('messages-bulk-delete').'?choices=')) }}--}}
                {{--{{ Form::hidden('_method', 'DELETE') }}--}}
                {{--{{ Form::submit('Trash', array('class' => 'btn btn-danger')) }}--}}
                {{--<a href="{{route('messages-delete', $myPublisher->id)}}?choices=choices">trash</a><br>--}}
                <input type="checkbox" class="delete" name="publisher" value="{{$myPublisher->id}}" >
                {{ Form::close() }}
                <a href="{{route('messages-view', $myPublisher->id)}}">
                {{$myPublisher->name.': '.$myPublisher->lastMessage[0]['body']}}
                @if($myPublisher->unreadMessagesCount > 0)
                    {{'['.$myPublisher->unreadMessagesCount.']'}}
                @endif
                </a>
                <br>
            @endforeach
        @else
            <h4>You haven't received messages from any user yet.</h4>
        @endif
        <hr>

        <h3>[SENT]</h3>
        @if(count($mySubscribers) > 0)
            @foreach($mySubscribers as $mySubscriber)
                {{--<input type="checkbox" class="delete" name="subscriber" value="{{$mySubscriber->id}}" >--}}
                <a href="{{route('messages-view', $mySubscriber->id)}}">
                {{Auth::user()->name.' > '.$mySubscriber->name.': '.$mySubscriber->lastMessage[0]['body']}}
                </a>
                <br>
            @endforeach
        @else
            <h4>You haven't sent messages to any user yet.</h4>
        @endif
        <hr>

        <h3>[TRASH]</h3>
        @if(count($mySpammers) > 0)
            @foreach($mySpammers as $mySpammer)
                {{--<input type="checkbox" class="delete" name="subscriber" value="{{$mySubscriber->id}}" >--}}
                <a href="{{route('messages-view-trashed', $mySpammer->id)}}">
                    {{$mySpammer->name.' > '.Auth::user()->name.': '.$mySpammer->lastMessage[0]['body']}}
                </a>
                <br>
            @endforeach
        @else
            <h4>You haven't sent messages to any user yet.</h4>
        @endif
        <hr>

        <h3>[MAIN]</h3>
        @if(count($messages) > 0)
            {{--<a href="{{route('load-more', $from_user)}}">Load more...</a>--}}
            <div id="post-data">
                @include('front.message.main_scroll')
            </div>
        @else
            <h4>No messages yet.</h4>
        @endif
        <hr>
        <div>
            <form action="{{route('messages-publish', $from_user)}}" method="post">
                <input type="text" name="body" id="body" placeholder="Enter your message here..." value="">
                <input type="hidden" name="from_user" id="from_user" value="{{$from_user}}">
                {{ csrf_field() }}
                <input type="submit" name="submit" value="send" id="ajax_publish">
            </form>
        </div>
    </div>
</div>
<div class="ajax-load text-center" style="display:none">
    <p><img src="{{asset('front/imgs/loader.gif')}}">Loading More ...</p>
</div>

<script type="text/javascript">

    var page = 1;

    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height()) {
            page++;
            loadMoreData(page);
        }
    });

    function loadMoreData(page){
        $.ajax(
            {
                url: '?page=' + page,
                type: "get",
                beforeSend: function()
                {
                    $('.ajax-load').show();
                }
            })
            .done(function(data)
            {
                if(data.html == " "){
                    $('.ajax-load').html("No more records found");
                    return;
                }
                $('.ajax-load').hide();
                $("#post-data").append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                alert('server not responding...');
            });
    }

    var choices = [];
    $(".bulk-delete").change(function(){
        $(".bulk-delete").each(function(key,obj){
            if ($(obj).is(':checked')) {
                choices.push($(obj).val());
            }
        });
    });
</script>
{{--<script>--}}
    {{--function postAjaxPublish(url, id, data, msgError, idLoading) {--}}
        {{--var loading_gif = '{{ url('Loading_icon.gif') }}';--}}
        {{--$.ajax({--}}
            {{--type: 'POST',--}}
            {{--url: url,--}}
            {{--data:  data,--}}
            {{--beforeSend: function (){--}}
                {{--$(idLoading).html('<img src="' + loading_gif + '" height="150">');--}}
            {{--},--}}
            {{--success:function (data) {--}}
                {{--console.log(data);--}}
                {{--$(id).html(data);--}}
            {{--},--}}
            {{--error: function () {--}}
                {{--console.log(msgError);--}}
            {{--}--}}
        {{--})--}}
    {{--}--}}

    {{--$(document).on('click', '#ajax_publish', function() {--}}
        {{--var body = $('#body').val();--}}
        {{--var from_user = $('#from_user').val();--}}

        {{--postAjaxPublish('{{ url("/messages/ajax-publish") }}/'+from_user, '#return', { body:body, from_user:from_user }, 'Messages could not be loaded.', '#return');--}}
    {{--});--}}
{{--</script>--}}

</body>
</html>