<?php

use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

// Guest routes (redirect to dashboard if already logged in)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/forgot-password', [ForgotPasswordController::class, 'show'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'send'])->name('password.email');

    Route::get('/register', [RegisterController::class, 'show'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected admin routes
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
    Route::view('/calendar', 'admin.calendar')->name('calendar');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password');
    Route::view('/forms/elements', 'admin.forms.elements')->name('forms.elements');
    Route::view('/tables/basic', 'admin.tables.basic')->name('tables.basic');
    Route::view('/pages/blank', 'admin.pages.blank')->name('pages.blank');
    Route::view('/pages/404', 'admin.pages.404')->name('pages.404');
    Route::view('/charts/line', 'admin.charts.line')->name('charts.line');
    Route::view('/charts/bar', 'admin.charts.bar')->name('charts.bar');
    Route::view('/ui/alerts', 'admin.ui.alerts')->name('ui.alerts');
    Route::view('/ui/avatars', 'admin.ui.avatars')->name('ui.avatars');
    Route::view('/ui/badges', 'admin.ui.badges')->name('ui.badges');
    Route::view('/ui/buttons', 'admin.ui.buttons')->name('ui.buttons');
    Route::view('/ui/images', 'admin.ui.images')->name('ui.images');
    Route::view('/ui/videos', 'admin.ui.videos')->name('ui.videos');
});
