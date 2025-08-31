<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
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
