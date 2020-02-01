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
})->name('login');

Route::post('/login-validate', 'LoginController@loginValidate');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/get-article', 'ArticleController@searchArticle');
