<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	$items = array(
            ['x' => 0, 'y' => 0, 'width' => 2, 'height' => 2, 'name' => 'item 1'],
            ['x' => 2, 'y' => 0, 'width' => 2, 'height' => 2, 'name' => 'item 2'],
            ['x' => 4, 'y' => 0, 'width' => 2, 'height' => 2, 'name' => 'item 3'],
            ['x' => 6, 'y' => 0, 'width' => 2, 'height' => 2, 'name' => 'item 4'],
            ['x' => 0, 'y' => 2, 'width' => 2, 'height' => 2, 'name' => 'item 5']
        );
    return view('welcome')->withItemse($items);
});






Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('products', 'ProductController');