<?php

use App\Http\Controllers\TodoController;
use App\Models\Todo;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('todos',[TodoController::class,'index'])->name('todos');
Route::post('todos',[TodoController::class,'store'])->name('todos.store');
Route::get('todos/create',[TodoController::class,'create'])->name('todos.create');
Route::get('todos/{todo}',[TodoController::class,'show'])->name('todos.show');
Route::put('todos/{todo}',[TodoController::class,'update'])->name('todos.update');
Route::put('todos/{todo}/completed',[TodoController::class,'completed'])->name('todos.completed');
Route::delete('todos/{todo}',[TodoController::class,'delete'])->name('todos.delete');
Route::get('todos/{todo}/edit',[TodoController::class,'edit'])->name('todos.edit');

// Route::resource('new',TodoController::class);