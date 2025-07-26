<x-layout>
    <div class="font-sono min-h-screen py-8 px-4 sm:px-8 lg:px-16">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-black">🛍️ Products</h1>
            <a href="{{ route('products.create') }}"
               class="inline-block bg-pink-200 text-black border-2 border-black rounded-full px-5 py-2 font-semibold shadow-[3px_3px_0_0_rgba(0,0,0,1)] hover:shadow-[5px_5px_0_0_rgba(0,0,0,1)] transition-all duration-200 hover:-translate-y-0.5">
                ➕ Add Product
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
                <div
                    class="bg-white border-2 border-black rounded-2xl p-4 shadow-[4px_4px_0_0_rgba(0,0,0,1)] hover:shadow-[6px_6px_0_0_rgba(0,0,0,1)] hover:-translate-y-1 transition-all duration-300">
                    
                    <h2 class="text-xl font-bold text-blue-800 hover:underline mb-2">
                        <a href="{{ route('products.show', $product->id) }}">
                            {{ $product->name }}
                        </a>
                    </h2>

                    <p class="text-sm text-gray-700 mb-2">{{ $product->description }}</p>

                    <p class="text-lg font-semibold text-green-700">LKR. {{ $product->price }}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
