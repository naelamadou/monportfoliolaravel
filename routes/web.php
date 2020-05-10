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
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
   					'users'=>'UsersController',
   					'contact'=>'ContactController',
					]);


Route::get('/mon-portfolio', function () {
    return view('portfolio.index');
})->name('mon-portfolio');