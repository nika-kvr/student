<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::get('/student/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');

Route::get('/student/courses', [App\Http\Controllers\CoursesController::class,'index'])->name('courses');