<x-layout>
    <div class="font-sono min-h-screen  flex flex-col justify-center items-center text-center p-8">
        <h1 class="text-5xl font-bold mb-6 text-black ">
            🎉 Welcome to <span class="text-pink-500 underline decoration-wavy decoration-pink-400">MyApp</span>!
        </h1>

        <p class="text-lg text-gray-800 mb-10 max-w-xl px-4">
            {{ $name }}
        </p>

        <a href="{{ route('products.index') }}"
            class="inline-block bg-pink-300 border-4 border-black rounded-full px-10 py-4 text-xl font-semibold text-black shadow-[5px_5px_0_0_rgba(0,0,0,1)] hover:shadow-[8px_8px_0_0_rgba(0,0,0,1)] hover:-translate-y-1 transition-transform duration-300 select-none">
            🛍️ Explore Products
        </a>
    </div>
</x-layout>