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

Route::group(['namespace' => 'Client', 'prefix' => 'client', 'middleware' => ['auth', 'client']], function () {
    // Dashboard
    Route::get('/dashboard', 'HomeController@dashboard');
    Route::post('/wizad', 'HomeController@wizard');
    Route::get('/wizad', 'HomeController@wizard');

    // Account
    Route::get('/account/profile', 'AccountController@profile');

    // Domain
    Route::post('/domain/confirm', 'DomainController@confirm');
    Route::get('/domain/confirm', 'DomainController@confirm');
    Route::post('/domain/check', 'DomainController@check');

    // Plan
    Route::post('/plans/add-plan', 'PlanController@addPlan');

    // Template
    Route::post('/templates/add-template', 'TemplateController@addTemplate');

    // Payment
    Route::post('/payment/cancel', 'PaymentController@cancel');
    Route::post('/payment/pay', 'PaymentController@pay');
    Route::post('/payment/checkout', 'PaymentController@checkout');
});