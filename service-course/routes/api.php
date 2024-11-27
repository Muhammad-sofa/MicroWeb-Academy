<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('mentors', 'App\Http\Controllers\MentorController@create');
Route::put('mentors/{id}', 'App\Http\Controllers\MentorController@update');