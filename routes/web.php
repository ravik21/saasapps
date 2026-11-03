<?php

use App\Http\Controllers\ContactSubmissionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-us', [ContactSubmissionController::class, 'store'])->name('contact-us.store');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/why-us', [App\Http\Controllers\HomeController::class, 'whyUs'])->name('why-us');
Route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/cases', [App\Http\Controllers\HomeController::class, 'cases'])->name('cases');

// Products
Route::get('/products/capture', [App\Http\Controllers\HomeController::class, 'productCapture'])->name('products.capture');
Route::get('/products/optimize', [App\Http\Controllers\HomeController::class, 'productOptimize'])->name('products.optimize');

// Platform
Route::get('/platform/specialized-intelligence', [App\Http\Controllers\HomeController::class, 'platformIntelligence'])->name('platform.intelligence');
Route::get('/platform/integrations', [App\Http\Controllers\HomeController::class, 'platformIntegrations'])->name('platform.integrations');
Route::get('/platform/api', [App\Http\Controllers\HomeController::class, 'platformApi'])->name('platform.api');

// Solutions (By Function & By Use Case)
Route::get('/solutions/{slug}', [App\Http\Controllers\HomeController::class, 'solution'])->name('solutions.show');

// Core Marketing & Resource Pages
Route::get('/pricing', [App\Http\Controllers\HomeController::class, 'pricing'])->name('pricing');
Route::get('/resources', [App\Http\Controllers\HomeController::class, 'resources'])->name('resources.index');
Route::get('/resources/{slug}', [App\Http\Controllers\HomeController::class, 'resourceDetail'])->name('resources.show');
Route::get('/case-studies', [App\Http\Controllers\HomeController::class, 'caseStudies'])->name('case-studies.index');
Route::get('/case-studies/{slug}', [App\Http\Controllers\HomeController::class, 'caseStudyDetail'])->name('case-studies.show');
Route::get('/templates', [App\Http\Controllers\HomeController::class, 'templates'])->name('templates.index');
Route::get('/security', [App\Http\Controllers\HomeController::class, 'security'])->name('security');
Route::get('/whats-new', [App\Http\Controllers\HomeController::class, 'whatsNew'])->name('whats-new');
Route::get('/demo', [App\Http\Controllers\HomeController::class, 'demo'])->name('demo');
Route::get('/talk-to-sales', [App\Http\Controllers\HomeController::class, 'talkToSales'])->name('talk-to-sales');
Route::get('/legal/{page}', [App\Http\Controllers\HomeController::class, 'legal'])->name('legal.show');

Route::group(['prefix' => 'review', 'as' => 'review.'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'review'])->name('index');
    Route::post('/store', [App\Http\Controllers\ClientReviewController::class, 'store'])->name('store');
    Route::get('/thankyou', [App\Http\Controllers\HomeController::class, 'reviewThankYou'])->name('thankyou');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('users', App\Http\Controllers\UserController::class)
        ->middleware('can:manage users');

    Route::middleware(['role:Admin'])->group(function () {
        Route::resource('roles', App\Http\Controllers\RoleController::class);
        Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    });

    Route::resource('projects', App\Http\Controllers\ProjectController::class)
        ->middleware('can:manage projects');
    Route::resource('client-reviews', App\Http\Controllers\ClientReviewController::class)
        ->middleware('can:manage client reviews');
    Route::resource('contact-submissions', ContactSubmissionController::class)
        ->only(['index', 'destroy'])
        ->middleware('can:manage contact submissions');
    Route::get('contact-submissions/{contactSubmission}/reply', [ContactSubmissionController::class, 'reply'])
        ->name('contact-submissions.reply')
        ->middleware('can:manage contact submissions');
    Route::post('contact-submissions/{contactSubmission}/reply', [ContactSubmissionController::class, 'sendReply'])
        ->name('contact-submissions.send-reply')
        ->middleware('can:manage contact submissions');
});

require __DIR__.'/auth.php';
