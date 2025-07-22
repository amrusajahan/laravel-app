<x-layout>
    <div class="font-sono max-w-3xl mx-auto mt-12 bg-white p-8 border-4 border-black rounded-xl shadow-[5px_5px_0_rgba(0,0,0,1)]">
        <h1 class="text-3xl font-bold mb-6 text-center text-pink-700">✏️ Write a Story</h1>

        {{-- Display Validation Errors --}}
        <x-errors />

        <form action="{{route('stories.store')}}" method="POST" class="space-y-6">
            @csrf
            <x-forms.story />
        </form>
    </div>
</x-layout>