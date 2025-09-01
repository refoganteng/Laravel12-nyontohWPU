<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog' , 'posts' => Post::all()
    ]);
});

Route::get('/posts/{slug}', function($slug){
    $post = Post::find($slug);
    return view('post', [
        'title' => 'Single Post',
        'post' => $post,
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'nama' => 'Revo Nando'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'email' => 'rnganteng98@gmail.com',
        'whatsapp' => '6285172326292',
        'instagram' => 'refonnddd'
    ]);
});
