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

<<<<<<< HEAD
Route::get('/newtest', function () {
    return view('welcome');
});

//testing
=======
Route::get('/test', function () {
    return view('welcome');
});
>>>>>>> parent of 9394a99... Update routes/web.php
