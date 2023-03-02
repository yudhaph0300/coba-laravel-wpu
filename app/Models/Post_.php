<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Yudha Pamungkas",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptatum placeat excepturi sequi voluptate adipisci cupiditate iste, magni porro? Nulla iste adipisci iusto laudantium, delectus est facere quis necessitatibus, obcaecati ut inventore voluptates voluptate praesentium? Ullam cupiditate itaque modi doloribus quo eum corrupti, sed tempore quam placeat fugit culpa omnis ipsam beatae. Autem nesciunt velit voluptas repellendus voluptatem expedita quos ipsa, rem incidunt beatae dicta, dolores voluptatum maiores itaque? Quod ducimus in neque commodi, illo consequatur facilis, id incidunt harum porro eaque, minus nostrum sit labore delectus! Delectus, blanditiis velit earum animi laudantium rerum ipsa!"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Yudha Pamungkas",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptatum placeat excepturi sequi voluptate adipisci cupiditate iste, magni porro? Nulla iste adipisci iusto laudantium, delectus est facere quis necessitatibus, obcaecati ut inventore voluptates voluptate praesentium? Ullam cupiditate itaque modi doloribus quo eum corrupti, sed tempore quam placeat fugit culpa omnis ipsam beatae. Autem nesciunt velit voluptas repellendus voluptatem expedita quos ipsa, rem incidunt beatae dicta, dolores voluptatum maiores itaque? Quod ducimus in neque commodi, illo consequatur facilis, id incidunt harum porro eaque, minus nostrum sit labore delectus! Delectus, blanditiis velit earum animi laudantium rerum ipsa!"
        ],
        [
            "title" => "Judul Ketiga",
            "slug" => "judul-ketiga",
            "author" => "Yudha Pamungkas",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptatum placeat excepturi sequi voluptate adipisci cupiditate iste, magni porro? Nulla iste adipisci iusto laudantium, delectus est facere quis necessitatibus, obcaecati ut inventore voluptates voluptate praesentium? Ullam cupiditate itaque modi doloribus quo eum corrupti, sed tempore quam placeat fugit culpa omnis ipsam beatae. Autem nesciunt velit voluptas repellendus voluptatem expedita quos ipsa, rem incidunt beatae dicta, dolores voluptatum maiores itaque? Quod ducimus in neque commodi, illo consequatur facilis, id incidunt harum porro eaque, minus nostrum sit labore delectus! Delectus, blanditiis velit earum animi laudantium rerum ipsa!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
