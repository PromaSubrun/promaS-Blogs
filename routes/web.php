<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;


Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/about', [PagesController::class, 'about'])->name('about');


Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::get('/services', [PagesController::class, 'services'])->name('services');



Route::resource('posts', 'App\Http\Controllers\PostsController');

//Route::get('/contact', [ContactUsFormController::class, 'createForm']);

//Route::post('/contact', [BlogController::class, 'ContactUsForm']);
//Route::get('/contactus', [BlogController::class, 'contactus'])->name('contact.us');

//Route::get('/education', [EducationController::class, 'educationINFO'])->name('education');

//Route::get('/dashboard', [BlogController::class, 'dashboard'])->middleware('auth');

//Route::get('/about', [BlogController::class, 'about'])->name('about');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


