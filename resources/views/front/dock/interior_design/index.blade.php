@extends('front.app')
@section('page')

    <div class="container-fluid">
        <div class="pagination-login">
            <a href="#" class="pagination  active-pagination">Home</a>
            <i class="icon-back-arrow"></i>
            <a href="#" class="pagination ">Our Services</a>
            <i class="icon-back-arrow"></i>
            <a href="#" class="pagination ">Interior Designers List</a>
        </div>
        <div class="brokers-header">
            <h1>Interior Designers List </h1>
            <h5>{{count($records)}} Interior Designers Founds</h5>
        </div>
        <div class="row broker-row">
            @if(count($records))
                @php $index=1; @endphp
                @foreach($records as $record)
            <div class="col-md-4 col-sm-6 col-xs-12 broker-card">
                <div class="wrapper">
                    <div class="designer-dev  center-block text-center">
                        <div >
                            <div>
                                @if($record->is_social==1)
                                <img src="{{$record->avatar}}" alt="" />
                                @else
                                <img src="/storage/{{$record->avatar}}" alt="" />
                                @endif
                            </div>
                            <div class="designer-title">
                                <h2>{{$record->name}}</h2>
                                <p>
                                    @if($record->is_verified==1)
                                    <i class="icon-search"></i> Verified Interior Designer</p>
                                @else
                                    <i class="icon-search"></i> Verified Interior Designer</p>
                                @endif
                            </div>
                        </div>

                        <div class="follow-broker">
                            @auth
                                @php $user_id=Auth::user()->id; @endphp
                                @if (in_array($record->id,$followers))
                                    <a href="#" id="btn_follow_{{$index}}" style="display: none" onclick="follow_user({{$user_id}},{{ $record->id }},{{$index}});">Follow {{$record->name}}</a>

                                    <a href="#" id="btn_followed_{{$index}}" style="background-color: rgb(57, 193, 26);"><span> </span>You are following {{$record->name}}<i class="icon-search"></i></a>
                                @else
                                    <a href="#" id="btn_follow_{{$index}}"  onclick="follow_user({{$user_id}},{{ $record->id }},{{$index}});">Follow {{$record->name}}</a>

                                    <a href="#" id="btn_followed_{{$index}}" style="display: none;background-color: rgb(57, 193, 26);"><span> </span>You are following {{$record->name}}<i class="icon-search"></i></a>

                                @endif
                        </div>
                        @else
                            <a href="{{url('/signIn')}}">Follow {{$record->name}}</a>
                    </div>
                    @endauth
                </div>

                    <div class="followers">
                        <div>
                            <p>
                                    <span>
                                        <i class="icon-search"></i>
                                    </span>{{$record->user_follows}} Followers</p>
                        </div>
                    </div>

                    <div class="view-Properties">
                        <a href="/protfolio/{{$record->id}}">View {{$record->name}}’s Protfolio</a>

                    </div>

                </div>
            </div>
        @php $index++; @endphp
                @endforeach
            @else
                not found
            @endif

            {{--<div class="col-md-4 col-sm-6 col-xs-12 broker-card">--}}
                {{--<div class="wrapper">--}}
                    {{--<div class="designer-dev  center-block text-center">--}}
                        {{--<div >--}}
                            {{--<div>--}}
                                {{--<img src="imgs/one.png" alt="" />--}}
                            {{--</div>--}}
                            {{--<div class="designer-title">--}}
                                {{--<h2>Hany Saad </h2>--}}
                                {{--<p>--}}
                                    {{--<i class="icon-search"></i> Verified Broker</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="follow-broker">--}}
                            {{--<a href="#">Follow Hoda</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="followers">--}}
                        {{--<div>--}}
                            {{--<p>--}}
                                        {{--<span>--}}
                                            {{--<i class="icon-search"></i>--}}
                                        {{--</span>1,254 Followers</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="view-Properties">--}}
                        {{--<a href="#">View Hoda’s Protfolio</a>--}}

                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 broker-card">--}}
                {{--<div class="wrapper">--}}
                    {{--<div class="designer-dev  center-block text-center">--}}
                        {{--<div >--}}
                            {{--<div>--}}
                                {{--<img src="imgs/one.png" alt="" />--}}
                            {{--</div>--}}
                            {{--<div class="designer-title">--}}
                                {{--<h2>Hussien Naser</h2>--}}
                                {{--<p>--}}
                                    {{--<i class="icon-search"></i> Verified Broker</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="follow-broker">--}}
                            {{--<a href="#">Follow Hoda</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="followers">--}}
                        {{--<div>--}}
                            {{--<p>--}}
                                            {{--<span>--}}
                                                {{--<i class="icon-search"></i>--}}
                                            {{--</span>1,254 Followers</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="view-Properties">--}}
                        {{--<a href="#">View Hoda’s Protfolio</a>--}}

                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 broker-card">--}}
                {{--<div class="wrapper">--}}
                    {{--<div class="designer-dev  center-block text-center">--}}
                        {{--<div >--}}
                            {{--<div>--}}
                                {{--<img src="imgs/one.png" alt="" />--}}
                            {{--</div>--}}
                            {{--<div class="designer-title">--}}
                                {{--<h2>Mona Hussien</h2>--}}
                                {{--<p>--}}
                                    {{--<i class="icon-search"></i> Verified Broker</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="follow-broker">--}}
                            {{--<a href="#">Follow Hoda</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="followers">--}}
                        {{--<div>--}}
                            {{--<p>--}}
                                                {{--<span>--}}
                                                    {{--<i class="icon-search"></i>--}}
                                                {{--</span>1,254 Followers</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="view-Properties">--}}
                        {{--<a href="#">View Hoda’s Protfolio</a>--}}

                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 broker-card">--}}
                {{--<div class="wrapper">--}}
                    {{--<div class="designer-dev  center-block text-center">--}}
                        {{--<div >--}}
                            {{--<div>--}}
                                {{--<img src="imgs/one.png" alt="" />--}}
                            {{--</div>--}}
                            {{--<div class="designer-title">--}}
                                {{--<h2>Ibrahim Abu Gendy</h2>--}}
                                {{--<p>--}}
                                    {{--<i class="icon-search"></i> Verified Broker</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="follow-broker">--}}
                            {{--<a href="#">Follow Hoda</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="followers">--}}
                        {{--<div>--}}
                            {{--<p>--}}
                                                    {{--<span>--}}
                                                        {{--<i class="icon-search"></i>--}}
                                                    {{--</span>1,254 Followers</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="view-Properties">--}}
                        {{--<a href="#">View Hoda’s Protfolio</a>--}}

                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 broker-card">--}}
                {{--<div class="wrapper">--}}
                    {{--<div class="designer-dev  center-block text-center">--}}
                        {{--<div >--}}
                            {{--<div>--}}
                                {{--<img src="imgs/one.png" alt="" />--}}
                            {{--</div>--}}
                            {{--<div class="designer-title">--}}
                                {{--<h2>Salma Salam </h2>--}}
                                {{--<p>--}}
                                    {{--<i class="icon-search"></i> Verified Broker</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="follow-broker">--}}
                            {{--<a href="#">Follow Hoda</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="followers">--}}
                        {{--<div>--}}
                            {{--<p>--}}
                                                        {{--<span>--}}
                                                            {{--<i class="icon-search"></i>--}}
                                                        {{--</span>1,254 Followers</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="view-Properties">--}}
                        {{--<a href="#">View Hoda’s Protfolio</a>--}}

                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 broker-card">--}}
                {{--<div class="wrapper">--}}
                    {{--<div class="designer-dev  center-block text-center">--}}
                        {{--<div >--}}
                            {{--<div>--}}
                                {{--<img src="imgs/one.png" alt="" />--}}
                            {{--</div>--}}
                            {{--<div class="designer-title">--}}
                                {{--<h2>Hoda Lasheen</h2>--}}
                                {{--<p>--}}
                                    {{--<i class="icon-search"></i> Verified Broker</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="follow-broker">--}}
                            {{--<a href="#">Follow Hoda</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="followers">--}}
                        {{--<div>--}}
                            {{--<p>--}}
                                                            {{--<span>--}}
                                                                {{--<i class="icon-search"></i>--}}
                                                            {{--</span>1,254 Followers</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="view-Properties">--}}
                        {{--<a href="#">View Hoda’s Protfolio</a>--}}

                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 broker-card">--}}
                {{--<div class="wrapper">--}}
                    {{--<div class="designer-dev  center-block text-center">--}}
                        {{--<div >--}}
                            {{--<div>--}}
                                {{--<img src="imgs/one.png" alt="" />--}}
                            {{--</div>--}}
                            {{--<div class="designer-title">--}}
                                {{--<h2>Hoda Lasheen</h2>--}}
                                {{--<p>--}}
                                    {{--<i class="icon-search"></i> Verified Broker</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="follow-broker">--}}
                            {{--<a href="#">Follow Hoda</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="followers">--}}
                        {{--<div>--}}
                            {{--<p>--}}
                                                                {{--<span>--}}
                                                                    {{--<i class="icon-search"></i>--}}
                                                                {{--</span>1,254 Followers</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="view-Properties">--}}
                        {{--<a href="#">View Hoda’s Protfolio</a>--}}

                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 broker-card">--}}
                {{--<div class="wrapper">--}}
                    {{--<div class="designer-dev  center-block text-center">--}}
                        {{--<div >--}}
                            {{--<div>--}}
                                {{--<img src="imgs/one.png" alt="" />--}}
                            {{--</div>--}}
                            {{--<div class="designer-title">--}}
                                {{--<h2>Hoda Lasheen</h2>--}}
                                {{--<p>--}}
                                    {{--<i class="icon-search"></i> Verified Broker</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="follow-broker">--}}
                            {{--<a href="#">Follow Hoda</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="followers">--}}
                        {{--<div>--}}
                            {{--<p>--}}
                                                                    {{--<span>--}}
                                                                        {{--<i class="icon-search"></i>--}}
                                                                    {{--</span>1,254 Followers</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="view-Properties">--}}
                        {{--<a href="#">View Hoda’s Protfolio</a>--}}

                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}










        </div>
@endsection