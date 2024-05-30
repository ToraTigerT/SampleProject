<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController; 
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
// Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
// Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
// Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
// Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
// Route::patch('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
// Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
//下記のこの1行で上記7行分のすべての役割を果たす
//Route::resource('/articles',ArticleController::class);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/articles', ArticleController::class);
});