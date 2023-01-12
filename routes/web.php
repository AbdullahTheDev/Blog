<?php

use App\Http\Controllers\BlogsController;
use Illuminate\Support\Facades\Route;

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

// User Routes

Route::get('/', [BlogsController::class, 'index']);

// Blogs

Route::get('/blogs', [BlogsController::class, 'show_blogs']);
Route::get('/blog/{slug}', [BlogsController::class, 'show_blog']);
Route::get('/blog/category/{slug}', [BlogsController::class, 'blogs_by_category']);
