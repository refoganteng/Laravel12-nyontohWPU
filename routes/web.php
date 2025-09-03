<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'All Articles',
        'posts' => Post::filter()->latest()->get(),
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'title' => 'Single Post',
        'post' => $post,
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', [
        'title' => count($user->posts) . ' Articles by ' . $user->name,
        'posts' => $user->posts,
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => count($category->posts) . " Articles in " . $category->name,
        'posts' => $category->posts,
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
