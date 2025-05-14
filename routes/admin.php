<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\ThemeController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale() . "/admin",
        'as' => 'admin.',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath',]
    ],
    function () {
        Route::group(['middleware'=>'admin'],function(){
            Route::get('/', ThemeController::class)->name('index');
            Route::group(['prefix' => 'settings'], function () {
                Route::get('shipping/{type}', [SettingController::class, 'editShipping'])->name('settings.shipping');
                Route::put('shipping/{id}', [SettingController::class, 'updateShipping'])->name('update.settings.shipping');
            });
        });
        require __DIR__ . '/adminAuth.php';
    }
);
