<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Premium Marketplace</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        [x-cloak] { display: none !important; }
    </style>
    <!-- Alpine.js is assumed to be in app.js or we can add CDN if needed, but standard Laravel setup usually has it or we can add it -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans antialiased h-full bg-slate-50 text-slate-800">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation -->
        <header class="bg-white sticky top-0 z-50 shadow-sm border-b border-slate-100" x-data="{ mobileMenuOpen: false, searchOpen: false }">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-lg bg-indigo-600 flex items-center justify-center text-white font-bold text-xl">M</div>
                            <span class="font-bold text-xl tracking-tight text-slate-900">Market<span class="text-indigo-600">Pro</span></span>
                        </a>
                    </div>

                    <!-- Desktop Navigation (Center) -->
                    <nav class="hidden md:flex space-x-8">
                        <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-slate-900 border-b-2 border-indigo-500">Home</a>
                        <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-slate-500 hover:text-slate-900 hover:border-slate-300 border-b-2 border-transparent transition py-2">Shops</a>
                        <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-slate-500 hover:text-slate-900 hover:border-slate-300 border-b-2 border-transparent transition py-2">Categories</a>
                        <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-slate-500 hover:text-slate-900 hover:border-slate-300 border-b-2 border-transparent transition py-2">Deals</a>
                    </nav>

                    <!-- Right Side Actions -->
                    <div class="flex items-center gap-4">
                        <!-- Search Icon (Mobile/Desktop) -->
                        <button @click="searchOpen = !searchOpen" class="p-2 text-slate-400 hover:text-indigo-600 transition">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </button>

                        <!-- Cart -->
                        <div class="relative">
                            <button class="p-2 text-slate-400 hover:text-indigo-600 transition">
                                <span class="absolute top-1 right-0 inline-flex items-center justify-center px-1.5 py-0.5 text-xs font-bold leading-none text-white transform translate-x-1/4 -translate-y-1/4 bg-red-500 rounded-full">3</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007z" />
                                </svg>
                            </button>
                        </div>

                        <!-- User Menu (Guest/Auth) -->
                        @if (Route::has('login'))
                            <div class="hidden sm:flex items-center gap-3">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-sm font-semibold text-slate-700 hover:text-indigo-600">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm font-medium text-slate-700 hover:text-indigo-600">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
                                            Sign up
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        @endif

                        <!-- Mobile Menu Button -->
                        <div class="flex items-center md:hidden">
                            <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-slate-400 hover:text-slate-500 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg x-show="!mobileMenuOpen" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                                <svg x-show="mobileMenuOpen" x-cloak class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search Bar Dropdown -->
            <div x-show="searchOpen" x-transition.opacity @click.away="searchOpen = false" class="absolute inset-x-0 top-16 bg-white border-b border-slate-200 p-4 shadow-lg z-40" x-cloak>
                <div class="max-w-3xl mx-auto">
                    <form action="#" method="GET" class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </div>
                        <input type="text" name="q" class="block w-full rounded-md border-0 py-3 pl-10 pr-3 text-slate-900 ring-1 ring-inset ring-slate-300 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Search for products, brands, and more...">
                    </form>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="md:hidden" id="mobile-menu" x-show="mobileMenuOpen" x-collapse x-cloak>
                <div class="pt-2 pb-3 space-y-1">
                    <a href="#" class="bg-indigo-50 border-indigo-500 text-indigo-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Home</a>
                    <a href="#" class="border-transparent text-slate-500 hover:bg-slate-50 hover:border-slate-300 hover:text-slate-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Shops</a>
                    <a href="#" class="border-transparent text-slate-500 hover:bg-slate-50 hover:border-slate-300 hover:text-slate-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Categories</a>
                    <a href="#" class="border-transparent text-slate-500 hover:bg-slate-50 hover:border-slate-300 hover:text-slate-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Deals</a>
                </div>
                <!-- Mobile Auth -->
                <div class="pt-4 pb-4 border-t border-slate-200">
                    <div class="flex items-center px-4 space-x-3">
                        @auth
                            <div class="flex-shrink-0">
                                <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold">
                                    {{ substr(Auth::user()->name ?? 'U', 0, 1) }}
                                </div>
                            </div>
                            <div>
                                <div class="text-base font-medium text-slate-800">{{ Auth::user()->name ?? 'User' }}</div>
                                <div class="text-sm font-medium text-slate-500">{{ Auth::user()->email ?? '' }}</div>
                            </div>
                        @else
                            <a href="{{ route('login') }}" class="block px-4 py-2 text-base font-medium text-slate-500 hover:text-slate-800 hover:bg-slate-100">Log in</a>
                            <a href="{{ route('register') }}" class="block px-4 py-2 text-base font-medium text-slate-500 hover:text-slate-800 hover:bg-slate-100">Sign up</a>
                        @endauth
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-slate-900 text-white" aria-labelledby="footer-heading">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                    <div class="space-y-8">
                        <a href="#" class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-lg bg-indigo-500 flex items-center justify-center text-white font-bold text-xl">M</div>
                            <span class="font-bold text-xl tracking-tight text-white">Market<span class="text-indigo-400">Pro</span></span>
                        </a>
                        <p class="text-slate-400 text-base">Making commerce better for everyone.</p>
                        <div class="flex space-x-6">
                            <!-- Social links placeholders -->
                            <a href="#" class="text-slate-400 hover:text-white">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                            </a>
                        </div>
                    </div>
                    <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold text-slate-400 tracking-wider uppercase">Solutions</h3>
                                <ul role="list" class="mt-4 space-y-4">
                                    <li><a href="#" class="text-base text-slate-300 hover:text-white">Marketing</a></li>
                                    <li><a href="#" class="text-base text-slate-300 hover:text-white">Analytics</a></li>
                                </ul>
                            </div>
                            <div class="mt-12 md:mt-0">
                                <h3 class="text-sm font-semibold text-slate-400 tracking-wider uppercase">Support</h3>
                                <ul role="list" class="mt-4 space-y-4">
                                    <li><a href="#" class="text-base text-slate-300 hover:text-white">Pricing</a></li>
                                    <li><a href="#" class="text-base text-slate-300 hover:text-white">Documentation</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold text-slate-400 tracking-wider uppercase">Company</h3>
                                <ul role="list" class="mt-4 space-y-4">
                                    <li><a href="#" class="text-base text-slate-300 hover:text-white">About</a></li>
                                    <li><a href="#" class="text-base text-slate-300 hover:text-white">Blog</a></li>
                                </ul>
                            </div>
                            <div class="mt-12 md:mt-0">
                                <h3 class="text-sm font-semibold text-slate-400 tracking-wider uppercase">Legal</h3>
                                <ul role="list" class="mt-4 space-y-4">
                                    <li><a href="#" class="text-base text-slate-300 hover:text-white">Privacy</a></li>
                                    <li><a href="#" class="text-base text-slate-300 hover:text-white">Terms</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 border-t border-slate-700 pt-8">
                    <p class="text-base text-slate-400 xl:text-center">&copy; {{ date('Y') }} MarketPro, Inc. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
