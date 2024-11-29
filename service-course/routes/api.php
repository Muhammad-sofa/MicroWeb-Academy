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
Route::get('chapters', 'App\Http\Controllers\ChapterController@index');
Route::get('chapters/{id}', 'App\Http\Controllers\ChapterController@show');
Route::delete('chapters/{id}', 'App\Http\Controllers\ChapterController@destroy');

Route::post('lessons', 'App\Http\Controllers\LessonController@create');
Route::put('lessons/{id}', 'App\Http\Controllers\LessonController@update');
Route::get('lessons', 'App\Http\Controllers\LessonController@index');
Route::get('lessons/{id}', 'App\Http\Controllers\LessonController@show');
Route::delete('lessons/{id}', 'App\Http\Controllers\LessonController@destroy');

Route::post('image-courses', 'App\Http\Controllers\ImageCourseController@create');
Route::delete('image-courses/{id}', 'App\Http\Controllers\ImageCourseController@destroy');