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



Route::get('/' ,'PagesController@home');
Route::get('/single-apartman/{slug}' ,'PagesController@singleApartman');
Route::get('/single-hotel/{slug}' ,'PagesController@singleHotel');
Route::get('/single-region/{slug}' ,'PagesController@singleRegion');
Route::get('/single-region/{slug}/{type}/' ,'PagesController@singleRegionType');
Route::get('/single-city/{slug}' ,'PagesController@singleCity');
Route::get('/single-city/{slug}/{type}' ,'PagesController@singleCity');
Route::get('/blog' ,'PagesController@blog');
Route::get('/last-minute' ,'PagesController@LastMinute');
Route::get('/blog-destination/{slug}', 'PagesController@destination');
Route::get('/contact' ,'PagesController@contact');
Route::post('/contact/submit' ,'MessagesController@submit');

        //route admin

Route::group(
    ['prefix' => 'admin', 'namespace' => 'admin'], function(){
    Route::get('/' ,'dashboardController@index');
    Route::get('/regions/deleted','RegionController@deletedRegions');
    Route::resource('/regions' ,'RegionController');
    Route::get('/regions-city/deleted', 'RegionCityController@deletedCity');
    Route::resource('/regions-city' ,'RegionCityController');
    Route::get('apartmans/deleted', 'ApartmansController@deletedApartmans');
    Route::resource('/apartmans', 'ApartmansController');
    Route::get('/hotels/deleted', 'HotelsController@deletedHotels');
    Route::resource('/hotels', 'HotelsController');
    Route::get('/blog/deleted', 'BlogController@deletedBlog');
    Route::resource('/blog', 'BlogController');
    Route::get('/last-minute/deleted', 'LastMinuteController@deletedLastMinute');
    Route::resource('/last-minute', 'LastMinuteController');
    Route::resource('/slider', 'SliderController');
    Route::resource('/slider', 'SliderController');

//    destination
    Route::group(
        ['prefix' => 'blog/{blog_id}/destination'], function(){
        Route::get('/', 'DestinationController@index');
        Route::get('/deleted', 'DestinationController@deletedDestinations');
        Route::get('/create', 'DestinationController@create' );
        Route::post('/', 'DestinationController@store');
        Route::get('/{id}/edit', 'DestinationController@edit');
        Route::put('/{id}', 'DestinationController@update');
        Route::delete('/{id}', 'DestinationController@destroy');
        //  destination images

            Route::group(
            ['prefix' => '{destination_id}/images-destinations'], function(){
                Route::get('/', 'DestinationImagesController@index');
                Route::get('/create', 'DestinationImagesController@create');
                Route::post('/', 'DestinationImagesController@store');
                Route::delete('/{id}', 'DestinationImagesController@destroy');
            });
    });



//  apartmans images
    Route::group(['prefix' => 'apartmans/{apartmans_id}/images-apartmans'], function () {
        


        Route::get('/','ApartmansImagesController@index');
        Route::get('/create','ApartmansImagesController@create');
        Route::post('/','ApartmansImagesController@store');
        Route::delete('/{id}','ApartmansImagesController@destroy');
    });


    //    hotels image
  Route::group(['prefix' => 'hotels/{hotel_id}/images-hotels'], function () {

      Route::get('/', 'HotelsImagesController@index');
      Route::get('/create', 'HotelsImagesController@create');
      Route::post('/', 'HotelsImagesController@store');
      Route::delete('/{id}', 'HotelsImagesController@destroy');

  });




});

