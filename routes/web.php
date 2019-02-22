<?php

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


// Route::get('/questions', 'QuestionController@index');

// Route::get('/questions/{id}', 'QuestionController@show');
// Route::get('/categories', 'CategoryController@index');
Route::resource('questions', 'QuestionController');
Route::resource('categories', 'CategoryController');
Route::resource('/dogs', 'DogController');
// Route::get('/dogs', 'DogController@index');
// Route::post('/dogs', 'DogController@store');
// Route::get('/dogs/create', 'DogController@create');


