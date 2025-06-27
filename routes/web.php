<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;



Route::controller(PageController::class)->group(function(){
    Route::get('/','home')->name('home');
    Route::get('/home','home')->name('home') ;
    Route::get('/about','about')->name('about') ;
    Route::get('/projects','projects')->name('projects') ;
    Route::get('/contact','contact')->name('contact') ;

});