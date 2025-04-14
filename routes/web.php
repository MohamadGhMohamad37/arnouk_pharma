<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\StatckController;
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
require __DIR__.'/auth/auth.php';
require __DIR__.'/admin/admin.php';

Route::middleware(['setLocale'])->group(function () {
    Route::get('{lang}/', [StatckController::class,'index'])->name('home.page');
});
