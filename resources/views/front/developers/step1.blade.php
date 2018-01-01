@extends('front.app')
@section('page')

    <div class="container-fluid">
            <div class="pagination-login profile-row">
                <a href="#" class="pagination  active-pagination">Home</a>
                <i class="icon-back-arrow"></i>
                <a href="#" class="pagination active-pagination">All Developers</a>
                <i class="icon-back-arrow"></i>
                <a href="#" class="pagination ">Create Your Page</a>
            </div>

            <div class="row">
                <div class="developers-form">
                    <div class="add-property-header">
                        <div>
                            <h1>Add Your Project Details</h1>
                            <h6>please fill out the following form.</h6>
                        </div>
                        <div class="progress-container">
                            <div class="progress-bar-text">
                                <span class="active-text">Developer Page Data</span>
                                <span>Add Projects</span>
                            </div>
                            <div class="progress-bar-wrapper">
                                <div class="steps active-step">1</div>
                                <div class="span active-span"></div>
                                <div class="steps disactive-step ">2</div>
                            </div>
                        </div>
                    </div>

                    <div class="developers-form-countainer">
                        <h4>Add Your Developer Profile Data</h4>
                        <form>
                            <div class="col-md-6 dev-col">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Page Branding Name" value='{{ @Auth::user()->name or '' }}'>
                                   
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Website URL" value='{{ @Auth::user()->website or '' }}'>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Your Page Description</label>
                                    <textarea class="form-control dev-text-area" placeholder="Max 785 characters" rows="5"></textarea>
                                </div>



                                <div class=" upload-img-holder upload-img-holder-custom">
                                    <div class="row-wrapper row-wrapper-custom row">
                                        <div class="col-md-4 col-sm-4 col-xs-12 img-holder">
                                            <div class="upload-img">
                                                <div class="validation"></div>
                                                <img src="" alt="" id="img">
                                                <input type="file" id="upload1" class="inputfile">
                                                <label id="test" for="upload1"> </label>
                                                <i class="icon-search" hidden=""></i>
                                            </div>
                                            <div class=" un-cover-img  ">
                                                Uolload Cover Image
                                                <br>1920px*1080 px</div>
                                        </div>

                                        <div class="col-md-4 col-sm-4 col-xs-12 img-holder">
                                            <div class="upload-img">
                                                <div class="validation"></div>
                                                <img src="" alt="" id="img">
                                                <input type="file" id="upload1" class="inputfile">
                                                <label id="test" for="upload1"> </label>
                                                <i class="icon-search" hidden=""></i>
                                            </div>
                                            <div class=" un-cover-img  ">
                                                Upload Your Logo
                                                <br>1024 px*1024 px
                                            </div>
                                        </div>
                                    </div>
                                    <a class="show-me" href="#">Show me Where It Appears</a>
                                </div>




                            </div>
                            <div class="col-md-6 dev-col-left">
                                <div class="project-label">
                                    <p>Project Contact Information</p>
                                    <label>
                                            <input class="checkbox checkbox-1" type="checkbox">As Profile Data?</label>
                                </div>
                                <div class="form-group ">
                                    <input type="email" class="form-control" placeholder="Phone Number" value='{{ @Auth::user()->phone or '' }}'>
                                    
                                </div>
                                <div class="form-group ">
                                    <input type="email" class="form-control" placeholder="E-mail Address" value='{{ @Auth::user()->email or '' }}'>
                                   
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control dev-text-area" placeholder="Your Business main address" rows="5"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>More Contact Information Data</label>
                                    <textarea class="form-control dev-text-area" rows="5"></textarea>
                                </div>
                                <div class="next-btn-holder">
                                    <input type="submit" class="btn next-btn next-btn-custom" value="Next: Start Adding Your Projects">
                                </div>


                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
@endsection