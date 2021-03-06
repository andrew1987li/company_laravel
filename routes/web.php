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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/blog', function () {
    return view('blog.index');
});

Route::get('/blog/{pages}', 'BlogController@show');


Route::get('/pages/{pages}', function ($pages) {
    return view('pages.'.$pages);
});

Route::post('/ajxlogin', 'AjaxAuthController@customLogin');

Auth::routes();

Route::get('/users', 'AuthController@index')->name('users');

Route::get('/send/{email}', 'MailController@send');