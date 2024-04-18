<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/coin-details', [HomeController::class, 'coinDetails'])->name('coin-details');
Route::get('submit-request', [HomeController::class, 'submitRequest'])->name('submit-request');

// Admin routes
Route::get('/admin_dashboard', [AdminController::class, 'index'])->name('admin_dashboard');
Route::get('/admin_login', function () {
    return view('backend.pages.login');
});





// ?  Home Controller Routes

require __DIR__.'/auth.php';
