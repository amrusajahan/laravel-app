<x-layout>
    <div class="font-sono max-w-3xl mx-auto p-6 text-black">
        <div class="bg-white rounded-2xl border-4 border-black shadow-[6px_6px_0_rgba(0,0,0,1)] p-8">

            <h1 class="text-4xl font-bold mb-4 break-words hyphens-auto">
                {{ $story->title }}
            </h1>

            <p class="italic text-lg text-pink-600 mb-6">
                Genre: {{ $story->genre }}
            </p>

            <div class="prose prose-lg prose-p:text-gray-800 leading-relaxed break-words hyphens-auto">
                {!! nl2br(e($story->content)) !!}
            </div>

            <div class="mt-8">
                <a href="{{ route('stories.index') }}" class="inline-block bg-black text-white px-6 py-2 rounded-full hover:bg-pink-600 transition">
                    ← Back to Stories
                </a>

                <a href="{{ route('stories.edit',$story)}}" class="inline-block bg-black text-white px-6 py-2 rounded-full hover:bg-pink-600 transition">
                    Edit
                </a>
            </div>
        </div>
    </div>
</x-layout>