@extends('front.app')
@section('page')
    <div class="container-fluid">
            <div class="pagination-login">
                <a href="#" class="pagination  active-pagination">Home</a>
                <i class="icon-back-arrow"></i>
                <a href="#" class="pagination">Add New Property
                </a>
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
                                    <span class="finished-text">Property Basic Data</span>
                                    <span class="active-text">Property Rooms</span>
                                    <span>Upload Images</span>
                                </div>
                                <div class="progress-bar-wrapper">
                                    <div class="steps fibished-step">
                                        <img src="{{ asset('front/imgs/done-check-mark.png') }}" alt="doe-check-mark-icon"> </div>
                                    <div class="span active-span"></div>
                                    <div class="steps active-step ">2</div>
                                    <div class="span"></div>
                                    <div class="steps disactive-step ">3</div>
                                </div>
                            </div>
                        </div>
                        <div class="login-form">
                            <div class="col-md-6">
                                <h6>Enter The Property Rooms Details</h6>
                                <form class="form" action='{{ route('property-post-step2') }}' method='post'>
                                    {{ csrf_field() }}
                                    @php
                                    
                                    @endphp
                                    @foreach($result['number_options'] as $number_option)
                                    <div class="stepper">
                                        <div>
                                            <p>{{ $number_option['text'] }}</p>
                                        </div>
                                        <div class="counter">
                                            <span class="counter-minus btn btn-primary">-</span>
                                            <span class="current-value">0</span>
                                            <span class="counter-plus btn btn-primary">+</span>
                                           @php
                                        if($number_option['is_required'] == 1)
                                        {
                                        $attribute="required";
                                        }
                                        else
                                        {
                                        $attribute="optional";
                                        }
                                        @endphp
                                           
                                            <input type="hidden" name="option{{ $attribute }}[{{ $number_option['id'] }}]" value="0">
                                            <span class="validation-text" @if($errors->first('optionrequired.'.$number_option['id']) != null) style="display:block;" @else style="display:none;" @endif >
                                      {{ $errors->first('optionrequired.'.$number_option['id']) }}
                            </span>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                    
                                    
                                    


                                
                            </div>
                            <div class="col-md-6 select-login-form">
                                <div class="social-form">


@foreach($result['text_options'] as $text_option) 
                                    <div class="form-group">
                                        @php
                                        if($text_option['is_required'] == 1)
                                        {
                                        $attribute="required";
                                        }
                                        else
                                        {
                                        $attribute="optional";
                                        }
                                        @endphp
  <input type="text" name="option{{ $attribute }}[{{ $text_option['id'] }}]" class="form-control login-data-input @if($errors->first('optionrequired.'.$text_option['id']) != null) has-error @endif" placeholder="{{ $text_option['text'] }}">
                                        <span class="validation-text" @if($errors->first('optionrequired.'.$text_option['id']) != null) style="display:block;" @else style="display:none;" @endif >
                                      {{ $errors->first('optionrequired.'.$text_option['id']) }}
                            </span>
                                    </div>
@endforeach

                     @foreach($result['select_options'] as $select_option)                
                                    <div class="form-group">
                                        @php
                                        if($select_option['is_required'] == 1)
                                        {
                                        $attribute="required";
                                        }
                                        else
                                        {
                                        $attribute="optional";
                                        }
                                        @endphp
                                        
                                        <select class="form-control login-data-input property-select @if($errors->first('optionrequired.'.$select_option['id']) != null) has-error @endif" name="option{{ $attribute }}[{{ $select_option['id'] }}]">
                                            <option value=''>{{ $select_option['text'] }}</option>
                                            @if(count($select_option->results) != 0)
                                            @foreach($select_option->results as $result_select)
                                            <option value="{{ $result_select['text'] }}">{{ $result_select['text'] }}</option>
                                            @endforeach
                                            @endif
                                            
                                            
                                        </select>
                                      <span class="validation-text" @if($errors->first('optionrequired.'.$select_option['id']) != null) style="display:block;" @else style="display:none;" @endif >
                                      {{ $errors->first('optionrequired.'.$select_option['id']) }}
                            </span>
                                    </div>
                     @endforeach
                          <input type="hidden" name="title" value="{{ $title }}"/>          
                                    



                                </div>
                            </div>

                        </div>
                        <div class="btn-holder">
                            <button type="submit" class=" next-btn center-block">Next Upload The Property Images</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection