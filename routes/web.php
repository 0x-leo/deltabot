<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\BotsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/console/deployment', function () {
    return view('deployment');
});

Auth::routes();

Route::get('/console', [App\Http\Controllers\ConsoleController::class, 'index'])->name('console');
Route::get('auth/twitter', [TwitterController::class, 'loginwithTwitter']);
Route::get('auth/callback/twitter', [TwitterController::class, 'cbTwitter']);
