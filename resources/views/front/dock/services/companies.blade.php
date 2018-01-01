{{--{{$data->id}}--}}
{{--desc:{{$data->title}}<br>--}}
{{--{{$data->photo}}<br>--}}
{{--facebook:{{$data->facebook}}<br>--}}
{{--instagram:{{$data->instagram}}<br>--}}
{{--name:{{$data->name}}<br>--}}
{{--hhh--}}
@foreach($data as $company)

  {{$company->title}}<br>
  {{$company->description}}<br>
  {{$company->phone}}<br>
  {{$company->address}}<br>
  <br>
    ----------------
  <br>

@endforeach
