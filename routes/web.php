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

Route::get('/', 'WelcomeController@index');
Route::get('/category', 'WelcomeController@category');
Route::gey('/dashboard/', 'WelcomeController@dashboard');
Route::get('/add-category/', 'WelcomeController@addCategory');
Route::get('/manage-category/', 'WelcomeController@manageCategory');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

