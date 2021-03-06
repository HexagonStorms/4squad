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
    return redirect('/events');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/chats', function () {
    return view('chats');
});

Route::get('/profile', function () {
    return view('profile');
});
