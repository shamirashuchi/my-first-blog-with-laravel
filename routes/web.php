<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\BlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[homeController::class, 'index'])->name('home');
Route::get('/about',[homeController::class, 'about'])->name('about');
Route::get('/contact',[homeController::class, 'contact'])->name('contact');
Route::get('/series',[homeController::class, 'series'])->name('series');
Route::get('/blog-detail/{id}',[homeController::class, 'detail'])->name('detail');
Route::post('/make-full-name',[homeController::class, 'makeFullName'])->name('make-full-name');
Route::post('/make-series',[homeController::class, 'makefullseries'])->name('make-series');
Route::get('/add-blog',[BlogController::class, 'index'])->name('blog.add');
Route::post('/new-blog',[BlogController::class, 'saveBlog'])->name('blog.new');
Route::get('/manage-blog',[BlogController::class, 'manageBlog'])->name('blog.manage');
