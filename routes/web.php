<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\LandingpagesController;

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

Route::get('/', [LandingpagesController::class, 'index']);

Route::get('/clear-cache', function () {
    $configCache = Artisan::call('config:cache');
    $clearCache = Artisan::call('cache:clear');
    $routeCache = Artisan::call('route:clear');
    $viewCache = Artisan::call('view:clear');
    echo 'Berhasil';
});
