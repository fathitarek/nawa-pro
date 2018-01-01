@if(count($data))
    @foreach($data as $record)
        name:<a href="/companies/{{$record->id}}">{{$record->title}}</a><br>
        description:  {{$record->description}}<br>
        <img src="/storage/{{$record->image}}"><br>
        ----------------------
    @endforeach
@else
    not found
@endif