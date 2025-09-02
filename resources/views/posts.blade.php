<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mx-auto px-4 py-12 space-y-8">
        @foreach ($posts as $post)
        <article class="bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-lg transition">
            <a href="/posts/{{ $post['slug'] }}">
                <h2 class="text-2xl font-bold text-white mb-3 hover:text-amber-200 hover:underline">{{ $post['title'] }}</h2>
            </a>
            <div class="text-white">
                <a href="/authors/{{ $post->author->id }}" class="text-white hover:underline">{{ $post->author->name }}</a> | {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="text-gray-300 leading-relaxed">
                {{ Str::limit($post['body'], 100) }}
            </p>
            <a href="/posts/{{ $post['slug'] }}" class="text-blue-400 font-medium hover:underline mt-5 inline-block">Read more &raquo</a>
        </article>
        @endforeach
    </div>
</x-layout>