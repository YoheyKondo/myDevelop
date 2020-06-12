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
// MAIN
Route::get('/', function () {
    return view('welcome');
});

// search
Route::get('/foo/', function () {
    return \File::get(public_path() . '/index.html');
});

// detail
Route::get('users', function()
{
    return '日本語テスト users!!!';
});