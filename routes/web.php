<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login')->name('login.post');
Route::get('/register', 'AuthController@showRegistrationForm')->name('register');
Route::post('/register', 'AuthController@register')->name('register.post');
Route::post('/logout', 'AuthController@logout')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', 'UserController@index')->name('dashboard');
    Route::get('/invoice', 'InvoiceController@index')->name('invoice.index');
});

Route::get('/dashboard', 'DashboardController@index')->middleware('mymiddleware');
Route::resource('products', 'ProductController');