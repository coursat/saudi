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

Route::get('/','PageController@home');
Route::get('/recent-courses','CourseController@recent');
Route::get('/subject/front_end/Css3/preview','CourseController@preview');
Route::get('/subjects','SubjectController@showAll');
Route::get('/subjects/courses','SubjectController@subject_courses');
