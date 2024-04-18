<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// ?  Home Controller Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/coin-details', [HomeController::class, 'coinDetails'])->name('coin-details');
Route::get('submit-request', [HomeController::class, 'submitRequest'])->name('submit-request');

// Admin routes
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
