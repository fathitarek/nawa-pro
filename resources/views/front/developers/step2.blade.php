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
                        <h4>Your Project Main Data</h4>
                        <form>
                            <div class="col-md-6 dev-col">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Project Name">
                                    
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Project Website URL">
                                    <span class="validation-text">test</span>
                                </div>
                                <div class="form-group">
                                    <label>Project Description</label>
                                    <textarea class="form-control dev-text-area" placeholder="Max 785 characters" rows="5"></textarea>
                                </div>



                                <div class="project-label">
                                    <p>Project Contact Information</p>
                                    <label>
                                        <input class="checkbox checkbox-1" type="checkbox">As Profile Data?</label>
                                </div>
                                <div class="form-group has-error">
                                    <input type="email" class="form-control" placeholder="Phone Number">
                                    <span class="validation-text">test</span>
                                </div>
                                <div class="form-group has-error">
                                    <input type="email" class="form-control" placeholder="E-mail Address">
                                    <span class="validation-text">test</span>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control dev-text-area" placeholder="Project Booking address" rows="5"></textarea>
                                </div>


                                <div class="form-group has-error">
                                    <label class="project-custom-label ">Project Description</label>
                                    <input type="text" class="form-control" placeholder="Ex: Fitness Center">
                                    <span class="validation-text">test</span>
                                </div>


                                <div class="add-dev">
                                    <div>
                                        <i class="icon-add_btn"></i>
                                    </div>
                                    <p>Add another item</p>
                                </div>


                                <div class="form-group">
                                    <label class="project-custom-label ">Upload Project Brochure</label>
                                    <input type="file" class="form-control" placeholder="Upload Brochure">

                                </div>









                            </div>




                            <div class="col-md-6 dev-col-left">
                                <div class=" upload-img-holder upload-img-holder-custom">
                                    <label class="project-custom-label ">Upload Project Logo</label>
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
                                                Upload Project Logo
                                                <br>1920px*1080 px</div>
                                        </div>
                                    </div>
                                    <label class="project-custom-label ">Upload Project Images</label>
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
                                                Square Image
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
                                                Square Image
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
                                                Square Image
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
                                                Square Image
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
                                                Square Image
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
                                                Square Image
                                                <br>1920px*1080 px</div>
                                        </div>
                                        <label class="project-custom-label ">Upload Project master Plan and Layout Images</label>
                                        <div class="row-wrapper ">
                                            <div class="col-md-4 col-sm-4 col-xs-12 img-holder">
                                                <div class="upload-img">
                                                    <div class="validation"></div>
                                                    <img src="" alt="" id="img">
                                                    <input type="file" id="upload1" class="inputfile">
                                                    <label id="test" for="upload1"> </label>
                                                    <i class="icon-search" hidden=""></i>
                                                </div>
                                                <div class=" un-cover-img  active-cover">
                                                    Master Plan
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
                                                    Square Image
                                                    <br>1920px*1080 px</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </form>
                        <div class="dev-form-btn">
                            <input type="submit" class="btn" value="Save and  View  Your Developer Page">
                            <input type="submit" class="btn " value="Save and add Another Project">

                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection