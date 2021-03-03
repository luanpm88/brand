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

// Messenger webhook
Route::get('/facebook/webhooks', 'Client\MessageController@webhooks');
Route::post('/facebook/webhooks', 'Client\MessageController@webhooks');

Route::group(['namespace' => 'Client', 'prefix' => 'client', 'middleware' => ['auth', 'client']], function () {
    // // Dashboard
	Route::get('/coming-soon', 'HomeController@comingSoon');
    // Route::get('/dashboard', 'HomeController@dashboard');
    Route::post('/wizad', 'HomeController@wizard');
    Route::get('/wizad', 'HomeController@wizard');
	Route::get('/admin/approve-test', 'HomeController@approveTest');

    // // Account
	// Route::get('/account/brand', 'AccountController@brand');
	Route::post('/account/profile', 'AccountController@profile');
    Route::get('/account/profile', 'AccountController@profile');

    // Domain
	// Route::get('/domain', 'DomainController@index');
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

    // // Product
	// Route::get('/products/select2', 'ProductController@select2');
	// Route::get('/products/image/{id}', 'ProductController@image');
	// Route::post('/products/list', 'ProductController@list');
    // Route::get('/products', 'ProductController@index');

    // // Messenger webhook
	// Route::get('/facebook/webhooks', 'MessageController@webhooks');
	// Route::post('/facebook/webhooks', 'MessageController@webhooks');

	// // Open Platform Connection
	// Route::get('connection', 'ConnectionController@index');
	// Route::get('connection/connect', 'ConnectionController@connect');
	// Route::get('connection/get-products', 'ConnectionController@getProducts');
	// Route::match(['get', 'post'], 'connection/lazada/sync', 'ConnectionController@lazadaSync');
	// Route::post('connection/lazada/sync/close', 'ConnectionController@lazadaSyncClose');

	// // District
	// Route::get('districts/select-box', 'DistrictController@selectBox');

	// // Ward
	// Route::get('wards/select-box', 'WardController@selectBox');

	// // Message
	// Route::get('messages/order/{order_id}/shipping-fee', 'MessageController@shippingFee');
	// Route::post('messages/order/{order_id}/update-quantity', 'MessageController@updateQuantity');
	// Route::post('messages/order/{order_id}/add-product', 'MessageController@addProduct');
	// Route::get('messages/contact/{id}/order', 'MessageController@customerOrder');
	// Route::post('messages/contact/{id}/save', 'MessageController@contactSave');
	// Route::get('messages/right-bar', 'MessageController@rightbar');
	// Route::post('messages/send', 'MessageController@sendMessage');
	// Route::get('messages/get-conversation', 'MessageController@getConversation');
	// Route::get('messages/get-conversations', 'MessageController@getConversations');
	// Route::post('messages/save-token', 'MessageController@saveToken');
	// Route::get('messages/connect', 'MessageController@connect');
	// Route::get('messages', 'MessageController@index');

	// // User
	Route::get('/user/{id}/picture', 'UserController@picture');
});

Route::group(['namespace' => 'Client', 'prefix' => 'client', 'middleware' => ['auth', 'client', 'checkPlan']], function () {
	// Dashboard
	// Route::get('/coming-soon', 'HomeController@comingSoon');
    Route::get('/dashboard', 'HomeController@dashboard');
    // Route::post('/wizad', 'HomeController@wizard');
    // Route::get('/wizad', 'HomeController@wizard');

    // Account
	Route::get('/account/brand', 'AccountController@brand');
	// Route::post('/account/profile', 'AccountController@profile');
    // Route::get('/account/profile', 'AccountController@profile');

    // Domain
	Route::get('/domain', 'DomainController@index');
    // Route::post('/domain/confirm', 'DomainController@confirm');
    // Route::get('/domain/confirm', 'DomainController@confirm');
    // Route::post('/domain/check', 'DomainController@check');

	// Website
	Route::get('/website', 'WebsiteController@index');

    // // Plan
    // Route::post('/plans/add-plan', 'PlanController@addPlan');

    // // Template
    // Route::post('/templates/add-template', 'TemplateController@addTemplate');

    // // Payment
    // Route::post('/payment/cancel', 'PaymentController@cancel');
    // Route::post('/payment/pay', 'PaymentController@pay');
    // Route::post('/payment/checkout', 'PaymentController@checkout');

    // Product
	Route::get('/products/select2', 'ProductController@select2');
	Route::get('/products/image/{id}', 'ProductController@image');
	Route::post('/products/list', 'ProductController@list');
    Route::get('/products', 'ProductController@index');

    // Messenger webhook
	Route::get('/facebook/webhooks', 'MessageController@webhooks');
	Route::post('/facebook/webhooks', 'MessageController@webhooks');

	// Open Platform Connection
	Route::get('connection', 'ConnectionController@index');
	Route::get('connection/connect', 'ConnectionController@connect');
	Route::get('connection/get-products', 'ConnectionController@getProducts');
	Route::match(['get', 'post'], 'connection/lazada/sync', 'ConnectionController@lazadaSync');
	Route::post('connection/lazada/sync/close', 'ConnectionController@lazadaSyncClose');

	// District
	Route::get('districts/select-box', 'DistrictController@selectBox');

	// Ward
	Route::get('wards/select-box', 'WardController@selectBox');

	// Message
	Route::get('messages/order/{order_id}/shipping-fee', 'MessageController@shippingFee');
	Route::post('messages/order/{order_id}/update-quantity', 'MessageController@updateQuantity');
	Route::post('messages/order/{order_id}/add-product', 'MessageController@addProduct');
	Route::get('messages/contact/{id}/order', 'MessageController@customerOrder');
	Route::post('messages/contact/{id}/save', 'MessageController@contactSave');
	Route::get('messages/right-bar', 'MessageController@rightbar');
	Route::post('messages/send', 'MessageController@sendMessage');
	Route::get('messages/get-conversation', 'MessageController@getConversation');
	Route::get('messages/get-conversations', 'MessageController@getConversations');
	Route::post('messages/save-token', 'MessageController@saveToken');
	Route::get('messages/connect', 'MessageController@connect');
	Route::get('messages', 'MessageController@index');

	// User
	// Route::get('/user/{id}/picture', 'UserController@picture');
});