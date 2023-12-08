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
Route::get('/courses', ['as' => 'courses', 'uses' => 'App\Http\Controllers\Website\CoursesController@courses']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'App\Http\Controllers\Website\ContactController@contact']);
