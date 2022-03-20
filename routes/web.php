<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoreDetailsController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\PelangganController;

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

// Route::get('/', [HomeController::class, 'index']);
Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/supplier', [SupplierController::class, 'index']);
Route::get('/stuff', [StuffController::class, 'index']);
Route::get('/team', [TeamController::class, 'index']);
Route::get('/portofolio', [PortofolioController::class, 'index']);
Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::prefix('portofolio')->group(function () {
    Route::get('/more-details', [MoreDetailsController::class, 'index'])->name('more-details');
});

