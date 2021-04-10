<?php

use App\Http\Controllers\web\KontakController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cms\DashboardController;
use App\Http\Controllers\cms\NewsController;
use App\Http\Controllers\cms\CareerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');


Route::middleware(['auth:sanctum', 'verified'])->prefix('cms')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('news')->name('news.')->group(function () {
        Route::get('/index', [NewsController::class, 'index'])->name('index');
        Route::get('/create', [NewsController::class, 'create'])->name('create');
        Route::get('/{slug}/show', [NewsController::class, 'show'])->name('show');
    });

    Route::prefix('career')->name('career.')->group(function () {
        Route::get('/', [CareerController::class, 'index'])->name('index');
        Route::get('/create', [CareerController::class, 'create'])->name('create');
        Route::get('/update', [CareerController::class, 'update'])->name('update');
    });

});
