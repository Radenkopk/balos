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
Route::get('/single-region/{slug}/{type}' ,'PagesController@singleRegionType');
Route::get('/single-city/{slug}' ,'PagesController@singleCity');
Route::get('/blog' ,'PagesController@blog');
Route::get('/last-minute' ,'PagesController@LastMinute');
Route::get('/blog-destination/{slug}', 'PagesController@destination');
Route::get('/contact' ,'PagesController@contact');
Route::post('/contact/submit' ,'MessagesController@submit');

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

//    destination

    Route::get('blog/{blog_id}/destination', 'DestinationController@index');
    Route::get('blog/{blog_id}/destination/deleted', 'DestinationController@deletedDestinations');
    Route::get('blog/{blog_id}/destination/create', 'DestinationController@create' );
    Route::post('blog/{blog_id}/destination', 'DestinationController@store');
    Route::get('blog/{blog_id}/destination/{id}/edit', 'DestinationController@edit');
    Route::put('blog/{blog_id}/destination/{id}', 'DestinationController@update');
    Route::delete('blog/{blog_id}/destination/{id}', 'DestinationController@destroy');

//  apartmans images

    Route::get('apartmans/{apartmans_id}/images-apartmans','ApartmansImagesController@index');
    Route::get('apartmans/{apartmans_id}/images-apartmans/create','ApartmansImagesController@create');
    Route::post('apartmans/{apartmans_id}/images-apartmans','ApartmansImagesController@store');
    Route::delete('apartmans/{apartmans_id}/images-apartmans/{id}','ApartmansImagesController@destroy');


//    hotels image
    Route::get('hotels/{hotel_id}/images-hotels', 'HotelsImagesController@index');
    Route::get('hotels/{hotel_id}/images-hotels/create', 'HotelsImagesController@create');
    Route::post('hotels/{hotel_id}/images-hotels', 'HotelsImagesController@store');
    Route::delete('hotels/{hotel_id}/images-hotels/{id}', 'HotelsImagesController@destroy');


});

