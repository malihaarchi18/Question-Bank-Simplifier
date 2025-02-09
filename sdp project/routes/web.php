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

Route::get('/', 'PagesController@home')->name('main');

Route::get('/store', 'PagesController@index')->name('store');
Route::get('/add/course', 'PagesController@course')->name('add.course');
Route::get('/add/topic', 'PagesController@topic')->name('add.topic');

Route::get('/create/classtest', 'PagesController@create')->name('create');
Route::get('/create/termfinal', 'PagesController@term')->name('termfinal');
Route::get('/contact', 'PagesController@contact')->name('contact');


Route::post('/create/termfinal', 'QuestionController@term')->name('create.termfinal');
Route::post('/question/store', 'QuestionController@store')->name('question.store');
Route::post('/question/create', 'QuestionController@create')->name('question.create');
Route::post('/question', 'QuestionController@generate')->name('question.generate');


Route::post('/add/course', 'PagesController@add_course')->name('course');
Route::post('/add/topic', 'PagesController@add_topic')->name('topic');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
