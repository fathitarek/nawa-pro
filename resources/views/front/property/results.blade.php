                @foreach($results as $result)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="property-sq">
                        <div class="propert-wrapper-sq">
                            <div class="top-left-wrapper">
                                <span class="units">{{ $result->propertytype()->text }}</span>
                                <span class="purpose">{{ $result->purposeposting()->text }}</span>
                            </div>
                            <div class="top-right-wrapper">
                                @if($result->hotoffer() != null)
                                <span class="hot-deal">Hot Deal</span>
                                @endif
                                <span class="like-share">
                                    <i class="icon-heart like"></i>
                                    <i class="icon-share"></i>
                                </span>

                            </div>
                            <img src="{{ asset('property-images') }}/{{ $result->coverphoto()->image }}" alt="Image slide" width="100%">
                            <div class="slide-propery-details">
                                <h4>{{ $result['title'] }}</h4>
                                @if($result->hotoffer() != null)
                                <p>
                                    <del>{{ $result['price'] }}</del>
                                    <span>EGP</span>
                                </p>
                                <p class="price">{{ $result->hotoffer()->price_after_discount }}
                                    <span>EGP</span>
                                </p>
                                @else
                                <p class="price">{{ $result['price'] }}
                                    <span>EGP</span>
                                </p>
                                @endif
                                <div class="property-small-details pale-btn">
                                    @if($result->optionuser() != null)
                                                            @foreach($result->optionuser() as $option_users)
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
                </div>
                @endforeach

