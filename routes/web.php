<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\KontakController;
use App\Http\Controllers\web\CareerController;
use App\Http\Controllers\web\CorporateGovernanceController;
use App\Http\Controllers\web\NewsController;

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

Route::get('/news-detail', function () {
    return view('news');
})->name('news.detail');

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

Route::get('/career', [CareerController::class, 'index'])->name('career');

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

Route::get('awards-certificates', function () {
    return view('aboutus.awards');
})->name('awards');

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

Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');

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

/**
 * cms handle services.
 *
 * @return void
 */
Route::get('/App/Providers/CmsServiceProvider', function () {
    return redirect('/');
});
