<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('orders', 'App\Http\Controllers\OrderController@create');
Route::get('orders', 'App\Http\Controllers\OrderController@index');

Route::post('webhook', 'App\Http\Controllers\WebhookController@midtransHandler');