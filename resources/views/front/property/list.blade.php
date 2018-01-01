@extends('front.app')
@section('page')

<div class="container-fluid ">
            <div class="pagination-login properties-pagination">
                <div>
                    <a href="#" class="pagination  active-pagination">Home</a>
                    <i class="icon-back-arrow"></i>
                    <a href="#" class="pagination ">All Properties</a>
                </div>
                <div>
                    <p><span class="blue-text">Filter Applied -</span> <span class="red-text"> Clear?</span></p>
                </div>
            </div>
            <div class="properties-filteration">
                <div>
                    <h1>All Properties</h1>
                    <p>
                        <span class="red-text">{{ $count_all }} Property Found- </span>
                        <span class="blue-text">Filter the properties list by clicking the filtering icon on the left</span>
                    </p>
                </div>
                <div class="hp-icons ">
                    <!-- <span>
                        <i class="icon-map"></i>
                    </span> -->
                    <span>
                        <i class="icon-grid_view hp-icons_active"></i>
                    </span>
                </div>
            </div>

            <div class="row all-properties">
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
                            <img src="{{ asset('property-images') }}/{{ $result->bestphoto()->image }}" alt="Image slide" width="100%">
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

    <input type="hidden" name="property_type_id_filter" id="property_type_id_filter"
               value="{{ \Illuminate\Support\Facades\Input::get('property_type_id') }}">
    <input type="hidden" name="purpose_posting_id_filter" id="purpose_posting_id_filter"
               value="{{ \Illuminate\Support\Facades\Input::get('purpose_posting_id') }}">
    <input type="hidden" name="degree_ownership_id_filter" id="degree_ownership_id_filter"
               value="{{ \Illuminate\Support\Facades\Input::get('degree_ownership_id') }}">
    <input type="hidden" name="property_status_id_filter" id="property_status_id_filter"
               value="{{ \Illuminate\Support\Facades\Input::get('property_status_id') }}">
    <input type="hidden" name="min_price_filter" id="min_price_filter"
               value="{{ \Illuminate\Support\Facades\Input::get('min_price') }}">
    <input type="hidden" name="max_price_filter" id="max_price_filter"
               value="{{ \Illuminate\Support\Facades\Input::get('max_price') }}">
    <input type="hidden" name="district_id_filter" id="district_id_filter"
               value="{{ \Illuminate\Support\Facades\Input::get('district_id') }}">
    <input type='hidden' id='offset' value='1'/>


            </div>
        </div>

@endsection
 @push('more_footer')
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?libraries=places,geometry,drawing&amp;key=AIzaSyAd_9_RHmT1KA9QPBg0mwkHJhU4M2b2PRk&amp;v=3&amp;callback=initMap">
    </script>
    <script>
      $(window).scroll(function() {
    if($(window).scrollTop() == $(document).height() - $(window).height()) {
       
        var route_load="{{ route('property-get-filter') }}";
        var property_type_id = $('#property_type_id_filter').val();

        var purpose_posting_id = $('#purpose_posting_id_filter').val();
        var degree_ownership_id = $('#degree_ownership_id_filter').val();
        var property_status_id = $('#property_status_id_filter').val();
        var min_price = $('#min_price_filter').val();
        var max_price = $('#max_price_filter').val();
        var district_id = $('#district_id_filter').val();
        var offset=$("#offset").val();

        $.ajax({

            url: route_load,
            data: "property_type_id=" + property_type_id+"&purpose_posting_id="+purpose_posting_id+
                    "&degree_ownership_id="+degree_ownership_id+"&property_status_id="+property_status_id
                    +"&min_price="+min_price+"&max_price="+max_price+"&district_id="+district_id
                    +"&offset="+offset,

            success: function (msg) {

                $(".all-properties").append(msg);
                var real_offset=parseInt(offset)+1;
                $("#offset").val(real_offset);


            }
        });

           // ajax call get data from server and append to the div
    }
});

        </script>
        @endpush