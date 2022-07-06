<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PermissionsController;
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

Route::get('lang/{locale}', LocalizationController::class)->name('lang');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::view('about', 'about')->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('users', UserController::class);
    Route::post('users/permission',[UserController::class,'assignPermission'])->name('users.assignPermission');
    Route::get('users/permission/remove/{user}/{permission}',[UserController::class,'unsignPermission'])->name('users.unsignPermission');
    Route::post('users/suspend',[UserController::class,'suspend'])->name('users.suspend');
    Route::resource('permissions', PermissionsController::class);


    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__.'/auth.php';
