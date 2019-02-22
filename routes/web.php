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


Route::get('/questions', 'QuestionController@index');

// Route::get('/questions/{id}', 'QuestionController@sho    w')->name('question.show');
// Route::get('/categories', 'CategoryController@index');
Route::resource('/dogs', 'DogController');
Route::resource('/answers/{id}', 'AnswerController');
// Route::get('/answers/{id}', 'AnswerController@show');
// Route::post('/answers/{id}', 'AnswerController@vote')->name('save');




