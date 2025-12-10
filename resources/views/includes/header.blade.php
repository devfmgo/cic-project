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
                    @else @endif">
                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" transform=""
                    id="injected-svg"><!--Boxicons v3.0.6 https://boxicons.com | License  https://docs.boxicons.com/free-->
                    <path
                        d="m19.1,2.8c-.38-.5-.97-.8-1.6-.8H6.5c-.63,0-1.23.3-1.6.8l-2.7,3.6c-.13.17-.2.38-.2.6v1c0,1.04.41,1.98,1.06,2.69-.03.1-.06.2-.06.31v9c0,1.1.9,2,2,2h14c1.1,0,2-.9,2-2v-9c0-.11-.03-.21-.06-.31.65-.71,1.06-1.65,1.06-2.69v-1c0-.22-.07-.43-.2-.6l-2.7-3.6Zm-1.6,1.2l2.5,3.33v.67c0,1.1-.9,2-2,2s-2-.9-2-2v-1c0-.08-.01-.16-.03-.24l-.69-2.76h2.22Zm-6.72,0h2.44l.78,3.12v.88c0,1.1-.9,2-2,2s-2-.9-2-2v-.88l.78-3.12Zm-6.78,3.33l2.5-3.33h2.22l-.69,2.76c-.02.08-.03.16-.03.24v1c0,1.1-.9,2-2,2s-2-.9-2-2v-.67Zm1,12.67v-8.14c.32.08.65.14,1,.14,1.2,0,2.27-.54,3-1.38.73.84,1.8,1.38,3,1.38s2.27-.54,3-1.38c.73.84,1.8,1.38,3,1.38.35,0,.68-.06,1-.14v8.14H5Z">
                    </path>
                    <path d="M13 13 11 13 11 15 9 15 9 17 11 17 11 19 13 19 13 17 15 17 15 15 13 15 13 13z"></path>
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
