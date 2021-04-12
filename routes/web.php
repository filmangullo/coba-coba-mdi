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

Route::get('/news', function () {
    return view('news');
})->name('news');

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


/**
 * cms handle services.
 *
 * @return void
 */
Route::get('/App/Providers/CmsServiceProvider', function () {
    return redirect('/');
});

