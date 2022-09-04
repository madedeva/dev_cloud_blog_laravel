<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\Category;
use App\Models\User;

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
        "tittle" => "Home",
        // "active" => "home"
        "image_landing" => "read.svg",
        "home_title" => "Dev Cloud Blog",
        "category_display" => "Web Programing | Web Design | Personal",
        "description" => "Welcome to my personal blog, I hope the writing on this blog can give you knowledge, happy reading!"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "tittle" => "About",
        // "active" => "about",
        "name" => "Deva Kerti Wijaya",
        "campus" => "Universitas Pendidikan Ganesha, Singaraja",
        "email" => "deva.kerti@undiksha.ac.id",
        "image" => "camp.png",
        "deskripsi1" => "Hello, I am I Made Deva Kerti Wijaya, I am a Web and Mobile Developer, and a Graphic Designer. I have worked on several projects in the form of mobile applications and designs. I became a Graphic Designer at a Korean restaurant, Hansik by Ferbean.",
        "deskripsi2" => "My educational background is the Department of Software Engineering at SMK Negeri 1 Negara, as well as in college as a student of Informatics Engineering Education, Ganesha Education University. I also joined a student organization, namely HMJ Informatics Engineering."
    ]);
});

Route::get('/posts', [PostController::class, 'index'] );
Route::get('posts/{post:slug}', [PostController::class, 'show'] );

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts',[
        "tittle" => "Post by Category : $category->name",
        "active" => "categories",
        "posts" => $category->posts->load('category', 'author'),
    ]);
});

Route::get('/categories', function() {
    return view('categories',[
        "tittle" => "Post Categories",
        // "active" => "categories",
        "categories" => Category::all()
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts',[
        "tittle" => "Post by Author : $author->name",
        "posts" => $author->posts->load('category', 'author'),
    ]);
});

Route::get('/login', function() {
    return view('login',[
        "tittle" => "Halaman Login",
    ]);
});