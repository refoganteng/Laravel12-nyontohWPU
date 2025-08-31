<x-layout>
    <x-slot:title>About</x-slot:title>

    <div class="container mx-auto px-4 py-12 text-center">
        <h5 class="text-xl text-white">
            My name is <b>{{ $nama }}</b>
        </h5>
        <img src="{{ asset('img/avatar.png') }}" 
             alt="Avatar" 
             class="w-32 h-32 rounded-full mx-auto my-6 shadow-lg">
        <p class="text-gray-400">
            Ini adalah halaman About sederhana dengan Laravel + Tailwind UI.
        </p>
    </div>
</x-layout>
