@extends('front.app')
@section('page')
    <div class="container-fluid">
        <div class="pagination-login">
            <a href="#" class="pagination  active-pagination">Home</a>
            <i class="icon-back-arrow"></i>
            <a href="#" class="pagination ">login</a>
        </div>
        <div class="row">
            <div class="login-to-your-acount">
                {{--<form class="login-acount">--}}
                    <h1>Create a new account</h1>
                    <p class="form-header">It's free and Easy!</p>
                    <div class="login-form">
                        <div class="col-md-6">
                            <h6>Enter your E-mail and Password</h6>
                            <form class="form" action="{{ route('register') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="row form-row">
                                    <div class="form-group col-md-6">
                                        <input required type="text" name="first_name" class="form-control login-data-input " placeholder="First Name">
                                        @if ($errors->has('first_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" required name="last_name" class="form-control login-data-input " placeholder="Last Name">
                                        @if ($errors->has('last_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" required id="email" name="email" class="form-control login-data-input" placeholder="Enter your username or email address">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password"  required id="password" name="password" class="form-control login-data-input" placeholder="Enter Your Password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <input type="password"  required id="password-confirm" name="password_confirmation" class="form-control login-data-input" placeholder="Confirm Your Password
                                        ">
                                </div>



                        </div>
                        <div class="col-md-6 select-login-form">
                            <div class="social-form">
                                <div class="row form-row">
                                    <div class="form-group col-md-6">
                                        <select required  id="city_id" name="city_id" class="form-control login-data-input select">
                                            <option value="">Your City</option>
                                            @foreach($cities as $city)
                                                <option  value="{{$city->id}}">{{$city->text}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('city_id'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('city_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select required  id="district_id" name="district_id" class="form-control login-data-input select">
                                            <option id="first_district" value="">Your District</option>
                                            {{--@foreach($districts as $district)--}}
{{--                                            <option value="{{$district->id}}">{{$district->text}}</option>--}}
                                            {{--@endforeach--}}
                                        </select>
                                        @if ($errors->has('district_id'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('district_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>



                                </div>



                                <div class="form-group">
                                    <select  required name="user_type_id" class="form-control login-data-input select last-select">
                                        <option value="">Your Profession</option>
                                        @foreach($user_types as $user_type)
                                            <option value="{{$user_type->id}}">{{$user_type->title}}</option>
                                       @endforeach
                                    </select>
                                    @if ($errors->has('user_type_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('user_type_id') }}</strong>
                                    </span>
                                    @endif
                                </div>



                            </div>
                            <div class="remember-me">
                                <label>
                                    <input required  name="terms_checked" class="checkbox checkbox-1" type="checkbox"  id="terms"/>By sending you are agree to Nawa Pro
                                    &nbsp;<a href="#"> Terms of use &nbsp; </a> and
                                    &nbsp;  <a href="#"> Privacy Policy</a>.

                                </label>
                                @if ($errors->has('terms_checked'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('terms_checked') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit"   id="btn-submit" class="btn-recover-pw">Create New Account</button>
                        </div>
                    </div>
                </form>
                    <div class="forget-text">
                        <div>
                            <a href="{{url('/signIn')}}">
                                Already have an account ?
                            </a>
                            <a href="{{url('/signIn')}}" class="sign-up">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    <script src="{{ asset('js/app.js') }}"></script>

@endsection

