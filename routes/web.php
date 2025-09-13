<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    return view('student');
});
Route::get('/studentform', function () {
    return view('studentform');
});

// Exercise 1: Hello Laravel
Route::get('/hello', function () {
    return ('Hello Laravel');
});

// Exercise 2: Routing Practice
Route::get('/about', function () {
    return ('This is about page.');
});
Route::get('/contact', function () {
    return ('This is contact page.');
});
Route::get('/greet/{name}', function ($name) {
    return ('Hello, ' . $name);
});

// Exercise 3: Controller Basics
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{id}', [App\Http\Controllers\StudentController::class, 'show']);

// Exercise 4: Blade Template
Route::get('/', [HomeController::class, 'index']);

// Exercise 6: Model & CRUD
Route::get('/students', [StudentController::class, 'index']);

// Exercise 7: Form Handling
Route::post('/students', [StudentController::class, 'store']);




