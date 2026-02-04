<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;

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

Route::get('/', Controllers\HomeController::class); // Jika ingin singkat Khusus untuk invoke
// Route::get('/', [Controllers\HomeController::class, '__invoke']); // Kalau ingin rinci dan jelas pakai ini

Route::get('/about', [Controllers\AboutController::class, 'index']);

Route::get('/contact', [Controllers\ContactController::class, 'index']);

Route::get('/user', [Controllers\UserController::class, 'index']);