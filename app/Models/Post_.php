<?php

namespace App\Models;

class Post 
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fajry Ariansyah",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati aspernatur qui reprehenderit necessitatibus ab quaerat provident aut. Consectetur error doloribus culpa beatae tenetur, odit deleniti ut repellendus vero dicta autem et pariatur mollitia qui voluptas corporis praesentium quidem porro obcaecati quaerat aspernatur sapiente facere maxime sed. Minus molestias inventore provident nemo, sapiente recusandae sunt itaque adipisci reprehenderit repudiandae, vero nobis voluptatum error fuga at quidem accusamus quod quasi. Fugiat beatae accusamus minus ex nam atque rerum facilis consectetur quasi sint!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ikram Ariansyah",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque temporibus consectetur deleniti nesciunt saepe blanditiis, vero, adipisci molestiae ex pariatur assumenda voluptates laborum? Id aperiam atque mollitia consequatur rem beatae hic, a corrupti debitis. Doloribus accusamus vero obcaecati aspernatur architecto dignissimos laudantium sapiente officiis deleniti. Voluptates ab in numquam repellendus obcaecati modi magni perspiciatis optio iste, officia sit consequatur itaque at animi consequuntur excepturi quasi beatae fugiat quos dolorem veniam? Illo, aliquid sequi neque quis maiores iusto, velit voluptas deleniti recusandae natus commodi minus soluta quam illum. Voluptate, doloremque fuga error, consectetur ducimus cumque rerum nihil voluptatum odit, voluptatem corrupt"
        ],
    ];

    public static function all(){
        return collect(self::$blog_post);
    }
    
    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
