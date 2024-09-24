<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('/create', [PostController::class, 'create'])->name('create');
    Route::post('/', [PostController::class, 'store'])->name('store');
    Route::get('/{post}', [PostController::class, 'show'])->name('show');
    Route::get('/{post}/edit', [PostController::class, 'edit'])->name('edit');
    Route::put('/{post}', [PostController::class, 'update'])->name('update');
    Route::delete('/{post}', [PostController::class, 'destroy'])->name('destroy'); 
});
