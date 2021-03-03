<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProjectDetailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('index.home');
Route::get('/blog', [BlogController::class, 'blog'])->name('index.blog');
Route::get('/blog-detail', [BlogDetailController::class, 'blogdetail'])->name('index.blog-detail');
Route::get('/project-detail', [ProjectDetailController::class, 'projectdetail'])->name('index.project-detail');
Route::get('/about', [AboutController::class, 'about'])->name('index.about');
Route::resource('contact', ContactController::class);
