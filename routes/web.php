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

Route::resource('/', 'HomeController');


Route::resource('respondents', 'RespondentController');

//Route::resource('questionnaire', 'QuestionnairesController');

//Route::resource('questions', 'QuestionsController');

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('owners', 'OwnersController');
    Route::resource('/admin/users', 'UserController');
    Route::get('/questionnaire/create', 'QuestionnairesController@create');
    Route::post('/questionnaire', 'QuestionnairesController@store');
    Route::get('/questionnaire', 'QuestionnairesController@index');
    Route::get('question/create', 'QuestionsController@create');
    //Route::post('/questionnaire', 'QuestionsController@store');
});

//Auth::routes();
