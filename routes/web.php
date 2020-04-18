<?php

use Illuminate\Support\Facades\Route;

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
    return view('hub');
});

Route::get('/stream', function() {
    return view('stream');
});

Route::get('/prompts', function() {
    return view('stream');
});

Route::get('/wip', function() {
    return view('wip');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')->middleware('is_admin')->name('admin');
Route::get('/admin/create', 'ScoresController@create')->middleware('is_admin')->name('admin');

Route::post('/scores', 'ScoresController@store');
Route::get('/scores', 'ScoresController@index');
