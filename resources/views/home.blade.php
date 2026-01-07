<x-shop-layout>
    <!-- Hero Section -->
    <div class="relative bg-slate-900 overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('hero_banner.png') }}" alt="Hero Background" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/40 to-transparent"></div>
        </div>
        <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                Discover the Premium <br> <span class="text-indigo-400">Marketplace Experience</span>
            </h1>
            <p class="mt-6 text-xl text-slate-300 max-w-3xl">
                Explore a curated collection of top-tier products from verified vendors. Quality, speed, and exceptional service in one place.
            </p>
            <div class="mt-10 flex gap-4">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 transition">
                    Shop Now
                </a>
                <a href="#" class="inline-flex items-center px-6 py-3 border border-slate-500 text-base font-medium rounded-full text-slate-200 hover:bg-slate-800 transition">
                    Become a Vendor
                </a>
            </div>
        </div>
    </div>

    <!-- Featured Categories -->
    <div class="bg-white py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900">Shop by Category</h2>
            <div class="mt-8 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <!-- Category 1 -->
                <a href="#" class="group relative">
                    <div class="relative h-80 w-full overflow-hidden rounded-2xl bg-slate-100 group-hover:opacity-75 transition sm:h-64 sm:aspect-w-1 sm:aspect-h-1">
                       <div class="w-full h-full bg-gradient-to-tr from-purple-500 to-indigo-500 flex items-center justify-center text-white text-4xl">
                           📱
                       </div>
                    </div>
                    <div class="mt-4">
                       <h3 class="text-lg font-semibold text-slate-900">Electronics</h3>
                       <p class="mt-1 text-sm text-slate-500">Latest gadgets & accessories</p>
                    </div>
                </a>
                <!-- Category 2 -->
                <a href="#" class="group relative">
                    <div class="relative h-80 w-full overflow-hidden rounded-2xl bg-slate-100 group-hover:opacity-75 transition sm:h-64 sm:aspect-w-1 sm:aspect-h-1">
                        <div class="w-full h-full bg-gradient-to-tr from-pink-500 to-rose-500 flex items-center justify-center text-white text-4xl">
                            👗
                        </div>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold text-slate-900">Fashion</h3>
                        <p class="mt-1 text-sm text-slate-500">Trending styles for all</p>
                    </div>
                </a>
                <!-- Category 3 -->
                <a href="#" class="group relative">
                    <div class="relative h-80 w-full overflow-hidden rounded-2xl bg-slate-100 group-hover:opacity-75 transition sm:h-64 sm:aspect-w-1 sm:aspect-h-1">
                        <div class="w-full h-full bg-gradient-to-tr from-teal-500 to-emerald-500 flex items-center justify-center text-white text-4xl">
                            🏡
                        </div>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold text-slate-900">Home & Living</h3>
                        <p class="mt-1 text-sm text-slate-500">Decor, furniture & more</p>
                    </div>
                </a>
                <!-- Category 4 -->
                <a href="#" class="group relative">
                    <div class="relative h-80 w-full overflow-hidden rounded-2xl bg-slate-100 group-hover:opacity-75 transition sm:h-64 sm:aspect-w-1 sm:aspect-h-1">
                        <div class="w-full h-full bg-gradient-to-tr from-orange-400 to-amber-500 flex items-center justify-center text-white text-4xl">
                            ⚽
                        </div>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold text-slate-900">Sports</h3>
                        <p class="mt-1 text-sm text-slate-500">Gear for your active life</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Featured Products -->
    <div class="bg-slate-50 py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">Trending Products</h2>
                <a href="#" class="hidden text-sm font-medium text-indigo-600 hover:text-indigo-500 md:block">
                    Shop the collection <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach(range(1, 4) as $item)
                <div class="group relative bg-white p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-slate-200 group-hover:opacity-75 lg:aspect-none lg:h-60">
                        <div class="w-full h-full flex items-center justify-center bg-slate-100 text-slate-400">
                             <!-- Placeholder for product image -->
                             <span class="text-5xl">🛍️</span>
                        </div>
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-slate-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Premium Product {{ $item }}
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-slate-500">Vendor Name</p>
                            <div class="flex items-center mt-1">
                                <svg class="text-yellow-400 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                                <span class="text-xs text-slate-400 ml-1">4.8 (120)</span>
                            </div>
                        </div>
                        <p class="text-sm font-medium text-slate-900">${{ rand(40, 200) }}.00</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-8 text-center md:hidden">
                <a href="#" class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">Shop the collection</a>
            </div>
        </div>
    </div>

    <!-- Top Vendors Section -->
     <div class="bg-white py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900 mb-8">Top Rated Vendors</h2>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach(range(1, 3) as $vendor)
                <div class="relative rounded-lg border border-slate-200 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-indigo-500 transition">
                    <div class="flex-shrink-0">
                        <div class="h-12 w-12 rounded-full bg-slate-200 flex items-center justify-center text-xl">
                            🏢
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <a href="#" class="focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-medium text-slate-900">TechGiants Store</p>
                            <p class="text-sm text-slate-500 truncate">Electronics, Computers, Gadgets</p>
                        </a>
                    </div>
                    <div>
                         <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                             Verified
                         </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-indigo-700">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                <span class="block">Ready to start selling?</span>
                <span class="block">Create your store today.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-indigo-200">
                Join thousands of other successful vendors using MarketPro to reach customers worldwide.
            </p>
            <a href="#" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto">
                Get started for free
            </a>
        </div>
    </div>
</x-app-layout>
