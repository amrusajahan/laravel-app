<x-layout>
    <div class="flex items-center justify-center min-h-screen  font-sono">
        <div class="w-full max-w-md p-8 bg-white rounded-2xl border-4 border-black shadow-[6px_6px_0_rgba(0,0,0,1)]">

            <h1 class="text-3xl font-bold text-center mb-6 text-black">Login</h1>

            <form action="{{ route('login.process') }}" method="post" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block mb-1 text-black">Email</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        class="w-full px-4 py-2 border-2 border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                        required>
                    @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block mb-1 text-black">Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="w-full px-4 py-2 border-2 border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                        required>
                    @error('password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-center">
                    <button
                        type="submit"
                        class="bg-black text-white px-6 py-2 rounded-full hover:bg-pink-600 transition duration-200 shadow-[4px_4px_0_rgba(0,0,0,1)]">
                        Login
                    </button>
                </div>
                <div class="flex justify-center">
                    <p>Don't have an account?</p>
                    <a href="/register">
                        <p class="text-blue-500 hover:underline">Register here</p>
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layout>