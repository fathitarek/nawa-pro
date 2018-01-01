@extends('front.app')
@section('page')
    <div class="container-fluid">
        <div class="pagination-login profile-row">
            <a href="#" class="pagination  active-pagination">Home</a>
            <i class="icon-back-arrow"></i>
            <a href="#" class="pagination active-pagination">login</a>
            <i class="icon-back-arrow"></i>
            <a href="#" class="pagination">Forget Your Password</a>

        </div>
        <div class="row">
            <div class="login-to-your-acount">
                <div class="login-acount">
                    <h1>Reset password link sent</h1>
                    <p class="form-header">Retrieve your account</p>
                    <div class="login-form">
                        <div class="col-md-6 col-md-push-3 text-center">
                            <h2>Thank You!</h2>
                            <form class="form forget-form">
                                <div class="recover-mail-text">
                                    <p class="login-text ">We Sent a reset password link to :
                                        <span> E-mail sent to mai@yahoo.com</span>
                                    </p>
                                    <h5>Didn’t get a link?</h5>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control login-data-input text-center" placeholder="Enter your username or email address">
                                </div>
                                <button type="submit" class=" btn-recover-pw">Resend again</button>
                            </form>
                        </div>
                    </div>
                    <div class="forget-text">
                        <div>
                            <a href="/signIn">
                                Return To log in page
                            </a>
                        </div>
                        <div>
                            <a href="/signUp">
                                Don’t have an account?
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
