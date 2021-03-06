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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'ViewController@index')->name('view_controller.home');
Route::get('/corso', 'ViewController@corso')->name('view_controller.corso');


// studenti
Route::get('/students', 'StudentController@index')->name('students.index');
Route::get('/students/show/{slug}', 'StudentController@show')->name('students.show');
Route::get('/students/show/id/{id}', 'StudentController@getById')->name('students.showId');
