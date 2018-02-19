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


/*
 * Admin Panel Routes & Auth
 */

Route::middleware(['admin'])->prefix('admin')->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');
        // Uses first & second Middleware
    Route::resource('/healthyTips', 'HealthyTipController');
    });
