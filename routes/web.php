<?php

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

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Blog Post 1",
            "slug" => "judul_post_pertama",
            "author" => "Deva Kerti Wijaya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore sit repudiandae eveniet, blanditiis, vel quas velit eum fuga id maiores ipsa qui, neque officia optio aliquid eius beatae quidem autem distinctio asperiores quasi nesciunt voluptatem! Culpa sapiente est at eos nesciunt necessitatibus aliquam voluptatibus nisi. Est praesentium totam itaque corrupti nesciunt, voluptatibus labore molestiae cum ducimus possimus accusantium omnis corporis! Quaerat, minus consequatur culpa exercitationem sunt incidunt tempore voluptatem ipsum quae repudiandae deserunt necessitatibus saepe corporis facilis quidem harum sed accusantium velit minima nisi omnis. Sed, placeat? Recusandae distinctio facilis, tenetur rerum repellendus eligendi? Perferendis sapiente unde voluptas magnam at."
        ],
        [
            "title" => "Blog Post 2",
            "slug" => "judul_post_kedua",
            "author" => "Indry Wirawati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore sit repudiandae eveniet, blanditiis, vel quas velit eum fuga id maiores ipsa qui, neque officia optio aliquid eius beatae quidem autem distinctio asperiores quasi nesciunt voluptatem! Culpa sapiente est at eos nesciunt necessitatibus aliquam voluptatibus nisi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore sit repudiandae eveniet, blanditiis, vel quas velit eum fuga id maiores ipsa qui, neque officia optio aliquid eius beatae quidem autem distinctio asperiores quasi nesciunt voluptatem! Culpa sapiente est at eos nesciunt necessitatibus aliquam voluptatibus nisi."
        ],
    ];
    return view('blog', [
        "tittle" => "Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        "tittle" => "Contact"
    ]);
});

// halaman single
Route::get('/blog/{slug}', function ($slug) {
    
    return view ('post', [
        "tittle" => "Single Post",
    ]);

});