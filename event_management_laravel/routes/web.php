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


