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

//Pages Routes
Route::get('/', 'PagesController@getIndex');
Route::get('about', 'PagesController@getAbout');
Route::get('terms', 'PagesController@getTerms');
Route::get('privacy', 'PagesController@getPrivacy');

//Resource Routes
Route::resource('inquiries', 'InquiryController');
Route::resource('contributions', 'ContributionController');

//Authentication Routes
//Route::get('auth/login', 'Auth\LoginController@getLogin');
//Route::post('auth/login', 'Auth\LoginController@postLogin');
//Route::get('auth/logout', 'Auth\LoginController@getLogout');

//Registration Routes
//Route::get('auth/signup', 'Auth\RegisterController@getSignup');
//Route::post('auth/signup', 'Auth\RegisterController@postSignup')

