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

Route::group([
    'prefix' => '{lang}',
    'where' => ['lang' => 'en|ar'],
    'middleware' => ['setLocale'],
],function(){
    Route::get('/', [StatckController::class,'index'])->name('home.page');
    Route::prefix('arnoukpharma')->group(function (){
        Route::get('/about', [StatckController::class,'arnoukPharma_about'])->name('about.arnoukPharma.page');
        Route::get('/services', [StatckController::class,'arnoukPharma_services'])->name('services.arnoukPharma.page');
    });
});
