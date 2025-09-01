<x-layout>
    <x-slot:title>Blog</x-slot:title>

    <div class="container mx-auto px-4 py-12 space-y-8">
        <article class="bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-lg transition">
                <h2 class="text-2xl font-bold text-white mb-3">{{ $post['title'] }}</h2>
            <div class="text-white">
                <a href="#" class="text-white">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="text-gray-300 leading-relaxed">
                {{$post['body']}}
            </p>
            <a href="/posts" class="text-blue-400 font-medium hover:underline mt-5 inline-block">&laquo Back to posts</a>
        </article>
    </div>
</x-layout>