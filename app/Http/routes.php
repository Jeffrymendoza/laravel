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
*/



//Route::get('/', 'WelcomeController@index');

Route::get('/counties','CountyController');

Route::resource('/departamentos','CountyController');

Route::get('/cities','CityController');

Route::resource('/ciudad','CityController');








Route::get('home', 'HomeController@index');

Route::group(['prefix'=>'/operation'],function(){

    Route::get('/sum/{value1}/{value2}','OperationController@sum');

    Route::get('/multiplication/{value1}/{value2}','OperationController@multiplication');

    Route::get('/division/{value1}/{value2}','OperationController@division');

    Route::get('/subtraction/{value1}/{value2}','OperationController@subtraction');


});



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
