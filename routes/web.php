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

Auth::routes();

Route::get('/', 'Index@index');

Route::get('/verify/{verification_code}', 'Index@verify');

Route::get('/password/reset/{token}', 'Index@reset');

Route::get('/home', 'System@system');

