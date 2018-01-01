<!--=====start header =====-->
<div id="header-wrapper">
    <header class="header">
        <div>
            <div class="lang">
                <p class="active-lang language">
                    <a href="#"> EN</a>
                </p>
                <span></span>
                <p class="language">
                    <a href="#"> AR</a>
                </p>
            </div>
            <div class="logo">
                <a href="{{url('/')}}"> <img class="img-responsive" src="{{asset('/front/imgs/logo.png')}}" alt="sell-by-rent-logo" /> </a>
            </div>
            <div class="header-main">
                <div class="header-sub">
                    <div class="header-left-top">
                        @auth
                            @if(Auth::user()->user_type_id==1)
                            <div>
                                <a href="#" class="btn-dev-zone">
                                    <span> Developers Zone</span> Create your page now</a>
                            </div>
                            @endif
                            <div class="add-property">
                            <a href="{{url('/property/step1')}}" class="btn-add-prop"> Add New Property</a>
                            <a href="#">
                                <i class="icon-add_btn"></i>
                            </a>
                            </div>
                        @else
                            <div></div>
                            <div class="add-property">
                                <a href="{{url('/auth')}}" class="btn-add-prop"> Add New Property</a>
                                <a href="#">
                                    <i class="icon-add_btn"></i>
                                </a>
                            </div>
                        @endauth
                    </div>
                    <div class="header-right-top">
                            <span>
                                <p> Hot offers</p>
                            </span>
                        @auth
                        <span class="stick"></span>
                        <span>
                                <i class="icon-heart"></i>
                                <p>{{ getUserFavouritesCount() }} Fav Properties</p>
                        </span>
                        @endauth
                        <!-- <span class="stick"></span>
                        <span>
                            <span class="red-ball"></span>

                            <i class="icon-notifications"></i>
                        </span> -->
                    </div>
                </div>
                <div class="header-sub">
                    <div class="header-left-bottom">
                        <ul>
                            <li class="active-nav">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a href="#">All Properties</a>
                            </li>
                            <li>
                                <a href="{{url('developers')}}">Our Developers</a>
                            </li>
                            <li>
                                <a href="{{url('brokers')}}">Our brokers</a>
                            </li>
                            <li class="dropdown-2">
                                <a href="#" class="dropdown-toggle">
                                    <i class="icon-premium-services hand-icon"></i> Our services
                                    <i class="icon-down-arrow down-arrow"></i>
                                </a>
                            </li>
                        </ul>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>
                                    <div>
                                        <a href="{{('/finance')}}">
                                            <i class="icon-dock-funds-investments"></i>
                                            <p> Finance&
                                                <br/> mortgage</p>
                                        </a>
                                    </div>
                                </th>
                                <th>
                                    <div>
                                        <a href="{{('/interior-design')}}">
                                            <i class="icon-dock-interior-designers"></i>
                                            <p>Interior Designers &
                                                <br/> Architects</p>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div>
                                        <a href="{{url('/construction')}}">
                                            <i class="icon-dock-brokers"></i>
                                            <p>Brokers
                                                <br/> & Consultants</p>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <a href="#">
                                            <i class="icon-dock-finishing-cost"></i>
                                            <p>Building &
                                                <br/> Finishing Coast</p>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <a href="{{url('/legalAdvice')}}">
                                            <i class="icon-dock-legal-advice"></i>
                                            <p>Legal Advice
                                                <br/> & services</p>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <a href="{{url('/facility')}}">
                                            <i class="icon-dock-advice"></i>
                                            <p>Facility
                                                <br/> Management</p>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="header-right">
                        @guest
                        <div class="header-right-bottom">
                            <a href="{{url('/signUp')}}" class="btn-register">Register</a>

                            <a href="{{url('/signIn')}}" class="btn-login active-login">Login</a>
                        </div>
                        @else
                        <div class="message-wellcom" style="display: flex;">
                            <div>
                                @php
                                if (str_contains(Auth::user()->name, ' ')){
                                $username = explode(' ', Auth::user()->name );
                                $username = $username[0];
                                }
                                else{
                                $username = Auth::user()->name;
                                }
                                @endphp
                                <p>Welcome! {{$username}}</p>
                                <a href="{{route('profile-index', Auth::id())}}">My Profile</a>
                                <span></span>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log Out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                            <div>

                                @if(getMyAllUnreadMessagesCount() > 0)
                                <span class="email-not" ></span>
                                <i class="icon-email " id="have-message"></i>
                                @else
                                <i class="icon-email " id="messg"></i>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </header>
    <div class="table-holder">
        <span class="close">x</span>
        <table class="table2">
            <thead>
            <tr>
                <th>
                    <div>
                        <a href="#">
                            <i class="icon-dock-funds-investments"></i>
                            <p> Funds&
                                <br/> Investment</p>
                        </a>
                    </div>
                </th>
                <th>
                    <div>
                        <a href="#">
                            <i class="icon-dock-interior-designers"></i>
                            <p>Interior Designers &
                                <br/> Architects</p>
                        </a>
                    </div>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div>
                        <a href="#">
                            <i class="icon-dock-brokers"></i>
                            <p>Brokers
                                <br/> & Consultants</p>
                        </a>
                    </div>
                </td>
                <td>
                    <div>
                        <a href="#">
                            <i class="icon-dock-finishing-cost"></i>
                            <p>Building &
                                <br/> Finishing Coast</p>
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div>
                        <a href="#">
                            <i class="icon-dock-legal-advice"></i>
                            <p>Legal Advice
                                <br/> & services</p>
                        </a>
                    </div>
                </td>
                <td>
                    <div>
                        <a href="#">
                            <i class="icon-dock-advice"></i>
                            <p>Insurance Advice
                                <br/> & Policy</p>
                        </a>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- start  massege popup -->
    @if(getMyAllUnreadMessagesCount() > 0)
    <div class="masseage-holder show-popup">
        <div class="massege-header">
            <div>
                <p>You have
                    <span>{{getMyAllUnreadMessagesCount()}}</span> New Messages</p>
            </div>
            <div class=" btn-recover-pw">
                <a href="{{route('messages-new')}}">Send New Message</a>
            </div>
        </div>
        @php
            $myLastUnreadPublishers = getMyLastUnreadPublishers();
            foreach ($myLastUnreadPublishers as $myLastUnreadPublisher){
                $myLastUnreadPublisher->lastMessage = getLastMessage($myLastUnreadPublisher->id, Auth::id());
            }
        @endphp
        @foreach($myLastUnreadPublishers as $myLastUnreadPublisher)
        <a href="{{route('messages-inbox-view', $myLastUnreadPublisher->id)}}">
        <div class="message-item">
            <div class="profile-data">
                <div>
                    <span class="red-span"></span>
                    <span>
                            <img src="imgs/one.png" alt="" /> </span>
                    <span>{{$myLastUnreadPublisher->name}}</span>
                </div>
                <div>
                    @php
                        $timestamp = explode(' ', $myLastUnreadPublisher->lastMessage[0]['created_at']);
                    @endphp
                    <p>{{date('D, M d, Y', strtotime($timestamp[0]))}}</p>
                    <p>{{date('h:i A', strtotime($timestamp[1]))}}</p>
                </div>
            </div>
            <div class="message-content">
                {{str_limit($myLastUnreadPublisher->lastMessage[0]['body'], 40)}}
            </div>
        </div>
        </a>
        @endforeach
        <div class="message-footer">
            <a href="{{route('messages-inbox-index')}}">View all Messages </a>
        </div>
    </div>
    @else
    <div class="have-no-message">
        <img src="imgs/empty-inbox.png" alt="" />
        <h2>Set back and relax</h2>
        <h4>Your Inbox is Clean</h4>
        <div>
            <div class="message-footer">
                <a href="{{route('messages-inbox-index')}}">View all Messages </a>
            </div>
            <div class=" btn-recover-pw">
                <a href="{{route('messages-new')}}">Send New Message</a>
            </div>
        </div>
    </div>
    @endif
    <!-- end message popup  -->


    <!-- start responsive header -->
    <header class="responsive-header">
        <div class="responsive-header-top">
            <div class="re-header-left">
                <img class="img-responsive logo-img" src="imgs/logo.png" alt="sell-by-rent-logo" />
            </div>
            <div class="re-header-right">
                <p>
                    <i class="icon-heart like"></i> {{ getUserFavouritesCount() }} Fav Properties</p>
                <!-- <span class="stick"></span>
                <p>
                    <span class="red-ball"></span>
                    <i class="icon-notifications"></i>
                </p> -->
                <span class="stick"></span>

                <a href="#" class="menu-btn">
                    <div id="nav-icon4">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>

            </div>
            <div class="responsive-menu">
                <ul>
                    <li class="active-li">
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="#">All Properties</a>
                    </li>
                    <li>
                        <a href="/developers">Our Developers</a>
                    </li>
                    <li>
                        <a href="#">Hot Offers</a>
                    </li>
                    <li>
                        <a href="#">Terms and Conditions</a>
                    </li>
                    <li>
                        <a href="#">About sell X rent</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <li>
                        <a href="#">Help</a>
                    </li>
                </ul>
                <div class="social-btns">
                    <a href="#" class="btn-social">
                        <i class="icon-fb"></i>
                    </a>
                    <a href="#" class="btn-social">
                        <i class="icon-twitter"></i>
                    </a>
                    <a href="#" class="btn-social">
                        <i class="icon-gplus"></i>
                    </a>
                    <a href="#" class="btn-social">
                        <i class="icon-youtube"></i>
                    </a>
                </div>
                <div class="re-btns">
                    <a href="login-page-2.html" class="btn-register">Register</a>
                    <a href="login-page-1.html" class="btn-login">Login</a>
                </div>
                <div class="responsive-header-bottom">
                    <div class="re-header-bottom-left">

                        <div>
                            <a href="#" class="btn-dev-zone">
                                <span> Developers Zone</span> Create your page now</a>
                        </div>

                        <div class="add-property">
                            <a href="add-property-1.html" class="btn-add-prop"> Add New Property</a>
                            <a href="#">
                                <i class="icon-add_btn"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div>All rights reserved for sellXrent @2017</div>
            </div>
        </div>
    </header>
    <!-- end responsive header -->
</div>
<div class="big-overlay"></div>
<!--======== end header =======-->

