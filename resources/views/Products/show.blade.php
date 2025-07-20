<x-layout>
    <div class="font-sono max-w-3xl mx-auto bg-amber-50 p-8 rounded-3xl border-4 border-black shadow-[6px_6px_0_0_rgba(0,0,0,1)] mt-10">
        <h2 class="text-4xl font-bold text-black mb-4">{{ $product->name }}</h2>
        <p class="text-gray-800 mb-6">{{ $product->description }}</p>
        <p class="text-2xl font-semibold text-green-700 mb-8">LKR. {{ $product->price }}</p>

        <div class="flex gap-4">
            <a href="{{ route('products.edit', $product->id) }}"
               class="bg-pink-200 border-2 border-black rounded-full px-6 py-2 font-semibold shadow-[3px_3px_0_0_rgba(0,0,0,1)] hover:shadow-[5px_5px_0_0_rgba(0,0,0,1)] hover:-translate-y-0.5 transition-all duration-200">
                ✏️ Edit
            </a>

            <form method="POST" action="{{ route('products.destroy', $product) }}" 
                  onsubmit="return confirm('Are you sure you want to delete this product?');">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="bg-red-400 text-white rounded-full px-6 py-2 font-semibold shadow-[3px_3px_0_0_rgba(0,0,0,0.8)] hover:shadow-[5px_5px_0_0_rgba(0,0,0,0.8)] hover:-translate-y-0.5 transition-all duration-200">
                    🗑️ Delete
                </button>
            </form>
        </div>
    </div>
</x-layout>
