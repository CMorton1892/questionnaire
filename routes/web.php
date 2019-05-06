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

Route::resource('complete', 'CompleteController');


Route::resource('response', 'ResponsesController');

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
    Route::post('/question', 'QuestionsController@store');
    Route::get('/question', 'QuestionsController@index');
    Route::get('/response/create', 'ResponsesController@create');
    Route::post('/response', 'ResponsesController@store');
    Route::get('/response', 'ResponsesController@index');
    Route::get('/response', function () {
      return redirect('/complete');
    });
    Route::get('/respondent/create', 'RespondentController@create');
    Route::post('/respondent', 'RespondentController@store');
    Route::get('/respondent', 'RespondentController@index');
    Route::get('/respondent', function () {
      return redirect('/response/create');
    });


});

//Auth::routes();
