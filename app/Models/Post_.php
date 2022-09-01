<?php

namespace App\Models;


class Post

{
    
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "judul_post_pertama",
            "author" => "Deva Kerti Wijaya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore sit repudiandae eveniet, blanditiis, vel quas velit eum fuga id maiores ipsa qui, neque officia optio aliquid eius beatae quidem autem distinctio asperiores quasi nesciunt voluptatem! Culpa sapiente est at eos nesciunt necessitatibus aliquam voluptatibus nisi. Est praesentium totam itaque corrupti nesciunt, voluptatibus labore molestiae cum ducimus possimus accusantium omnis corporis! Quaerat, minus consequatur culpa exercitationem sunt incidunt tempore voluptatem ipsum quae repudiandae deserunt necessitatibus saepe corporis facilis quidem harum sed accusantium velit minima nisi omnis. Sed, placeat? Recusandae distinctio facilis, tenetur rerum repellendus eligendi? Perferendis sapiente unde voluptas magnam at."
        ],
        [
            "title" => "Post Kedua",
            "slug" => "judul_post_kedua",
            "author" => "Indry Wirawati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore sit repudiandae eveniet, blanditiis, vel quas velit eum fuga id maiores ipsa qui, neque officia optio aliquid eius beatae quidem autem distinctio asperiores quasi nesciunt voluptatem! Culpa sapiente est at eos nesciunt necessitatibus aliquam voluptatibus nisi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore sit repudiandae eveniet, blanditiis, vel quas velit eum fuga id maiores ipsa qui, neque officia optio aliquid eius beatae quidem autem distinctio asperiores quasi nesciunt voluptatem! Culpa sapiente est at eos nesciunt necessitatibus aliquam voluptatibus nisi."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }

}
