<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Shop' }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Tailwind / CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-900">

    {{-- Header --}}
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <h1 class="text-xl font-bold">MarketPro</h1>
        </div>
    </header>

    {{-- Page Content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="bg-slate-900 text-slate-200 mt-16">
        <div class="max-w-7xl mx-auto px-4 py-6 text-center text-sm">
            © {{ date('Y') }} MarketPro. All rights reserved.
        </div>
    </footer>

</body>
</html>
