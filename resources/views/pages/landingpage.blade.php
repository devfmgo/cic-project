@extends('layouts.default')
@section('title', 'Your Health, Our Commitment')
@section('content')
    <!-- Hero Section -->
    {{-- <section class="relative w-full bg-white pt-32 overflow-hidden pb-10">

        <!-- Text -->

        <div class="w-full text-center lg:text-center mt-20">

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                🏆
                Championing<br />
                <span class="text-indigo-600">a Healthy Tomorrow</span>
            </h1>
            <p class="mt-6 text-lg text-gray-600">
                Wujudkan hidup sehat sepanjang usia bersama produk terpercaya dan inovatif dari kami.
            </p>
        </div>

    </section> --}}


    <div id="controls-carousel" class="mt-4 relative container mx-auto pb-10 lg:mt-24" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-[44rem]">
            <!-- Item 1 -->
            <div class="hidden duration-3000 ease-in-out" data-carousel-item>
                <img src="https://maltofer.combiphar.com/frontend/themes/maltofer2/assets/img/home/hero.png"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover"
                    alt="...">
            </div>
            <!-- Item 2 -->
            {{-- <div class="hidden duration-3000 ease-in-out" data-carousel-item>
                <img src="https://fortiboost.co.id/storage/photos/1/Wallpaper%20Fortiboost%20Mobile%20&%20Desktop-02.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover"
                    alt="...">
            </div> --}}
            <!-- Item 3 -->
            {{-- <div class="hidden duration-3000 ease-in-out" data-carousel-item>
                <img src="https://fortiboost.co.id/storage/photos/1/banner/banner-desktopnew3-1.png"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover"
                    alt="...">
            </div> --}}
        </div>
        <div
            class=" absolute z-30 flex -translate-x-1/2 bottom-20 left-1/2 space-x-3 rtl:space-x-reverse bg-purple-500/30 px-3 py-2 rounded-full">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>

        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>



    {{-- <div class="container mx-auto pb-10">
        <img src="https://maltofer.combiphar.com/frontend/themes/maltofer2/assets/img/home/hero.png" alt=""
            class="rounded-2xl shadow-lg mx-auto">
    </div> --}}
    {{-- <div class="container mx-auto pb-10">
        <div class="w-full flex">
            <img src="https://fortiboost.co.id/storage/photos/1/Wallpaper%20Fortiboost%20Mobile%20&%20Desktop-02.jpg"
                alt="" class="rounded-2xl shadow-lg mx-auto">
            <img src="https://fortiboost.co.id/storage/photos/1/banner/banner-desktopnew3-1.png" alt=""
                class="rounded-2xl shadow-lg mx-auto">

        </div> --}}

    </div>
    <!-- Categories -->
    {{-- <section
        class="max-w-6xl mx-auto mt-10 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 px-4 bg-white">
        <!-- Obat Batuk -->
        <div
            class="group bg-pink-50 p-6 rounded-2xl text-center shadow-md cursor-pointer hover:shadow-xl hover:bg-pink-100 transition duration-300 ease-in-out">
            <div
                class="w-16 h-16 mx-auto mb-4 flex items-center justify-center rounded-full bg-white shadow-inner group-hover:scale-105 transition">
                <img src="assets/images/categories/cough-syrup.png" class="w-10 h-10 object-contain" alt="cough-syrup" />
            </div>
            <h3 class="text-sm font-semibold text-gray-800">Obat Batuk</h3>
        </div>

        <!-- Nyeri & Sendi -->
        <div
            class="group bg-green-50 p-6 rounded-2xl text-center shadow-md cursor-pointer hover:shadow-xl hover:bg-green-100 transition duration-300 ease-in-out">
            <div
                class="w-16 h-16 mx-auto mb-4 flex items-center justify-center rounded-full bg-white shadow-inner group-hover:scale-105 transition">
                <img src="assets/images/categories/bones.png" class="w-10 h-10 object-contain" alt="bones" />
            </div>
            <h3 class="text-sm font-semibold text-gray-800">Nyeri & Sendi</h3>
        </div>

        <!-- Bekas Luka -->
        <div
            class="group bg-yellow-50 p-6 rounded-2xl text-center shadow-md cursor-pointer hover:shadow-xl hover:bg-yellow-100 transition duration-300 ease-in-out">
            <div
                class="w-16 h-16 mx-auto mb-4 flex items-center justify-center rounded-full bg-white shadow-inner group-hover:scale-105 transition">
                <img src="assets/images/categories/tape.png" class="w-10 h-10 object-contain" alt="tape" />
            </div>
            <h3 class="text-sm font-semibold text-gray-800">Bekas Luka</h3>
        </div>

        <!-- Suplemen Kesehatan -->
        <div
            class="group bg-orange-50 p-6 rounded-2xl text-center shadow-md cursor-pointer hover:shadow-xl hover:bg-orange-100 transition duration-300 ease-in-out">
            <div
                class="w-16 h-16 mx-auto mb-4 flex items-center justify-center rounded-full bg-white shadow-inner group-hover:scale-105 transition">
                <img src="assets/images/categories/dietary-suplement.png" class="w-10 h-10 object-contain" alt="dietary" />
            </div>
            <h3 class="text-sm font-semibold text-gray-800">Suplemen Kesehatan</h3>
        </div>

        <!-- Obat Tetes Mata -->
        <div
            class="group bg-purple-50 p-6 rounded-2xl text-center shadow-md cursor-pointer hover:shadow-xl hover:bg-purple-100 transition duration-300 ease-in-out">
            <div
                class="w-16 h-16 mx-auto mb-4 flex items-center justify-center rounded-full bg-white shadow-inner group-hover:scale-105 transition">
                <img src="assets/images/categories/eye.png" class="w-10 h-10 object-contain" alt="eye" />
            </div>
            <h3 class="text-sm font-semibold text-gray-800">Obat Tetes Mata</h3>
        </div>
    </section> --}}

    <!-- Product All -->

    <section class="lg:mt-10 container mx-auto px-4">
        <div class="py-4">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6 text-center">
                Our <span class="text-purple-600">Product</span>
            </h2>
        </div>

        <div id="carouselWrapper" class="relative container mx-auto px-4">

            <!-- Button Prev -->
            <button id="btnPrev"
                class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-purple-500 p-2 rounded-full shadow hover:bg-purple-100 w-10">
                <svg data-slot="icon" class="text-gray-50 hover:text-purple-600" fill="none" stroke-width="1.5"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18"></path>
                </svg>
                </svg>
            </button>
            <!-- Carousel Scroll -->
            <div id="carouselScroll"
                class="flex gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory scrollbar-hide p-2">

                @foreach ($products as $item)
                    <!-- Item -->
                    <div
                        class="carousel-item snap-start w-1/4 min-w-[250px] bg-white rounded-xl shadow hover:shadow-md transition overflow-hidden">

                        <div class="w-full overflow-hidden transition">
                            <div class="relative bg-purple-100 p-5 rounded-t-[16px] shadow-lg">

                                <!-- Badge -->
                                <div
                                    class="bg-yellow-50 text-yellow-600 rounded-xl flex gap-1 absolute top-4 left-4 px-3 py-1 text-xs font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <label class="text-[10px]">{{ $item->clicks_count }}</label>
                                </div>

                                <img src="storage/{{ $item->productDetails[0]->image }}" alt="{{ $item->product_name }}"
                                    class="mt-10 w-full h-36 object-contain mx-auto transition-transform duration-300 hover:scale-110">
                            </div>

                            <div class="h-32 px-4 pt-4"
                                style="overflow:hidden;position:relative;top:-20px;border-radius:25px;background:white;padding:10px;">

                                <div class="flex flex-col h-full justify-between">

                                    <div>
                                        <sub
                                            class="text-[10px] text-indigo-600 tracking-[1px] font-medium bg-indigo-50 p-1 rounded-xl my-3">
                                            {{ $item->productCategory->product_category_name }}
                                        </sub>

                                        <h3
                                            class="text-sm py-2 font-medium text-gray-700 hover:text-purple-600 tracking-[1px]">
                                            <a href="{{ route('single-product', $item->slug) }}">
                                                {{ $item->product_name }}
                                            </a>
                                        </h3>
                                    </div>

                                    <a href="{{ route('single-product', $item->slug) }}"
                                        class="w-full bg-purple-600 hover:bg-purple-500 text-white text-[13px] py-2 rounded-[20px] font-[500] inline-flex items-center justify-center gap-1 mt-4 tracking-[1px]">
                                        Selengkapnya
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-4 font-[500]">
                                            <path fill-rule="evenodd"
                                                d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Button Next -->
            <button id="btnNext"
                class="absolute right-0 top-1/2 -translate-y-1/2 bg-purple-500 p-2  rounded-full shadow hover:bg-purple-100 w-10">
                <svg data-slot="icon" class="text-gray-50 hover:text-purple-600" fill="none" stroke-width="1.5"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3">
                    </path>
                </svg>
            </button>
        </div>
    </section>
@endsection
