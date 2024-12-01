<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home'); // Home
Route::get('/about', [PageController::class, 'about'])->name('about'); // About
Route::get('/services', [PageController::class, 'services'])->name('services'); // Services
Route::get('/projects', [PageController::class, 'projects'])->name('projects'); // Projects
Route::get('/blog', [PageController::class, 'blog'])->name('blog'); // Blog
Route::get('/contact', [PageController::class, 'contact'])->name('contact'); // Contact
Route::get('/planning', [PageController::class, 'planning'])->name('planning'); // Contact

