<?php
use App\Http\Controllers\ArticleController; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('articles', ArticleController::class);

/*Route::get('/Articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/Articles/{id}/update', [ArticleController::class, 'update'])->name('articles.update');

Route::delete('/Article/{id}/', [ArticleController::class, 'destroy'])->name('articles.destroy');

Route::post('/articles', [ArticleController::class], 'store')->name('articles.store');*/