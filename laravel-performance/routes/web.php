<?php

use App\Http\Controllers\AuthorIndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostShareController;
use App\Http\Controllers\PostShowController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatsIndexController;
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

Route::get('/', HomeController::class);
Route::get('/posts/{post:slug}', PostShowController::class)->name('posts.show');
Route::post('/posts/{post:slug}/share', PostShareController::class)->name('posts.share');
Route::get('/authors', AuthorIndexController::class);

Route::get('/stats', StatsIndexController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
