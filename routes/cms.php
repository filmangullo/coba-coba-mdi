<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cms\AwardController;
use App\Http\Controllers\cms\CertificateController;
use App\Http\Controllers\cms\DashboardController;
use App\Http\Controllers\cms\EnvironmentController;
use App\Http\Controllers\cms\NewsController;
use App\Http\Controllers\cms\CareerController;
use App\Http\Controllers\cms\GalleryController;
use App\Http\Controllers\cms\CsrController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->prefix('cms')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('gallery')->name('cms-gallery.')->group(function () {
        Route::get('/index', [GalleryController::class, 'index'])->name('index');
        Route::get('/create', [GalleryController::class, 'create'])->name('create');
        Route::get('/{id}/update', [GalleryController::class, 'update'])->name('update');
        Route::get('/{slug}/show', [GalleryController::class, 'show'])->name('show');
    });

    Route::prefix('news')->name('cms-news.')->group(function () {
        Route::get('/index', [NewsController::class, 'index'])->name('index');
        Route::get('/create', [NewsController::class, 'create'])->name('create');
        Route::get('/{id}/update', [NewsController::class, 'update'])->name('update');
        Route::get('/{slug}/show', [NewsController::class, 'show'])->name('show');
    });

    Route::prefix('career')->name('cms-career.')->group(function () {
        Route::get('/', [CareerController::class, 'index'])->name('index');
        Route::get('/create', [CareerController::class, 'create'])->name('create');
        Route::get('/{id}/update', [CareerController::class, 'update'])->name('update');
        Route::get('/{id}/show', [CareerController::class, 'show'])->name('show');
    });

    Route::prefix('csr')->name('cms-csr.')->group(function () {
        Route::get('/', [CsrController::class, 'index'])->name('index');
        Route::get('/create', [CsrController::class, 'create'])->name('create');
        Route::get('/{id}/update', [CsrController::class, 'update'])->name('update');
        Route::get('/{id}/show', [CsrController::class, 'show'])->name('show');
    });

    Route::prefix('awards')->name('cms-awards.')->group(function () {
        Route::get('/', [AwardController::class, 'index'])->name('index');
        Route::get('/create', [AwardController::class, 'create'])->name('create');
        Route::get('/{id}/update', [AwardController::class, 'update'])->name('update');
    });

    Route::prefix('certificates')->name('cms-certificates.')->group(function () {
        Route::get('/', [CertificateController::class, 'index'])->name('index');
        Route::get('/create', [CertificateController::class, 'create'])->name('create');
        Route::get('/{id}/update', [CertificateController::class, 'update'])->name('update');
    });

    Route::prefix('environment')->name('cms-environment.')->group(function () {
        Route::get('/', [EnvironmentController::class, 'index'])->name('index');
        Route::get('/create', [EnvironmentController::class, 'create'])->name('create');
        Route::get('/{id}/update', [EnvironmentController::class, 'update'])->name('update');
    });

});
