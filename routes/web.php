<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{id}/update', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{id}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('posts/{id}/show', [PostController::class, 'show'])->name('posts.show');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::get('about', function() {
    return view('abouts.about');
})->name('abouts.about');