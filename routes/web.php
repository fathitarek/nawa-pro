<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    echo Config::get('app.url');
    die();
    return view('welcome');
});

Route::get('/','HomeController@index')->name('home-page');

Route::get('/test', function () {
    return view('front.home.main');
});

Route::get('/registration', function () {
    return view('front.login.register');
});
Route::get('/result/home','HomeController@loadResult')->name('property-load-result');
Route::get('/search/name','HomeController@searchResult')->name('get-search-result');
Route::group(['namespace' => 'Front'], function () {
    Route::get('/property/step1', 'PropertyController@viewStep1')->name('property-view-step1');
    Route::post('/property/post1', 'PropertyController@postStep1')->name('property-post-step1');
    Route::get('/property/step2/{title}', 'PropertyController@viewStep2')->name('property-view-step2');
    Route::get('/property/step3/{title}', 'PropertyController@viewStep3')->name('property-view-step3');
    Route::post('/property/post2', 'PropertyController@postStep2')->name('property-post-step2');
    Route::post('/property/post3', 'PropertyController@postStep3')->name('property-post-step3');
    Route::get('/filter/property','PropertyController@getFilter')->name('property-get-filter');
    Route::get('/single/property/{title}', 'PropertyController@viewDetails')->name('property-view-details');
    Route::get('/user-follow', 'BrokerController@follow')->name('user-follow');

    Route::get('/developer/step1', 'DeveloperController@viewStep1')->name('developer-step1-details');
    Route::get('/developer/step2', 'DeveloperController@viewStep2')->name('developer-step2-details');
    /*
    * Start Messaging System...
    * */
    //Route::get('/messages', 'MessageController@index')->name('messages-index');
    // [Inbox]
    Route::get('/messages-inbox', 'MessageController@inboxIndex')->name('messages-inbox-index');
    Route::get('/messages-inbox/{from_user}', 'MessageController@inboxView')->name('messages-inbox-view');
    // [Sent]
    Route::get('/messages-sent', 'MessageController@sentIndex')->name('messages-sent-index');
    Route::get('/messages-sent/{from_user}', 'MessageController@sentView')->name('messages-sent-view');
    // [Trash]
    Route::get('/messages-trash', 'MessageController@trashIndex')->name('messages-trash-index');
    Route::get('/messages-trash/{from_user}', 'MessageController@trashView')->name('messages-trash-view');
    // [Bulk Delete]
    Route::delete('/messages-soft-delete', 'MessageController@softDelete')->name('messages-soft-delete');
    Route::delete('/messages-hard-delete', 'MessageController@hardDelete')->name('messages-hard-delete');
    // [New Message]
    Route::get('/messages-new', 'MessageController@newMessage')->name('messages-new');
    Route::post('/messages-publish', 'MessageController@publishNewMessage')->name('messages-new-publish');
    /*
    * End Messaging System...
    * */

    /*
    * Start User Profile...
    * */
    Route::get('/user-profile', 'ProfileController@index')->name('profile-index');
    Route::get('/user-profile/{id}/edit', 'ProfileController@edit')->name('profile-edit');
    Route::patch('/user-profile/{id}/update', 'ProfileController@update')->name('profile-update');
    /*
    * End User Profile...
    * */

    Route::get('/property','PropertyController@view')->name('property-view');

    Route::get('/interior-design','InteriorDesignController@index')->name('interior-design');
    Route::get('/interior-design/{id}','InteriorDesignController@find')->name('interior-design');
    Route::get('/signIn', function (){return view('front.login.index');})->name('home-signIn');
    Route::get('/developers','DeveloperController@index');
    Route::get('/brokers','BrokerController@index');
    Route::get('/brokers-follow/{id}','BrokerController@follow');
    Route::get('/construction','ConstructionsController@index');
    Route::get('/finance','FinanceController@index');
    Route::get('/legalAdvice','LegalAdviceController@index');
    Route::get('/facility','FacilityController@index');
    Route::get('/protfolio/{id}','ProtfolioController@index');
    Route::get('/signUp','RegisterPageController@index');
    Route::get('/get_districts/{city_id}', 'RegistrationController@getDistricts');

    //Route::get('/get_districts/{city_id}','Auth\RegisterController@getDistricts');

    Route::get('/property', 'PropertyController@view')->name('property-view');

    Route::get('/interior-design', 'InteriorDesignController@index')->name('interior-design');
    Route::get('/interior-design/{id}', 'InteriorDesignController@find')->name('interior-design');
    Route::get('/auth', function () {
        return view('front.login.index');
    });
    Route::get('/developers', 'DeveloperController@index');
});
Route::post('admin/override/login', 'Voyager\VoyagerAuthController@postLogin')->name('admin-login-override');
Route::group(['prefix' => 'admin', 'middleware' => 'admin.user.override'], function () {
    Route::get('/datatables-city', 'Datatables\CityController@index')->name('city-datatable-index');

    Route::get('/datatables-contact', 'Datatables\ContactController@index')->name('contact-datatable-index');
    Route::get('/datatables-services', 'Datatables\ServicesController@index')->name('services-datatable-index');
    Route::get('/datatables-userTypes', 'Datatables\UserTypeController@index')->name('userTypes-datatable-index');
    Route::get('/datatables-interior-designers', 'Datatables\InteriorDesignersController@index')->name('interiorDesigners-datatable-index');


    Route::get('/datatables-properties', 'Datatables\PropertiesController@index')->name('properties-datatable-index');
    Voyager::routes();
});


Route::post('login', 'Auth\LoginController@login');
Route::post('register', 'Auth\RegisterController@register');

//Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');
//
//Route::get('auth/google', 'Auth\LoginController@google_redirectToProvider');
//Route::get('auth/google/callback', 'Auth\LoginController@google_handleProviderCallback');




//Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
    Route::get('auth/{service}', 'Auth\LoginController@redirectToProvider');
    Route::get('auth/{service}/callback', 'Auth\LoginController@handleProviderCallback');
