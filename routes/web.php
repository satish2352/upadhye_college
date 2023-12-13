<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('website.index');
// });
// Route::get('/about', function () {
//     return view('website.about');
// });

// //pages controller base routing 
// Route::get('/', [App\Http\Controllers\PageController::class,'index']);
// Route::get('/about', [App\Http\Controllers\PageController::class,'about']);
// Route::get('/courses', [App\Http\Controllers\PageController::class,'courses']);
// Route::get('/contactme', [App\Http\Controllers\PageController::class,'contactme']);


Route::get('/', ['as' => 'index', 'uses' => 'App\Http\Controllers\Website\IndexController@index']);
Route::get('/about', ['as' => 'about', 'uses' => 'App\Http\Controllers\Website\AboutController@about']);
Route::get('/academic', ['as' => 'academic', 'uses' => 'App\Http\Controllers\Website\AcademicController@academic']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'App\Http\Controllers\Website\ContactController@contact']);
Route::get('/admission', ['as' => 'admission', 'uses' => 'App\Http\Controllers\Website\AdmissionController@admission']);
Route::get('/scholarshipform', ['as' => 'scholarshipform', 'uses' => 'App\Http\Controllers\Website\AdmissionController@scholarshipform']);
Route::get('/campus', ['as' => 'campus', 'uses' => 'App\Http\Controllers\Website\CampusController@campus']);
Route::get('/achiever', ['as' => 'achiever', 'uses' => 'App\Http\Controllers\Website\AchieversController@achiever']);
Route::get('/courses', ['as' => 'courses', 'uses' => 'App\Http\Controllers\Website\CourseController@courses']);
Route::get('/engineering', ['as' => 'engg', 'uses' => 'App\Http\Controllers\Website\CourseController@engg']);
Route::get('/medical', ['as' => 'medical', 'uses' => 'App\Http\Controllers\Website\CourseController@medical']);
Route::get('/science', ['as' => 'science', 'uses' => 'App\Http\Controllers\Website\CourseController@science']);
