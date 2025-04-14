<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


Route::group([
    'prefix' => '{lang}/',
    'where' => ['lang' => 'en|ar|es|de|fr'],
    'middleware' => ['setLocale'], 
], function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    });
