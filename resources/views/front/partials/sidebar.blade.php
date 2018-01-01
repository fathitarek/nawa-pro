<!--======== start sibe-bar ======== -->

<div class="side-bar">
    <div class=" side-bar-item side-bar-item-1 filter">
        <a href="#">
            <i class="icon-filter"></i>
            <p>Filtering</p>
        </a>
    </div>

    <div class=" side-bar-item ">
        <a href="#" class="search side-bar-item">
            <i class="icon-search"></i>
            <p>Search</p>
        </a>
    </div>
    <div class=" side-bar-item">
        <a href="#">
            <i class="icon-new_launches"></i>
            <p>New
                <br/>Launches</p>
            <span id="shadow"></span>
        </a>
    </div>
    <div class=" side-bar-item calc">
        <a href="#">
            <i class="icon-calculator"></i>
            <p>Property
                <br/> Calculator</p>
            <span id="shadow"></span>
        </a>
    </div>
    <div class=" side-bar-item">
        <a href="#">
            <i class="icon-calculator"></i>
            <p>Latest
                <br/>News</p>
            <span id="shadow"></span>

        </a>
    </div>

    <div class="lang">
        <p class="active-lang language">
            <a href="#"> EN</a>
        </p>
        <span></span>
        <p class="language">
            <a href="#"> AR</a>
        </p>
    </div>

    <div class="loading-more">
        <p>
            <a class="next-page">
                <i class="icon-loading"></i>
        <p>Scroll to load more</p>
        </a>
        </p>
    </div>
</div>
<!--==========  start responsive side-bar =========-->
<div class="responsive-side-bar">
    <div class="filter">
        <a href="#">
            <i class="icon-filter"></i>
            <p>Filtering</p>
        </a>
    </div>
    <div>
        <a href="#" class="search side-bar-item">
            <i class="icon-search"></i>
            <p>Search</p>
        </a>
    </div>
    <div>
        <a href="#">
            <i class="icon-new_launches"></i>
            <p>New
                <br/>Launches</p>
        </a>
    </div>
    <div class="calc">
        <a href="#">
            <i class="icon-calculator "></i>
            <p>Property
                <br/> Calculator</p>
        </a>
    </div>
    <div>
        <a href="#">
            <i class="icon-calculator"></i>
            <p>Latest
                <br/>News</p>

        </a>
    </div>
    <div class="pro-services" id="pro-sevices">
        <a href="#">
            <i class="icon-premium-services hand-icon"></i>
            <p>Pro Services</p>
        </a>
    </div>
    <div class="lang">
        <p class="active-lang language">
            <a href="#"> EN</a>
        </p>
        <span></span>
        <p class="language">
            <a href="#"> AR</a>
        </p>
    </div>
</div>
<!--==========  end responsive side-bar =========-->

<!--=============== side-bar content  ==========-->
<!-- ======= start Filteration Menu ======= -->
<section id="filteration" hidden>
    <form action='{{ route('property-get-filter') }}' method='get'>
    <div class="big-overlay"></div>
    <div class="filter-list">
        <div class="filteration-container">
            <div class="header-container">
                <h2>find your property</h2>
                <a href="#">
                    <i class="icon-back-arrow"></i>
                </a>
            </div>
            <div class="filters-container">
                @php
                $results=getMyAllOptions();
                @endphp
                <div class="filter-options">
                    <p>Property Type</p>
                    <div class="filter-menu">
                        <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Property Type
                            <i class="icon-down-arrow"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            @foreach($results['property_types'] as $property_type)
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="radio" name="property_type_id" value='{{ $property_type['id'] }}' />{{ $property_type['text'] }}</label>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                <div class="filter-options">
                    <p>Property Purpose</p>
                    <div class="filter-menu">
                        <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Property Purpose
                            <i class="icon-down-arrow"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                             @foreach($results['purpose_postings'] as $purpose_posting)
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="radio" name="purpose_posting_id" value='{{ $purpose_posting['id'] }}' />{{ $purpose_posting['text'] }}</label>
                            </li>
                            @endforeach
                            
                            
                           
                        </ul>
                    </div>
                </div>
                <div class="filter-options">
                    <p>Property Area</p>
                    <div class="filter-menu">
                        <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Property Area
                            <i class="icon-down-arrow"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                           
                            @foreach($results['districts'] as $district)
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" name='district_id' value='{{ $district['id'] }}' type="radio" />{{ $district['text'] }}</label>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                <div class="filter-options">
                    <p>Owner Level</p>
                    <div class="filter-menu">
                        <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Owner Level
                            <i class="icon-down-arrow"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                           
                           @foreach($results['degree_ownerships'] as $degree_ownership)
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" name='degree_ownership_id' value='{{ $degree_ownership['id'] }}' type="radio" />{{ $degree_ownership['text'] }}</label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="filter-options">
                    <p>Unit Status</p>
                    <div class="filter-menu">
                        <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unit Status
                            <i class="icon-down-arrow"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                             @foreach($results['property_statuses'] as $property_status)
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" name='property_status_id' value='{{ $property_status['id'] }}' type="radio" />{{ $property_status['text'] }}</label>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                
                
                <div class="filter-options">
                    <p>Price Range</p>
                    <div id="slider-range"></div>
                    <div class="amount-container">
                        <input class="amount-input" type="text" name='min_price' id="min-amount"> -
                        <input class="amount-input" type="text" name='max_price' id="max-amount">
                    </div>
                </div>
                <input type="submit" id="filter" value="Filter">
            </div>
        </div>
    </div>
    </form>
</section>
<!-- ======= search Menu ======= -->

<section id="search" hidden>
                <div class="big-overlay"></div>
                <div class="searching">
                    <div class="search-container">
                        <div class="search-heading">
                            <h2>Enter an address, neighborhood, city or ZIP code</h2>
                            <a href="#">
                                <i class="icon-back-arrow"></i>
                            </a>
                        </div>
                        <div class="search-items">
                            <h2>search by:</h2>
                            <div class="search-filters">
                                <input class="checkbox-search search-checked" id='developers' type="checkbox" value="1">
                                <label for="checkbox">Developers</label>
                                <input class="checkbox-search search-checked" id='properties' type="checkbox" value="1">
                                <label for="checkbox">Properties</label>
                                <input class="checkbox-search search-checked" id='brokers' type="checkbox" value="1">
                                <label for="checkbox">Brokers</label>
                                <input class="checkbox-search" type="checkbox" id="all-the-website" value="All the website">
                                <label for="checkbox">All the website</label>
                            </div>
                        </div>
                        <div class="search-bar">
                            <input id="search-field" type="text" placeholder="Write your search keyword">
                            <i class="icon-search search-input"></i>
                        </div>
                        <div class="search-result">
    
                           
                            
                            
                        </div>
                    </div>
                </div>
            </section>
<!-- ===== start calculater======  -->
<section id="calculator" hidden>
    <div class="big-overlay"></div>
    <div class="calculator-list">
        <div class="calculator-container">
            <div class="header-container  header-container-calculatera ">
                <h2 class="calculator-header">PROPERTY VALUATION CALCULATOR</h2>
                <a href="#">
                    <i class="icon-back-arrow"></i>
                </a>
            </div>
            <div class="calculator-options">
                <div class="calculator-menu">
                    <p> Property Type</p>
                    <div class="filter-menu">
                        <button id="property-type" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown trigger
                            <i class="icon-down-arrow"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="property-type">
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                        </ul>
                    </div>
                </div>



                <div class="calculator-menu">
                    <p> Property Status</p>
                    <div class="filter-menu">
                        <button id="property-status" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Finished
                            <i class="icon-down-arrow"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="property-status">
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />&nbsp;resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />&nbsp;resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />&nbsp;resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />&nbsp;resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />&nbsp;resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />&nbsp;resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />&nbsp;resedintal</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="calculator-options">
                <div class="calculator-menu">
                    <p> Property Location</p>
                    <div class="filter-menu">
                        <button id="property-location" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p> New Cairo</p>
                            <i class="icon-down-arrow"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="property-location">
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                        </ul>
                    </div>
                </div>



                <div class="calculator-menu">
                    <p> # Of Bedrooms</p>
                    <div class="filter-menu">
                        <button id="bedroom-n" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p> 5</p>
                            <i class="icon-down-arrow"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="bedroom-n">
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />1</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />2</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />3</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />4</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />5</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />6</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />7</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>






            <div class="calculator-options">
                <div class="calculator-menu">
                    <p> Land Area (m2)</p>
                    <div class="filter-menu">
                        <button id="land-area" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p> N/A(m
                                <sup>2</sup>)</p>
                            <i class="icon-down-arrow"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="land-area">
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" />resedintal</label>
                            </li>
                        </ul>
                    </div>
                </div>



                <div class="calculator-menu">
                    <p> # Of Bathrooms</p>
                    <div class="filter-menu">
                        <button id="bathroom-n" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>4</p>
                            <i class="icon-down-arrow"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="bathroom-n">
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />1</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />2</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />3</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />4</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />5</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />6</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />7</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="calculator-options">
                <div class="calculator-menu">
                    <p> Built Area (m2)</p>
                    <div class="filter-menu">
                        <button id="built-area" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>270(m
                                <sup>2</sup>)</p>
                            <i class="icon-down-arrow"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="built-area">
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                        </ul>
                    </div>
                </div>



                <div class="calculator-menu">
                    <p> Expected Delivery</p>
                    <div class="filter-menu">
                        <button id="expexted-delivery" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>Delivered</p>
                            <i class="icon-down-arrow"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="expexted-delivery">
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="calculator-options">
                <div class="calculator-menu">
                    <p> Garden/ Roof Area (m2)</p>
                    <div class="filter-menu">
                        <button id="grand-roof" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>N/A(m
                                <sup>2</sup>)</p>
                            <i class="icon-down-arrow"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="grand-roof">
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                        </ul>
                    </div>
                </div>



                <div class="calculator-menu">
                    <p> Developer</p>
                    <div class="filter-menu">
                        <button id="developer" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>private
                            <p>
                                <i class="icon-down-arrow"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="developer">
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="calculator-options">
                <div class="calculator-menu">
                    <p> Date Of Purchase</p>
                    <div class="filter-menu">
                        <button id="date-of-purchase" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>June 2009
                            <p>
                                <i class="icon-down-arrow"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="date-of-purchase">
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />resedintal</label>
                            </li>
                            <li>
                                <label>
                                    <input class="checkbox checkbox-1" type="checkbox" />&nbsp;resedintal</label>
                            </li>
                        </ul>
                    </div>
                </div>



                <div>
                    <a href="#" class="estimate-btn">
                        <i class="icon-email"> </i>ESTIMATE</a>
                </div>
            </div>


            <div class="calculator-options ole">
                <a href="#"> 0LE</a>
            </div>


            <div class="calculator-options calculator-text">
                * The Calculated property value is only an estimate and might change depending on
                <br/>other market factors and conditions at the time of selling or buying.
            </div>


        </div>
    </div>
</section>
<!-- ===== end calculater======  -->

<!--========== end side-bar =========-->
