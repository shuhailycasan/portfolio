<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('pages.home');
});


//PAGES CONTROLLER FOR PORTFOLIO
Route::controller(PageController::class)->group(function () {
    Route::get('/home', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/contact', 'contact')->name('contact');
});


//DASHBOARD CONTROLLER FOR ADMIN ONLY
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::put('/profile', [AdminController::class,'updateProfile'])->name('profile.update');
    Route::get('/experience', [AdminController::class, 'experience'])->name('experience');
    Route::get('/education', [AdminController::class, 'education'])->name('education');
    Route::get('/certifications', [AdminController::class, 'certifications'])->name('certifications');
    Route::get('/projects', [AdminController::class, 'projects'])->name('projects');
    Route::get('/techstack', [AdminController::class, 'techstack'])->name('techstack');
});

Auth::routes();