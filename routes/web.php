<?php

Route::get('/', function () {
    return view('index');
});
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@handle');
Route::get('/logout', 'LoginController@logout');

Route::group(['middleware'=>'loggedin'], function(){

	Route::get('/photos', 'PhotoController@index');

	Route::get('/photo/{id}', 'PhotoController@singlePhoto');

	Route::get('/create/photo', 'PhotoController@create');
	Route::post('/create/photo', 'PhotoController@upload');

});