@extends('front.app')
@section('page')

<div class="container-fluid">
                <div class="row">
                    <div class="pagination-login pagination-property">
                        <div>
                            <a href="#" class="pagination  active-pagination">Home</a>
                            <i class="icon-back-arrow"></i>
                            <a href="#" class="pagination active-pagination">All Properties</a>
                            <i class="icon-back-arrow"></i>
                            <a href="#" class="pagination">{{ $title }}</a>
                        </div>
                        <div class="hot-offer">
                            <div>
                                <i class="icon-search"></i>
                            </div>
                            <div>
                                <p>It is A hot offer</p>
                                <a href="#">View all Hot Deals</a>
                            </div>
                        </div>
                    </div>

                    <!-- Left side -->
                    <div class="col-md-8">
                        <div class="property-h">
                            <h2>{{ $title }}</h2>
                            <p>Nice clean and comfortable 4 bedroom 2 bathroom House</p>
                        </div>
                        <div class="property-details">
                            <div class="propert-wrapper-lg">
                                <div class="top-left-wrapper">
                                    <span class="units">{{ $result['property']->propertytype()->text }}</span>
                                    <span class="purpose">{{ $result['property']->purposeposting()->text }}</span>
                                </div>
                                <div class="top-right-wrapper">
                                    <span class="hot-deal">Hot Deal</span>
                                    <span class="like-share">
                                        <i class="icon-heart"></i>
                                        <i class="icon-share"></i>
                                    </span>
                                </div>
                                <img src="{{ asset('property-images')}}/{{ $result['property_cover_image']['image'] }}" alt="Image slide" width="100%">
                                <div class="slide-propery-details customs">
                                    <div>
                                        <h4>{{ $title }}</h4>
                                                    @if(isset($result['hot_offer']))
                                        <p>
                                            <del>{{ $result['property']['price'] }}</del>
                                        </p>
                                        <p class="price">{{ $result['hot_offer']['price_after_discount'] }}
                                            <span>EGP</span>
                                        </p>
                                        @else
                                        <p class="price">{{ $result['property']['price'] }}
                                            <span>EGP</span>
                                        </p>
                                        @endif
                                    </div>
                                    <div class="contact-seller-btn">
                                        <i class="icon-search"></i>
                                        <p>Liked This Property?</p>
                                        <a class="contact-the-seller-h">
                                            <h3>Contact The Seller Now</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="seller-form">
                                <div class="contact-the-celler center-block text-center">
                                    <i class="icon-search"></i>
                                    <p>The Owner</p>
                                    <h2>Contact The Seller Now</h2>
                                </div>
                                <div class="contact-the-celler-form">
                                    <h5>Enter your Message Details</h5>

                                    <form>
                                        <div class="form-group col-md-6  has-error">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                            <span class="contact-seller-validation">test</span>
                                        </div>
                                        <div class="form-group col-md-6  has-error">
                                            <input type="password" class="form-control" placeholder="Your Mobile Number">
                                            <span class="contact-seller-validation">test</span>
                                        </div>
                                        <div class="form-group col-md-12  has-error">
                                            <input type="tel" class="form-control" placeholder="Enter Your E-mail Address">
                                            <span class="contact-seller-validation">test</span>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea class="form-control celler-comment" rows="5" id="comment" placeholder="Enter Your Message"></textarea>
                                        </div>
                                        <div class="btns">
                                            <input href="javascript:void(0)" type="submit" id="send-seller-message" class=" btn-recover-pw" value="Send Your Message">
                                            <a id="close-seller" class="cancel-btn">cancel</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="thanks-message">
                                    <div class="contact-the-celler center-block text-center">
                                        <i class="icon-search"></i>
                                        <h2>Your Message sent successfully</h2>
                                    </div>
                                    <div class="center-block">
                                        <p>Thank You!</p>
                                        <h4>Your Message Has Been Sent to</h4>
                                        <img src="{{ asset('front/imgs/developer-logo.png') }}" alt="sodic-logo">
                                        <h6>Check Your messages regularly for replies</h6>
                                        <div class="btns">
                                            <a href="#" class="cancel-btn">Check Your Inbox</a>
                                            <a href="#" class=" btn-recover-pw">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">



                                            <!-- Wrapper for slides -->
                                            
                                            <div class="carousel-inner">
                                                 <?php $pos=1 ?>
                                                @foreach($result['other_images'] as $other_image)
                                                <div class="item @if($pos == 1) active @endif">
                                                    <img class="img-responsive property-imgs" src="{{ asset('property-images')}}/{{ $other_image['image'] }}" alt="...">
                                                </div>
                                                  <?php $pos++ ?>

                                                @endforeach
                                                
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
                                    @foreach($result['other_images'] as $other_image)
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="thumbnail">
                                            <i class="icon-search"></i>
                                            <a href="javascript:void(0)" target="_blank" data-toggle="modal" data-target=".bs-example-modal-lg">
                                                <img src="{{ asset('property-images')}}/{{ $other_image['image'] }}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>

                        </div>
                        <div class="property-details-inner">
                            <div class="inner-details-h">
                                <div class="square-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <h3>Property Details</h3>
                            </div>
                            <div class="inner-details">
                                <div class="row">
                                    
                                    <div class="right-details">
                                        @foreach($result['property_option_results'] as $property_option_result)
                                        <div class="col-md-6">
                                            <div class="detail">
                                                <i class="{{ $property_option_result->propertyoption()->icon }}"></i>
                                                <p>{{ $property_option_result->propertyoption()->text }} : {{ $property_option_result['value'] }}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                         
                                       
                                        
                                       
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="similar-properties">
                                <div class="similar-h">
                                    <div>
                                        <div class="square-icon">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <h3>Similar Properties</h3>
                                    </div>
                                </div>
                                <div id="hp-carousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <div class="carousel-indicators hp-carousel-controls">
                                        <a href="#hp-carousel-0" data-target="#hp-carousel" data-slide-to="0" class="active"></a>
                                        @if(count($result['similar_properties']) > 2)
                                        <a href="#hp-carousel-1" data-target="#hp-carousel" data-slide-to="1" class=""></a>
                                        @endif
                                        @if(count($result['similar_properties']) > 4)
                                        <a href="#hp-carousel-2" data-target="#hp-carousel" data-slide-to="2" ></a>
                                        @endif
                                    </div>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <div class="similar-inner">
@if(isset($result['similar_properties'][0]))
                                                <div class="propert-wrapper-sq">
                                                    <div class="top-left-wrapper">
                                                     <span class="units">{{ $result['similar_properties'][0]->propertytype()->text }}</span>
                                                        <span class="purpose">{{ $result['similar_properties'][0]->purposeposting()->text }}</span>
                                                    </div>
                                                    <div class="top-right-wrapper">
    @if($result['similar_properties'][0]->hotoffer() != null)
                                                        <span class="hot-deal">Hot Deal</span>
@endif
                                                        <span class="like-share">
                                                            <i class="icon-heart"></i>
                                                            <i class="icon-share"></i>
                                                        </span>
                                                    </div>
                                                    <img src="{{ asset('property-images') }}/{{ $result['similar_properties'][0]->coverphoto()->image }}" alt="Image slide" width="100%">
                                                    <div class="slide-propery-details">
                                                        <h4>{{ $result['similar_properties'][0]['title'] }}</h4>
                                                        @if($result['similar_properties'][0]->hotoffer() != null)
                                                        <p>
                                                            <del>{{ $result['similar_properties'][0]['price'] }}</del>
                                                        </p>
                                                        <p class="price">{{ $result['similar_properties'][0]->hotoffer()->price_after_discount }}
                                                            <span>EGP</span>
                                                        </p>
                                                        @else
                                                         <p class="price">{{ $result['similar_properties'][0]['price'] }}
                                                            <span>EGP</span>
                                                        </p>
                                                        @endif
                                                        <div class="property-small-details pale-btn">
                                                            @if($result['similar_properties'][0]->optionuser() != null)
                                                            @foreach($result['similar_properties'][0]->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                                            
                                                        </div>
                                                    </div>
                                                </div>
@endif
                                                @if(isset($result['similar_properties'][1]))
                                                <div class="propert-wrapper-sq">
                                                    <div class="top-left-wrapper">
                                                     <span class="units">{{ $result['similar_properties'][0]->propertytype()->text }}</span>
                                                        <span class="purpose">{{ $result['similar_properties'][0]->purposeposting()->text }}</span>
                                                    </div>
                                                    <div class="top-right-wrapper">
    @if($result['similar_properties'][1]->hotoffer() != null)
                                                        <span class="hot-deal">Hot Deal</span>
@endif
                                                        <span class="like-share">
                                                            <i class="icon-heart"></i>
                                                            <i class="icon-share"></i>
                                                        </span>
                                                    </div>
                                                    <img src="{{ asset('property-images') }}/{{ $result['similar_properties'][1]->coverphoto()->image }}" alt="Image slide" width="100%">
                                                    <div class="slide-propery-details">
                                                        <h4>{{ $result['similar_properties'][1]['title'] }}</h4>
                                                        @if($result['similar_properties'][1]->hotoffer() != null)
                                                        <p>
                                                            <del>{{ $result['similar_properties'][1]['price'] }}</del>
                                                        </p>
                                                        <p class="price">{{ $result['similar_properties'][1]->hotoffer()->price_after_discount }}
                                                            <span>EGP</span>
                                                        </p>
                                                        @else
                                                         <p class="price">{{ $result['similar_properties'][1]['price'] }}
                                                            <span>EGP</span>
                                                        </p>
                                                        @endif
                                                        <div class="property-small-details pale-btn">
                                                            @if($result['similar_properties'][1]->optionuser() != null)
                                                            @foreach($result['similar_properties'][1]->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                                            
                                                        </div>
                                                    </div>
                                                </div>
@endif


                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="similar-inner">
                                                @if(isset($result['similar_properties'][2]))
                                                <div class="propert-wrapper-sq">
                                                    <div class="top-left-wrapper">
                                                     <span class="units">{{ $result['similar_properties'][2]->propertytype()->text }}</span>
                                                        <span class="purpose">{{ $result['similar_properties'][2]->purposeposting()->text }}</span>
                                                    </div>
                                                    <div class="top-right-wrapper">
    @if($result['similar_properties'][2]->hotoffer() != null)
                                                        <span class="hot-deal">Hot Deal</span>
@endif
                                                        <span class="like-share">
                                                            <i class="icon-heart"></i>
                                                            <i class="icon-share"></i>
                                                        </span>
                                                    </div>
                                                    <img src="{{ asset('property-images') }}/{{ $result['similar_properties'][2]->coverphoto()->image }}" alt="Image slide" width="100%">
                                                    <div class="slide-propery-details">
                                                        <h4>{{ $result['similar_properties'][2]['title'] }}</h4>
                                                        @if($result['similar_properties'][2]->hotoffer() != null)
                                                        <p>
                                                            <del>{{ $result['similar_properties'][2]['price'] }}</del>
                                                        </p>
                                                        <p class="price">{{ $result['similar_properties'][2]->hotoffer()->price_after_discount }}
                                                            <span>EGP</span>
                                                        </p>
                                                        @else
                                                         <p class="price">{{ $result['similar_properties'][2]['price'] }}
                                                            <span>EGP</span>
                                                        </p>
                                                        @endif
                                                        <div class="property-small-details pale-btn">
                                                            @if($result['similar_properties'][2]->optionuser() != null)
                                                            @foreach($result['similar_properties'][2]->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                                            
                                                        </div>
                                                    </div>
                                                </div>
@endif
                                                @if(isset($result['similar_properties'][3]))
                                                <div class="propert-wrapper-sq">
                                                    <div class="top-left-wrapper">
                                                     <span class="units">{{ $result['similar_properties'][3]->propertytype()->text }}</span>
                                                        <span class="purpose">{{ $result['similar_properties'][3]->purposeposting()->text }}</span>
                                                    </div>
                                                    <div class="top-right-wrapper">
    @if($result['similar_properties'][3]->hotoffer() != null)
                                                        <span class="hot-deal">Hot Deal</span>
@endif
                                                        <span class="like-share">
                                                            <i class="icon-heart"></i>
                                                            <i class="icon-share"></i>
                                                        </span>
                                                    </div>
                                                    <img src="{{ asset('property-images') }}/{{ $result['similar_properties'][3]->coverphoto()->image }}" alt="Image slide" width="100%">
                                                    <div class="slide-propery-details">
                                                        <h4>{{ $result['similar_properties'][3]['title'] }}</h4>
                                                        @if($result['similar_properties'][3]->hotoffer() != null)
                                                        <p>
                                                            <del>{{ $result['similar_properties'][3]['price'] }}</del>
                                                        </p>
                                                        <p class="price">{{ $result['similar_properties'][3]->hotoffer()->price_after_discount }}
                                                            <span>EGP</span>
                                                        </p>
                                                        @else
                                                         <p class="price">{{ $result['similar_properties'][3]['price'] }}
                                                            <span>EGP</span>
                                                        </p>
                                                        @endif
                                                        <div class="property-small-details pale-btn">
                                                            @if($result['similar_properties'][3]->optionuser() != null)
                                                            @foreach($result['similar_properties'][3]->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                                            
                                                        </div>
                                                    </div>
                                                </div>
@endif


                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="similar-inner">
                                                 @if(isset($result['similar_properties'][4]))
                                                <div class="propert-wrapper-sq">
                                                    <div class="top-left-wrapper">
                                                     <span class="units">{{ $result['similar_properties'][4]->propertytype()->text }}</span>
                                                        <span class="purpose">{{ $result['similar_properties'][4]->purposeposting()->text }}</span>
                                                    </div>
                                                    <div class="top-right-wrapper">
    @if($result['similar_properties'][4]->hotoffer() != null)
                                                        <span class="hot-deal">Hot Deal</span>
@endif
                                                        <span class="like-share">
                                                            <i class="icon-heart"></i>
                                                            <i class="icon-share"></i>
                                                        </span>
                                                    </div>
                                                    <img src="{{ asset('property-images') }}/{{ $result['similar_properties'][4]->coverphoto()->image }}" alt="Image slide" width="100%">
                                                    <div class="slide-propery-details">
                                                        <h4>{{ $result['similar_properties'][4]['title'] }}</h4>
                                                        @if($result['similar_properties'][4]->hotoffer() != null)
                                                        <p>
                                                            <del>{{ $result['similar_properties'][4]['price'] }}</del>
                                                        </p>
                                                        <p class="price">{{ $result['similar_properties'][4]->hotoffer()->price_after_discount }}
                                                            <span>EGP</span>
                                                        </p>
                                                        @else
                                                         <p class="price">{{ $result['similar_properties'][4]['price'] }}
                                                            <span>EGP</span>
                                                        </p>
                                                        @endif
                                                        <div class="property-small-details pale-btn">
                                                            @if($result['similar_properties'][4]->optionuser() != null)
                                                            @foreach($result['similar_properties'][4]->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                                            
                                                        </div>
                                                    </div>
                                                </div>
@endif
                                                @if(isset($result['similar_properties'][5]))
                                                <div class="propert-wrapper-sq">
                                                    <div class="top-left-wrapper">
                                                     <span class="units">{{ $result['similar_properties'][5]->propertytype()->text }}</span>
                                                        <span class="purpose">{{ $result['similar_properties'][5]->purposeposting()->text }}</span>
                                                    </div>
                                                    <div class="top-right-wrapper">
    @if($result['similar_properties'][5]->hotoffer() != null)
                                                        <span class="hot-deal">Hot Deal</span>
@endif
                                                        <span class="like-share">
                                                            <i class="icon-heart"></i>
                                                            <i class="icon-share"></i>
                                                        </span>
                                                    </div>
                                                    <img src="{{ asset('property-images') }}/{{ $result['similar_properties'][5]->coverphoto()->image }}" alt="Image slide" width="100%">
                                                    <div class="slide-propery-details">
                                                        <h4>{{ $result['similar_properties'][5]['title'] }}</h4>
                                                        @if($result['similar_properties'][5]->hotoffer() != null)
                                                        <p>
                                                            <del>{{ $result['similar_properties'][5]['price'] }}</del>
                                                        </p>
                                                        <p class="price">{{ $result['similar_properties'][5]->hotoffer()->price_after_discount }}
                                                            <span>EGP</span>
                                                        </p>
                                                        @else
                                                         <p class="price">{{ $result['similar_properties'][5]['price'] }}
                                                            <span>EGP</span>
                                                        </p>
                                                        @endif
                                                        <div class="property-small-details pale-btn">
                                                            @if($result['similar_properties'][5]->optionuser() != null)
                                                            @foreach($result['similar_properties'][5]->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                                            
                                                        </div>
                                                    </div>
                                                </div>
@endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right side -->
                    <div class="col-md-4">
                        <div class="right-sec-header">
                            <div class="sodic">

                                <div class="sodic-select">
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                            <span>
                                                <i class="icon-down-arrow"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li id="follow_">
                                                <span class="border-ball"></span>
                                                <a href="javascript:void(0)">
                                                    <span class="custom-follow">follow</span> the developer
                                                </a>
                                                <i id="followed" class="icon-search" hidden=""></i>
                                            </li>
                                            <li>
                                                <span class="border-ball"></span>
                                                <a href="#">All the developer’s Properties</a>
                                            </li>
                                            <li>
                                                <span class="border-ball"></span>
                                                <a href="#">Visit the developer portfolio</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="follow">
                                    <span></span>
                                    <p>Followed By you</p>
                                </div>
                            </div>
                        </div>
                        <div class="property-on-map">
                            <div id="map" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: -113px; top: -12px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -113px; top: 244px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 143px; top: -12px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 143px; top: 244px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -113px; top: -12px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -113px; top: 244px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 143px; top: -12px;"><canvas draggable="false" height="256" width="256" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 143px; top: 244px;"></div></div></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden; width: 363px; height: 440px;"><img src="https://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i307825&amp;2i216076&amp;2e2&amp;3u11&amp;4m2&amp;1u363&amp;2u440&amp;5m5&amp;1e3&amp;5sen-US&amp;6sus&amp;10b1&amp;12b1&amp;token=4051" style="width: 363px; height: 440px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="position: absolute; left: -113px; top: -12px; transition: opacity 200ms ease-out;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><img draggable="false" alt="" src="https://khms0.googleapis.com/kh?v=748&amp;hl=en-US&amp;x=1202&amp;y=844&amp;z=11" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1202!3i844!4i256!2m3!1e0!2sm!3i405102626!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmapSatellite!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=64448" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div style="position: absolute; left: -113px; top: 244px; transition: opacity 200ms ease-out;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><img draggable="false" alt="" src="https://khms0.googleapis.com/kh?v=748&amp;hl=en-US&amp;x=1202&amp;y=845&amp;z=11" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1202!3i845!4i256!2m3!1e0!2sm!3i405102626!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmapSatellite!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=26811" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div style="position: absolute; left: 143px; top: -12px; transition: opacity 200ms ease-out;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><img draggable="false" alt="" src="https://khms1.googleapis.com/kh?v=748&amp;hl=en-US&amp;x=1203&amp;y=844&amp;z=11" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1203!3i844!4i256!2m3!1e0!2sm!3i405102421!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmapSatellite!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=52182" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div style="position: absolute; left: 143px; top: 244px; transition: opacity 200ms ease-out;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><img draggable="false" alt="" src="https://khms1.googleapis.com/kh?v=748&amp;hl=en-US&amp;x=1203&amp;y=845&amp;z=11" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1203!3i845!4i256!2m3!1e0!2sm!3i405102421!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmapSatellite!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=14545" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div></div><div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=30.0074,31.4913&amp;z=11&amp;t=h&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 32px; top: 130px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2017 Google, ORION-ME  Imagery ©2017 TerraMetrics</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 72px; bottom: 0px; width: 55px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer;">Map Data</a><span style="display: none;">Map data ©2017 Google, ORION-ME  Imagery ©2017 TerraMetrics</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2017 Google, ORION-ME  Imagery ©2017 TerraMetrics</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><button draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view" type="button" style="background: none; border: 0px; margin: 10px 14px; padding: 0px; position: absolute; cursor: pointer; user-select: none; width: 25px; height: 25px; overflow: hidden; top: 0px; right: 0px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></button><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@30.0074,31.4913,11z/data=!3m1!1e3!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; user-select: none; position: absolute; bottom: 107px; right: 28px;"><div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><button draggable="false" title="Zoom in" aria-label="Zoom in" type="button" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></button><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" title="Zoom out" aria-label="Zoom out" type="button" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></button></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px;"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Pegman is on top of the Map" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Rotate map 90 degrees" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left; position: relative;"><div role="button" tabindex="0" title="Show street map" aria-label="Show street map" aria-pressed="false" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 22px;">Map</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 29px; text-align: left; display: none;"><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img alt="" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div class="gm-style-mtc" style="float: left; position: relative;"><div role="button" tabindex="0" title="Show satellite imagery" aria-label="Show satellite imagery" aria-pressed="true" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 40px; border-left: 0px; font-weight: 500;">Satellite</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 29px; text-align: left; display: none;"><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div></div></div>
                        </div>
                        <div class="seller-comment">
                            <h2>Comment From the Seller</h2>
                            <p>
                                {{ $result['property']['additional_comments'] }}
                            </p>
                        </div>
                        <div class="propert-wrapper-tall single-page-hot-deals">
                            <div class="hot-deals-slider_header">
                                <h4>Don't miss our</h4>
                                <h3>Hot Deals</h3>
                            </div>
                            <div id="hot-deals-slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
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
                                            <img src="{{ asset('front/imgs/property-img.png') }}" alt="Image slide" width="100%">
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
                                            <img src="{{ asset('front/imgs/property-img.png') }}" alt="Image slide" width="100%">
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
                                    <div class="item active">
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
                                            <img src="{{ asset('front/imgs/property-img.png') }}" alt="Image slide" width="100%">
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
                                        <a href="#hot-deals-slider-0" data-target="#hot-deals-slider" data-slide-to="0" class=""></a>
                                        <a href="#hot-deals-slider-1" data-target="#hot-deals-slider" data-slide-to="1" class=""></a>
                                        <a href="#hot-deals-slider-2" data-target="#hot-deals-slider" data-slide-to="2" class="active"></a>
                                    </div>
                                    <a href="#">Discover More</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
   
@endsection
 @push('more_footer')
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?libraries=places,geometry,drawing&amp;key=AIzaSyAd_9_RHmT1KA9QPBg0mwkHJhU4M2b2PRk&amp;v=3&amp;callback=initMap">
    </script>
    <script>
        var lat={{ $result['property']['latitiude'] }};
        var lng={{ $result['property']['longtitude'] }};
        $(document).ready(function () {
   $('#myModal2').on('shown.bs.modal', function () {
        google.maps.event.trigger(map, "resize");
        map.setCenter(new google.maps.LatLng(defaultLat, defaultLng));
    });

    function initNewMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: {
                lat: lat,
                lng: lng
            },
            mapTypeId: 'hybrid'
        });
    
        var marker = new google.maps.Marker({
            position: {
                lat: lat,
                lng: lng
            },
            map: map,
        });
    }
    
    initNewMap();

});
        </script>
        @endpush