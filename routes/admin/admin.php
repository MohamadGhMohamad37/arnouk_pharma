<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardConroller;
use App\Http\Controllers\Admin\AboutUsArnoukPharmaController;
use App\Http\Controllers\Admin\ServiceArnoukPharmaController;
use App\Http\Controllers\Admin\CategoryArnoukPharmaController;

Route::group([
    'prefix' => '{lang}/admin',
    'where' => ['lang' => 'en|ar'], 
    'middleware' => ['setLocale'], 
], function () {
Route::get('/dashboard',[DashboardConroller::class,'index'])->name('admin.dashboard');

Route::prefix('arnoukpharma')->group(function () {
    Route::resource('about', AboutUsArnoukPharmaController::class);
    Route::resource('service', ServiceArnoukPharmaController::class);
    Route::resource('category_arnouk_pharma', CategoryArnoukPharmaController::class);

});

});
