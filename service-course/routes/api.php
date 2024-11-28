<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('mentors', 'App\Http\Controllers\MentorController@index');
Route::get('mentors/{id}', 'App\Http\Controllers\MentorController@show');
Route::post('mentors', 'App\Http\Controllers\MentorController@create');
Route::put('mentors/{id}', 'App\Http\Controllers\MentorController@update');
Route::delete('mentors/{id}', 'App\Http\Controllers\MentorController@destroy');

Route::post('courses', 'App\Http\Controllers\CourseController@create');
Route::put('courses/{id}', 'App\Http\Controllers\CourseController@update');
Route::get('courses', 'App\Http\Controllers\CourseController@index');
Route::delete('courses/{id}', 'App\Http\Controllers\CourseController@destroy');

Route::post('chapters', 'App\Http\Controllers\ChapterController@create');
Route::put('chapters/{id}', 'App\Http\Controllers\ChapterController@update');