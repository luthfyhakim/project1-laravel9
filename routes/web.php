<?php

use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/siswa', 'index')->name('siswa');
    Route::get('/siswa/tambah', 'tambah')->name('siswa.tambah');
    Route::post('/siswa/simpan', 'simpan');
    Route::get('/siswa/edit/{id}', 'edit')->name('siswa.edit');
    Route::put('/siswa/update/{id}', 'update');
    Route::get('/siswa/hapus/{id}', 'delete')->name('siswa.hapus');
});

// route guru
Route::controller(GuruController::class)->group(function () {
    Route::get('/guru', 'index')->name('guru');
    Route::get('/guru/create', 'create')->name('guru.create');
    Route::post('/guru/store', 'store');
    Route::get('/guru/edit/{id}', 'edit')->name('guru.edit');
    Route::put('/guru/update/{id}', 'update');
    Route::get('/guru/delete/{id}', 'delete')->name('guru.delete');
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
