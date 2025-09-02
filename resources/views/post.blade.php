<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mx-auto px-4 py-12">
        <article 
            class="prose prose-lg prose-amber dark:prose-invert mx-auto w-full max-w-3xl leading-relaxed">

            {{-- Header / Author Info --}}
            <header class="mb-8">
                <address class="flex items-center gap-4 not-italic">
                    <img 
                        class="w-16 h-16 rounded-full shadow-md border border-gray-700" 
                        src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" 
                        alt="{{ $post->author->name }}">

                    <div>
                        {{-- Author Name --}}
                        <a 
                            href="/authors/{{ $post->author->username }}" 
                            class="block text-xl font-bold text-amber-600 dark:text-amber-300 hover:underline">
                            {{ $post->author->name }}
                        </a>

                        {{-- Category Badge --}}
                        <a 
                            href="/categories/{{ $post->category->slug }}" 
                            class="inline-block mt-2 px-3 py-1 text-sm font-medium rounded-full bg-amber-100 text-amber-700 dark:bg-amber-800 dark:text-amber-200 hover:bg-amber-200 dark:hover:bg-amber-700 transition">
                            {{ $post->category->name }}
                        </a>

                        {{-- Published Date --}}
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                            {{ $post->created_at->diffForHumans() }}
                        </p>
                    </div>
                </address>

                {{-- Title --}}
                <h1 
                    class="mt-6 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                    {{ $post->title }}
                </h1>
            </header>

            {{-- Body --}}
            <div class="space-y-6 text-gray-700 dark:text-gray-300">
                @foreach (explode("\n\n", $post->body) as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>

            {{-- Back Link --}}
            <footer class="mt-10">
                <a 
                    href="/posts" 
                    class="inline-flex items-center gap-2 text-blue-600 dark:text-blue-400 font-medium hover:underline">
                    &laquo; Back to posts
                </a>
            </footer>
        </article>
    </div>
</x-layout>
