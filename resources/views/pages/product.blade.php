@extends('layouts.default')
@section('title', 'Produk Kami')
@section('content')
    <!-- Product All -->
    <section class=" container mx-auto py-20 px-4">
        {{-- ===== BREADCRUMB ===== --}}
        @if (empty($q))
            <div class="container mx-auto mb-6 mt-6">
                <ol
                    class="inline-flex items-center space-x-1 md:space-x-3 bg-indigo-50/50 rounded-lg p-4 text-sm text-gray-700 ">
                    <li class="inline-flex items-center">
                        <a href="/"
                            class="text-sm text-gray-700 hover:text-indigo-400 hover:font-semibold inline-flex items-center ">
                            <svg data-slot="icon" class="w-5 h-5 mr-2 text-indigo-400 font-black" fill="none"
                                stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                                </path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-indigo-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <a href="/product"
                                class="text-gray-700  ml-1 md:ml-2 text-sm font-semibold  hover:text-indigo-400 hover:font-semibold">Product</a>
                        </div>
                    </li>

                </ol>
            </div>
        @endif
        @if (!empty($q))
            <h2 class="text-muted font-medium my-6">
                Menampilkan {{ count($products) }} hasil pencarian untuk " <span
                    class="text-purple-600 font-bold">{{ $q }}
                    "</span>

            </h2>
        @endif
        @if (!empty(count($products)))
            @if (empty($q))
                <div class="py-4">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6 text-center">
                        Produk <span class="text-purple-600">Kami</span>
                    </h2>
                </div>
            @endif
            <div
                class=" my-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 min-w-[250px]">
                <!-- Produk cards: ganti w-full dengan w-full di semua card -->
                @foreach ($products as $item)
                    <!-- Ulsafate -->
                    <div
                        class="w-full  overflow-hidden  transition-shadow shadow-sm hover:shadow-lg hover:shadow-purple-100 rounded-xl bg-white">
                        <div
                            class="relative bg-gradient-to-t from-violet-300 to-violet-400 p-5 rounded-t-[16px] shadow-lg ">
                            <div
                                class=" bg-yellow-50 text-yellow-600 rounded-xl items-center flex gap-1  absolute top-4 left-4  px-3 py-1 text-xs font-semibold tracking-tight ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <label class="text-[10px]" for="">{{ $item->clicks_count }}</label>
                            </div>

                            <!-- Gambar Produk -->
                            @if (!empty($item->productDetails[0]->image))
                                <img src="storage/{{ $item->productDetails[0]->image }}" alt="{{ $item->product_name }}"
                                    class="mt-10 w-full h-44 object-contain mx-auto transition-transform duration-300 hover:scale-110">
                            @else
                                <svg data-slot="icon" class="text-gray-100" fill="none" stroke-width="1.5"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z">
                                    </path>
                                </svg>
                            @endif
                        </div>

                        <div class="h-[10rem] px-4 pt-5"
                            style="overflow: hidden;position: relative;top: -20px;border-radius: 25px;background: white;padding: 10px; border:1px solid #E5E7EB; ">
                            <div class="flex flex-col h-full justify-between">
                                <div class="flex justify-between">
                                    <div>
                                        <sub
                                            class="text-[10px] text-indigo-600  tracking-[1px] font-medium bg-indigo-50 p-1 rounded-xl my-3">{{ $item->productCategory->product_category_name }}</sub>
                                        <h3
                                            class="text-sm py-2 font-medium text-gray-700 hover:text-purple-600 tracking-[1px] text-ellipsis  max-w-[250px] truncate ">
                                            <a href="{{ route('single-product', $item->slug) }}" class="">
                                                {{ $item->product_name }}</a>

                                        </h3>


                                    </div>

                                    <div>
                                        {{-- <span
                                        class="text-xs  flex items-center gap-1 mt-2 font-size-14px line-height-18px tracking-[1px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"
                                            class="w-3 h-3 text-yellow-400">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <label for="rating" class="font-semibold text-gray-400">4.5</label>
                                    </span> --}}
                                    </div>
                                </div>
                                <div class="flex-1"></div>
                                <div class=" mt-4 justify-between items-center align-center ">
                                    <a href="{{ route('single-product', $item->slug) }}"
                                        class=" w-full p-4 bg-purple-600 hover:bg-purple-500 text-white text-[13px] py-2 rounded-[20px] font-[500] inline-flex items-center justify-center gap-1 tracking-[1px]">
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
                <div
                    class="relative flex items-center align-center bg-gradient-to-t from-violet-300 to-violet-400 p-5 rounded rounded-xl shadow-lg hover:bg-gradient-to-t hover:from-violet-600 hover:to-violet-700 transition duration-300">
                    <a href="https://www.combiphar.com/id/produk" target="_blank"
                        class=" flex flex-col items-center mx-auto p-2 text-gray-50 text-xl tracking-[1px] font-semibold hover:text-purple-300 hover:shadow-md">Produk
                        Lainnya
                        <svg data-slot="icon" fill="none" style=width:5rem;" stroke-width="1.5" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"></path>
                        </svg>
                    </a>

                </div>
            </div>
        @else
            <div class="my-24">
                <h1 class="text-center text-2xl text-gray-600 my-6 mt-8">Product yang di cari tidak ditemukan</h1>
            </div>
        @endif

    </section>
@endsection
