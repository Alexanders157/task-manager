<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/tasks', 'TaskController@index');
//Route::get('/tasks/create', 'TaskController@create');
//Route::post('/tasks', 'TaskController@store');
//Route::get('/tasks/{id}', 'TaskController@show');
//Route::get('/tasks/{id}/edit', 'TaskController@edit');
//Route::patch('/tasks/{id}', 'TaskController@update');
//Route::delete('/tasks/{id}', 'TaskController@destroy');


Route::get('/tasks', [TaskController::class, 'index'])->name('index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('create');
Route::post('/tasks', [TaskController::class, 'store'])->name('store');
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('show');
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('edit');
Route::patch('/tasks/{id}', [TaskController::class, 'update'])->name('update');
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('destroy');



