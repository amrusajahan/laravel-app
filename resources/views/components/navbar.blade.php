@props(['items' => [
    'Home' => '/',
    'stories' => '/stories',
    'About' => '/about',
    'Contact' => '/contact'
]])

<div x-data="{ mobileMenuOpen: false }" class="font-sono my-5 mx-3 md:mx-5">
    <nav class="bg-amber-100 border-4 border-black rounded-3xl p-4 shadow-[6px_6px_0_0_rgba(0,0,0,1)] relative overflow-hidden">
        
        <!-- Doodle squiggly SVG background -->
        <!-- <div class="absolute -top-4 left-0 w-full h-10">
            <svg viewBox="0 0 100 10" preserveAspectRatio="none" class="w-full h-full">
                <path d="M0,5 Q25,10 50,5 T100,5" stroke="black" fill="transparent" stroke-width="1" />
            </svg>
        </div> -->

        <div class="flex justify-between items-center z-10 relative">
            <!-- Logo -->
            <a href="/" class="text-2xl font-bold no-underline text-black relative inline-flex items-center gap-1">
                <span class="inline-block -rotate-2">MyApp</span>
                <span class="text-xl">🎨</span>
            </a>

            <!-- Mobile menu toggle -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-black">
                <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <!-- Desktop nav links -->
            <div class="hidden md:flex gap-6">
                @foreach($items as $text => $url)
                    <a href="{{ $url }}"
                       class="relative text-black text-base font-semibold no-underline group px-1 py-0.5 hover:text-blue-600">
                        {{ $text }}
                        <span class="absolute bottom-0 left-0 w-full h-1 bg-pink-300 rounded-full scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-300"></span>
                    </a>
                @endforeach
            </div>

            <!-- Login button -->
            <div class="hidden md:block">
                <a href="/login"
                   class="bg-pink-200 border-2 border-black rounded-full px-5 py-2 text-sm font-semibold text-black shadow-[3px_3px_0_0_rgba(0,0,0,1)] hover:shadow-[5px_5px_0_0_rgba(0,0,0,1)] transition-all duration-200 -rotate-1 hover:rotate-0 hover:-translate-y-0.5">
                    Login
                </a>
            </div>
        </div>

        <!-- Mobile menu -->
        <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="md:hidden mt-4 px-3 py-4 border-t-2 border-black border-dashed space-y-2 bg-amber-50 rounded-xl shadow-inner">
            @foreach($items as $text => $url)
                <a href="{{ $url }}" class="block px-3 py-2 rounded-lg bg-white border border-black text-black text-base font-medium hover:bg-yellow-200 transition">
                    {{ $text }}
                </a>
            @endforeach
            <a href="/login"
               class="block w-full text-center bg-pink-200 border-2 border-black rounded-full px-4 py-2 text-base font-semibold shadow-[3px_3px_0_0_rgba(0,0,0,1)]">
                Login
            </a>
        </div>
    </nav>
</div>
