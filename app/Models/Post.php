<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug)
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
