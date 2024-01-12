<?php

use App\Http\Controllers\TodoController;
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
// Route::get('/', 'TodoController@index');
Route::get('/', [TodoController::class, 'index']);

// CREATE TODO FORM
// Route::get('/todos/create', 'TodoController@create');
Route::get('/todos/create', [TodoController::class, 'create']);


// ADD TODO
// Route::post('/todos', 'TodoController@store');
Route::post('/todos', [TodoController::class, 'store']);


// SHOW EDIT TODO
// Route::get('todos/{todo}/edit', 'TodoController@edit');
Route::get('todos/{todo}/edit', [TodoController::class, 'edit']);


// UPDATE TODO
// Route::put('todos/{todo}', 'TodoController@update');
Route::put('todos/{todo}', [TodoController::class, 'update']);


// DELETE TODO
// Route::delete('/todos/{todo}/delete', 'TodoController@delete');
Route::delete('/todos/{todo}/delete', [TodoController::class, 'delete']);