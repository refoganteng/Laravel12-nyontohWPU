<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog' , 'posts' => [
        [
            'id' => 1,
            'slug' => 'penjarahan-rumah-sahroni',
            'title' => 'Penjarahan Rumah Sahroni',
            'author' => 'Revo Nando',
            'body' => 'Eveniet esse asperiores nihil. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis, itaque perspiciatis expedita corporis illo, voluptates nemo quibusdam, ab accusantium animi assumenda minima in. Provident architecto deserunt modi. Dolores, perspiciatis commodi?'
        ],
        [
            'id' => 2,
            'slug' => 'dalang-pembakaran-halte-kwitang',
            'title' => 'Dalam Pembakaran Halte Kwitang',
            'author' => 'Rezqy Trie',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem tempora ab pariatur aliquam suscipit aperiam voluptatum voluptatibus deleniti natus est laborum dignissimos eveniet, nulla, commodi magni.'
        ],
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'penjarahan-rumah-sahroni',
            'title' => 'Penjarahan Rumah Sahroni',
            'author' => 'Revo Nando',
            'body' => 'Eveniet esse asperiores nihil. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis, itaque perspiciatis expedita corporis illo, voluptates nemo quibusdam, ab accusantium animi assumenda minima in. Provident architecto deserunt modi. Dolores, perspiciatis commodi?'
        ],
        [
            'id' => 2,
            'slug' => 'dalang-pembakaran-halte-kwitang',
            'title' => 'Dalang Pembakaran Halte Kwitang',
            'author' => 'Rezqy Trie',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem tempora ab pariatur aliquam suscipit aperiam voluptatum voluptatibus deleniti natus est laborum dignissimos eveniet, nulla, commodi magni.'
        ],
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

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
