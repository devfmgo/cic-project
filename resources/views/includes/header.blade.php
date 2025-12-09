<div id="topBanner" class="bg-orange-400 text-center z-[9999] text-gray-100 text-md fixed top-0 inset-x-0 p-2">
    <label class="tracking-[1px] p-2">Website ini hanya prototype!</label>
</div>
<!-- Header -->
<header id="mainHeader"
    class="fixed w-full inset-x-0 top-[40px] z-[999] border-b border-gray-200 bg-white/90 backdrop-blur-sm shadow-sm p-3">

    <nav class="container flex items-center justify-between mt-[-5px] mx-auto" aria-label="Global">
        <!-- Logo -->
        <div class="mb-2">
            <a href="/" class="hidden lg:block">
                <img src="../assets/images/logo-combiphar.webp" class=" w-28" alt="Combiphar">
                {{-- <img src="assets/images/Logo - CombiMedicine.png" class="w-32" alt="CombiMedicine"> --}}
                {{-- <h1 class="text-3xl font-bold text-purple-800">CombiMedicine</h1> --}}
            </a>
        </div>

        <div class="flex lg:flex-1 w-full items-center space-x-2 rounded-lg mx-3 lg:p-2">
            <label for="Search" class="text-md hidden lg:block font-medium tracking-[1px] whitespace-nowrap">
                Kategori
            </label>

            <div class="relative w-full" aria-label="Search">
                <!-- Icon -->
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-5 h-5 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
                    </svg>
                </span>

                <!-- Input -->
                <form action="{{ route('product.search') }}" method="get">
                    <input type="text" placeholder="Cari product..." name="q"
                        class="pl-10 pr-4 py-2 w-full rounded-lg border border-gray-300
            focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                </form>

            </div>
        </div>

        <!-- Desktop Menu -->
        <div class="lg:gap-x-12">
            <a href="{{ route('product') }}"
                class="text-[14px] lg:text-sm font-semibold flex gap-2 items-center tracking-[1px] hover:text-purple-500
                     @if (Route::is('product')) text-gray-500
                    @else @endif"><svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class=" size-[24px] lg:size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
                Products</a>
            {{-- <a href="#" class="text-sm font-semibold text-gray-900 hover:text-purple-600">Features</a>
            <a href="#" class="text-sm font-semibold text-gray-900 hover:text-purple-600">Marketplace</a>
            <a href="#" class="text-sm font-semibold text-gray-900 hover:text-purple-600">Company</a> --}}
        </div>

        <!-- Desktop Login -->
        <div class="hidden lg:flex lg:items-center lg:ml-8">
            {{-- <a href="#"
                class="inline-flex items-center gap-2 text-sm font-semibold text-gray-900 hover:text-purple-600">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 3h4a2 2 0 012 2v14a2 2 0 01-2 2h-4M10 17l5-5m0 0l-5-5m5 5H3" />
                </svg>
                Log in
            </a> --}}
        </div>
    </nav>
</header>
