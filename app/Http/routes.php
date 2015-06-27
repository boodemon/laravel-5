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
| Example
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/
// Offline Login Page
Route::controller('admin/login','Admins\LoginController');

// Start Online Page
Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admins'],function(){
	Route::controller('index','BlankController');
	Route::controller('user','UserController');
	Route::get('blank',function(){
		echo 'Get Blank Page';
	});
});
