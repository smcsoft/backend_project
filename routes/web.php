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


//POST - GET - DELETE
Route::get('/', function () {
    return view('home.home');
})->name('home');


Route::resource('post', 'PostController');

Route::group(['prefix' => 'post'], function() {
    Route::post('search', 'PostController@search')->name('post.search');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
