@extends('front.app')
@section('page')
<div class="container-fluid">
    <div class="pagination-login">
        <a href="#" class="pagination  active-pagination">Home</a>
        <i class="icon-back-arrow"></i>
        <a href="#" class="pagination ">All Developers</a>
    </div>
    <div class="brokers-header">
        <h1>Our  Brokers List </h1>
        <h5>{{count($records)}} Brokers Founds</h5>
    </div>
    <div class="row broker-row">
        @if(count($records))
        @php $index=1; @endphp
        @foreach($records as $record)

        <div class="col-md-4 col-sm-6 col-xs-12 broker-card">
            <div class="wrapper">
                <div class="parent-dev">
                    <div class="broker-name">
                        <div>
                            @if($record->is_social==1)
                            <img src="{{$record->avatar}}" alt="" />
                            @else
                            <img src="/storage/{{$record->avatar}}" alt="" />

                            @endif
                        </div>
                        <div class="developer-title">
                            <h2>{{$record->name}}</h2>
                            <p>
                                @if($record->is_verified==1)
                                <i class="icon-search"></i> Verified Developer</p>
                            @else
                            <i class="icon-search"></i> Verified Developer</p>

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
            <div class="broker-properties">
                <div>
                    <span>{{$record->properties}}</span>
                    <p>
                        Properties
                        <br/> Listed
                    </p>
                </div>
                <div>
                    <span>
                        <?php
                        $date1 = date_create($record->created_at->format('Y-m-d'));
                        $date2 = date_create(date("Y-m-d"));
                        $diff = date_diff($date1, $date2);
                        echo $diff->format("%a");
                        ?>
                    </span>
                    <p>
                        Days
                        <br/> on Market
                    </p>
                </div>
            </div>
            <div class="followers">
                <div>
                    <p>
                        <span>
                            <i class="icon-search"></i>
                        </span>
                        @if($record->responseRate === 'nomsgs')
                        Has no messages yet.
                        @else
                        {{$record->responseRate}}
                        % Response Rate</p>
                    @endif

                </div>
                <div>
                    <p>
                        <span>
                            <i class="icon-search"></i>
                        </span>{{$record->user_follows}} Followers</p>
                </div>
            </div>
            @if($record->properties==0)
            <div class="no-Properties">
                <a href="#">No Properties add yet</a>
            </div>
            @else
            <div class="view-Properties">
                <a href="#">View {{$record->name}}’s Properties</a>

            </div>
            @endif
        </div>
    </div>
    @php $index++; @endphp
    @endforeach
    @else
    not found
    @endif

</div>
</div>
@endsection
