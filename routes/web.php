<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book',[BookController::class, 'index'])->name('book.index');
Route::get('/book/create',[BookController::class, 'create'])->name('book.create');
Route::post('/book',[BookController::class, 'store'])->name('book.store');
Route::get('/book/{book}/edit',[BookController::class, 'edit'])->name('book.edit');
Route::put('/book/{book}/update',[BookController::class, 'update'])->name('book.update');
Route::put('/book/{book}/delete',[BookController::class, 'delete'])->name('book.delete');
