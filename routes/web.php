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

Route::get('/', 'HomeController@index')->name('home');



Route::group(['middleware' => 'auth'], function()
{
    Route::get('/dashboard', 'DashboardController@index');
    Route::resource('welcome', 'WelcomeController');
    Route::resource('choose', 'ChooseController');
    Route::resource('history', 'HistoryController');
    Route::resource('news', 'NewsController');
    
});

// Route::prefix('admin')
//     ->namespace('Admin')
//     ->middleware(['auth', 'admin'])
//     ->group(function() {
// });

Auth::routes();