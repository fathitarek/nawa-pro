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
                <div class="login-acount">
                    <h1>Login To your Account</h1>
                    <p class="form-header">Welcome Back!</p>
                    <div class="login-form">
                        <div class="col-md-6">
                            <h6>Enter your E-mail and Password</h6>
                            <form class="form" action="/login" method="post">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <input required type="email" name="email" class="form-control login-data-input" placeholder="Enter your username or email address">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input required type="password" name="password" class="form-control login-data-input" placeholder="Enter your password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="remember-me">
                                    <label>
                                        <input class="checkbox checkbox-1" type="checkbox" />Remember Me</label>
                                </div>
                                <button type="submit" class=" btn-login">Login</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <h6>Or Connect with</h6>
                            <div class="social-form">
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <a href="{{url('/auth/facebook')}}" class="login-fb">
                                    <i class="icon-fb"></i>
                                    <span> Login using Facebook</span>
                                </a>
                                <a href="{{url('/auth/google')}}" class="google-fb">
                                    <i class="icon-gplus"></i>
                                    <span> Login using Google Plus</span>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="forget-text">
                        <div>
                            <a href="#">
                                Forget Your Password?
                            </a>
                        </div>
                        <div>
                            <a href="{{url('/signUp')}}">
                                Don’t have an account?
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
