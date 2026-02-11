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

Route::get('/about', [Controllers\AboutController::class, 'index'])->name('about');

Route::get('/contact', [Controllers\ContactController::class, 'index'])->name('contact');

// Login Routes

Route::get('/login', [Controllers\LoginController::class, 'loginForm'])->name('login')->middleware('guest');

Route::post('/login', [Controllers\LoginController::class, 'authenticate'])->middleware('guest');

// Logout Route

Route::post('/logout', [Controllers\LogoutController::class, '__invoke'])->name('logout')->middleware('auth');

// User Routes

Route::resource('users', Controllers\UserController::class)->middleware('auth');

// Route::get('/users', [Controllers\UserController::class, 'index'])->name('users.index');

// Route::get('/users/create', [Controllers\UserController::class, 'create'])->name('users.create');

// Route::post('/users', [Controllers\UserController::class, 'store'])->name('users.store');

// Route::get('/users/{user:id}', [Controllers\UserController::class, 'show'])->name('users.show');

// Route::get('/users/{user}/edit', [Controllers\UserController::class, 'edit'])->name('users.edit');

// Route::put('/users/{user}', [Controllers\UserController::class, 'update'])->name('users.update');

// Route::delete('/users/{user}', [Controllers\UserController::class, 'destroy'])->name('users.destroy');