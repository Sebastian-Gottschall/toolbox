<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

Route::get('/home',['as'=>'home','uses'=>'HomeController@index']);
Route::get('/dashboard',['as'=>'dashboard','uses'=>"DashBoardController@index"]);
Route::get('/favourites',['as'=>'favourites','uses'=>"favouriteController@index"]);
Route::get('/settings',['as'=>'settings','uses'=>"SettingsController@index"]);
Route::get('/contents',['as'=>'contents','uses'=>"ContentController@index"]);
Route::get('/contentgroups',['as'=>'contentgroups','uses'=>"ContentGroupController@index"]);
Route::get('/users',['as'=>'users','uses'=>"UserController@index"]);
Route::get('/','WelcomeController@index');

Route::controller('auth','Auth\AuthController');