<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/', function () {
    return view('home',[
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "tittle" => "About"
    ]);
});

Route::get('/categories', function() {
    return view('categories',[
        "tittle" => "Post Categories",
        "categories" => Category::all()
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts',[
        "tittle" => "Post by Author : $author->name",
        "posts" => $author->posts->load('category', 'author'),
    ]);
});

Route::get('/posts', [PostController::class, 'index'] );
Route::get('posts/{post:slug}', [PostController::class, 'show'] );
Route::get('/login', [LoginController::class, 'index'] )->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'] );
Route::post('/logout', [LoginController::class, 'logout'] );
Route::get('/register', [RegisterController::class, 'index'] )->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'] );
Route::get('/dashboard', function() {return view('dashboard.index');})->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
