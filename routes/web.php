<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;


Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/about', [PagesController::class, 'about'])->name('about');


Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::get('/services', [PagesController::class, 'services'])->name('services');



Route::resource('posts', 'App\Http\Controllers\PostsController');
