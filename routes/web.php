<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.pages.index');
});
Route::get('/post', function () {
    return view('frontend.pages.index');
});

Route::resource('/admin/category', CategoryController::class);
Route::resource('/admin/blog', BlogController::class);
Route::resource('/frontend/post', PostController::class);


// login controller

Route::get('/login', [LoginController::class, 'index']);
Route::get('/signup', [LoginController::class, 'signup']);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::get('/', function () {
    return view('/login');
})->middleware('auth');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/signup', [LoginController::class, 'signup'])->middleware('guest');
Route::post('/signup', [LoginController::class, 'signup']);