<x-layout>
    <x-slot:title>Contact</x-slot:title>

    <div class="container mx-auto px-4 py-12 text-center">
        <h5 class="text-xl font-semibold text-white mb-6">You can find me on</h5>

        <div class="bg-gray-800 rounded-xl p-6 shadow-md inline-block text-left">
            <div class="grid grid-cols-2 gap-x-4 gap-y-2">
                <span class="font-medium text-white">Email</span>
                <span class="text-gray-300">{{ $email }}</span>

                <span class="font-medium text-white">Whatsapp</span>
                <span class="text-gray-300">
                    <a href="https://wa.me/{{ $whatsapp }}" target="blank" class="text-blue-400 hover:underline">{{ $whatsapp }}
                    </a>
                </span>

                <span class="font-medium text-white">Instagram</span>
                <span class="text-gray-300">
                    <a href="https://instagram.com/{{ $instagram }}" target="_blank" class="text-blue-400 hover:underline">
                        {{ $instagram }}
                    </a>
                </span>
            </div>
        </div>
    </div>
</x-layout>
