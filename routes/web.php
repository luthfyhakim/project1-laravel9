<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $blog = [
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

    return view('home', [
        'name' => 'Hakim',
        'title' => 'Home',
        'blog' => $blog
    ]);
});

Route::get('/berita', function () {
    $blog_posts = [
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

    return view('berita', [
        'title' => 'Berita',
        'posts' => $blog_posts
    ]);
});

Route::get('post/{slug}', function ($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});

Route::get('/agenda', function () {
    return view('agenda', [
        'title' => 'Agenda'
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        'title' => 'Kontak',
        'name' => 'Luthfy Hakim',
        'email' => 'luthfyhakim250404@gmail.com'
    ]);
});

Route::get('/profil', function () {
    return view('profil', [
        'title' => 'Profil'
    ]);
});
