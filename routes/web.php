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

Route::get('/bisagunsa', function () {
    return view('welcome');
});

Route::get('/students', 'StudentsController@index');
Route::get('/books', 'BooksController@index');
Route::get('/projects', 'ProjectsController@index');

Route::get('/students/new', 'StudentsController@new');
Route::post('/students', 'StudentsController@insert');

Route::get('/projects/new', 'ProjectsController@new');
Route::get('/projects/edit/{id}', 'ProjectsController@edit');
Route::put('/projects/update', 'ProjectsController@update');
Route::post('/projects', 'ProjectsController@insert');

Route::get('/books/new', 'BooksController@new');
Route::post('/books', 'BooksController@insert');
