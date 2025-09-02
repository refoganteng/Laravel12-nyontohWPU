<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <div class="container mx-auto px-4 py-12 text-center">
        <h1 class="text-4xl font-bold mb-4 text-white">Selamat Datang di Tempat Saya!</h1>
        <p class="text-lg text-gray-400 mb-8">
            Ini adalah halaman home sederhana. Yuk mulai eksplorasi!
        </p>

        <div class="flex justify-center gap-4">
            <a href="/about" 
               class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition">
               About
            </a>
            <a href="/posts" 
               class="bg-yellow-600 hover:bg-yellow-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition">
               Blog
            </a>
            <a href="/contact" 
               class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition">
               Contact
            </a>
        </div>
    </div>
</x-layout>
