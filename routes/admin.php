<?php

use App\Http\Controllers\ProfileController;
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

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function() {
    Route::group([
        'middleware' => 'admin',
    ], function() {
        Route::get('/', ThemeController::class)->name('index');
    });

    require __DIR__.'/adminAuth.php';
});
