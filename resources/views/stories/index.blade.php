<x-layout>
    <div class="font-sono min-h-screen p-8">
        <h1 class="text-4xl font-bold text-center mb-10 text-black drop-shadow-[2px_2px_0_rgba(0,0,0,0.7)] break-hyphen">
            📖 Featured Stories
        </h1>
        <a href="{{ route('stories.create') }}"
            class="inline-block bg-pink-200 text-black border-2 border-black rounded-full px-5 py-2 my-6 font-semibold shadow-[3px_3px_0_0_rgba(0,0,0,1)] hover:shadow-[5px_5px_0_0_rgba(0,0,0,1)] transition-all duration-200 hover:-translate-y-0.5">
            ➕ Write Story
        </a>

        <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($stories as $story)
            <div class="bg-white border-4 border-black rounded-xl p-6 shadow-[4px_4px_0_rgba(0,0,0,1)] hover:shadow-[8px_8px_0_rgba(0,0,0,1)] transition-shadow duration-300">
                <h2 class="text-2xl font-semibold mb-2 text-pink-600 break-hyphen">{{ $story->title }}</h2>
                <p class="italic text-sm text-gray-500 mb-4 break-hyphen">Genre: {{ $story->genre }}</p>
                <p class="text-gray-800 leading-relaxed break-hyphen">
                    {{ \Illuminate\Support\Str::limit($story->content, 200, '...') }}
                </p>
                <button class="mt-4 inline-block text-sm text-white bg-black px-4 py-2 rounded-full hover:bg-pink-600 transition duration-300">
                    Read More
                </button>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>