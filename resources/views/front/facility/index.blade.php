@extends('front.app')
@section('page')

    <div class="container-fluid">
        <div class="pagination-login">
            <a href="#" class="pagination  active-pagination">Home</a>
            <i class="icon-back-arrow"></i>
            <a href="#" class="pagination ">Our Services</a>
            <i class="icon-back-arrow"></i>
            <a href="#" class="pagination ">Facility Management Services</a>
        </div>
        <div class="constructions-header">
            <div>
                <span>{{count($records)}}</span>Facility Management Services Company Found</div>
            <div>
                <a href="renovatio-calculator.html">
                    <i class="icon-dock-finishing-cost"></i>Calculate Building & Finishing Cost</a>
            </div>
        </div>
        <div class="row broker-row">
            @if(count($records))
                @foreach($records as $record)

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="property-sq">
                    <div class="designr-logo">
                        <img src="/storage/{{$record->logo}}" alt="" />
                    </div>
                    <div class="designer-detalis">
                        <h4>About Company</h4>
                        <p>{{$record->description}}</p>
                        <br/>
                        <h4>Address</h4>
                        <p>
                           {{$record->address}}
                            <br/>
                            <br/> Telephone: {{$record->phone}}
                            <br/> Telefax: {{$record->fax}}
                            <br/> {{$record->website}}
                        </p>
                    </div>
                    <div class="propert-wrapper-sq">
                        <img src="{{url('/storage/'.$record->image)}}" alt="Image slide" width="100%">
                        <div class="slide-propery-details district-designs">
                            <div>
                                <h4>{{$record->title}}</h4>
                                <p>Construction Company</p>
                                <p>{{$record->address}}</p>
                            </div>
                            <div class="property-small-details pale-btn  district-designs-btn">
                                    <span class="sq-space">
                                        <a href="{{$record->website}}"><i class="icon-web"></i></a>
                                    </span>
                                <span class="bar-quant">
                                        <a href="{{$record->facebook}}"><i class="icon-fb"></i></a>
                                    </span>
                                <span class="ber-quant company-arrow">
                                        <i class="icon-down-arrow "></i>
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
                    {{--<div class="designr-logo">--}}
                        {{--<img src="imgs/ad-logo.png" alt="" /> </div>--}}
                    {{--<div class="designer-detalis">--}}
                        {{--<h4>About Company</h4>--}}
                        {{--<p>Hanwha Construction creates a better future by designing a new world based on our global construction--}}
                            {{--and engineering capacity.</p>--}}
                        {{--<br/>--}}
                        {{--<h4>Address</h4>--}}
                        {{--<p>--}}
                            {{--19 Road 151--}}
                            {{--<br/> Maadi, Cairo--}}
                            {{--<br/> Egypt--}}
                            {{--<br/>--}}
                            {{--<br/> Telephone: +202-2525-5755--}}
                            {{--<br/> Telefax: +202-2525-5616--}}
                            {{--<br/> www.aare-egypt.com--}}
                        {{--</p>--}}

                    {{--</div>--}}
                    {{--<div class="propert-wrapper-sq">--}}
                        {{--<img src="imgs/property-img.png" alt="Image slide" width="100%">--}}
                        {{--<div class="slide-propery-details district-designs">--}}
                            {{--<div>--}}
                                {{--<h4>District Designs</h4>--}}
                                {{--<p>Construction Company</p>--}}
                                {{--<p>Nasr City, Cairo</p>--}}
                            {{--</div>--}}
                            {{--<div class="property-small-details pale-btn  district-designs-btn">--}}
                                    {{--<span class="sq-space">--}}
                                        {{--<i class="icon-web"></i>--}}
                                    {{--</span>--}}
                                {{--<span class="bar-quant">--}}
                                        {{--<i class="icon-fb"></i>--}}
                                    {{--</span>--}}
                                {{--<span class="ber-quant company-arrow">--}}
                                        {{--<i class="icon-down-arrow "></i>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="property-sq">--}}
                    {{--<div class="designr-logo">--}}
                        {{--<img src="imgs/ad-logo.png" alt="" /> </div>--}}
                    {{--<div class="designer-detalis">--}}
                        {{--<h4>About Company</h4>--}}
                        {{--<p>Hanwha Construction creates a better future by designing a new world based on our global construction--}}
                            {{--and engineering capacity.</p>--}}
                        {{--<br/>--}}
                        {{--<h4>Address</h4>--}}
                        {{--<p>--}}
                            {{--19 Road 151--}}
                            {{--<br/> Maadi, Cairo--}}
                            {{--<br/> Egypt--}}
                            {{--<br/>--}}
                            {{--<br/> Telephone: +202-2525-5755--}}
                            {{--<br/> Telefax: +202-2525-5616--}}
                            {{--<br/> www.aare-egypt.com--}}
                        {{--</p>--}}

                    {{--</div>--}}
                    {{--<div class="propert-wrapper-sq">--}}
                        {{--<img src="imgs/property-img.png" alt="Image slide" width="100%">--}}
                        {{--<div class="slide-propery-details district-designs">--}}
                            {{--<div>--}}
                                {{--<h4>District Designs</h4>--}}
                                {{--<p>Construction Company</p>--}}
                                {{--<p>Nasr City, Cairo</p>--}}
                            {{--</div>--}}
                            {{--<div class="property-small-details pale-btn  district-designs-btn">--}}
                                    {{--<span class="sq-space">--}}
                                        {{--<i class="icon-web"></i>--}}
                                    {{--</span>--}}
                                {{--<span class="bar-quant">--}}
                                        {{--<i class="icon-fb"></i>--}}
                                    {{--</span>--}}
                                {{--<span class="ber-quant company-arrow">--}}
                                        {{--<i class="icon-down-arrow "></i>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="property-sq">--}}
                    {{--<div class="designr-logo">--}}
                        {{--<img src="imgs/ad-logo.png" alt="" /> </div>--}}
                    {{--<div class="designer-detalis">--}}
                        {{--<h4>About Company</h4>--}}
                        {{--<p>Hanwha Construction creates a better future by designing a new world based on our global construction--}}
                            {{--and engineering capacity.</p>--}}
                        {{--<br/>--}}
                        {{--<h4>Address</h4>--}}
                        {{--<p>--}}
                            {{--19 Road 151--}}
                            {{--<br/> Maadi, Cairo--}}
                            {{--<br/> Egypt--}}
                            {{--<br/>--}}
                            {{--<br/> Telephone: +202-2525-5755--}}
                            {{--<br/> Telefax: +202-2525-5616--}}
                            {{--<br/> www.aare-egypt.com--}}
                        {{--</p>--}}

                    {{--</div>--}}
                    {{--<div class="propert-wrapper-sq">--}}
                        {{--<img src="imgs/property-img.png" alt="Image slide" width="100%">--}}
                        {{--<div class="slide-propery-details district-designs">--}}
                            {{--<div>--}}
                                {{--<h4>District Designs</h4>--}}
                                {{--<p>Construction Company</p>--}}
                                {{--<p>Nasr City, Cairo</p>--}}
                            {{--</div>--}}
                            {{--<div class="property-small-details pale-btn  district-designs-btn">--}}
                                    {{--<span class="sq-space">--}}
                                        {{--<i class="icon-web"></i>--}}
                                    {{--</span>--}}
                                {{--<span class="bar-quant">--}}
                                        {{--<i class="icon-fb"></i>--}}
                                    {{--</span>--}}
                                {{--<span class="ber-quant company-arrow">--}}
                                        {{--<i class="icon-down-arrow "></i>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="property-sq">--}}
                    {{--<div class="designr-logo">--}}
                        {{--<img src="imgs/ad-logo.png" alt="" /> </div>--}}
                    {{--<div class="designer-detalis">--}}
                        {{--<h4>About Company</h4>--}}
                        {{--<p>Hanwha Construction creates a better future by designing a new world based on our global construction--}}
                            {{--and engineering capacity.</p>--}}
                        {{--<br/>--}}
                        {{--<h4>Address</h4>--}}
                        {{--<p>--}}
                            {{--19 Road 151--}}
                            {{--<br/> Maadi, Cairo--}}
                            {{--<br/> Egypt--}}
                            {{--<br/>--}}
                            {{--<br/> Telephone: +202-2525-5755--}}
                            {{--<br/> Telefax: +202-2525-5616--}}
                            {{--<br/> www.aare-egypt.com--}}
                        {{--</p>--}}

                    {{--</div>--}}
                    {{--<div class="propert-wrapper-sq">--}}
                        {{--<img src="imgs/property-img.png" alt="Image slide" width="100%">--}}
                        {{--<div class="slide-propery-details district-designs">--}}
                            {{--<div>--}}
                                {{--<h4>District Designs</h4>--}}
                                {{--<p>Construction Company</p>--}}
                                {{--<p>Nasr City, Cairo</p>--}}
                            {{--</div>--}}
                            {{--<div class="property-small-details pale-btn  district-designs-btn">--}}
                                    {{--<span class="sq-space">--}}
                                        {{--<i class="icon-web"></i>--}}
                                    {{--</span>--}}
                                {{--<span class="bar-quant">--}}
                                        {{--<i class="icon-fb"></i>--}}
                                    {{--</span>--}}
                                {{--<span class="ber-quant company-arrow">--}}
                                        {{--<i class="icon-down-arrow "></i>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="property-sq">--}}
                    {{--<div class="designr-logo">--}}
                        {{--<img src="imgs/ad-logo.png" alt="" /> </div>--}}
                    {{--<div class="designer-detalis">--}}
                        {{--<h4>About Company</h4>--}}
                        {{--<p>Hanwha Construction creates a better future by designing a new world based on our global construction--}}
                            {{--and engineering capacity.</p>--}}
                        {{--<br/>--}}
                        {{--<h4>Address</h4>--}}
                        {{--<p>--}}
                            {{--19 Road 151--}}
                            {{--<br/> Maadi, Cairo--}}
                            {{--<br/> Egypt--}}
                            {{--<br/>--}}
                            {{--<br/> Telephone: +202-2525-5755--}}
                            {{--<br/> Telefax: +202-2525-5616--}}
                            {{--<br/> www.aare-egypt.com--}}
                        {{--</p>--}}

                    {{--</div>--}}
                    {{--<div class="propert-wrapper-sq">--}}
                        {{--<img src="imgs/property-img.png" alt="Image slide" width="100%">--}}
                        {{--<div class="slide-propery-details district-designs">--}}
                            {{--<div>--}}
                                {{--<h4>District Designs</h4>--}}
                                {{--<p>Construction Company</p>--}}
                                {{--<p>Nasr City, Cairo</p>--}}
                            {{--</div>--}}
                            {{--<div class="property-small-details pale-btn  district-designs-btn">--}}
                                    {{--<span class="sq-space">--}}
                                        {{--<i class="icon-web"></i>--}}
                                    {{--</span>--}}
                                {{--<span class="bar-quant">--}}
                                        {{--<i class="icon-fb"></i>--}}
                                    {{--</span>--}}
                                {{--<span class="ber-quant company-arrow">--}}
                                        {{--<i class="icon-down-arrow "></i>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="property-sq">--}}
                    {{--<div class="designr-logo">--}}
                        {{--<img src="imgs/ad-logo.png" alt="" /> </div>--}}
                    {{--<div class="designer-detalis">--}}
                        {{--<h4>About Company</h4>--}}
                        {{--<p>Hanwha Construction creates a better future by designing a new world based on our global construction--}}
                            {{--and engineering capacity.</p>--}}
                        {{--<br/>--}}
                        {{--<h4>Address</h4>--}}
                        {{--<p>--}}
                            {{--19 Road 151--}}
                            {{--<br/> Maadi, Cairo--}}
                            {{--<br/> Egypt--}}
                            {{--<br/>--}}
                            {{--<br/> Telephone: +202-2525-5755--}}
                            {{--<br/> Telefax: +202-2525-5616--}}
                            {{--<br/> www.aare-egypt.com--}}
                        {{--</p>--}}

                    {{--</div>--}}
                    {{--<div class="propert-wrapper-sq">--}}
                        {{--<img src="imgs/property-img.png" alt="Image slide" width="100%">--}}
                        {{--<div class="slide-propery-details district-designs">--}}
                            {{--<div>--}}
                                {{--<h4>District Designs</h4>--}}
                                {{--<p>Construction Company</p>--}}
                                {{--<p>Nasr City, Cairo</p>--}}
                            {{--</div>--}}
                            {{--<div class="property-small-details pale-btn  district-designs-btn">--}}
                                    {{--<span class="sq-space">--}}
                                        {{--<i class="icon-web"></i>--}}
                                    {{--</span>--}}
                                {{--<span class="bar-quant">--}}
                                        {{--<i class="icon-fb"></i>--}}
                                    {{--</span>--}}
                                {{--<span class="ber-quant company-arrow">--}}
                                        {{--<i class="icon-down-arrow "></i>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="property-sq">--}}
                    {{--<div class="designr-logo">--}}
                        {{--<img src="imgs/ad-logo.png" alt="" /> </div>--}}
                    {{--<div class="designer-detalis">--}}
                        {{--<h4>About Company</h4>--}}
                        {{--<p>Hanwha Construction creates a better future by designing a new world based on our global construction--}}
                            {{--and engineering capacity.</p>--}}
                        {{--<br/>--}}
                        {{--<h4>Address</h4>--}}
                        {{--<p>--}}
                            {{--19 Road 151--}}
                            {{--<br/> Maadi, Cairo--}}
                            {{--<br/> Egypt--}}
                            {{--<br/>--}}
                            {{--<br/> Telephone: +202-2525-5755--}}
                            {{--<br/> Telefax: +202-2525-5616--}}
                            {{--<br/> www.aare-egypt.com--}}
                        {{--</p>--}}

                    {{--</div>--}}
                    {{--<div class="propert-wrapper-sq">--}}
                        {{--<img src="imgs/property-img.png" alt="Image slide" width="100%">--}}
                        {{--<div class="slide-propery-details district-designs">--}}
                            {{--<div>--}}
                                {{--<h4>District Designs</h4>--}}
                                {{--<p>Construction Company</p>--}}
                                {{--<p>Nasr City, Cairo</p>--}}
                            {{--</div>--}}
                            {{--<div class="property-small-details pale-btn  district-designs-btn">--}}
                                    {{--<span class="sq-space">--}}
                                        {{--<i class="icon-web"></i>--}}
                                    {{--</span>--}}
                                {{--<span class="bar-quant">--}}
                                        {{--<i class="icon-fb"></i>--}}
                                    {{--</span>--}}
                                {{--<span class="ber-quant company-arrow">--}}
                                        {{--<i class="icon-down-arrow "></i>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                {{--<div class="property-sq">--}}
                    {{--<div class="designr-logo">--}}
                        {{--<img src="imgs/ad-logo.png" alt="" /> </div>--}}
                    {{--<div class="designer-detalis">--}}
                        {{--<h4>About Company</h4>--}}
                        {{--<p>Hanwha Construction creates a better future by designing a new world based on our global construction--}}
                            {{--and engineering capacity.</p>--}}
                        {{--<br/>--}}
                        {{--<h4>Address</h4>--}}
                        {{--<p>--}}
                            {{--19 Road 151--}}
                            {{--<br/> Maadi, Cairo--}}
                            {{--<br/> Egypt--}}
                            {{--<br/>--}}
                            {{--<br/> Telephone: +202-2525-5755--}}
                            {{--<br/> Telefax: +202-2525-5616--}}
                            {{--<br/> www.aare-egypt.com--}}
                        {{--</p>--}}

                    {{--</div>--}}
                    {{--<div class="propert-wrapper-sq">--}}
                        {{--<img src="imgs/property-img.png" alt="Image slide" width="100%">--}}
                        {{--<div class="slide-propery-details district-designs">--}}
                            {{--<div>--}}
                                {{--<h4>District Designs</h4>--}}
                                {{--<p>Construction Company</p>--}}
                                {{--<p>Nasr City, Cairo</p>--}}
                            {{--</div>--}}
                            {{--<div class="property-small-details pale-btn  district-designs-btn">--}}
                                    {{--<span class="sq-space">--}}
                                        {{--<i class="icon-web"></i>--}}
                                    {{--</span>--}}
                                {{--<span class="bar-quant">--}}
                                        {{--<i class="icon-fb"></i>--}}
                                    {{--</span>--}}
                                {{--<span class="ber-quant company-arrow">--}}
                                        {{--<i class="icon-down-arrow "></i>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


        </div>
@endsection