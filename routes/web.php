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

Route::get('/home','pagescontroller@gethome ');
Route::get('/about','pagescontroller@getabout ');
Route::get('/contact','pagescontroller@getcontact ');

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('index','FormController@index');

Route::post('contact/submit','FormController@submit');
// Route::post('post', 'formController@store');