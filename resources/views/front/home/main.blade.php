@extends('front.app')
@section('page')
  <div class="container-fluid">
            <div class="row row-column">
                <div class="col-md-8 col-sm-12 col-xs-12" id='property_list'>
                    <div class="month-feeds">
                        <div>
                            <h1>December Feeds</h1>
                            <p>{{ $results['count_property'] }} Property Found</p>
                        </div>
                        <div id="properity_search">
                            <form action="">
                                <input type="text" placeholder="Enter a neighborhood, city , address or zip code" class="search-input-custom">
                                <input type="submit" value="">
                            </form>
                        </div>
                        <div class="hp-icons ">
                            <span id="search_icon" class="this">
                                <i class="icon-search"></i>
                            </span>
                            <!-- <span>
                                    <i class="icon-map"></i>
                                </span> -->
                            <span>
                                <i class="icon-grid_view hp-icons_active"></i>
                            </span>
                        </div>
                    </div>
                    <!-- Gallary -->
                    <div class="gallery">




                        <div id="hp-carousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <div class="carousel-indicators hp-carousel-controls">
                                <a href="#hp-carousel-0" data-target="#hp-carousel" data-slide-to="0" class=""></a>
                                <a href="#hp-carousel-1" data-target="#hp-carousel" data-slide-to="1" class=""></a>
                                <a href="#hp-carousel-2" data-target="#hp-carousel" data-slide-to="2" class="active"></a>
                            </div>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="propert-wrapper-lg">
                                        @if(@$results['featured_home_sliders'][0]['property_id'] != null)
                                        <div class="top-left-wrapper">
                                           
                                            <span class="units">
                                            @if(@$results['featured_home_sliders'][0]->propertydetails() != null)
                                            {{ @$results['featured_home_sliders'][0]->propertydetails()->propertytype()->text }}
                                            @endif
                                            </span>
                                            <span class="purpose">
                                            @if(@$results['featured_home_sliders'][0]->propertydetails() != null )
                                            {{ @$results['featured_home_sliders'][0]->propertydetails()->purposeposting()->text }}
                                            @endif
                                            </span>
                                        </div>
                                        <div class="top-right-wrapper">
                                           @if(@$results['featured_home_sliders'][0]->propertydetails() != null)
                                            @if(@$results['featured_home_sliders'][0]->propertydetails()->hotoffer() != null)
                                            <span class="hot-deal">Hot Deal</span>
                                            @endif
                                            @endif
                                            <span class="like-share">
                                                <i class="icon-heart lick"></i>
                                                <i class="icon-share"></i>
                                            </span>
                                        </div>
      @endif
      @if(@$results['featured_home_sliders'][0]['property_id'] != null)
                                       @if(@$results['featured_home_sliders'][0]->propertydetails() != null)
                                        <img src="{{ asset('property-images') }}/{{ $results['featured_home_sliders'][0]->propertydetails()->coverphoto()->image }}" alt="Image slide" width="100%">
                                        @endif
              @else
              <img src="{{ asset('storage') }}/{{ $results['featured_home_sliders'][0]['banner'] }}" alt="Image slide" width="100%">
              @endif
                                        <div class="slide-propery-details customs">
                                            @if(@$results['featured_home_sliders'][0]['property_id'] != null)
                                            <h4>{{ @$results['featured_home_sliders'][0]->propertydetails()['title'] }}</h4>
                                            @else
                                            <h4><a href='{{ @$results['featured_home_sliders'][0]['link'] }}'>Visit this link</a></h4>
                                            @endif
                                        @if(@$results['featured_home_sliders'][0]['property_id'] != null)
                                           @if(@$results['featured_home_sliders'][0]->propertydetails() != null)
                                            @if(@$results['featured_home_sliders'][0]->propertydetails()->hotoffer() != null)
                                            <p>
                                                <del>{{ @$results['featured_home_sliders'][0]->propertydetails()['price'] }}</del>
                                                <span>EGP</span>
                                            </p>
                                            <p class="price">{{ @$results['featured_home_sliders'][0]->propertydetails()->hotoffer()->price_after_discount }}
                                                <span>EGP</span>
                                            </p>
                                            @else
                                            <p class="price">{{ @$results['featured_home_sliders'][0]->propertydetails()['price'] }}
                                                <span>EGP</span>
                                            </p>
                                            @endif
                                            @endif
                                            @endif
                                            @if(@$results['featured_home_sliders'][0]['property_id'] != null)
                                            <div class="property-small-details">
                                               @if(@$results['featured_home_sliders'][0]->propertydetails() != null)
                                                @if(@$results['featured_home_sliders'][0]->propertydetails()->optionuser() != null)
                                                            @foreach(@$results['featured_home_sliders'][0]->propertydetails()->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                                            @endif
                                            </div>
                                                                @endif
                                        </div>
                                    </div>
                                </div>

                <div class="item ">
                                    <div class="propert-wrapper-lg">
                                        @if(@$results['featured_home_sliders'][1]['property_id'] != null)
                                        <div class="top-left-wrapper">
                                            <span class="units">
                                            @if(@$results['featured_home_sliders'][1]->propertydetails() != null)
                                            {{ @$results['featured_home_sliders'][1]->propertydetails()->propertytype()->text }}
                                            @endif
                                            </span>
                                            <span class="purpose">
                                            @if(@$results['featured_home_sliders'][1]->propertydetails() != null)
                                            {{ @$results['featured_home_sliders'][1]->propertydetails()->purposeposting()->text }}
                                            @endif
                                            </span>
                                        </div>
                                        <div class="top-right-wrapper">
                                            @if(@$results['featured_home_sliders'][1]->propertydetails() != null)
                                            @if(@$results['featured_home_sliders'][1]->propertydetails()->hotoffer() != null)
                                            <span class="hot-deal">Hot Deal</span>
                                            @endif
                                            @endif
                                            <span class="like-share">
                                                <i class="icon-heart lick"></i>
                                                <i class="icon-share"></i>
                                            </span>
                                        </div>
      @endif
      @if(@$results['featured_home_sliders'][1]['property_id'] != null)
                                       @if(@$results['featured_home_sliders'][1]->propertydetails() != null)
                                        <img src="{{ asset('property-images') }}/{{ @$results['featured_home_sliders'][1]->propertydetails()->coverphoto()->image }}" alt="Image slide" width="100%">
                                        @endif
              @else
              <img src="{{ asset('storage') }}/{{ @$results['featured_home_sliders'][1]['banner'] }}" alt="Image slide" width="100%">
              @endif
                                        <div class="slide-propery-details customs">
                                           @if(@$results['featured_home_sliders'][1]->propertydetails() != null)
                                            @if(@$results['featured_home_sliders'][1]['property_id'] != null)
                                            <h4>{{ @$results['featured_home_sliders'][1]->propertydetails()['title'] }}</h4>
                                            @else
                                            <h4><a href='{{ @$results['featured_home_sliders'][1]['link'] }}'>Visit this link</a></h4>
                                            @endif
                                            @if(@$results['featured_home_sliders'][1]['property_id'] != null)
                                            @if(@$results['featured_home_sliders'][1]->propertydetails()->hotoffer() != null)
                                            <p>
                                                <del>{{ @$results['featured_home_sliders'][1]->propertydetails()['price'] }}</del>
                                                <span>EGP</span>
                                            </p>
                                            <p class="price">{{ @$results['featured_home_sliders'][1]->propertydetails()->hotoffer()->price_after_discount }}
                                                <span>EGP</span>
                                            </p>
                                            @else
                                            <p class="price">{{ @$results['featured_home_sliders'][1]->propertydetails()['price'] }}
                                                <span>EGP</span>
                                            </p>
                                            @endif
                                            @endif
                                            @endif
                                            @if(@$results['featured_home_sliders'][1]['property_id'] != null)
                                            <div class="property-small-details">
                                               @if(@$results['featured_home_sliders'][1]->propertydetails() != null)
                                                @if(@$results['featured_home_sliders'][1]->propertydetails()->optionuser() != null)
                                                            @foreach(@$results['featured_home_sliders'][1]->propertydetails()->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                                            @endif
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>  
                            @if(@$results['featured_home_sliders'][2] != null)
                            <div class="item ">
                                    <div class="propert-wrapper-lg">
                                        @if(@$results['featured_home_sliders'][2]['property_id'] != null)
                                        <div class="top-left-wrapper">
                                            <span class="units">
                                            @if(@$results['featured_home_sliders'][2]->propertydetails() != null)
                                            {{ @$results['featured_home_sliders'][2]->propertydetails()->propertytype()->text }}
                                            @endif
                                            </span>
                                            <span class="purpose">
                                            @if(@$results['featured_home_sliders'][2]->propertydetails() != null)
                                            {{ @$results['featured_home_sliders'][2]->propertydetails()->purposeposting()->text }}
                                            @endif
                                            </span>
                                        </div>
                                        <div class="top-right-wrapper">
                                            @if(@$results['featured_home_sliders'][2]['property_id'] != null)
                                            @if(@$results['featured_home_sliders'][2]->propertydetails() != null)
                                            @if(@$results['featured_home_sliders'][2]->propertydetails()->hotoffer() != null)
                                            <span class="hot-deal">Hot Deal</span>
                                            @endif
                                            @endif
                                            @endif
                                            <span class="like-share">
                                                <i class="icon-heart lick"></i>
                                                <i class="icon-share"></i>
                                            </span>
                                        </div>
      @endif
      @if(@$results['featured_home_sliders'][2]['property_id'] != null)
                                       @if(@$results['featured_home_sliders'][2]->propertydetails() != null)
                                        <img src="{{ asset('property-images') }}/{{ @$results['featured_home_sliders'][2]->propertydetails()->coverphoto()->image }}" alt="Image slide" width="100%">
                                        @endif
              @else
              <img src="{{ asset('storage') }}/{{ @$results['featured_home_sliders'][2]['banner'] }}" alt="Image slide" width="100%">
              @endif
                                        <div class="slide-propery-details customs">
                                           
                                            @if(@$results['featured_home_sliders'][2]['property_id'] != null)
                                            @if(@$results['featured_home_sliders'][2]->propertydetails() != null)
                                            <h4>{{ @$results['featured_home_sliders'][2]->propertydetails()['title'] }}</h4>
                                            @else
                                            <h4><a href='{{ @$results['featured_home_sliders'][2]['link'] }}'>Visit this link</a></h4>
                                            @endif
                                            @if(@$results['featured_home_sliders'][2]['property_id'] != null)
                                            @if(@$results['featured_home_sliders'][2]->propertydetails()->hotoffer() != null)
                                            <p>
                                                <del>{{ @$results['featured_home_sliders'][2]->propertydetails()['price'] }}</del>
                                                <span>EGP</span>
                                            </p>
                                            <p class="price">{{ @$results['featured_home_sliders'][2]->propertydetails()->hotoffer()->price_after_discount }}
                                                <span>EGP</span>
                                            </p>
                                            @else
                                            <p class="price">{{ @$results['featured_home_sliders'][2]->propertydetails()['price'] }}
                                                <span>EGP</span>
                                            </p>
                                            @endif
                                            @endif
                                            @endif
                                            @if(@$results['featured_home_sliders'][2]['property_id'] != null)
                                            <div class="property-small-details">
                                                @if(@$results['featured_home_sliders'][2]->propertydetails()->optionuser() != null)
                                                           @if(@$results['featured_home_sliders'][2]->propertydetails() != null)
                                                            @foreach(@$results['featured_home_sliders'][2]->propertydetails()->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                                            @endif
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endif
                            
                            
                            </div>
                        </div>







                    </div>
                    <div class="hp-wrapper">
                        <div class="vrt-wrapper">
                            @if($results['properties'][0] != null)
                            <div class="property-sq">
                                <div class="propert-wrapper-sq">
                                    <div class="top-left-wrapper">
                                        <span class="units">{{ $results['properties'][0]->propertytype()->text }}</span>
                                        <span class="purpose">{{ $results['properties'][0]->purposeposting()->text }}</span>
                                    </div>
                                    <div class="top-right-wrapper">
                                        @if($results['properties'][0]->hotoffer() != null)
                                        <span class="hot-deal">Hot Deal</span>
                                        @endif
                                        <span class="like-share">
                                            <i class="icon-heart like"></i>
                                            <i class="icon-share"></i>
                                        </span>

                                    </div>
                                    <img src="{{ asset('property-images') }}/{{ $results['properties'][0]->bestphoto()->image }}" alt="Image slide" width="100%">
                                    <div class="slide-propery-details">
                                        <h4>{{ $results['properties'][0]['title'] }}</h4>
                                        @if($results['properties'][0]->hotoffer() != null)
                                        <p>
                                            <del>{{ $results['properties'][0]['price'] }}</del>
                                            <span>EGP</span>
                                        </p>
                                        <p class="price">{{ $results['properties'][0]->hotoffer()->price_after_discount }}
                                            <span>EGP</span>
                                        </p>
                                        @else
                                        <p class="price">{{ $results['properties'][0]['price'] }}
                                            <span>EGP</span>
                                        </p>
                                        @endif
                                        <div class="property-small-details pale-btn">
                                            @if($results['properties'][0]->optionuser() != null)
                                                            @foreach($results['properties'][0]->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            
                            @if($results['properties'][1] != null)
                            <div class="property-sq">
                                <div class="propert-wrapper-sq">
                                    <div class="top-left-wrapper">
                                        <span class="units">{{ $results['properties'][1]->propertytype()->text }}</span>
                                        <span class="purpose">{{ $results['properties'][1]->purposeposting()->text }}</span>
                                    </div>
                                    <div class="top-right-wrapper">
                                        @if($results['properties'][1]->hotoffer() != null)
                                        <span class="hot-deal">Hot Deal</span>
                                        @endif
                                        <span class="like-share">
                                            <i class="icon-heart like"></i>
                                            <i class="icon-share"></i>
                                        </span>

                                    </div>
                                    <img src="{{ asset('property-images') }}/{{ $results['properties'][1]->bestphoto()->image }}" alt="Image slide" width="100%">
                                    <div class="slide-propery-details">
                                        <h4>{{ $results['properties'][1]['title'] }}</h4>
                                        @if($results['properties'][1]->hotoffer() != null)
                                        <p>
                                            <del>{{ $results['properties'][1]['price'] }}</del>
                                            <span>EGP</span>
                                        </p>
                                        <p class="price">{{ $results['properties'][1]->hotoffer()->price_after_discount }}
                                            <span>EGP</span>
                                        </p>
                                        @else
                                        <p class="price">{{ $results['properties'][1]['price'] }}
                                            <span>EGP</span>
                                        </p>
                                        @endif
                                        <div class="property-small-details pale-btn">
                                            @if($results['properties'][1]->optionuser() != null)
                                                            @foreach($results['properties'][1]->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                        </div>
                        <div class="propert-wrapper-tall">
                            <div class="hot-deals-slider_header">
                                <h4>Don't miss our</h4>
                                <h3>Hot Deals</h3>
                            </div>
                            <div id="hot-deals-slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    @if($results['hot_offers'][0] != null)
                                    <div class="item active">
                                        <div class="property-sq">
                                            <div class="top-left-wrapper">
                                                <span class="units">{{ $results['hot_offers'][0]->propertydetails()->propertytype()->text }}</span>
                                                <span class="purpose">{{ $results['hot_offers'][0]->propertydetails()->purposeposting()->text }}</span>
                                            </div>
                                            <div class="top-right-wrapper">
                                                @if($results['hot_offers'][0]->propertydetails()->hotoffer() != null)
                                                <span class="hot-deal">Hot Deal</span>
                                                @endif
                                                <span class="like-share">
                                                    <i class="icon-heart like"></i>
                                                    <i class="icon-share"></i>
                                                </span>

                                            </div>
                                            <img src="{{ asset('property-images') }}/{{ $results['hot_offers'][0]->propertydetails()->bestphoto()->image }}" alt="Image slide" width="100%">
                                            <div class="slide-propery-details">
                                                <h4>{{ $results['hot_offers'][0]->propertydetails()['title'] }}</h4>
                                                @if($results['hot_offers'][0]->propertydetails()->hotoffer() != null)
                                                <p>
                                                    <del>{{ $results['hot_offers'][0]->propertydetails()['price'] }}</del>
                                                    <span>EGP</span>
                                                </p>
                                                <p class="price">{{ $results['hot_offers'][0]->propertydetails()->hotoffer()->price_after_discount }}
                                                    <span>EGP</span>
                                                </p>
                                                @else
                                                <p class="price">{{ $results['hot_offers'][0]->propertydetails()['price'] }} 
                                                    <span>EGP</span>
                                                </p>
                                                @endif
                                                <div class="property-small-details pale-btn">
                                                    
                                                    @if($results['hot_offers'][0]->propertydetails()->optionuser() != null)
                                                            @foreach($results['hot_offers'][0]->propertydetails()->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @endif
                                    @if($results['hot_offers'][1] != null)
                                    <div class="item">
                                        <div class="property-sq">
                                            <div class="top-left-wrapper">
                                                <span class="units">{{ $results['hot_offers'][1]->propertydetails()->propertytype()->text }}</span>
                                                <span class="purpose">{{ $results['hot_offers'][1]->propertydetails()->purposeposting()->text }}</span>
                                            </div>
                                            <div class="top-right-wrapper">
                                                @if($results['hot_offers'][1]->propertydetails()->hotoffer() != null)
                                                <span class="hot-deal">Hot Deal</span>
                                                @endif
                                                <span class="like-share">
                                                    <i class="icon-heart like"></i>
                                                    <i class="icon-share"></i>
                                                </span>

                                            </div>
                                            <img src="{{ asset('property-images') }}/{{ $results['hot_offers'][1]->propertydetails()->bestphoto()->image }}" alt="Image slide" width="100%">
                                            <div class="slide-propery-details">
                                                <h4>{{ $results['hot_offers'][1]->propertydetails()['title'] }}</h4>
                                                @if($results['hot_offers'][1]->propertydetails()->hotoffer() != null)
                                                <p>
                                                    <del>{{ $results['hot_offers'][1]->propertydetails()['price'] }}</del>
                                                    <span>EGP</span>
                                                </p>
                                                <p class="price">{{ $results['hot_offers'][1]->propertydetails()->hotoffer()->price_after_discount }}
                                                    <span>EGP</span>
                                                </p>
                                                @else
                                                <p class="price">{{ $results['hot_offers'][1]->propertydetails()['price'] }} 
                                                    <span>EGP</span>
                                                </p>
                                                @endif
                                                <div class="property-small-details pale-btn">
                                                    
                                                    @if($results['hot_offers'][1]->propertydetails()->optionuser() != null)
                                                            @foreach($results['hot_offers'][1]->propertydetails()->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @endif
                                    @if($results['hot_offers'][2] != null)
                                    <div class="item">
                                        <div class="property-sq">
                                            <div class="top-left-wrapper">
                                                <span class="units">{{ $results['hot_offers'][2]->propertydetails()->propertytype()->text }}</span>
                                                <span class="purpose">{{ $results['hot_offers'][2]->propertydetails()->purposeposting()->text }}</span>
                                            </div>
                                            <div class="top-right-wrapper">
                                                @if($results['hot_offers'][2]->propertydetails()->hotoffer() != null)
                                                <span class="hot-deal">Hot Deal</span>
                                                @endif
                                                <span class="like-share">
                                                    <i class="icon-heart like"></i>
                                                    <i class="icon-share"></i>
                                                </span>

                                            </div>
                                            <img src="{{ asset('property-images') }}/{{ $results['hot_offers'][2]->propertydetails()->bestphoto()->image }}" alt="Image slide" width="100%">
                                            <div class="slide-propery-details">
                                                <h4>{{ $results['hot_offers'][2]->propertydetails()['title'] }}</h4>
                                                @if($results['hot_offers'][2]->propertydetails()->hotoffer() != null)
                                                <p>
                                                    <del>{{ $results['hot_offers'][2]->propertydetails()['price'] }}</del>
                                                    <span>EGP</span>
                                                </p>
                                                <p class="price">{{ $results['hot_offers'][2]->propertydetails()->hotoffer()->price_after_discount }}
                                                    <span>EGP</span>
                                                </p>
                                                @else
                                                <p class="price">{{ $results['hot_offers'][2]->propertydetails()['price'] }} 
                                                    <span>EGP</span>
                                                </p>
                                                @endif
                                                <div class="property-small-details pale-btn">
                                                    
                                                    @if($results['hot_offers'][2]->propertydetails()->optionuser() != null)
                                                            @foreach($results['hot_offers'][2]->propertydetails()->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @endif
                                    
                                
                                </div>
                                <div class="hot-deals-slider_footer">
                                    <div class=" carousel-indicators hot-deals-slider-controls ">
                                        <a href="#hot-deals-slider-0" data-target="#hot-deals-slider" data-slide-to="0" class="active"></a>
                                        <a href="#hot-deals-slider-1" data-target="#hot-deals-slider" data-slide-to="1" class=""></a>
                                        <a href="#hot-deals-slider-2" data-target="#hot-deals-slider" data-slide-to="2" class=""></a>
                                    </div>
                                    <a href="#">Discover More</a>
                                </div>
                            </div>


                        </div>
                    </div>







                    <div class="hp-wrapper">
                        <div class="vrt-wrapper">
                            @if($results['properties'][2] != null)
                            <div class="property-sq">
                                <div class="propert-wrapper-sq">
                                    <div class="top-left-wrapper">
                                        <span class="units">{{ $results['properties'][2]->propertytype()->text }}</span>
                                        <span class="purpose">{{ $results['properties'][2]->purposeposting()->text }}</span>
                                    </div>
                                    <div class="top-right-wrapper">
                                        @if($results['properties'][2]->hotoffer() != null)
                                        <span class="hot-deal">Hot Deal</span>
                                        @endif
                                        <span class="like-share">
                                            <i class="icon-heart like"></i>
                                            <i class="icon-share"></i>
                                        </span>

                                    </div>
                                    <img src="{{ asset('property-images') }}/{{ $results['properties'][2]->bestphoto()->image }}" alt="Image slide" width="100%">
                                    <div class="slide-propery-details">
                                        <h4>{{ $results['properties'][2]['title'] }}</h4>
                                        @if($results['properties'][2]->hotoffer() != null)
                                        <p>
                                            <del>{{ $results['properties'][2]['price'] }}</del>
                                            <span>EGP</span>
                                        </p>
                                        <p class="price">{{ $results['properties'][2]->hotoffer()->price_after_discount }}
                                            <span>EGP</span>
                                        </p>
                                        @else
                                        <p class="price">{{ $results['properties'][2]['price'] }}
                                            <span>EGP</span>
                                        </p>
                                        @endif
                                        <div class="property-small-details pale-btn">
                                            @if($results['properties'][2]->optionuser() != null)
                                                            @foreach($results['properties'][2]->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            
                             @if($results['properties'][3] != null)
                            <div class="property-sq">
                                <div class="propert-wrapper-sq">
                                    <div class="top-left-wrapper">
                                        <span class="units">{{ $results['properties'][3]->propertytype()->text }}</span>
                                        <span class="purpose">{{ $results['properties'][3]->purposeposting()->text }}</span>
                                    </div>
                                    <div class="top-right-wrapper">
                                        @if($results['properties'][3]->hotoffer() != null)
                                        <span class="hot-deal">Hot Deal</span>
                                        @endif
                                        <span class="like-share">
                                            <i class="icon-heart like"></i>
                                            <i class="icon-share"></i>
                                        </span>

                                    </div>
                                    <img src="{{ asset('property-images') }}/{{ $results['properties'][3]->bestphoto()->image }}" alt="Image slide" width="100%">
                                    <div class="slide-propery-details">
                                        <h4>{{ $results['properties'][3]['title'] }}</h4>
                                        @if($results['properties'][3]->hotoffer() != null)
                                        <p>
                                            <del>{{ $results['properties'][3]['price'] }}</del>
                                            <span>EGP</span>
                                        </p>
                                        <p class="price">{{ $results['properties'][3]->hotoffer()->price_after_discount }}
                                            <span>EGP</span>
                                        </p>
                                        @else
                                        <p class="price">{{ $results['properties'][3]['price'] }}
                                            <span>EGP</span>
                                        </p>
                                        @endif
                                        <div class="property-small-details pale-btn">
                                            @if($results['properties'][3]->optionuser() != null)
                                                            @foreach($results['properties'][3]->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                        </div>
                        <div class="vrt-wrapper">
                            
                            @if($results['properties'][4] != null)
                            <div class="property-sq">
                                <div class="propert-wrapper-sq">
                                    <div class="top-left-wrapper">
                                        <span class="units">{{ $results['properties'][4]->propertytype()->text }}</span>
                                        <span class="purpose">{{ $results['properties'][4]->purposeposting()->text }}</span>
                                    </div>
                                    <div class="top-right-wrapper">
                                        @if($results['properties'][4]->hotoffer() != null)
                                        <span class="hot-deal">Hot Deal</span>
                                        @endif
                                        <span class="like-share">
                                            <i class="icon-heart like"></i>
                                            <i class="icon-share"></i>
                                        </span>

                                    </div>
                                    <img src="{{ asset('property-images') }}/{{ $results['properties'][4]->bestphoto()->image }}" alt="Image slide" width="100%">
                                    <div class="slide-propery-details">
                                        <h4>{{ $results['properties'][4]['title'] }}</h4>
                                        @if($results['properties'][4]->hotoffer() != null)
                                        <p>
                                            <del>{{ $results['properties'][4]['price'] }}</del>
                                            <span>EGP</span>
                                        </p>
                                        <p class="price">{{ $results['properties'][4]->hotoffer()->price_after_discount }}
                                            <span>EGP</span>
                                        </p>
                                        @else
                                        <p class="price">{{ $results['properties'][4]['price'] }}
                                            <span>EGP</span>
                                        </p>
                                        @endif
                                        <div class="property-small-details pale-btn">
                                            @if($results['properties'][4]->optionuser() != null)
                                                            @foreach($results['properties'][4]->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            
                            @if($results['properties'][4] != null)
                            <div class="property-sq">
                                <div class="propert-wrapper-sq">
                                    <div class="top-left-wrapper">
                                        <span class="units">{{ $results['properties'][4]->propertytype()->text }}</span>
                                        <span class="purpose">{{ $results['properties'][4]->purposeposting()->text }}</span>
                                    </div>
                                    <div class="top-right-wrapper">
                                        @if($results['properties'][4]->hotoffer() != null)
                                        <span class="hot-deal">Hot Deal</span>
                                        @endif
                                        <span class="like-share">
                                            <i class="icon-heart like"></i>
                                            <i class="icon-share"></i>
                                        </span>

                                    </div>
                                    <img src="{{ asset('property-images') }}/{{ $results['properties'][4]->bestphoto()->image }}" alt="Image slide" width="100%">
                                    <div class="slide-propery-details">
                                        <h4>{{ $results['properties'][4]['title'] }}</h4>
                                        @if($results['properties'][4]->hotoffer() != null)
                                        <p>
                                            <del>{{ $results['properties'][4]['price'] }}</del>
                                            <span>EGP</span>
                                        </p>
                                        <p class="price">{{ $results['properties'][4]->hotoffer()->price_after_discount }}
                                            <span>EGP</span>
                                        </p>
                                        @else
                                        <p class="price">{{ $results['properties'][4]['price'] }}
                                            <span>EGP</span>
                                        </p>
                                        @endif
                                        <div class="property-small-details pale-btn">
                                            @if($results['properties'][4]->optionuser() != null)
                                                            @foreach($results['properties'][4]->optionuser() as $option_users)
                                                            <span class="bar-quant">
                                                                <i class="{{ $option_users['icon'] }}"></i>
                                                                <sup>{{ $option_users['value'] }}</sup>
                                                            </span>
                                                            @endforeach
                                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            
                            

                        </div>
                    </div>
                
                
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="hp-right-section">

                        <a href="#" class="tap-load-more">
                            <p>
                                <i class="icon-loading" onclick='load_more();'></i> load more</p>
                        </a>
                        <!-- start egypt is changing slider -->
                        <div id="hp-right_header" class="carousel slide" data-ride="carousel" data-interval="false">
                            <div class="hp-right_header">
                                <div class="hp-right_header-flex">
                                    <h3>Our Latest News</h3>
                                    <div class=" carousel-indicators hp-right_controls ">
                                        <a href="#hot-deals-slider-0" data-target="#hp-right_header" data-slide-to="0" class="active"></a>
                                        <a href="#hot-deals-slider-1" data-target="#hp-right_header" data-slide-to="1"></a>
                                        <a href="#hot-deals-slider-2" data-target="#hp-right_header" data-slide-to="2"></a>
                                    </div>
                                </div>
                                <a href="#">View all news</a>
                            </div>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="hp-right-section_slider">
                                        <div class="hp-right_slider-header">
                                            <img src="{{asset('front/imgs/top.png')}}" alt="">
                                        </div>
                                        <div class="hp-right_slider-body">
                                            <img src="{{asset('front/imgs/right-section.png')}}" alt="Egypt is changing" class="img-responsive">
                                        </div>
                                        <div class="hp-right_slider-footer">
                                            <h2>New administrative capital dummy text</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum
                                                dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                officia deserunt mollit anim id est laborum.</p>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="hp-right-section_slider">
                                        <div class="hp-right_slider-header">
                                            <img src="{{asset('front/imgs/top-ad.png')}}" alt="">
                                        </div>
                                        <div class="hp-right_slider-body">
                                            <img src="{{asset('front/imgs/right-section.png')}}" alt="Egypt is changing" class="img-responsive">
                                        </div>
                                        <div class="hp-right_slider-footer">
                                            <h2>New administrative capital dummy text</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum
                                                dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                officia deserunt mollit anim id est laborum.</p>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="hp-right-section_slider">
                                        <div class="hp-right_slider-header">
                                            <img src="{{asset('front/imgs/top-ad.png')}}" alt="">
                                        </div>
                                        <div class="hp-right_slider-body">
                                            <img src="{{asset('front/imgs/right-section.png')}}" alt="Egypt is changing" class="img-responsive">
                                        </div>
                                        <div class="hp-right_slider-footer">
                                            <h2>New administrative capital dummy text</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum
                                                dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                officia deserunt mollit anim id est laborum.</p>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end egypt is changing slider -->
                        <div class="dock affix-top">
                            <h1>Pro Services</h1>
                            <div>
                                <a href="#">
                                    <i class="icon-dock-funds-investments"></i>
                                    <p> Funds&amp;
                                        <br> Investment</p>
                                </a>
                                <a href="#">
                                    <i class="icon-dock-interior-designers"></i>
                                    <p>Interior Designers &amp;
                                        <br> Architects</p>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <i class="icon-dock-brokers"></i>
                                    <p>Brokers
                                        <br> &amp; Consultants</p>
                                </a>
                                <a href="#">
                                    <i class="icon-dock-finishing-cost"></i>
                                    <p>Building &amp;
                                        <br> Finishing Coast</p>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <i class="icon-dock-legal-advice"></i>
                                    <p>Legal Advice
                                        <br> &amp; services</p>
                                </a>
                                <a href="#">
                                    <i class="icon-dock-advice"></i>
                                    <p>Insurance Advice
                                        <br> &amp; Policy</p>
                                </a>
                            </div>

                        </div>

                        <div class="here-an-interior">
                            <img src="{{asset('front/imgs/ad-2-16-9.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

<input type='hidden' name='offset' id='offset' value='1'/>
                                                             @endsection
                                                             
                                                             @push('more_footer')
                                                          
    
                                                             <script>
                                                                 
                                                              
                                                                 
                                                                
      $(window).scroll(function() {
          
    if($(window).scrollTop() == $(document).height() - $(window).height()) {
        
        var route_load="{{ route('property-load-result') }}";
        var offset=$("#offset").val();
        
        

        $.ajax({

            url: route_load,
            data: "offset="+offset,
                    

            success: function (msg) {

                $("#property_list").append(msg);
                var real_offset=parseInt(offset)+1;
                $("#offset").val(real_offset);


            }
        });

           // ajax call get data from server and append to the div
    }
});
</script>
                                                             @endpush