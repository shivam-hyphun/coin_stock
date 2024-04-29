<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CoinsController;
use App\Livewire\Managecoin\ManageCoins;
use App\Livewire\Managecoin\CoinDetailsComponent;

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

Route::get('/', [HomeController::class, 'show']);




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //  Home Controller Routes
    Route::get('/home', [HomeController::class, 'index'])->middleware('auth', 'verified')->name('home');
    Route::get('/coin-details', [HomeController::class, 'coinDetails'])->name('coin-details');
    Route::get('submit-request', [HomeController::class, 'submitRequest'])->name('submit-request');

    // Admin routes
    Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth', 'verified', 'admin')->name('admin_dashboard');
    Route::get('/user_details', [AdminController::class, 'users'])->middleware('auth', 'verified', 'admin')->name('user_details');

    Route::middleware(['auth', 'verified', 'admin'])->group(function () {
        Route::resource('users', UserController::class);
    });
    
    // CoinsController
    Route::resource('coin', CoinsController::class)->middleware('auth', 'verified', 'admin');


    Route::get('/manage_coins', ManageCoins::class)->middleware('auth', 'verified', 'admin')->name('manage.coin');
    Route::get('/coin-details/{coin}', CoinDetailsComponent::class)->name('coin.details');
});










require __DIR__ . '/auth.php';
