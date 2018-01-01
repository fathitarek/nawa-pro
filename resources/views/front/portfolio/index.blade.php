@extends('front.app')
@section('page')
    <div class="container-fluid">
        <div class="pagination-login ">
            <a href="#" class="pagination  active-pagination">Home</a>
            <i class="icon-back-arrow"></i>
            <a href="#" class="pagination active-pagination">All Designers</a>
            <i class="icon-back-arrow"></i>
            <a href="#" class="pagination ">{{$records->name}} Portfolio</a>
        </div>

        <div class="row designer-row">

            <div class="col-md-4 designer-name">
                @if($records->is_social==1)
                    <img src="{{$records->avatar}}" alt="" />
                @else
                    <img src="/storage/{{$records->avatar}}" alt="" />
                @endif

                <h2>{{$records->name}}</h2>
            </div>

            <div class="col-md-4 portfolio-follow">
                <div>
                    <i class="icon-search"></i>
                    <p>Verified Designer</p>
                </div>
                <div>
                    <i class="icon-search"></i>
                    <p>{{$records->user_follows}} Followers</p>
                </div>

            </div>
            <div class="col-md-4 social-follow">
                <div>
                    <span></span>
                    @auth
                        @php $user_id=Auth::user()->id; @endphp
                        @php $index=1; @endphp
                        @if (in_array($records->id,$followers))
                            <a href="#" id="btn_follow_{{$index}}" style="display: none" onclick="follow_user({{$user_id}},{{ $records->id }},{{$index}});">Follow {{$records->name}}</a>

                            <a href="#" id="btn_followed_{{$index}}" style="background-color: rgb(57, 193, 26);"><span> </span>You are following {{$records->name}}<i class="icon-search"></i></a>
                        @else
                            <a href="#" id="btn_follow_{{$index}}"  onclick="follow_user({{$user_id}},{{ $records->id }},{{$index}});">Follow {{$records->name}}</a>

                            <a href="#" id="btn_followed_{{$index}}" style="display: none;background-color: rgb(57, 193, 26);"><span> </span>You are following {{$records->name}}<i class="icon-search"></i></a>

                        @endif
                </div>
                @else
                    <a href="{{url('/signIn')}}">Follow {{$record->name}}</a>
            </div>
            @endauth
                </div>
                @if(count($records->interiors))
                <div>

                    <a href="{{$records->interiors->website}}">
                        <i class="icon-web"></i>
                    </a>
                    <a href="{{$records->interiors->facebook}}">
                        <i class="icon-fb"></i>
                    </a>
                    <a href="{{$records->interiors->instagram}}">
                        <i class="icon-instagram"></i>
                    </a>
                </div>
                    @endif
            </div>
        </div>
        <div class="main-countainer">
            <div class="col-md-8">
                <div class="about-designer">
                    <h2>About {{$records->name}}</h2>
                    <p>
                        @if(count($records->interiors))
                            {{$records->interiors->desc}}
                            @endif
                    </p>
                </div>
                <div class="potoflio-header">
                    <div class="square-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <h2>{{$records->name}} Portfolio</h2>
                </div>
                <div class="property-details">
                    <div class="propert-wrapper-lg">
                        {{--<img src="https://www.w3schools.com/html/pulpitrock.jpg" alt="Image slide" width="100%">--}}
                        @if(count($records->covers))
                        <img src="/storage/{{$records->covers->image}}" alt="{{$records->name}}" width="100%">
                    @endif
                    </div>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                   
                                    <div class="carousel-inner">
                                        <?php $index=0;?>

                                        @if(count($records->bests))
                                            @foreach ( $records->bests as $a)

                                        <div class="item @if($index == 0) active @endif">
                                            <img class="img-responsive property-imgs"src="/storage/{{$a->image}}" alt="...">
                                        </div>


                                                    <?php $index++;?>
                                            @endforeach
                                        @endif
                                            <div class="item ">
                                                @if(count($records->covers))
                                                <img class="img-responsive property-imgs"src="/storage/{{$records->covers->image}}" alt="...">
                                            @endif
                                            </div>
                                        {{--<div class="item">--}}
                                            {{--<img class="img-responsive property-imgs" src="imgs/wide-img.png" alt="...">--}}
                                        {{--</div>--}}
                                        {{--<div class="item">--}}
                                            {{--<img class="img-responsive property-imgs" src="imgs/wide-img.png" alt="...">--}}
                                        {{--</div>--}}
                                    </div>
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="proprty-imgs">
                        <div class="row thumbnail-row">
                            @if(count($records->bests))
                            @foreach ( $records->bests as $a)

                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="thumbnail">
                                    <i class="icon-search"></i>
                                    <a href="javascript:void(0)" target="_blank" data-toggle="modal" data-target=".bs-example-modal-lg">
                                        <img src="/storage/{{$a->image}}" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            @endif
                            {{--<div class="col-md-4 col-sm-4 col-xs-4">--}}
                                {{--<div class="thumbnail">--}}
                                    {{--<i class="icon-search"></i>--}}
                                    {{--<a href="javascript:void(0)" target="_blank" data-toggle="modal" data-target=".bs-example-modal-lg">--}}
                                        {{--<img src="https://www.w3schools.com/html/pulpitrock.jpg" alt="" class="img-responsive">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4 col-sm-4 col-xs-4">--}}
                                {{--<div class="thumbnail">--}}
                                    {{--<i class="icon-search"></i>--}}
                                    {{--<a href="javascript:void(0)" target="_blank" data-toggle="modal" data-target=".bs-example-modal-lg">--}}
                                        {{--<img src="https://www.w3schools.com/html/pulpitrock.jpg" alt="" class="img-responsive">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <a href="{{$records->website}}" class="visit-portflio">Visit Full Portfolio</a>
            </div>

            <div class="col-md-4">
                <div class="propert-wrapper-tall single-page-hot-deals">
                    <div class="hot-deals-slider_header">
                        <h4>Don't miss our</h4>
                        <h3>Hot Deals</h3>
                    </div>
                    <div id="hot-deals-slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item  active">
                                <div class="property-sq">
                                    <div class="top-left-wrapper">
                                        <span class="units">Residential</span>
                                        <span class="purpose">For Sale</span>
                                    </div>
                                    <div class="top-right-wrapper">
                                        <span class="hot-deal">Hot Deal</span>
                                        <span class="like-share">
                                                <i class="icon-heart"></i>
                                                <i class="icon-share"></i>
                                            </span>

                                    </div>
                                    <img src="imgs/property-img.png" alt="Image slide" width="100%">
                                    <div class="slide-propery-details">
                                        <h4>Apartment</h4>
                                        <p>
                                            <del>6,550,500</del>
                                            <span>EGP</span>
                                        </p>
                                        <p class="price">5,550,000
                                            <span>EGP</span>
                                        </p>
                                        <div class="property-small-details pale-btn">
                                                <span class="sq-space">2,583-ft
                                                    <sup>2</sup>
                                                </span>
                                            <span class="bar-quant">
                                                    <i class="icon-bathroom"></i>
                                                    <sup>2</sup>
                                                </span>
                                            <span class="ber-quant">
                                                    <i class="icon-bedroom"></i>
                                                    <sup>4</sup>
                                                </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="property-sq">
                                    <div class="top-left-wrapper">
                                        <span class="units">Residential</span>
                                        <span class="purpose">For Sale</span>
                                    </div>
                                    <div class="top-right-wrapper">
                                        <span class="hot-deal">Hot Deal</span>
                                        <span class="like-share">
                                                <i class="icon-heart"></i>
                                                <i class="icon-share"></i>
                                            </span>

                                    </div>
                                    <img src="imgs/property-img.png" alt="Image slide" width="100%">
                                    <div class="slide-propery-details">
                                        <h4>Apartment</h4>
                                        <p>
                                            <del>6,550,500</del>
                                            <span>EGP</span>
                                        </p>
                                        <p class="price">5,550,000
                                            <span>EGP</span>
                                        </p>
                                        <div class="property-small-details pale-btn">
                                                <span class="sq-space">2,583-ft
                                                    <sup>2</sup>
                                                </span>
                                            <span class="bar-quant">
                                                    <i class="icon-bathroom"></i>
                                                    <sup>2</sup>
                                                </span>
                                            <span class="ber-quant">
                                                    <i class="icon-bedroom"></i>
                                                    <sup>4</sup>
                                                </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="property-sq">
                                    <div class="top-left-wrapper">
                                        <span class="units">Residential</span>
                                        <span class="purpose">For Sale</span>
                                    </div>
                                    <div class="top-right-wrapper">
                                        <span class="hot-deal">Hot Deal</span>
                                        <span class="like-share">
                                                <i class="icon-heart"></i>
                                                <i class="icon-share"></i>
                                            </span>

                                    </div>
                                    <img src="imgs/property-img.png" alt="Image slide" width="100%">
                                    <div class="slide-propery-details">
                                        <h4>Apartment</h4>
                                        <p>
                                            <del>6,550,500</del>
                                            <span>EGP</span>
                                        </p>
                                        <p class="price">5,550,000
                                            <span>EGP</span>
                                        </p>
                                        <div class="property-small-details pale-btn">
                                                <span class="sq-space">2,583-ft
                                                    <sup>2</sup>
                                                </span>
                                            <span class="bar-quant">
                                                    <i class="icon-bathroom"></i>
                                                    <sup>2</sup>
                                                </span>
                                            <span class="ber-quant">
                                                    <i class="icon-bedroom"></i>
                                                    <sup>4</sup>
                                                </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="hot-deals-slider_footer">
                            <div class=" carousel-indicators hot-deals-slider-controls ">
                                <a href="#hot-deals-slider-0" data-target="#hot-deals-slider" data-slide-to="0" class="active"></a>
                                <a href="#hot-deals-slider-1" data-target="#hot-deals-slider" data-slide-to="1"></a>
                                <a href="#hot-deals-slider-2" data-target="#hot-deals-slider" data-slide-to="2"></a>
                            </div>
                            <a href="#">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="potoflio-header">
                    <div class="square-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <h2>Similar Designers</h2>
                </div>
                @if(count($users))
                    @foreach($users as $user)
                <div class="similar-designer">

                    @if($user->is_social==1)
                        <img src="{{$user->avatar}}" alt="" />
                    @else
                        <img src="/storage/{{$user->avatar}}" alt="" />
                    @endif
                    <h2>{{$user->name}}</h2>
                    <P>
                        @if($user->is_verified==1)
                            <i class="icon-search"></i> Verified Designer</P>
                        @else
                            <i class="icon-search"></i> Verified Designer</P>
                        @endif


                    <a href="/protfolio/{{$user->id}}">View {{$user->name}}’s Protfolio</a>
                </div>
                @endforeach
                @endif
                {{--<div class="similar-designer">--}}
                    {{--<img src="imgs/one.png">--}}
                    {{--<h2>Hoda Lasheen</h2>--}}
                    {{--<P>--}}
                        {{--<i class="icon-search"></i> Verified Designer</P>--}}


                    {{--<a href="#">View Hoda’s Protfolio</a>--}}
                {{--</div>--}}





            </div>
        </div>
@endsection