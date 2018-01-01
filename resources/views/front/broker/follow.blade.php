@extends('front.app')
@section('page')
    <div class="container-fluid">
        <div class="pagination-login profile-row">
            <a href="#" class="pagination  active-pagination">Home</a>
            <i class="icon-back-arrow"></i>
            <a href="#" class="pagination active-pagination">All Brokers</a>
            <i class="icon-back-arrow"></i>
            <a href="#" class="pagination "> Brokers Properties</a>
        </div>

        <div class="row row-followers">
            <div class="col-md-3  broker-name-followers">
                <div>

                    @if($record->is_social==1)
                        <img src="{{$record->avatar}}" alt="" />
                    @else
                        <img src="/storage/{{$record->avatar}}" alt="" />

                    @endif
                </div>
                <div class="custom-name">
                    <h3>{{$record->name}}</h3>
                    <p>
                        @if($record->is_verified==1)
                            <i class="icon-search"></i> Verified Developer</p>
                    @else
                        <i class="icon-search"></i> Verified Developer</p>

                    @endif                </div>
            </div>
            <div class="col-md-3 broker-properties broker-properties-followers">
                <div>
                    <span>{{$record->properties}}</span>
                    <p>
                        Properties Listed
                    </p>
                </div>
                <div>
                    <span>
                                <?php
                        $date1=date_create($record->created_at->format('Y-m-d'));
                        $date2=date_create( date("Y-m-d"));
                        $diff=date_diff($date1,$date2);
                        echo $diff->format("%a");
                        ?>
                            </span>
                    <p>
                        Days on Market
                    </p>
                </div>
            </div>

            <div class="col-md-3 followers-custom ">
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
            <div class="col-md-3  following-custom">
                <div class="following-broker">
                    <span></span>
                    <a>You are following {{$record->name}}</a>
                    <i class="icon-search"></i>
                </div>
                <div class="contacting-brokers">
                    <i class="icon-search"></i>
                    <a>Contact The Broker</a>
                </div>
            </div>
            <div class="col-md-12 brokers-followers-header ">
                <div>
                    <p>{{count($record->properties_list)}} Properties Found </p>
                </div>
                <div class="hp-icons ">
                        <span>
                            <i class="icon-map"></i>
                        </span>
                    <span>
                            <i class="icon-grid_view hp-icons_active"></i>
                        </span>
                </div>
            </div>
            @if(count($record->properties_list))
                @foreach($record->properties_list as $property)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="property-sq">
                    <div class="propert-wrapper-sq">
                        <div class="top-left-wrapper">
                            <span class="units">Residential</span>
                            <span class="purpose">For Sale</span>
                        </div>
                        <div class="top-right-wrapper">
                            <span class="hot-deal">Hot Deal</span>
                            <span class="like-share">
                                    <i class="icon-heart like"></i>
                                    <i class="icon-share"></i>
                                </span>

                        </div>
                        <img src="/storage/{{$property->cover->image}}" alt="Image slide" width="100%">
                        <div class="slide-propery-details">
                            <h4>{{$property->title}}</h4>
                            <p>
                                <del>{{$property->price}}</del>
                                <span>EGP</span>
                            </p>
                            <p class="price">{{$property->price_after_discount[0]->price_after_discount}}
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
                @endforeach
            @else
                not found
            @endif
            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="property-sq">--}}
                    {{--<div class="propert-wrapper-sq">--}}
                        {{--<div class="top-left-wrapper">--}}
                            {{--<span class="units">Residential</span>--}}
                            {{--<span class="purpose">For Sale</span>--}}
                        {{--</div>--}}
                        {{--<div class="top-right-wrapper">--}}
                            {{--<span class="hot-deal">Hot Deal</span>--}}
                            {{--<span class="like-share">--}}
                                    {{--<i class="icon-heart like"></i>--}}
                                    {{--<i class="icon-share"></i>--}}
                                {{--</span>--}}

                        {{--</div>--}}
                        {{--<img src="imgs/property-img.png" alt="Image slide" width="100%">--}}
                        {{--<div class="slide-propery-details">--}}
                            {{--<h4>Apartment</h4>--}}
                            {{--<p>--}}
                                {{--<del>6,550,500</del>--}}
                                {{--<span>EGP</span>--}}
                            {{--</p>--}}
                            {{--<p class="price">5,550,000--}}
                                {{--<span>EGP</span>--}}
                            {{--</p>--}}
                            {{--<div class="property-small-details pale-btn">--}}
                                    {{--<span class="sq-space">2,583-ft--}}
                                        {{--<sup>2</sup>--}}
                                    {{--</span>--}}
                                {{--<span class="bar-quant">--}}
                                        {{--<i class="icon-bathroom"></i>--}}
                                        {{--<sup>2</sup>--}}
                                    {{--</span>--}}
                                {{--<span class="ber-quant">--}}
                                        {{--<i class="icon-bedroom"></i>--}}
                                        {{--<sup>4</sup>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="property-sq">--}}
                    {{--<div class="propert-wrapper-sq">--}}
                        {{--<div class="top-left-wrapper">--}}
                            {{--<span class="units">Residential</span>--}}
                            {{--<span class="purpose">For Sale</span>--}}
                        {{--</div>--}}
                        {{--<div class="top-right-wrapper">--}}
                            {{--<span class="hot-deal">Hot Deal</span>--}}
                            {{--<span class="like-share">--}}
                                    {{--<i class="icon-heart like"></i>--}}
                                    {{--<i class="icon-share"></i>--}}
                                {{--</span>--}}

                        {{--</div>--}}
                        {{--<img src="imgs/property-img.png" alt="Image slide" width="100%">--}}
                        {{--<div class="slide-propery-details">--}}
                            {{--<h4>Apartment</h4>--}}
                            {{--<p>--}}
                                {{--<del>6,550,500</del>--}}
                                {{--<span>EGP</span>--}}
                            {{--</p>--}}
                            {{--<p class="price">5,550,000--}}
                                {{--<span>EGP</span>--}}
                            {{--</p>--}}
                            {{--<div class="property-small-details pale-btn">--}}
                                    {{--<span class="sq-space">2,583-ft--}}
                                        {{--<sup>2</sup>--}}
                                    {{--</span>--}}
                                {{--<span class="bar-quant">--}}
                                        {{--<i class="icon-bathroom"></i>--}}
                                        {{--<sup>2</sup>--}}
                                    {{--</span>--}}
                                {{--<span class="ber-quant">--}}
                                        {{--<i class="icon-bedroom"></i>--}}
                                        {{--<sup>4</sup>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="property-sq">--}}
                    {{--<div class="propert-wrapper-sq">--}}
                        {{--<div class="top-left-wrapper">--}}
                            {{--<span class="units">Residential</span>--}}
                            {{--<span class="purpose">For Sale</span>--}}
                        {{--</div>--}}
                        {{--<div class="top-right-wrapper">--}}
                            {{--<span class="hot-deal">Hot Deal</span>--}}
                            {{--<span class="like-share">--}}
                                    {{--<i class="icon-heart like"></i>--}}
                                    {{--<i class="icon-share"></i>--}}
                                {{--</span>--}}

                        {{--</div>--}}
                        {{--<img src="imgs/property-img.png" alt="Image slide" width="100%">--}}
                        {{--<div class="slide-propery-details">--}}
                            {{--<h4>Apartment</h4>--}}
                            {{--<p>--}}
                                {{--<del>6,550,500</del>--}}
                                {{--<span>EGP</span>--}}
                            {{--</p>--}}
                            {{--<p class="price">5,550,000--}}
                                {{--<span>EGP</span>--}}
                            {{--</p>--}}
                            {{--<div class="property-small-details pale-btn">--}}
                                    {{--<span class="sq-space">2,583-ft--}}
                                        {{--<sup>2</sup>--}}
                                    {{--</span>--}}
                                {{--<span class="bar-quant">--}}
                                        {{--<i class="icon-bathroom"></i>--}}
                                        {{--<sup>2</sup>--}}
                                    {{--</span>--}}
                                {{--<span class="ber-quant">--}}
                                        {{--<i class="icon-bedroom"></i>--}}
                                        {{--<sup>4</sup>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="property-sq">--}}
                    {{--<div class="propert-wrapper-sq">--}}
                        {{--<div class="top-left-wrapper">--}}
                            {{--<span class="units">Residential</span>--}}
                            {{--<span class="purpose">For Sale</span>--}}
                        {{--</div>--}}
                        {{--<div class="top-right-wrapper">--}}
                            {{--<span class="hot-deal">Hot Deal</span>--}}
                            {{--<span class="like-share">--}}
                                    {{--<i class="icon-heart like"></i>--}}
                                    {{--<i class="icon-share"></i>--}}
                                {{--</span>--}}

                        {{--</div>--}}
                        {{--<img src="imgs/property-img.png" alt="Image slide" width="100%">--}}
                        {{--<div class="slide-propery-details">--}}
                            {{--<h4>Apartment</h4>--}}
                            {{--<p>--}}
                                {{--<del>6,550,500</del>--}}
                                {{--<span>EGP</span>--}}
                            {{--</p>--}}
                            {{--<p class="price">5,550,000--}}
                                {{--<span>EGP</span>--}}
                            {{--</p>--}}
                            {{--<div class="property-small-details pale-btn">--}}
                                    {{--<span class="sq-space">2,583-ft--}}
                                        {{--<sup>2</sup>--}}
                                    {{--</span>--}}
                                {{--<span class="bar-quant">--}}
                                        {{--<i class="icon-bathroom"></i>--}}
                                        {{--<sup>2</sup>--}}
                                    {{--</span>--}}
                                {{--<span class="ber-quant">--}}
                                        {{--<i class="icon-bedroom"></i>--}}
                                        {{--<sup>4</sup>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="property-sq">--}}
                    {{--<div class="propert-wrapper-sq">--}}
                        {{--<div class="top-left-wrapper">--}}
                            {{--<span class="units">Residential</span>--}}
                            {{--<span class="purpose">For Sale</span>--}}
                        {{--</div>--}}
                        {{--<div class="top-right-wrapper">--}}
                            {{--<span class="hot-deal">Hot Deal</span>--}}
                            {{--<span class="like-share">--}}
                                    {{--<i class="icon-heart like"></i>--}}
                                    {{--<i class="icon-share"></i>--}}
                                {{--</span>--}}

                        {{--</div>--}}
                        {{--<img src="imgs/property-img.png" alt="Image slide" width="100%">--}}
                        {{--<div class="slide-propery-details">--}}
                            {{--<h4>Apartment</h4>--}}
                            {{--<p>--}}
                                {{--<del>6,550,500</del>--}}
                                {{--<span>EGP</span>--}}
                            {{--</p>--}}
                            {{--<p class="price">5,550,000--}}
                                {{--<span>EGP</span>--}}
                            {{--</p>--}}
                            {{--<div class="property-small-details pale-btn">--}}
                                    {{--<span class="sq-space">2,583-ft--}}
                                        {{--<sup>2</sup>--}}
                                    {{--</span>--}}
                                {{--<span class="bar-quant">--}}
                                        {{--<i class="icon-bathroom"></i>--}}
                                        {{--<sup>2</sup>--}}
                                    {{--</span>--}}
                                {{--<span class="ber-quant">--}}
                                        {{--<i class="icon-bedroom"></i>--}}
                                        {{--<sup>4</sup>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="property-sq">--}}
                    {{--<div class="propert-wrapper-sq">--}}
                        {{--<div class="top-left-wrapper">--}}
                            {{--<span class="units">Residential</span>--}}
                            {{--<span class="purpose">For Sale</span>--}}
                        {{--</div>--}}
                        {{--<div class="top-right-wrapper">--}}
                            {{--<span class="hot-deal">Hot Deal</span>--}}
                            {{--<span class="like-share">--}}
                                    {{--<i class="icon-heart like"></i>--}}
                                    {{--<i class="icon-share"></i>--}}
                                {{--</span>--}}

                        {{--</div>--}}
                        {{--<img src="imgs/property-img.png" alt="Image slide" width="100%">--}}
                        {{--<div class="slide-propery-details">--}}
                            {{--<h4>Apartment</h4>--}}
                            {{--<p>--}}
                                {{--<del>6,550,500</del>--}}
                                {{--<span>EGP</span>--}}
                            {{--</p>--}}
                            {{--<p class="price">5,550,000--}}
                                {{--<span>EGP</span>--}}
                            {{--</p>--}}
                            {{--<div class="property-small-details pale-btn">--}}
                                    {{--<span class="sq-space">2,583-ft--}}
                                        {{--<sup>2</sup>--}}
                                    {{--</span>--}}
                                {{--<span class="bar-quant">--}}
                                        {{--<i class="icon-bathroom"></i>--}}
                                        {{--<sup>2</sup>--}}
                                    {{--</span>--}}
                                {{--<span class="ber-quant">--}}
                                        {{--<i class="icon-bedroom"></i>--}}
                                        {{--<sup>4</sup>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="property-sq">--}}
                    {{--<div class="propert-wrapper-sq">--}}
                        {{--<div class="top-left-wrapper">--}}
                            {{--<span class="units">Residential</span>--}}
                            {{--<span class="purpose">For Sale</span>--}}
                        {{--</div>--}}
                        {{--<div class="top-right-wrapper">--}}
                            {{--<span class="hot-deal">Hot Deal</span>--}}
                            {{--<span class="like-share">--}}
                                    {{--<i class="icon-heart like"></i>--}}
                                    {{--<i class="icon-share"></i>--}}
                                {{--</span>--}}

                        {{--</div>--}}
                        {{--<img src="https://www.w3schools.com/html/pulpitrock.jpg" alt="Image slide" width="100%">--}}
                        {{--<div class="slide-propery-details">--}}
                            {{--<h4>Apartment</h4>--}}
                            {{--<p>--}}
                                {{--<del>6,550,500</del>--}}
                                {{--<span>EGP</span>--}}
                            {{--</p>--}}
                            {{--<p class="price">5,550,000--}}
                                {{--<span>EGP</span>--}}
                            {{--</p>--}}
                            {{--<div class="property-small-details pale-btn">--}}
                                    {{--<span class="sq-space">2,583-ft--}}
                                        {{--<sup>2</sup>--}}
                                    {{--</span>--}}
                                {{--<span class="bar-quant">--}}
                                        {{--<i class="icon-bathroom"></i>--}}
                                        {{--<sup>2</sup>--}}
                                    {{--</span>--}}
                                {{--<span class="ber-quant">--}}
                                        {{--<i class="icon-bedroom"></i>--}}
                                        {{--<sup>4</sup>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="property-sq">--}}
                    {{--<div class="propert-wrapper-sq">--}}
                        {{--<div class="top-left-wrapper">--}}
                            {{--<span class="units">Residential</span>--}}
                            {{--<span class="purpose">For Sale</span>--}}
                        {{--</div>--}}
                        {{--<div class="top-right-wrapper">--}}
                            {{--<span class="hot-deal">Hot Deal</span>--}}
                            {{--<span class="like-share">--}}
                                    {{--<i class="icon-heart like"></i>--}}
                                    {{--<i class="icon-share"></i>--}}
                                {{--</span>--}}

                        {{--</div>--}}
                        {{--<img src="imgs/property-img.png" alt="Image slide" width="100%">--}}
                        {{--<div class="slide-propery-details">--}}
                            {{--<h4>Apartment</h4>--}}
                            {{--<p>--}}
                                {{--<del>6,550,500</del>--}}
                                {{--<span>EGP</span>--}}
                            {{--</p>--}}
                            {{--<p class="price">5,550,000--}}
                                {{--<span>EGP</span>--}}
                            {{--</p>--}}
                            {{--<div class="property-small-details pale-btn">--}}
                                    {{--<span class="sq-space">2,583-ft--}}
                                        {{--<sup>2</sup>--}}
                                    {{--</span>--}}
                                {{--<span class="bar-quant">--}}
                                        {{--<i class="icon-bathroom"></i>--}}
                                        {{--<sup>2</sup>--}}
                                    {{--</span>--}}
                                {{--<span class="ber-quant">--}}
                                        {{--<i class="icon-bedroom"></i>--}}
                                        {{--<sup>4</sup>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}



        </div>
@endsection