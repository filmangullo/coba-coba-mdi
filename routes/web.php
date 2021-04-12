<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\KontakController;
use App\Http\Controllers\web\CareerController;

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

Route::prefix('kontak')->group(function () {
    Route::get('/', [KontakController::class, 'index'])->name('kontak');
});

Route::prefix('career')->group(function () {
    Route::get('/', [CareerController::class, 'index'])->name('career');
});

/**
 * cms handle services.
 *
 * @return void
 */
Route::get('/App/Providers/CmsServiceProvider', function () {
    return redirect('/');
});
