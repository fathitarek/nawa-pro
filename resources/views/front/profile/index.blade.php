@extends('front.app')
@section('page')


    <div class="container-fluid">

        <div class="row profile-row">
            <div class="pagination-login profile-pagination">
                <a href="#" class="pagination  active-pagination">Home</a>
                <i class="icon-back-arrow"></i>
                <a href="#" class="pagination ">My Profile</a>
            </div>

            <div class="col-md-8 profile-left">
                <div class="dashbord">
                    <p>Welcome {{$user->name}} to your</p>
                    <h1>DASHBOARD</h1>
                </div>
                <div class="img-followers">
                    <div>
                        <img src="{{asset('front/users-images/'.$user->avatar)}}">
                        {{--<img src="{{asset('/storage/'.$user->avatar)}}">--}}
                    </div>
                    <div class="followers-img">
                        <div>
                            <span>{{getUserFavouritesCount()}}</span>
                            <p>
                                <i class="icon-heart  red-heart"></i>My Favorities</p>
                        </div>
                        <div>
                            <span>{{$userFollowersCount}}</span>
                            <p>
                                <i class="icon-followers "></i>Followers</p>
                        </div>
                        <div>
                            <span>{{$userFollowingsCount}}</span>
                            <p>
                                <i class="icon-following "></i>Following</p>
                        </div>
                    </div>
                </div>
                <div class="dark-overlay"></div>

            </div>

            <div class="col-md-4 tool">
                <div class="tool-headera">
                    <div class="square-icon tool-span">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <h4>Your Tools</h4>
                </div>
                <div class="first-tool">
                    <a href="{{url('/property-estimator')}}"> Property Estimator</a>
                </div>
                <div class="sec-tool">
                    <a href="{{url('/listing-guidelines')}}"> Listing Guidelines</a>
                </div>
                <div class="first-tool">
                    <a href="{{url('/images-guidelines')}}"> Images Guidelines </a>
                </div>
                <div class="sec-tool">
                    <div href="#"> Flyer Design
                        <span>(Coming Soon)</span>
                    </div>
                </div>
                <div class="first-tool">
                    <div href="#"> Publish With Brokers
                        <span>(Coming Soon)</span>
                    </div>
                </div>
                <div class="sec-tool">
                    <a href="{{url('/book-hotdeals')}}"> Book Hot Deals</a>
                </div>
                <div class="first-tool">
                    <div href="#"> Boost Listing
                        <span>(Coming Soon)</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 my-propertioes my-pro-header">
                    <div class="square-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <h1>My Properties</h1>
                </div>


                <div class="col-md-3 my-propertioes my-fav-header ">
                    <div class="square-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <h1>Your Favorities</h1>
                </div>


                <div class="col-md-3 my-propertioes my-prof-header">
                    <div class="square-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <h1>Your Profile</h1>
                </div>


                <div class="col-md-3 my-propertioes my-folloing-header">
                    <div class="square-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <h1>Your Following</h1>
                </div>


                <div class="col-md-8 col-md-offset-1  my-properties-option">
                    <div class="col-md-3 your-profile">
                        <p>Your ProFile</p>
                        <span></span>
                    </div>
                    <div class="col-md-3 active-properties  my-properties">
                        <p>My Properties</p>
                        <span></span>
                    </div>
                    <div class="col-md-3 your-favoriteies">
                        <p>Your Favorities</p>
                        <span></span>
                    </div>
                    <div class="col-md-3 following-list">
                        <p>Your Following List</p>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>


        <div class="profile-properties">
            <div class="show-hot-offers">
                <div class="col-md-8 prop-option">
                    <label class="prop-lable">
                        {{--<input class="checkbox checkbox-1 checkbox-f" type="checkbox" /> &nbsp; &nbsp;Show hot offers properties</label>--}}

                    <label class="prop-lable">
                        {{--<input class="checkbox checkbox-1 checkbox-f" type="checkbox" /> &nbsp; &nbsp;Show Properties Published with Brokers</label>--}}
                </div>
                <div class="col-md-4 edit-upload">
                    <p id="edit-your-list">
                        <i class="icon-search"></i>
                        <i class="icon-back-arrow close-property"></i> Edit Your List </p>
                    <a href="#">
                        <i class="icon-search"></i> Upload New Property</a>
                </div>
            </div>

            <div class="col-md-12 delete-properties">
                <div>
                    <p>You Can Delete one property at a time or select all and click the delete button to delete all your
                        list
                    </p>
                </div>
                <div>
                    <label class="prop-lable">
                        <input class="checkbox checkbox-1" type="checkbox" /> &nbsp; &nbsp;Select All</label>

                    <i class="icon-search"></i>
                </div>

            </div>


            @foreach($user->myProperties as $property)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="property-sq">
                    <div class="delete-property">
                        <i class="icon-search"></i>Delete this property?</div>
                    <div class="propert-wrapper-sq">
                        <div class="top-left-wrapper">
                            <span class="units">Residential</span>
                            <span class="purpose">For Sale</span>
                        </div>
                        <div class="top-right-wrapper">
                            <span class="hot-deal">Hot Deal</span>
                            <span class="like-share custom-shar">
                                    <i class="icon-share"></i>
                                </span>
                        </div>
                        <img src="{{asset('imgs/property-img.png')}}" alt="Image slide" width="100%">
                        <div class="slide-propery-details">
                            <h4>Apartment</h4>
                            <p>
                                <del>6,550,500</del>
                                <span>EGP</span>
                            </p>
                            <p class="price">5,550,000
                                <span>EGP</span>
                            </p>
                            <div class="property-small-details pale-btn">
                                    <span class="sq-space">2,583-ft
                                        <sup>2</sup>
                                    </span>
                                <span class="bar-quant">
                                        <i class="icon-bathroom"></i>
                                        <sup>2</sup>
                                    </span>
                                <span class="ber-quant">
                                        <i class="icon-bedroom"></i>
                                        <sup>4</sup>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="edit-property">
                        <p>Edit Your Property</p>
                        <i class="icon-down-arrow"></i>
                    </div>
                    <div class="puplish-broker">
                        <p>Puplish with Broker</p>
                        <i class="icon-down-arrow"></i>
                    </div>
                    <div class="remove-hot">
                        <p>Remove From hot offers list</p>
                        <i class="icon-down-arrow"></i>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <div class="profile-favorities">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="property-sq">
                    <div class="propert-wrapper-sq">
                        <div class="top-left-wrapper">
                            <span class="units">Residential</span>
                            <span class="purpose">For Sale</span>
                        </div>
                        <div class="top-right-wrapper">
                            <span class="hot-deal">Hot Deal</span>
                            <span class="like-share">
                                    <i class="icon-heart like"></i>
                                    <i class="icon-share"></i>
                                </span>

                        </div>
                        <img src="imgs/property-img.png" alt="Image slide" width="100%">
                        <div class="slide-propery-details">
                            <h4>Apartment</h4>
                            <p>
                                <del>6,550,500</del>
                                <span>EGP</span>
                            </p>
                            <p class="price">5,550,000
                                <span>EGP</span>
                            </p>
                            <div class="property-small-details pale-btn">
                                    <span class="sq-space">2,583-ft
                                        <sup>2</sup>
                                    </span>
                                <span class="bar-quant">
                                        <i class="icon-bathroom"></i>
                                        <sup>2</sup>
                                    </span>
                                <span class="ber-quant">
                                        <i class="icon-bedroom"></i>
                                        <sup>4</sup>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="property-sq">
                    <div class="propert-wrapper-sq">
                        <div class="top-left-wrapper">
                            <span class="units">Residential</span>
                            <span class="purpose">For Sale</span>
                        </div>
                        <div class="top-right-wrapper">
                            <span class="hot-deal">Hot Deal</span>
                            <span class="like-share">
                                    <i class="icon-heart like"></i>
                                    <i class="icon-share"></i>
                                </span>

                        </div>
                        <img src="imgs/property-img.png" alt="Image slide" width="100%">
                        <div class="slide-propery-details">
                            <h4>Apartment</h4>
                            <p>
                                <del>6,550,500</del>
                                <span>EGP</span>
                            </p>
                            <p class="price">5,550,000
                                <span>EGP</span>
                            </p>
                            <div class="property-small-details pale-btn">
                                    <span class="sq-space">2,583-ft
                                        <sup>2</sup>
                                    </span>
                                <span class="bar-quant">
                                        <i class="icon-bathroom"></i>
                                        <sup>2</sup>
                                    </span>
                                <span class="ber-quant">
                                        <i class="icon-bedroom"></i>
                                        <sup>4</sup>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="property-sq">
                    <div class="propert-wrapper-sq">
                        <div class="top-left-wrapper">
                            <span class="units">Residential</span>
                            <span class="purpose">For Sale</span>
                        </div>
                        <div class="top-right-wrapper">
                            <span class="hot-deal">Hot Deal</span>
                            <span class="like-share">
                                    <i class="icon-heart like"></i>
                                    <i class="icon-share"></i>
                                </span>

                        </div>
                        <img src="imgs/property-img.png" alt="Image slide" width="100%">
                        <div class="slide-propery-details">
                            <h4>Apartment</h4>
                            <p>
                                <del>6,550,500</del>
                                <span>EGP</span>
                            </p>
                            <p class="price">5,550,000
                                <span>EGP</span>
                            </p>
                            <div class="property-small-details pale-btn">
                                    <span class="sq-space">2,583-ft
                                        <sup>2</sup>
                                    </span>
                                <span class="bar-quant">
                                        <i class="icon-bathroom"></i>
                                        <sup>2</sup>
                                    </span>
                                <span class="ber-quant">
                                        <i class="icon-bedroom"></i>
                                        <sup>4</sup>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="property-sq">
                    <div class="propert-wrapper-sq">
                        <div class="top-left-wrapper">
                            <span class="units">Residential</span>
                            <span class="purpose">For Sale</span>
                        </div>
                        <div class="top-right-wrapper">
                            <span class="hot-deal">Hot Deal</span>
                            <span class="like-share">
                                    <i class="icon-heart like"></i>
                                    <i class="icon-share"></i>
                                </span>

                        </div>
                        <img src="imgs/property-img.png" alt="Image slide" width="100%">
                        <div class="slide-propery-details">
                            <h4>Apartment</h4>
                            <p>
                                <del>6,550,500</del>
                                <span>EGP</span>
                            </p>
                            <p class="price">5,550,000
                                <span>EGP</span>
                            </p>
                            <div class="property-small-details pale-btn">
                                    <span class="sq-space">2,583-ft
                                        <sup>2</sup>
                                    </span>
                                <span class="bar-quant">
                                        <i class="icon-bathroom"></i>
                                        <sup>2</sup>
                                    </span>
                                <span class="ber-quant">
                                        <i class="icon-bedroom"></i>
                                        <sup>4</sup>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="property-sq">
                    <div class="propert-wrapper-sq">
                        <div class="top-left-wrapper">
                            <span class="units">Residential</span>
                            <span class="purpose">For Sale</span>
                        </div>
                        <div class="top-right-wrapper">
                            <span class="hot-deal">Hot Deal</span>
                            <span class="like-share">
                                    <i class="icon-heart like"></i>
                                    <i class="icon-share"></i>
                                </span>

                        </div>
                        <img src="imgs/property-img.png" alt="Image slide" width="100%">
                        <div class="slide-propery-details">
                            <h4>Apartment</h4>
                            <p>
                                <del>6,550,500</del>
                                <span>EGP</span>
                            </p>
                            <p class="price">5,550,000
                                <span>EGP</span>
                            </p>
                            <div class="property-small-details pale-btn">
                                    <span class="sq-space">2,583-ft
                                        <sup>2</sup>
                                    </span>
                                <span class="bar-quant">
                                        <i class="icon-bathroom"></i>
                                        <sup>2</sup>
                                    </span>
                                <span class="ber-quant">
                                        <i class="icon-bedroom"></i>
                                        <sup>4</sup>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="property-sq">
                    <div class="propert-wrapper-sq">
                        <div class="top-left-wrapper">
                            <span class="units">Residential</span>
                            <span class="purpose">For Sale</span>
                        </div>
                        <div class="top-right-wrapper">
                            <span class="hot-deal">Hot Deal</span>
                            <span class="like-share">
                                    <i class="icon-heart like"></i>
                                    <i class="icon-share"></i>
                                </span>

                        </div>
                        <img src="imgs/property-img.png" alt="Image slide" width="100%">
                        <div class="slide-propery-details">
                            <h4>Apartment</h4>
                            <p>
                                <del>6,550,500</del>
                                <span>EGP</span>
                            </p>
                            <p class="price">5,550,000
                                <span>EGP</span>
                            </p>
                            <div class="property-small-details pale-btn">
                                    <span class="sq-space">2,583-ft
                                        <sup>2</sup>
                                    </span>
                                <span class="bar-quant">
                                        <i class="icon-bathroom"></i>
                                        <sup>2</sup>
                                    </span>
                                <span class="ber-quant">
                                        <i class="icon-bedroom"></i>
                                        <sup>4</sup>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="profile-your-list">
            <div class="following-test">
                <div class="level-modifiers">

                    <div class="radio">
                        <label>
                            <input type="radio" class="checkbox-circel" id="radio-brokers" name="optradio" checked>&nbsp; &nbsp; &nbsp;Brokers</label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" class="checkbox-circel" id="radio-designer" name="optradio">&nbsp; &nbsp; &nbsp;Designers</label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" class="checkbox-circel" id="radio-developers" name="optradio">&nbsp; &nbsp; &nbsp;Developers</label>
                    </div>
                </div>

                <div>


                    <p> 15 Designer Founds</p>

                </div>

            </div>


            <div class="radio-designer">
                <div class="col-md-4 col-sm-6 col-xs-12 broker-card">
                    <div class="wrapper">
                        <div class="designer-dev  center-block text-center">
                            <div>
                                <div>
                                    <img src="imgs/one.png" alt="" />
                                </div>
                                <div class="designer-title">
                                    <h2>Hussien Naser</h2>
                                    <p>
                                        <i class="icon-search"></i> Verified Broker</p>
                                </div>
                            </div>

                            <div class="follow-broker">
                                <a href="#">Follow Hoda</a>
                            </div>
                        </div>

                        <div class="followers">
                            <div>
                                <p>
                                        <span>
                                            <i class="icon-search"></i>
                                        </span>1,254 Followers</p>
                            </div>
                        </div>

                        <div class="view-Properties">
                            <a href="#">View Hoda’s Protfolio</a>

                        </div>

                    </div>
                </div>



                <div class="col-md-4 col-sm-6 col-xs-12 broker-card">
                    <div class="wrapper">
                        <div class="designer-dev  center-block text-center">
                            <div>
                                <div>
                                    <img src="imgs/one.png" alt="" />
                                </div>
                                <div class="designer-title">
                                    <h2>Hussien Naser</h2>
                                    <p>
                                        <i class="icon-search"></i> Verified Broker</p>
                                </div>
                            </div>

                            <div class="follow-broker">
                                <a href="#">Follow Hoda</a>
                            </div>
                        </div>

                        <div class="followers">
                            <div>
                                <p>
                                        <span>
                                            <i class="icon-search"></i>
                                        </span>1,254 Followers</p>
                            </div>
                        </div>

                        <div class="view-Properties">
                            <a href="#">View Hoda’s Protfolio</a>

                        </div>

                    </div>
                </div>



                <div class="col-md-4 col-sm-6 col-xs-12 broker-card">
                    <div class="wrapper">
                        <div class="designer-dev  center-block text-center">
                            <div>
                                <div>
                                    <img src="imgs/one.png" alt="" />
                                </div>
                                <div class="designer-title">
                                    <h2>Hussien Naser</h2>
                                    <p>
                                        <i class="icon-search"></i> Verified Broker</p>
                                </div>
                            </div>

                            <div class="follow-broker">
                                <a href="#">Follow Hoda</a>
                            </div>
                        </div>

                        <div class="followers">
                            <div>
                                <p>
                                        <span>
                                            <i class="icon-search"></i>
                                        </span>1,254 Followers</p>
                            </div>
                        </div>

                        <div class="view-Properties">
                            <a href="#">View Hoda’s Protfolio</a>

                        </div>
                    </div>

                </div>
            </div>

            <div class="radio-brokers">
                <div class="col-md-4 col-sm-6 col-xs-12 broker-card">
                    <div class="wrapper">
                        <div class="parent-dev">
                            <div class="broker-name">
                                <div>
                                    <img src="imgs/one.png" alt="" />
                                </div>
                                <div class="broker-title">
                                    <h2>Maya Salah</h2>
                                    <p>
                                        <i class="icon-search"></i> Verified Broker</p>
                                </div>
                            </div>
                            <div class="follow-broker">
                                <a href="#">Follow Maya</a>
                            </div>
                        </div>
                        <div class="broker-properties">
                            <div>
                                <span>39</span>
                                <p>
                                    Properties
                                    <br/> Listed
                                </p>
                            </div>
                            <div>
                                <span>39</span>
                                <p>
                                    Days
                                    <br/> on Market
                                </p>
                            </div>
                        </div>
                        <div class="followers">
                            <div>
                                <p>
                                        <span>
                                            <i class="icon-search"></i>
                                        </span>98% Response Rate</p>
                            </div>
                            <div>
                                <p>
                                        <span>
                                            <i class="icon-search"></i>
                                        </span>1,254 Followers</p>
                            </div>
                        </div>
                        <div class="view-Properties">
                            <a href="#">View Maya’s Properties</a>

                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 broker-card">
                    <div class="wrapper">
                        <div class="parent-dev">
                            <div class="broker-name">
                                <div>
                                    <img src="imgs/one.png" alt="" />
                                </div>
                                <div class="broker-title">
                                    <h2>Maya Salah</h2>
                                    <p>
                                        <i class="icon-search"></i> Verified Broker</p>
                                </div>
                            </div>
                            <div class="follow-broker">
                                <a href="#">Follow Maya</a>
                            </div>
                        </div>
                        <div class="broker-properties">
                            <div>
                                <span>39</span>
                                <p>
                                    Properties
                                    <br/> Listed
                                </p>
                            </div>
                            <div>
                                <span>39</span>
                                <p>
                                    Days
                                    <br/> on Market
                                </p>
                            </div>
                        </div>
                        <div class="followers">
                            <div>
                                <p>
                                        <span>
                                            <i class="icon-search"></i>
                                        </span>98% Response Rate</p>
                            </div>
                            <div>
                                <p>
                                        <span>
                                            <i class="icon-search"></i>
                                        </span>1,254 Followers</p>
                            </div>
                        </div>
                        <div class="view-Properties">
                            <a href="#">View Maya’s Properties</a>

                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 broker-card">
                    <div class="wrapper">
                        <div class="parent-dev">
                            <div class="broker-name">
                                <div>
                                    <img src="imgs/one.png" alt="" />
                                </div>
                                <div class="broker-title">
                                    <h2>Maya Salah</h2>
                                    <p>
                                        <i class="icon-search"></i> Verified Broker</p>
                                </div>
                            </div>
                            <div class="follow-broker">
                                <a href="#">Follow Maya</a>
                            </div>
                        </div>
                        <div class="broker-properties">
                            <div>
                                <span>39</span>
                                <p>
                                    Properties
                                    <br/> Listed
                                </p>
                            </div>
                            <div>
                                <span>39</span>
                                <p>
                                    Days
                                    <br/> on Market
                                </p>
                            </div>
                        </div>
                        <div class="followers">
                            <div>
                                <p>
                                        <span>
                                            <i class="icon-search"></i>
                                        </span>98% Response Rate</p>
                            </div>
                            <div>
                                <p>
                                        <span>
                                            <i class="icon-search"></i>
                                        </span>1,254 Followers</p>
                            </div>
                        </div>
                        <div class="view-Properties">
                            <a href="#">View Maya’s Properties</a>

                        </div>

                    </div>
                </div>
            </div>

            <div class="radio-developers">
                <div class="col-md-4 col-sm-6 col-xs-12 broker-card">
                    <div class="wrapper">
                        <div class="parent-dev">
                            <div class="broker-name">
                                <div>
                                    <img src="imgs/one.png" alt="" />
                                </div>
                                <div class="developer-title">
                                    <h2>Maya Salah</h2>
                                    <p>
                                        <i class="icon-search"></i> Verified Developer</p>
                                </div>
                            </div>
                            <div class="follow-broker">
                                <a href="#">Follow Maya</a>
                            </div>
                        </div>
                        <div class="broker-properties">
                            <div>
                                <span>39</span>
                                <p>
                                    Properties
                                    <br/> Listed
                                </p>
                            </div>
                            <div>
                                <span>15</span>
                                <p>
                                    Days
                                    <br/> on Market
                                </p>
                            </div>
                        </div>
                        <div class="followers">
                            <div>
                                <p>
                                        <span>
                                            <i class="icon-search"></i>
                                        </span>98% Response Rate</p>
                            </div>
                            <div>
                                <p>
                                        <span>
                                            <i class="icon-search"></i>
                                        </span>1,254 Followers</p>
                            </div>
                        </div>
                        <div class="view-Properties">
                            <a href="#">View Maya’s Properties</a>

                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 broker-card">
                    <div class="wrapper">
                        <div class="parent-dev">
                            <div class="broker-name">
                                <div>
                                    <img src="imgs/one.png" alt="" />
                                </div>
                                <div class="developer-title">
                                    <h2>Maya Salah</h2>
                                    <p>
                                        <i class="icon-search"></i> Verified Developer</p>
                                </div>
                            </div>
                            <div class="follow-broker">
                                <a href="#">Follow Maya</a>
                            </div>
                        </div>
                        <div class="broker-properties">
                            <div>
                                <span>39</span>
                                <p>
                                    Properties
                                    <br/> Listed
                                </p>
                            </div>
                            <div>
                                <span>15</span>
                                <p>
                                    Days
                                    <br/> on Market
                                </p>
                            </div>
                        </div>
                        <div class="followers">
                            <div>
                                <p>
                                        <span>
                                            <i class="icon-search"></i>
                                        </span>98% Response Rate</p>
                            </div>
                            <div>
                                <p>
                                        <span>
                                            <i class="icon-search"></i>
                                        </span>1,254 Followers</p>
                            </div>
                        </div>
                        <div class="view-Properties">
                            <a href="#">View Maya’s Properties</a>

                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 broker-card">
                    <div class="wrapper">
                        <div class="parent-dev">
                            <div class="broker-name">
                                <div>
                                    <img src="imgs/one.png" alt="" />
                                </div>
                                <div class="developer-title">
                                    <h2>Maya Salah</h2>
                                    <p>
                                        <i class="icon-search"></i> Verified Developer</p>
                                </div>
                            </div>
                            <div class="follow-broker">
                                <a href="#">Follow Maya</a>
                            </div>
                        </div>
                        <div class="broker-properties">
                            <div>
                                <span>39</span>
                                <p>
                                    Properties
                                    <br/> Listed
                                </p>
                            </div>
                            <div>
                                <span>15</span>
                                <p>
                                    Days
                                    <br/> on Market
                                </p>
                            </div>
                        </div>
                        <div class="followers">
                            <div>
                                <p>
                                        <span>
                                            <i class="icon-search"></i>
                                        </span>98% Response Rate</p>
                            </div>
                            <div>
                                <p>
                                        <span>
                                            <i class="icon-search"></i>
                                        </span>1,254 Followers</p>
                            </div>
                        </div>
                        <div class="view-Properties">
                            <a href="#">View Maya’s Properties</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="profile-profile">
            <h4>Edit your profile Data</h4>
            <form class="form custom-form row">
                <div class="col-md-6  profile-custom-col">
                    <div class="form-group col-md-6 has-error custom-input-right">
                        <input type="email" class="form-control  " placeholder="Abdallah">
                        <p class="validation-text-custom">test</p>
                    </div>
                    <div class="form-group custom-input-left col-md-6 has-error ">
                        <input type="email" class="form-control  " placeholder="Salam">
                        <p class="validation-text-custom">test</p>
                    </div>


                    <div class="form-group  has-error ">
                        <input type="email" class="form-control  " placeholder="abdallahsalam@me.com">
                        <p class="validation-text-custom">test</p>
                    </div>


                    <div class="form-group custom-input-right col-md-6 has-error">
                        <select class="form-control  property-select">
                            <option>Egypt</option>
                            <option>option</option>
                            <option>option</option>
                            <option>option</option>
                            <option>option</option>
                        </select>
                        <p class="validation-text-custom">test</p>
                    </div>


                    <div class="form-group custom-input-left col-md-6 has-error">
                        <select class="form-control property-select">
                            <option>Cairo</option>
                            <option>option</option>
                            <option>option</option>
                            <option>option</option>
                            <option>option</option>
                        </select>
                        <p class="validation-text-custom">test</p>
                    </div>



                </div>
                <div class="col-md-6">
                    <div class="small-form">
                        <p>Change Password?</p>
                        <p>Upload Your Avatar</p>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group  has-error custom-input-right">
                            <input type="password" class="form-control  " placeholder="Old Password">
                            <p class="validation-text-custom">test</p>
                        </div>
                        <div class="form-group  has-error custom-input-right">
                            <input type="password" class="form-control  " placeholder="New Pasword">
                            <p class="validation-text-custom">test</p>
                        </div>
                        <div class="form-group  has-error custom-input-right">
                            <input type="password" class="form-control  " placeholder="Retype New Pasword">
                            <p class="validation-text-custom">test</p>
                        </div>
                    </div>

                    <div class="col-md-4">

                        <div class="col-md-12 col-sm-12 col-xs-12 img-holder">
                            <div class=" upload-img-holder upload-img-holder-custom">
                                <div class="row-wrapper row-wrapper-custom row">

                                    <div class="col-md-12 col-sm-12 col-xs-12 img-holder">
                                        <div class="upload-img">
                                            <div class="validation"></div>
                                            <img src="" alt="" id="img">
                                            <input type="file" id="upload1" class="inputfile" />
                                            <label id="test" for="upload1"> </label>
                                            <i class="icon-search" hidden></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <input type="submit" class="btn custom-submit" value="Update">

            </form>

        </div>


@endsection