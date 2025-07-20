@csrf

<div class="space-y-4">
    {{-- Name Field --}}
    <div>
        <label for="name" class="block text-sm font-bold mb-1 text-black">Name:</label>
        <input type="text" name="name" id="name"
               value="{{ old('name', $product->name ?? '') }}"
               class="w-full border-2 border-black rounded-xl px-4 py-2 bg-yellow-50 focus:outline-none focus:ring-2 focus:ring-black shadow-inner transition-all duration-200">
    </div>

    {{-- Description Field --}}
    <div>
        <label for="description" class="block text-sm font-bold mb-1 text-black">Description:</label>
        <input type="text" name="description" id="description"
               value="{{ old('description', $product->description ?? '') }}"
               class="w-full border-2 border-black rounded-xl px-4 py-2 bg-yellow-50 focus:outline-none focus:ring-2 focus:ring-black shadow-inner transition-all duration-200">
    </div>

    {{-- Price Field --}}
    <div>
        <label for="price" class="block text-sm font-bold mb-1 text-black">Price (LKR):</label>
        <input type="number" name="price" id="price"
               value="{{ old('price', $product->price ?? '') }}"
               class="w-full border-2 border-black rounded-xl px-4 py-2 bg-yellow-50 focus:outline-none focus:ring-2 focus:ring-black shadow-inner transition-all duration-200">
    </div>

    {{-- Submit Button --}}
    <div class="pt-2">
        <input type="submit" value="✅ Submit"
               class="bg-pink-200 cursor-pointer text-black border-2 border-black rounded-full px-6 py-2 font-semibold shadow-[3px_3px_0_0_rgba(0,0,0,1)] hover:shadow-[5px_5px_0_0_rgba(0,0,0,1)] hover:-translate-y-0.5 transition-all duration-200">
    </div>
</div>
