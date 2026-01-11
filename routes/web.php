<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdminController;

// Student Routes (Public Access)
Route::controller(CourseController::class)->group(function() {
    Route::get('/', 'index')->name('courses.index');
    Route::get('/courses/{id}', 'show')->name('courses.show');
    Route::get('/search', 'search')->name('courses.search');
});

// Admin Routes (Protected)
Route::prefix('admin')->group(function() {
    // Authentication Routes (Public)
    Route::get('/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'doLogin']);
    
    // Protected Routes (Require Admin Auth)
    Route::middleware([\App\Http\Middleware\AdminAuth::class])->group(function() {
        Route::get('/courses', [AdminController::class, 'index'])->name('admin.courses');
        Route::get('/courses/create', [AdminController::class, 'create'])->name('admin.courses.create');
        Route::post('/courses', [AdminController::class, 'store'])->name('admin.courses.store');
        Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});