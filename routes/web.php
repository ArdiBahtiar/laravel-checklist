<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// NAMPILIN DASBOR TODO-LIST
Route::get('/', 'TodoController@index');


// CREATE TODO FORM
Route::get('/todos/create', 'TodoController@create');


// ADD TODO
Route::post('/todos', 'TodoController@store');


// SHOW EDIT TODO
Route::get('todos/{todo}/edit', 'TodoController@edit');


// UPDATE TODO
Route::put('todos/{todo}', 'TodoController@update');


// DELETE TODO
Route::delete('todos/{todo}/delete', 'TodoController@delete');