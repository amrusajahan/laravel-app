@if ($errors->any())
    <div class="mb-4 p-4 border-2 border-red-600 bg-red-100 rounded-xl shadow-[3px_3px_0_0_rgba(128,0,0,0.8)] font-sono text-red-700">
        <ul class="list-disc list-inside space-y-1">
            @foreach ($errors->all() as $error)
                <li>⚠️ {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
