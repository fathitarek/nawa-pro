@foreach($messages as $message)
    <ul>
        <li>{{$message->from->name}} [{{$message->created_at}}] ></li>
        <br>{{$message->body}}
    </ul>
@endforeach
