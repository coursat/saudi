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
/* Courses Routes */
Route::get('/recent-courses','CourseController@recent');
Route::get('/subject/front_end/Css3/preview','CourseController@preview');
Route::get('/courses/front-end-courses','CourseController@single');
/* Subjects Routes */
Route::get('/subjects','SubjectController@showAll');
Route::get('/subjects/courses','SubjectController@subject_courses');
/* User Routes */
Route::get('/profile','UserController@profile');
Route::get('/username/info','UserController@info');
Route::get('/username/edit-profile','UserController@edit');
/*communities Routes*/
Route::get('/communities','CommunityController@all');
/* Search Pages */
Route::get('/search','SearchController@index');
