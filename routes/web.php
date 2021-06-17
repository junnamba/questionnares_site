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
Route::get('/', function () {
    return view('welcome');
});

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');
Route::get('mypage','HomeController@index')->name('mypage.show');


Route::group(['middleware' => ['auth']], function () {
    Route::get('questions/{id}/choices/create','QuestionsController@createpage')->name('chioces.create');
    Route::resource('users', 'UsersController', ['only' => ['show']]); 
    Route::resource('questions', 'QuestionsController',['except' => ['destroy']]);
    Route::get('questions/show/history', 'QuestionsController@history')->name('history');
    Route::post('questions/{id}/choices','QuestionsController@storechoices')->name('chioces.store');
    Route::get('questions/{id}/result','QuestionsController@answer')->name('questions.answer');
    Route::get('questions/{id}/answer','QuestionsController@showanswers')->name('answers.show');
});
    Route::post('multiples/answer','QuestionsController@storeanswers')->name('answers.store');