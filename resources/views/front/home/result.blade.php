<div class="hp-wrapper">
                        <div class="vrt-wrapper">
                            @if(@$results['properties'][0] != null)
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
                            
                             @if(@$results['properties'][1] != null)
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
                        <div class="vrt-wrapper">
                            
                            @if(@$results['properties'][2] != null)
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
                            
                            @if(@$results['properties'][3] != null)
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
                    </div>