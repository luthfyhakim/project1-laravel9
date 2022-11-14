<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('berita.index', [
            'title' => 'Berita',
            'posts' => Post::getAll()
        ]);
    }
}
