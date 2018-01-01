@extends('front.app')
@section('page')

<div class="container-fluid">
    <div class="pagination-login">
        <a href="#" class="pagination  active-pagination">Home</a>
        <i class="icon-back-arrow"></i>
        <a href="#" class="pagination ">Add New Property </a>
    </div>
    <div class="row">
        <div class="login-to-your-acount">
            <div class="login-acount">
                <div class="add-property-header">
                    <div>
                        <h1>Add New Property</h1>
                        <h6>please fill out the following form.</h6>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar-text">
                            <span class="active-text">Property Basic Data</span>
                            <span>Property Rooms</span>
                            <span>Upload Images</span>
                        </div>
                        <div class="progress-bar-wrapper">
                            <div class="steps active-step">1</div>
                            <div class="span active-span"></div>
                            <div class="steps disactive-step ">2</div>
                            <div class="span"></div>
                            <div class="steps disactive-step">3</div>
                        </div>
                    </div>
                </div>
                <div class="login-form">
                    <div class="col-md-6">
                        <h6>Enter your E-mail and Password</h6>
                        <form  action='{{ route('property-post-step1') }}' method='post'>
                            {{ csrf_field() }}
                            <div class="form-group @if($errors->first('title') != null) has-error @endif">
                                
                                <input type="text" class="form-control login-data-input" placeholder="Property Title" name='title' value='{{ old('title') }}'>
                                <span class="validation-text" @if($errors->first('title') != null) tyle="display:block;" @else style="display:none;" @endif >
                                      {{ $errors->first('title') }}
                            </span>
                            </div>
                            <div class="form-group @if($errors->first('property_type_id') != null) has-error @endif">
                                <select class="form-control login-data-input  property-select" name='property_type_id'>
                                    <option value="">Property Type</option>
                                    @php
                                    $types=$result['property_types'];
                                    @endphp
                                    @foreach($types as $type)
                                    <option value='{{ $type['id'] }}'>{{ $type['text'] }}</option>
                                    @endforeach
                                </select>
                                <span class="validation-text"@if($errors->first('property_type_id') != null) tyle="display:block;" @else style="display:none;" @endif>
                                      {{ $errors->first('property_type_id') }}</span>
                            </div>
                            <div class="form-group @if($errors->first('purpose_posting_id') != null) has-error @endif">
                                <select class="form-control login-data-input  property-select" name='purpose_posting_id'>
                                    <option value=''>Purpose Of Posting</option>
                                    @php
                                    $purpose_postings=$result['purpose_postings'];
                                    @endphp
                                    @foreach($purpose_postings as $purpose_posting)
                                    <option value='{{ $purpose_posting['id'] }}'>{{ $purpose_posting['text'] }}</option>
                                    @endforeach
                                </select>
                                <span class="validation-text"@if($errors->first('purpose_posting_id') != null) tyle="display:block;" @else style="display:none;" @endif>
                                      {{ $errors->first('purpose_posting_id') }}</span>
                            </div>
                            <div class="form-group @if($errors->first('address') != null) has-error @endif">
                                <input type="text" class="form-control login-data-input  location" name='address' id="txtAddress" placeholder="Property location" tabindex="-1" href="#" data-toggle="modal" data-target="#myModal2">
                                
                                <input type="hidden" id="addressLang" name="longtitude" value="">
                                <input type="hidden" id="addressLat" name="latitiude" value="">
                              <span class="validation-text"@if($errors->first('address') != null) tyle="display:block;" @else style="display:none;" @endif>
                                      {{ $errors->first('address') }}</span> 
                                
                               
                               
                               
                            </div>
                            <div class="form-group">
                                <select class="form-control login-data-input property-select @if($errors->first('property_form_id') != null) has-error @endif" name='property_form_id'>
                                    <option value=''>Property Form </option>
                                    @php
                                    $property_forms=$result['property_forms'];
                                    @endphp
                                    @foreach($property_forms as $property_form)
                                    <option value='{{ $property_form['id'] }}'>{{ $property_form['text'] }}</option>
                                    @endforeach
                                </select>
                                <span class="validation-text" @if($errors->first('address') != null) tyle="display:block;" @else style="display:none;" @endif>
                                      {{ $errors->first('property_form_id') }}</span>
                            </div>
                            <div class="form-group">
                                <select class="form-control login-data-input property-select @if($errors->first('property_status_id') != null) has-error @endif" name='property_status_id'>
                                    <option value=''>Status Of Property </option>
                                    @php
                                    $property_statuses=$result['property_statuses'];
                                    @endphp
                                    @foreach($property_statuses as $property_status)
                                    <option value='{{ $property_status['id'] }}'>{{ $property_status['text'] }}</option>
                                    @endforeach
                                </select>
                                <span class="validation-text" @if($errors->first('property_status_id') != null) tyle="display:block;" @else style="display:none;" @endif>
                                      {{ $errors->first('property_status_id') }}</span>
                            </div>
                        
                    </div>
                    <div class="col-md-6 select-login-form">
                        <div class="social-form">
                            <div class="form-group">
                                <input type="text" class="form-control login-data-input  property-price @if($errors->first('price') != null) has-error @endif" placeholder="Property original Price" onchange="cal_price()" name='price' id='price' value='{{ old('price') }}'>
                                <span class="validation-text" @if($errors->first('price') != null) tyle="display:block;" @else style="display:none;" @endif>
                                      {{ $errors->first('price') }}</span>
                            </div>

                            <div class="form-group">
                                <label class="hot-discount">
                                    <p>Add to hot offers List?</p>
                                    <p>What is this?</p>
                                </label>
                                <input type="text" class="form-control login-data-input discount @if($errors->first('discount_value') != null) has-error @endif" placeholder="Discount" id='discount_value' onchange="cal_price()" name='discount_value' value='{{ old('discount_value') }}'>
                                <span class="validation-text" @if($errors->first('discount_value') != null) tyle="display:block;" @else style="display:none;" @endif>
                                      {{ $errors->first('discount_value') }}</span>
                            </div>

                            <div class="form-group @if($errors->first('price_after_discount') != null) has-error @endif" >
                                <input type="text" class="form-control login-data-input  property-price discount-after" name='price_after_discount' placeholder="Price after Discount" id='price_after_discount' value='{{ old('price_after_discount') }}'>
                                <span class="validation-text" @if($errors->first('price_after_discount') != null) tyle="display:block;" @else style="display:none;" @endif>
                                      {{ $errors->first('price_after_discount') }}</span>
                            </div>



                            <div class="form-group">
                                <label class="customer">One of our customer support will contact you soon</label>
                                <select class="form-control login-data-input property-select @if($errors->first('degree_ownership_id') != null) has-error @endif" name='degree_ownership_id'>
                                    <option value=''>Degree Of Ownership</option>
                                    @php
                                    $degree_ownerships=$result['degree_ownerships'];
                                    @endphp
                                    @foreach($degree_ownerships as $degree_ownership)
                                    <option value='{{ $degree_ownership['id'] }}'>{{ $degree_ownership['text'] }}</option>
                                    @endforeach
                                </select>
                                <span class="validation-text" @if($errors->first('degree_ownership_id') != null) tyle="display:block;" @else style="display:none;" @endif>
                                      {{ $errors->first('degree_ownership_id') }}</span>
                            </div>
                            <div class="form-group">
                                <select class="form-control login-data-input property-select @if($errors->first('developer_id') != null) has-error @endif" name='developer_id'>
                                    <option value="">Developer</option>
                                    @php
                                    $developers=$result['developers'];
                                    @endphp
                                    @foreach($developers as $developer)
                                    <option value='{{ $developer['id'] }}'>{{ $developer['text'] }}</option>
                                    @endforeach
                                </select>
                                 <span class="validation-text" @if($errors->first('developer_id') != null) tyle="display:block;" @else style="display:none;" @endif>
                                      {{ $errors->first('developer_id') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-holder">
                    <button type="submit" class=" next-btn center-block">Next Enter your Rooms Details</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade location-map" id="myModal2" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <div>
                    <div style="width: 100%; height: 300px; position: relative; overflow: hidden;" id="map2"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: -147px; top: -116px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -147px; top: -116px;"></div></div></div><div style="width: 22px; height: 40px; overflow: hidden; position: absolute; left: -11px; top: -40px; z-index: 0;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div></div><div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div class="gmnoprint" style="width: 22px; height: 40px; overflow: hidden; position: absolute; opacity: 0.01; left: -11px; top: -40px; z-index: 0;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi.png" draggable="false" usemap="#gmimap0" style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"><map name="gmimap0" id="gmimap0"><area href="javascript:void(0)" log="miw" coords="8,0,5,1,4,2,3,3,2,4,2,5,1,6,1,7,0,8,0,14,1,15,1,16,2,17,2,18,3,19,3,20,4,21,5,22,5,23,6,24,7,25,7,27,8,28,8,29,9,30,9,33,10,34,10,40,11,40,11,34,12,33,12,30,13,29,13,28,14,27,14,25,15,24,16,23,16,22,17,21,18,20,18,19,19,18,19,17,20,16,20,15,21,14,21,8,20,7,20,6,19,5,19,4,18,3,17,2,16,1,14,1,13,0,8,0" shape="poly" title="" style="cursor: pointer;"></map></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=30.0074,31.4913&amp;z=10&amp;t=p&amp;hl=en&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 0px; height: 0px; position: absolute; left: 5px; top: 5px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;"></div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 0px; bottom: 0px; width: 12px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span style="display: none;"></span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);"></div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><button draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view" type="button" style="background: none; border: 0px; margin: 10px 14px; padding: 0px; position: absolute; cursor: pointer; user-select: none; width: 25px; height: 25px; overflow: hidden; top: 0px; right: 0px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></button><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@30.0074,31.4913,10z/data=!5m1!1e4!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="55" style="margin: 10px; user-select: none; position: absolute; bottom: 55px; right: 28px;"><div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 0px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><button draggable="false" title="Zoom in" aria-label="Zoom in" type="button" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></button><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" title="Zoom out" aria-label="Zoom out" type="button" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></button></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; display: none; position: absolute;"><div style="position: absolute; left: 1px; top: 1px;"></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Rotate map 90 degrees" style="width: 28px; height: 28px; overflow: hidden; position: absolute; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; display: none;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 0px; height: 0px; overflow: hidden; position: absolute; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; top: 0px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left; position: relative;"><div role="button" tabindex="0" title="Show street map" aria-label="Show street map" aria-pressed="true" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; font-weight: 500;">Map</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 0px; text-align: left; display: none;"><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div class="gm-style-mtc" style="float: left; position: relative;"><div role="button" tabindex="0" title="Show satellite imagery" aria-label="Show satellite imagery" aria-pressed="false" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-left: 0px;">Satellite</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 0px; text-align: left; display: none;"><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div></div></div>
                </div>
                <div class="model-input-1">
                    <h5>Type a location</h5>
                    <input type="text" class="input-search" id="input_search" disabled="">
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary new_account " id="select_position">Select</button>
            </div>
        </div>

    </div>
</div>
<script>
function cal_price()
{
   $(document).ready(function (){
      var price=$("#price").val();
      var discount_value=$("#discount_value").val();
      if(discount_value != '')
      {
      var total_price=price-(price * (discount_value / 100));
      $("#price_after_discount").val(total_price);
  }
   }); 
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXxiZXl3fxlINHhWcIVUoCjC4g4SVRH34&amp;callback=initMap&amp;libraries=places&amp;language=en" async="" defer=""></script>
 

@endsection