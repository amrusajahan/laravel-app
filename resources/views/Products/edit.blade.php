<x-layout>

    <div class="font-sono min-h-screen bg-amber-50 py-8 px-4 sm:px-8 lg:px-16">
        <div class="max-w-2xl mx-auto bg-white border-4 border-black rounded-3xl shadow-[6px_6px_0_0_rgba(0,0,0,1)] p-6">
            <h1 class="text-3xl font-bold text-black mb-6">✏️ Edit Product</h1>

            <x-errors />

            <form action="{{ route('products.update', $product) }}" method="POST" class="space-y-4">
                @csrf
                @method('PATCH')

                <x-forms.product :product="$product" />
            </form>
        </div>
    </div>
</x-layout>