@if(session('status'))
<div class="mb-4 p-4 border-2 border-green-600 bg-green-100 rounded-xl shadow-[3px_3px_0_0_rgba(0,80,0,0.8)] font-sono text-green-800 flex items-center gap-2">
    <span class="text-xl">✅</span>
    <span>{{ session('status') }}</span>
</div>
@endif