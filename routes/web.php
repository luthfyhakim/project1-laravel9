<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home', [
        'name' => 'Hakim',
        'title' => 'Home',
        'blog' => Post::getAll()
    ]);
});

Route::get('/berita', [PostController::class, 'index']);

// route siswa
Route::controller(StudentController::class)->group(function () {
    Route::get('/siswa', 'index');
    Route::get('/siswa/tambah', 'tambah');
    Route::post('/siswa/simpan', 'simpan');
    Route::get('/siswa/edit/{id}', 'edit');
    Route::put('/siswa/update/{id}', 'update');
    Route::get('/siswa/hapus/{id}', 'delete');
});

Route::get('post/{slug}', function ($slug) {
    return view('post', [
        'title' => 'Single Post',
        'post' => Post::getBySlug($slug)
    ]);
});

Route::get('/agenda', function () {
    return view('agenda', [
        'title' => 'Agenda'
    ]);
});

Route::get('/profil', function () {
    return view('profil', [
        'title' => 'Profil',
        'name' => 'Luthfy Hakim',
        'email' => 'luthfyhakim250404@gmail.com'
    ]);
});
