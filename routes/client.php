<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Client Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'Client', 'prefix' => 'client', 'middleware' => ['auth']], function () {
    // Dashboard
    Route::get('/dashboard', 'HomeController@dashboard');
    Route::get('/wizad', 'HomeController@wizard');

    // Account
    Route::get('/account/profile', 'AccountController@profile');

    // Domain
    Route::get('/domain/confirm', 'DomainController@confirm');
    Route::post('/domain/check', 'DomainController@check');
});