<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cms\CMSController;
use App\Http\Controllers\cms\AnnualGeneralMeetingController;
use App\Http\Controllers\cms\AnnualReportController;
use App\Http\Controllers\cms\AwardController;
use App\Http\Controllers\cms\CareerController;
use App\Http\Controllers\cms\CertificateController;
use App\Http\Controllers\cms\CsrController;
use App\Http\Controllers\cms\DashboardController;
use App\Http\Controllers\cms\EnvironmentController;
use App\Http\Controllers\cms\FinancialReportController;
use App\Http\Controllers\cms\GalleryController;
use App\Http\Controllers\cms\NewsController;
use App\Http\Controllers\cms\OurProductController;
use App\Http\Controllers\cms\PublicExposeController;


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

	Route::get('/index', [CMSController::class, 'index'])->name('cms.index');
	Route::get('/create', [CMSController::class, 'create'])->name('cms.create');
	Route::get('/{id}/update', [CMSController::class, 'update'])->name('cms.update');
	Route::post('/delete', [CMSController::class, 'delete'])->name('cms.delete');

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
        Route::prefix('img')->name('img.')->group(function () {
            Route::get('/{id}/create', [EnvironmentController::class, 'createImg'])->name('create');
            Route::get('/{index}/{id}/update', [EnvironmentController::class, 'updateImg'])->name('update');
        });

        Route::get('/', [EnvironmentController::class, 'index'])->name('index');
        Route::get('/create', [EnvironmentController::class, 'create'])->name('create');
        Route::get('/{id}/update', [EnvironmentController::class, 'update'])->name('update');
    });

    Route::prefix('annual-general-meeting')->name('cms-agm.')->group(function () {
        Route::get('/', [AnnualGeneralMeetingController::class, 'index'])->name('index');
        Route::get('/create', [AnnualGeneralMeetingController::class, 'create'])->name('create');
        Route::get('/{id}/update', [AnnualGeneralMeetingController::class, 'update'])->name('update');
    });

    Route::prefix('financial-report')->name('cms-fr.')->group(function () {
        Route::get('/', [FinancialReportController::class, 'index'])->name('index');
        Route::get('/create', [FinancialReportController::class, 'create'])->name('create');
        Route::get('/{id}/update', [FinancialReportController::class, 'update'])->name('update');
    });

    Route::prefix('annual-report')->name('cms-ar.')->group(function () {
        Route::get('/', [AnnualReportController::class, 'index'])->name('index');
        Route::get('/create', [AnnualReportController::class, 'create'])->name('create');
        Route::get('/{id}/update', [AnnualReportController::class, 'update'])->name('update');
    });

    Route::prefix('our-product')->name('cms-op.')->group(function () {
        Route::get('/', [OurProductController::class, 'index'])->name('index');
        Route::get('/create', [OurProductController::class, 'create'])->name('create');
        Route::get('/{id}/update', [OurProductController::class, 'update'])->name('update');
    });

    Route::prefix('public-expose')->name('cms-pe.')->group(function () {
        Route::get('/', [PublicExposeController::class, 'index'])->name('index');
        Route::get('/create', [PublicExposeController::class, 'create'])->name('create');
        Route::get('/{id}/update', [PublicExposeController::class, 'update'])->name('update');
    });
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
