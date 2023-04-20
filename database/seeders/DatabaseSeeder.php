<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // User::create([
        //     'name' => "Fajry Ariansyah",
        //     'email' => 'fajry@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => "Ikram",
        //     'email' => 'ikram@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => "Web Programming",
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => "Web Design",
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => "Personal",
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => "Judul Pertama",
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum in porro totam fuga esse modi, aut soluta! Tempore distinctio modi quasi itaque?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum in porro totam fuga esse modi, aut soluta! Tempore distinctio modi quasi itaque? Sint vero repellat recusandae consequuntur neque quo natus voluptatem tempora porro repudiandae debitis nesciunt accusantium, hic, quidem rem cupiditate odio eaque dolore! Doloribus excepturi autem dicta nisi facere vel earum inventore sequi. Suscipit, nemo officiis? Beatae velit maiores temporibus. Excepturi id autem in fugiat, velit dignissimos ullam illo. Ut adipisci ab suscipit assumenda quod officiis dolor nesciunt quidem tempore corrupti, incidunt saepe commodi pariatur atque praesentium iste eius vitae neque enim velit dicta blanditiis earum consectetur! Dolorem, ut!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => "Judul Kedua",
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum in porro totam fuga esse modi, aut soluta! Tempore distinctio modi quasi itaque?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum in porro totam fuga esse modi, aut soluta! Tempore distinctio modi quasi itaque? Sint vero repellat recusandae consequuntur neque quo natus voluptatem tempora porro repudiandae debitis nesciunt accusantium, hic, quidem rem cupiditate odio eaque dolore! Doloribus excepturi autem dicta nisi facere vel earum inventore sequi. Suscipit, nemo officiis? Beatae velit maiores temporibus. Excepturi id autem in fugiat, velit dignissimos ullam illo. Ut adipisci ab suscipit assumenda quod officiis dolor nesciunt quidem tempore corrupti, incidunt saepe commodi pariatur atque praesentium iste eius vitae neque enim velit dicta blanditiis earum consectetur! Dolorem, ut!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => "Judul Ketiga",
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum in porro totam fuga esse modi, aut soluta! Tempore distinctio modi quasi itaque?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum in porro totam fuga esse modi, aut soluta! Tempore distinctio modi quasi itaque? Sint vero repellat recusandae consequuntur neque quo natus voluptatem tempora porro repudiandae debitis nesciunt accusantium, hic, quidem rem cupiditate odio eaque dolore! Doloribus excepturi autem dicta nisi facere vel earum inventore sequi. Suscipit, nemo officiis? Beatae velit maiores temporibus. Excepturi id autem in fugiat, velit dignissimos ullam illo. Ut adipisci ab suscipit assumenda quod officiis dolor nesciunt quidem tempore corrupti, incidunt saepe commodi pariatur atque praesentium iste eius vitae neque enim velit dicta blanditiis earum consectetur! Dolorem, ut!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => "Judul Keempat",
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum in porro totam fuga esse modi, aut soluta! Tempore distinctio modi quasi itaque?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum in porro totam fuga esse modi, aut soluta! Tempore distinctio modi quasi itaque? Sint vero repellat recusandae consequuntur neque quo natus voluptatem tempora porro repudiandae debitis nesciunt accusantium, hic, quidem rem cupiditate odio eaque dolore! Doloribus excepturi autem dicta nisi facere vel earum inventore sequi. Suscipit, nemo officiis? Beatae velit maiores temporibus. Excepturi id autem in fugiat, velit dignissimos ullam illo. Ut adipisci ab suscipit assumenda quod officiis dolor nesciunt quidem tempore corrupti, incidunt saepe commodi pariatur atque praesentium iste eius vitae neque enim velit dicta blanditiis earum consectetur! Dolorem, ut!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


    }
}

