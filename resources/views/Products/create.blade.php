<x-layout>
    {{-- Ensure font and Tailwind CDN are loaded --}}
    @once
        @push('head')
            <link href="https://fonts.googleapis.com/css2?family=Sono:wght@400;600&display=swap" rel="stylesheet">
            <script src="https://cdn.tailwindcss.com"></script>
            <style>
                .font-sono {
                    font-family: 'Sono', monospace;
                }
            </style>
        @endpush
    @endonce

    <div class="font-sono min-h-screen bg-amber-50 py-8 px-4 sm:px-8 lg:px-16">
        <div class="max-w-2xl mx-auto bg-white border-4 border-black rounded-3xl shadow-[6px_6px_0_0_rgba(0,0,0,1)] p-6">
            <h1 class="text-3xl font-bold text-black mb-6">➕ New Product</h1>

            {{-- Display Validation Errors --}}
            <x-errors />

            <form action="{{ route('products.store') }}" method="POST" class="space-y-4">
                @csrf
                {{-- Inject the form fields --}}
                <x-forms.product />
            </form>
        </div>
    </div>
</x-layout>
