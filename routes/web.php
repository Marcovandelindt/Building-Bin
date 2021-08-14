<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/frontend', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('frontend.index');

Route::get('/backend', [App\Http\Controllers\Backend\BackendController::class, 'index'])->name('backend.index');

/**
 * Landingspage routes
 */
Route::get('/landingspage/{name}', [App\Http\Controllers\Frontend\Landingspage\LandingspageController::class, 'loadLandingspage']);
