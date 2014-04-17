<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('register',function(){
   return View::make('template.register');
});

Route::get('login',function(){
    $postsB = MyUsers::paginate(5);
    return View::make('template.login', array('postBlog'=>$postsB));
});

Route::post('login','LoginController@checkLogin');

Route::post('register','RegisterController@addUser');