@extends('front.app')
@section('page')
    <div class="container-fluid">
        <div class="pagination-login profile-row">
            <a href="#" class="pagination  active-pagination">Home</a>
            <i class="icon-back-arrow"></i>
            <a href="#" class="pagination">login</a>
        </div>
        <div class="row">







            <div class="login-to-your-acount">
                <div class="login-acount">
                    <h1>Forget Your Password</h1>
                    <p class="form-header">Retrieve your account</p>
                    <div class="login-form">
                        <div class="col-md-6 col-md-push-3 text-center">
                            <h6>Enter your E-mail</h6>
                            <form class="form forget-form">
                                <div class="recover-mail-text">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control login-data-input text-center" placeholder="Enter your username or email address">
                                </div>
                                <p class="forget-text">
                                    Enter your E-mail to recover your password. You will receive an email with instructions. If you are experimenting problems
                                    recovering your password send us an email
                                </p>
                                <button type="submit" class=" btn-recover-pw">Recover Password</button>
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
