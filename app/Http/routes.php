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

get('/', 'StaticPagesController@home')->name('home');

get('login', 'SessionController@create')->name('login');
post('login', 'SessionController@store')->name('login');
delete('logout', 'SessionController@destroy')->name('logout');
