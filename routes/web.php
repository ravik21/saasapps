<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/why-us', [App\Http\Controllers\HomeController::class, 'whyUs'])->name('why-us');
Route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/cases', [App\Http\Controllers\HomeController::class, 'cases'])->name('cases');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('users', App\Http\Controllers\UserController::class);

    Route::middleware(['role:Admin'])->group(function () {
        Route::resource('roles', App\Http\Controllers\RoleController::class);
        Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    });

    Route::resource('projects', App\Http\Controllers\ProjectController::class);
    Route::resource('client-reviews', App\Http\Controllers\ClientReviewController::class);
});

require __DIR__.'/auth.php';
