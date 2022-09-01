<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Deva Kerti Wijaya',
        //     'email' => 'deva.kerti@undiksha.ac.id',
        //     'password' => bcrypt('12345'),
        // ]);

        // User::create([
        //     'name' => 'Indry Wirawati',
        //     'email' => 'indry@undiksha.ac.id',
        //     'password' => bcrypt('54321'),
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();
        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nostrum aperiam adipisci numquam doloremque consequatur eos excepturi, quas veritatis et voluptate autem neque unde eius! Laudantium impedit neque ea laboriosam perferendis voluptates quo quam eligendi! Neque nostrum suscipit odit sunt necessitatibus temporibus alias nobis at labore aliquam aspernatur ex sequi qui dolorum doloribus quae soluta perspiciatis quaerat repellendus magni iure, voluptate perferendis libero? Dicta id libero itaque placeat ut facere dolor consequatur amet cum iure ipsum explicabo excepturi sequi aspernatur debitis nisi cumque adipisci praesentium ullam velit, aliquid eum porro. Saepe assumenda sapiente libero aperiam, officia enim nobis earum cum!',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nostrum aperiam adipisci numquam doloremque consequatur eos excepturi, quas veritatis et voluptate autem neque unde eius! Laudantium impedit neque ea laboriosam perferendis voluptates quo quam eligendi! Neque nostrum suscipit odit sunt necessitatibus temporibus alias nobis at labore aliquam aspernatur ex sequi qui dolorum doloribus quae soluta perspiciatis quaerat repellendus magni iure, voluptate perferendis libero? Dicta id libero itaque placeat ut facere dolor consequatur amet cum iure ipsum explicabo excepturi sequi aspernatur debitis nisi cumque adipisci praesentium ullam velit, aliquid eum porro. Saepe assumenda sapiente libero aperiam, officia enim nobis earum cum!',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nostrum aperiam adipisci numquam doloremque consequatur eos excepturi, quas veritatis et voluptate autem neque unde eius! Laudantium impedit neque ea laboriosam perferendis voluptates quo quam eligendi! Neque nostrum suscipit odit sunt necessitatibus temporibus alias nobis at labore aliquam aspernatur ex sequi qui dolorum doloribus quae soluta perspiciatis quaerat repellendus magni iure, voluptate perferendis libero? Dicta id libero itaque placeat ut facere dolor consequatur amet cum iure ipsum explicabo excepturi sequi aspernatur debitis nisi cumque adipisci praesentium ullam velit, aliquid eum porro. Saepe assumenda sapiente libero aperiam, officia enim nobis earum cum!',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nostrum aperiam adipisci numquam doloremque consequatur eos excepturi, quas veritatis et voluptate autem neque unde eius! Laudantium impedit neque ea laboriosam perferendis voluptates quo quam eligendi! Neque nostrum suscipit odit sunt necessitatibus temporibus alias nobis at labore aliquam aspernatur ex sequi qui dolorum doloribus quae soluta perspiciatis quaerat repellendus magni iure, voluptate perferendis libero? Dicta id libero itaque placeat ut facere dolor consequatur amet cum iure ipsum explicabo excepturi sequi aspernatur debitis nisi cumque adipisci praesentium ullam velit, aliquid eum porro. Saepe assumenda sapiente libero aperiam, officia enim nobis earum cum!',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);

    }
}
