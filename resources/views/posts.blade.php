<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md sm:text-center">
            <form action="/posts">
                <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                    <div class="relative w-full">
                        <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Seacrh</label>
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search for article" type="search" id="search" name="search" autocomplete="off">
                    </div>
                    <div>
                        <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="pt-4 pb-8 px-4 mx-auto max-w-screen-xl lg:pt-4 lg:px-0">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($posts as $post)
            <!-- <article class="bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-lg transition">
                        <a href="/posts/{{ $post['slug'] }}">
                            <h2 class="text-2xl font-bold text-white mb-3 hover:text-amber-200 hover:underline">{{ $post['title'] }}</h2>
                        </a>
                        <div class="text-white">by
                            <a href="/authors/{{ $post->author->username }}" class="text-amber-200 hover:underline">{{ $post->author->name }}</a> in
                            <a href="/categories/{{ $post->category->slug }}" class="text-amber-500  hover:underline">{{ $post->category->name }}</a>
                            | {{ $post->created_at->diffForHumans() }}
                        </div>
                        <p class="text-gray-300 leading-relaxed">
                            {{ Str::limit($post['body'], 100) }}
                        </p>
                        <a href="/posts/{{ $post['slug'] }}" class="text-blue-400 font-medium hover:underline mt-5 inline-block">Read more &raquo</a>
                    </article> -->
            <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-amber-200 dark:text-primary-800">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path>
                            <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                        </svg>
                        <a href="/categories/{{ $post->category->slug }}" class="hover:underline">{{ $post->category->name }}</a>
                    </span>
                    <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post['body'], 100) }}</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <span class="font-medium dark:text-white">
                            <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a>
                        </span>
                    </div>
                    <a href="/posts/{{ $post['slug'] }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read more &raquo
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</x-layout>