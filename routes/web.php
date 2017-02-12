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

Auth::routes();

Route::get('/students', 'StudentsController@index');
Route::get('/books', 'BooksController@index');
Route::get('/projects', 'ProjectsController@index');

Route::get('/students/new', 'StudentsController@new');
Route::get('/students/edit/{id}', 'StudentsController@edit');
Route::put('/students/update', 'StudentsController@update');
Route::post('/students', 'StudentsController@insert');
Route::delete('/students/{id}', 'StudentsController@destroy');

Route::get('/projects/new', 'ProjectsController@new');
Route::get('/projects/edit/{id}', 'ProjectsController@edit');
Route::put('/projects/update', 'ProjectsController@update');
Route::post('/projects', 'ProjectsController@insert');
Route::delete('/projects/{id}', 'ProjectsController@destroy');

Route::get('/books/new', 'BooksController@new');
Route::get('/books/edit/{id}', 'BooksController@edit');
Route::put('/books/update', 'BooksController@update');
Route::post('/books', 'BooksController@insert');
Route::delete('/books/{id}', 'BooksController@destroy');


Route::get('/home', 'HomeController@index');
