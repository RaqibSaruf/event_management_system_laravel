<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'EventController@index')->name('home');
Route::get('/dashboard', 'EventController@dashboard')->name('dashboard');
Route::get('/view/latestEvent/{id}', 'EventController@view_l')->name('view_l_event');
Route::get('/view/UpcomingEvent/{id}', 'EventController@view_up')->name('view_up_event');

//slider

Route::get('/slider', 'SliderController@create')->name('slider');
Route::post('/slider', 'SliderController@store')->name('store_slider');
Route::get('/silder/{id}', 'SliderController@edit')->name('edit_slider');
Route::post('/silder/{id}', 'SliderController@update_slider')->name('update_slider');
Route::get('/slider/{id}', 'SliderController@delete')->name('delete_slider');


// latest event

Route::get('/latest_event', 'LatestEventController@create')->name('latest_event');
Route::post('/latest_event', 'LatestEventController@store')->name('store_latest_event');
Route::get('/all_event', 'LatestEventController@all')->name('all_event');
Route::get('/all_event/{id}', 'LatestEventController@edit')->name('edit_event');
Route::post('/all_event/{id}', 'LatestEventController@update_event')->name('update_event');
Route::get('/event/{e_id}/image/{i_id}', 'LatestEventController@delete_image')->name('delete_event_image');

//upcoming Event

Route::get('/upcoming_event', 'UpcomingEventController@create')->name('upcoming_event');
Route::post('/upcoming_event', 'UpcomingEventController@store')->name('store_upcoming_event');
Route::get('/upcoming_event/edit/{id}', 'UpcomingEventController@edit')->name('edit_upcoming_event');
Route::post('/upcoming_event/{id}', 'UpcomingEventController@update_upcoming_event')->name('update_upcoming_event');
Route::get('/upcoming_event/{id}', 'UpcomingEventController@delete')->name('delete_upcoming_event');