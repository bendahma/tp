<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\AnneeController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\TPController;
use App\Http\Controllers\QuestionController;

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

    //-------------------------------------------------------------------------
    
    Route::resource('matieres', MatiereController::class);
    Route::resource('annee', AnneeController::class);
    Route::resource('niveau', NiveauController::class);
    Route::post('tp/{tp}/validation',[TPController::class,'validate'])->name('tp.validation') ;
    Route::resource('tp', TPController::class);
    Route::get('tp/{tp}/addQuestion', [QuestionController::class,'addQuestion'])->name('question.addQuestion');
    Route::resource('question', QuestionController::class);


});

require __DIR__.'/auth.php';
