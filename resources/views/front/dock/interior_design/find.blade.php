{{$data->id}}
 desc:{{$data->desc}}<br>
{{$data->photo}}<br>
facebook:{{$data->facebook}}<br>
instagram:{{$data->instagram}}<br>
name:{{$data->name}}<br>
hhh
@foreach($data->interiorDesginImages as $images)

 <img src="/storage/{{$images->image}}"><br>

@endforeach
