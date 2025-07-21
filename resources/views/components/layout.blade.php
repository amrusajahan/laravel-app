<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../css/app.css">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Or install via NPM -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sono:wght@400;600&display=swap" rel="stylesheet">

    <style>
        .font-sono {
            font-family: 'Sono', monospace;
        }

        .break-hyphen {
            overflow-wrap: break-word;
            word-break: break-word;
            hyphens: auto;
        }
    </style>

</head>

<body class="bg-gradient-to-br from-amber-100 to-yellow-200">
    <x-navbar />

    @if(session('status'))
    <div class="mb-4 p-4 border-2 border-green-600 bg-green-100 rounded-xl shadow-[3px_3px_0_0_rgba(0,80,0,0.8)] font-sono text-green-800 flex items-center gap-2">
        <span class="text-xl">✅</span>
        <span>{{ session('status') }}</span>
    </div>
    @endif


    {{$slot}}
</body>

</html>