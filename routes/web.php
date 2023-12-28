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

Route::get('/', function () {return view('welcome');});

Auth::routes(); 

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/p', 'ProfilesController@index');

Route::post('/c', 'ClassesController@store');
Route::get('/c/create', 'ClassesController@create');
Route::get('/c/join','ClassesController@join'); 
Route::post('/c/j/confirm','ClassesController@join_confirm'); 
Route::get('/c/{cid}','ClassesController@index');
Route::get('/c/{id}/edit','ClassesController@edit');
Route::patch('/c/{id}','ClassesController@update');
Route::get('/c/delete/{id}','ClassesController@delete');
Route::get('/c/{id}/members','ClassesController@members');





Route::post('/{id}/a', 'AssigmentsController@store');
Route::get('/a/{id}/create', 'AssigmentsController@create');
Route::get('/c/{cid}/a/{id}','AssigmentsController@index');
Route::get('/a/{id}/edit','AssigmentsController@edit');
Route::patch('/a/{id}','AssigmentsController@update');
Route::get('/a/delete/{id}','AssigmentsController@delete');
Route::get('/a/{id}/submit', 'AssigmentsController@submit');






