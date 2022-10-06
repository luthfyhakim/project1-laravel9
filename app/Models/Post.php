<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public static $posts = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'author' => 'Ecobag',
            'body' => 'Dolor eu consequat eu officia do. Sint mollit elit adipisicing reprehenderit in dolor duis fugiat enim minim. Amet irure cillum reprehenderit nostrud incididunt nisi. Nisi incididunt nulla esse reprehenderit officia elit. Incididunt quis reprehenderit esse ex elit.'
        ],
        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'Luthfy',
            'body' => 'Dolor eu consequat eu officia do. Sint mollit elit adipisicing reprehenderit in dolor duis fugiat enim minim. Amet irure cillum reprehenderit nostrud incididunt nisi. Nisi incididunt nulla esse reprehenderit officia elit. Incididunt quis reprehenderit esse ex elit.'
        ],
        [
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'author' => 'Baru_main982',
            'body' => 'Dolor eu consequat eu officia do. Sint mollit elit adipisicing reprehenderit in dolor duis fugiat enim minim. Amet irure cillum reprehenderit nostrud incididunt nisi. Nisi incididunt nulla esse reprehenderit officia elit. Incididunt quis reprehenderit esse ex elit.'
        ]
    ];

    public static function getAll()
    {
        // return self::$posts;
        return collect(self::$posts); // menggunakan collection
    }

    public static function getBySlug($slug)
    {
        // $posts = self::$posts;
        // $new_post = [];

        // foreach ($posts as $post) {
        //     if ($post['slug'] === $slug) {
        //         $new_post = $post;
        //     }
        // }

        // return $new_post;
        $post = static::getAll(); // menggunakan collection

        return $post->firstWhere('slug', $slug);
    }
}
