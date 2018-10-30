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


Auth::routes();

Route::get('/','MainController@main');

Route::resource('/FennTech', 'HomeController');

Route::get('/All_testimonials', 'HomeController@view_all');

Route::get('/about', 'PagesController@about');

Route::resource('Jobs' ,'JobsController');

Route::get('/DashBoard', 'DashBoardController@index');

Route::resource('Team' , 'TeamController');

Route::get('/Viewall/All_team','ViewallController@All_team');

Route::get('/Viewall/All_job','ViewallController@All_jobs');

Route::get('/Viewall/All_slide','ViewallController@All_slides');

Route::resource('testimonial','TestController');

Route::resource('/portfolio', 'AlbumsController');

Route::get('/photos/create/{id}','PhotosController@create');

Route::post('/photos/store','PhotosController@store');

Route::delete('/photos/{id}','PhotosController@destroy');

Route::get('/photos/{id}','PhotosController@show');

Route::resource('/contact','ContactController');

Route::post('/contact/Search','ContactController@Search');

Route::delete('/contact/clearAll','ContactController@clearAll');

Route::resource('Slides','SlideController');



