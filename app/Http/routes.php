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

//homepage
get('/', 'StaticPagesController@home')->name('home');

//login & logout
get('login', 'SessionController@create')->name('login');
post('login', 'SessionController@store')->name('login');
delete('logout', 'SessionController@destroy')->name('logout');

//contact page
resource('contacts', 'ContactsController', [
        'except' => ['show', 'destroy'],
        'names' => [
            'index' => 'contacts.index',
            'create' => 'contacts.create',
            'store' => 'contacts.store',
            'edit' => 'contacts.edit',
            'update' => 'contacts.update',
        ]
]);
get('contacts/destroy/{id}', 'ContactsController@destroy')->name('contacts.destroy');

//product page
resource('products', 'ProductsController', [
    'except' => ['show', 'destroy'],
    'names' => [
        'index' => 'products.index',
        'create' => 'products.create',
        'store' => 'products.store',
        'edit' => 'products.edit',
        'update' => 'products.update',
    ]
]);
get('products/destroy/{id}', 'ProductsController@destroy')->name('products.destroy');