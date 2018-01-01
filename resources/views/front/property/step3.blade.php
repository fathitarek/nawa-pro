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
                                    <span class="finished-text">Property Rooms</span>
                                    <span>Upload Images</span>
                                </div>
                                <div class="progress-bar-wrapper">
                                    <div class="steps fibished-step">
                                        <img src="{{ asset('front/imgs/done-check-mark.png') }}" alt="doe-check-mark-icon"> </div>
                                    <div class="span finished-span"></div>
                                    <div class="steps fibished-step ">
                                        <img src="{{ asset('front/imgs/done-check-mark.png') }}" alt="doe-check-mark-icon">
                                    </div>
                                    <div class="span"></div>
                                    <div class="steps active-step ">3</div>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('property-post-step3') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="login-form">
                            <div class="img-instruction">
                                <h6>Upload The Property Images</h6>
                                <p>You should upload Minimum 4 images maximum 8</p>
                            </div>

                            <div class="col-md-6  upload-img-holder">
                                <div class="row-wrapper row">
                                    <div class="col-md-4 col-sm-4 col-xs-12 img-holder">
                                        
                                        <div class="upload-img master-img">
                                            
                                                <div class="validation" @if($errors->first('cover_image') != null) style="display:block;" @else style="display:none;" @endif></div>
                                            <img src="" alt="" id="img">
                                            <input type="file" name="cover_image"  id="upload" class="inputfile" required>
                                            <label id="test" for="upload" class="master"></label>
                                            <i class="icon-search" hidden=""></i>
                                        </div>
                                        <div class=" un-cover-img active-cover ">
                                            Cover Image
                                            <br>1920 px*1080 px
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 img-holder">
                                        <div class="upload-img">
                                                <div class="validation" @if($errors->first('images.0') != null) style="display:block;" @else style="display:none;" @endif></div>
                                            <img src="" alt="" id="img">
                                            <input type="file" name="images[0]" id="upload1" class="inputfile" required>
                                            <label id="test" for="upload1"> </label>
                                            <i class="icon-search" hidden=""></i>
                                        </div>
                                        <div class=" un-cover-img  ">
                                                Square Image
                                                <br>1024 px*1024 px
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 img-holder">
                                        <div class="upload-img">
                                                <div class="validation" @if($errors->first('images.1') != null) style="display:block;" @else style="display:none;" @endif></div>
                                            <img src="" alt="" id="img">
                                            <input type="file" name="images[1]" id="upload2" class="inputfile" required>
                                            <label id="test" for="upload2"></label>
                                            <i class="icon-search" hidden=""></i>
                                        </div>
                                        <div class=" un-cover-img  ">
                                                Square Image
                                                <br>1024 px*1024 px
                                        </div>
                                    </div>


                                    <div class="col-md-4 col-sm-4 col-xs-12 img-holder">
                                        <div class="upload-img">
                                                <div class="validation" @if($errors->first('images.2') != null) style="display:block;" @else style="display:none;" @endif></div>
                                            <img src="" alt="" id="img">
                                            <input type="file" name="images[2]" id="upload3" class="inputfile" required>
                                            <label id="test" for="upload3"></label>
                                            <i class="icon-search" hidden=""></i>
                                        </div>
                                        <div class=" un-cover-img  ">
                                                Square Image
                                                <br>1024 px*1024 px
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 img-holder">
                                        <div class="upload-img">
                                                <div class="validation" @if($errors->first('images.3') != null) style="display:block;" @else style="display:none;" @endif></div>
                                            <img src="" alt="" id="img">
                                            <input type="file" name="images[3]" id="upload4" class="inputfile" required>
                                            <label id="test" for="upload4"></label>
                                            <i class="icon-search" hidden=""></i>
                                        </div>
                                        <div class=" un-cover-img  ">
                                                Square Image
                                                <br>1024 px*1024 px
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 img-holder">
                                        <div class="upload-img">
                                                <div class="validation" @if($errors->first('images.4') != null) style="display:block;" @else style="display:none;" @endif></div>
                                            <img src="" alt="" id="img">
                                            <input type="file" name="images[4]" id="upload5" class="inputfile" required>
                                            <label id="test" for="upload5"></label>
                                            <i class="icon-search" hidden=""></i>
                                        </div>
                                        <div class=" un-cover-img  ">
                                                Square Image
                                                <br>1024 px*1024 px
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12 img-holder">
                                        <div class="upload-img ">
                                                <div class="validation" @if($errors->first('images.5') != null) style="display:block;" @else style="display:none;" @endif></div>
                                            <img src="" alt="" id="img">
                                            <input type="file" name="images[5]" id="upload6" class="inputfile" required>
                                            <label id="test" for="upload6"></label>
                                            <i class="icon-search" hidden=""></i>
                                        </div>
                                        <div class=" un-cover-img  ">
                                                Square Image
                                                <br>1024 px*1024 px
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 img-holder">
                                        <div class="upload-img ">
                                                <div class="validation" @if($errors->first('images.6') != null) style="display:block;" @else style="display:none;" @endif></div>
                                            <img src="" alt="" id="img">
                                            <input type="file" name="images[6]" id="upload7" class="inputfile" required>
                                            <label id="test" for="upload7"></label>
                                            <i class="icon-search" hidden=""></i>
                                        </div>
                                        <div class=" un-cover-img  ">
                                                Square Image
                                                <br>1024 px*1024 px
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 img-holder  ">
                                        <div class="upload-img-intruductions">
                                         <a href="#">Upload Images <br>instructions</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 ">
                                <div class="social-form property-list">
                                    <h6>Make your list</h6>

                                    <div class="level-modifiers">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="checkbox-circel" name="public" value="0"> &nbsp; &nbsp; &nbsp;Private</label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="checkbox-circel" name="public" value="1">&nbsp; &nbsp; &nbsp;Puplic</label>
                                        </div>
                                        <span class="validation-text"@if($errors->first('public') != null) tyle="display:block;" @else style="display:none;" @endif>
                                      {{ $errors->first('public') }}</span>
                                    </div>
<input type="hidden" name="title" value="{{ $title }}"/>
                                    <span class="down-stick"></span>
                                    <div class="form-group add-additional-comment">
                                        <label for="comment">Add additional Comment</label>
                                        <textarea class="form-control" name="additional_comments" rows="6" id="comment" placeholder="Add Your Comment"></textarea>
                                    </div>
                                    <div class="remember-me">
                                        <label>
                                            <input class="checkbox checkbox-1" name="agree" type="checkbox">Agree To terms and conditions</label>
                                            <span class="validation-text"@if($errors->first('agree') != null) tyle="display:block;" @else style="display:none;" @endif>
                                      {{ $errors->first('agree') }}</span>
                                    </div>
                                    <button type="submit" class=" next-btn ">Add Your Property</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection