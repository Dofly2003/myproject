<?php

use App\Models\Kategori;
use App\Models\post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});



Route::get('/katalog', [PostController::class,'index']);

Route::get('/katalog/posts/{post:slug}',function(Post $post){
    return view ('post_katalog', ['title' => 'Product', 'post' => $post]);
});

Route::get('/katalog/kategories/{kategori:slug}',function(Kategori $kategori){
    return view ('katalog', ['title' => 'Product By'. $kategori->name, 'posts' => $kategori->posts ]);
});

    
Route::get('/kontak', function () {
    return view('kontak', [
        'title' => 'Kontak'
    ]);
});
Route::get('/tentang-kami', function () {
    return view('tentang-kami', [
        'title' => 'Tentang Kami',
        'post' => ""
    ]);
});

Route::get('/tambah', [PostController::class, 'tambah']);
Route::get('/homeAdmin', [PostController::class, 'homeAdmin']);
Route::post('/submit', [PostController::class, 'submit']);


