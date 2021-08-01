<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Controllers\web\AboutUsController;
use App\Http\Controllers\web\KontakController;
use App\Http\Controllers\web\CareerController;
use App\Http\Controllers\web\CorporateGovernanceController;
use App\Http\Controllers\web\NewsController;
use App\Http\Controllers\web\ProductGalleryController;
use App\Http\Controllers\web\SustainabilityController;
use App\Http\Controllers\web\TradingViewController;

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

Route::get('ceo-message', function () {
    return view('aboutus.ceo-message');
})->name('ceo-message');

Route::get('our-business', function () {
    return view('aboutus.our-business');
})->name('our-business');

Route::get('vision-mission', function () {
    return view('aboutus.vision&mission');
})->name('vision&mission');

Route::get('milestones', function () {
    return view('aboutus.milestones');
})->name('milestones');

Route::prefix('about-us')->group(function () {
    Route::get('/awards', [AboutUsController::class, 'awards'])->name('awards');
});


Route::get('shareholders', function () {
    return view('investor.shareholders');
})->name('shareholders');

Route::get('financial-highlight', function () {
    return view('investor.financial-highlight');
})->name('financial-highlight');

Route::get('prospectus', function () {
    return view('investor.prospectus');
})->name('prospectus');

Route::get('annual-meeting', function () {
    return view('investor.annual-meeting');
})->name('annual-meeting');

Route::get('financial-report', function () {
    return view('investor.reports.financial-reports');
})->name('financial-report');

Route::get('dividend', function () {
    return view('investor.reports.dividend');
})->name('dividend');

Route::get('annual', function () {
    return view('investor.reports.annual-reports');
})->name('annual');

Route::get('public', function () {
    return view('investor.reports.public-expose');
})->name('public');

Route::prefix('sustainability')->group(function () {
    Route::get('/csr', [SustainabilityController::class, 'csr'])->name('csr');
    Route::get('/environment', [SustainabilityController::class, 'environment'])->name('environment');
});

Route::get('/product-gallery', [ProductGalleryController::class, 'list'])->name('gallery');

Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'list'])->name('news.list');
    Route::get('/{slug}', [NewsController::class, 'show'])->name('news.show');
});

Route::prefix('investor-relations')->group(function () {
    Route::prefix('corporate-governance')->group(function () {
        Route::get('board-members', [CorporateGovernanceController::class, 'boardMembers'])->name('corporate-governanc.board-members');
        Route::get('organization-structure', [CorporateGovernanceController::class, 'organizationStructure'])->name('corporate-governanc.organization-structure');
        Route::get('audit-comittee', [CorporateGovernanceController::class, 'auditComittee'])->name('corporate-governanc.audit-comittee');
    });
});

Route::prefix('career')->group(function () {
    Route::get('/', [CareerController::class, 'index'])->name('career');
    Route::get('/show/{slug}', [CareerController::class, 'show'])->name('career.show');
    Route::get('/form', [CareerController::class, 'form'])->name('career.form');

});



Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

Route::prefix('trading')->group(function () {
    Route::get('/author', [TradingViewController::class, 'author'])->name('trading.author');
    // Route::get('/{slug}', [NewsController::class, 'show'])->name('news.show');
});

/**
 * Localization handler midleware.
 *
 * @return void
 */
Route::get('/lang/{locale}', function ($locale)
{
    return redirect()->back()->withCookie(cookie()->forever('lang', $locale));
});

/**
 * cms handle services.
 *
 * @return void
 */
Route::get('/App/Providers/CmsServiceProvider', function () {
    return redirect('/');
});

// Route::get('/merge-db', [Controller::class, 'mergeDB'])->name('mergedb');
