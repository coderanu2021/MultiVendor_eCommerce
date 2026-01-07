<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased h-full">
    <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <a href="{{ route('home') }}" class="flex justify-center items-center gap-2">
                <div class="w-10 h-10 rounded-lg bg-indigo-600 flex items-center justify-center text-white font-bold text-2xl">M</div>
                <span class="font-bold text-2xl tracking-tight text-slate-900">Market<span class="text-indigo-600">Pro</span></span>
            </a>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-slate-900">{{ $title ?? 'Welcome back' }}</h2>
            <p class="mt-2 text-center text-sm text-slate-600">
                Or
                <a href="{{ $linkUrl ?? '#' }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                    {{ $linkText ?? 'start your 14-day free trial' }}
                </a>
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10 border border-slate-100">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
</html>
