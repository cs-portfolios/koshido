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
    return view('welcome');
});

Auth::routes();

Route::get('/syousai', 'HomeController@syousai');

Route::get('/hone', 'HomeController@hone');

Route::get('/touroku/{id}', 'HomeController@touroku')->where(
    'id',
    '[0-9]+'
);

Route::get('/naiyou', 'HomeController@naiyou');

Route::post('/book/create', 'HomeController@create');

Route::post('/comment/create', 'CommentController@create');

Route::get("/comment/delete/{id}", "CommentController@destroy")->where(
    'id',
    '[0-9]+'
);

Route::get("/hello/delete/{id}", "HomeController@destroy")->where(
    'id',
    '[0-9]+'
);



Route::post('/touroku/updeate', 'HomeController@updeate');