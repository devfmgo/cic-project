@extends('layouts.default')
@section('title')
    {{ $product->product_name }}
@endsection
@section('content')
    <section class="relative w-full bg-white pt-24 overflow-hidden pb-10">
        {{-- ===== BREADCRUMB ===== --}}
        <div class="container mx-auto  mb-6">
            <ol class="inline-flex items-center space-x-1 md:space-x-3 bg-indigo-50/50 rounded-lg p-4 text-sm text-gray-700">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="text-sm text-gray-700 hover:text-indigo-400 hover:font-semibold inline-flex items-center ">
                        <svg data-slot="icon" class="w-5 h-5 mr-2 text-indigo-400 font-black" fill="none" stroke-width="1.5"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
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
                            class="text-gray-700  ml-1 md:ml-2 text-sm font-medium  hover:text-indigo-400 hover:font-semibold">Product</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-indigo-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-indigo-400 ml-1 md:ml-2 text-sm font-medium dark:text-indigo-500">
                            {{ $product->product_name }}</span>
                    </div>
                </li>
            </ol>
        </div>
        {{-- ===== HEADER SECTION ===== --}}

        <header class="bg-gradient-to-bl from-pink-300 via-purple-300 to-indigo-400 py-20 mx-auto  mt-8 my-10">
            <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center justify-between">
                <div class="w-full text-center lg:text-left mb-10 lg:mb-0">
                    <!-- Badge -->
                    <sub
                        class="text-[14px] text-gray-700 tracking-[1px] font-semibold my-5 underline decoration-purple-500 ">
                        {{ $product->productCategory->product_category_name }}
                    </sub>
                    <h1 class="text-5xl md:text-6xl font-medium text-gray-700 leading-tight ">
                        {{ $product->product_name }}
                    </h1>

                    <p class="mt-6 text-md text-gray-50  mx-auto lg:mx-0 w-10/12">
                        {!! $product->productDetails[0]->description !!}
                    </p>

                    @if ($product->productDetails && $product->productDetails[0]->url_website)
                        <a href="{{ $product->productDetails[0]->url_website }}" target="_blank"
                            class="mt-10 inline-block bg-purple-600 text-purple-100 font-medium text-lg py-4 px-10 rounded shadow-lg hover:bg-purple-100 hover:text-purple-600 hover:scale-105 transition duration-300 transform rounded-2xl">
                            Selengkapnya
                        </a>
                    @endif
                </div>

                <div class="w-full lg:w-1/2 flex justify-center lg:justify-end ">
                    <div class="relative">
                        @if ($product->productDetails && $product->productDetails[0]->image)
                            <img src="{{ asset('storage/' . $product->productDetails[0]->image) }}"
                                alt="{{ $product->product_name }}"
                                class="relative z-10 w-full max-w-sm lg:max-w-md h-auto object-contain drop-shadow-2xl bg-gradient-to-br from-pink-100 to-purple-100 rounded-tl-[40px] rounded-tr-[3px] rounded-br-[40px] p-4">
                        @else
                            <p>Gambar tidak tersedia.</p>
                        @endif
                        <div class="absolute -bottom-8 -right-8 w-40 h-40 bg-purple-500 rounded-full opacity-30 blur-xl">
                        </div>
                        <div class="absolute top-0 -left-10 w-60 h-60 bg-indigo-500 rounded-full opacity-20 blur-2xl"></div>
                    </div>
                </div>
            </div>
        </header>

        {{-- ===== VIDEO SECTION (hanya muncul di atas header saat layar besar) ===== --}}
        @if ($product->productDetails && $product->productDetails[0]->url_video)
            @php
                $embedUrl = str_replace('watch?v=', 'embed/', $product->productDetails[0]->url_video);
                $embedUrl = str_replace('youtu.be/', 'www.youtube.com/embed/', $embedUrl);
            @endphp

            {{-- ✅ Versi untuk layar besar (di atas header) --}}
            <div class="hidden lg:flex justify-center items-center py-12 lg:relative z-50 top-[-180px] ">
                <div class="w-full max-w-5xl px-6 bg-white rounded-xl p-2 shadow-lg mt-10"> {{-- ✅ tinggi diperbesar --}}
                    <div class="rounded-xl overflow-hidden shadow-2xl">
                        <iframe class="w-full h-[500px]" src="{{ $embedUrl }}"
                            title="Video {{ $product->product_name }}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        @endif

        {{-- ✅ Versi video untuk layar kecil (di bawah header) --}}
        @if ($product->productDetails && $product->productDetails[0]->url_video)
            <div class="lg:hidden mx-auto my-10 px-4">
                <div class="aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-2xl">
                    <iframe class="w-full h-[500px]" src="{{ $embedUrl }}" title="Video  {{ $product->product_name }}"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        @endif

        <div
            class="my-20 {{ $product->productDetails && $product->productDetails[0]->url_video ? 'lg:relative top-[-200px]' : '' }}">
            <div class="container mx-auto">
                <div class="bg-white rounded-lg ">
                    <div class="flex flex-col lg:flex-row items-center lg:items-start justify-between">
                        {{-- Detail Product --}}
                        <div class=" mx-5">
                            {{-- detail produk --}}
                            <div>
                                <h4 class="text-md text-gray-700 font-medium">Deskripsi</h4>
                                <p class="text-gray-600 mb-6 text-sm">{!! $product->productDetails[0]->description !!}</p>
                                <hr class="text-gray-700 my-2 w-full" />
                                <h4 class="text-md text-gray-700 font-medium">Komposisi</h4>
                                <p class="text-gray-600 mb-6 text-sm">{!! $product->productDetails[0]->komposisi !!}</p>
                                <hr class="text-gray-700 my-2" />

                                @unless (!empty($product->productDetails[0]->indikasi) || $product->productDetails[0]->indikasi === '-')
                                    <h4 class="text-md text-gray-700 font-medium">Indikasi Umum</h4>
                                    <p class="text-gray-600 mb-6 text-sm">{!! $product->productDetails[0]->indikasi !!}</p>
                                    <hr class="text-gray-700 my-2" />
                                @endunless



                                @unless (!empty($product->productDetails[0]->dosis) || $product->productDetails[0]->dosis === '-')
                                    <h4 class="text-md text-gray-700 font-medium">Dosis</h4>
                                    <p class="text-gray-600 mb-6 text-sm">{!! $product->productDetails[0]->dosis !!}</p>
                                    <hr class="text-gray-700 my-2" />
                                @endunless
                                @unless (!empty($product->productDetails[0]->aturan_pakai) || $product->productDetails[0]->aturan_pakai === '-')
                                    <h4 class="text-md text-gray-700 font-medium">Aturan Pakai</h4>
                                    <p class="text-gray-600 mb-6 text-sm">{!! $product->productDetails[0]->aturan_pakai !!}</p>
                                    <hr class="text-gray-700 my-2" />
                                @endunless
                                @unless (!empty($product->productDetails[0]->perhatian) || $product->productDetails[0]->perhatian === '-')
                                    <h4 class="text-md text-gray-700 font-medium">Perhatian</h4>
                                    <p class="text-gray-600 mb-6 text-sm">{!! $product->productDetails[0]->perhatian !!}</p>
                                    <hr class="text-gray-700 my-2" />
                                @endunless
                                @unless (!empty($product->productDetails[0]->kontra_indikasi) || $product->productDetails[0]->kontra_indikasi === '-')
                                    <h4 class="text-md text-gray-700 font-medium">Kontra Indikasi</h4>
                                    <p class="text-gray-600 mb-6 text-sm">{!! $product->productDetails[0]->kontra_indikasi !!}</p>
                                    <hr class="text-gray-700 my-2" />
                                @endunless
                                @unless (!empty($product->productDetails[0]->efek_samping) || $product->productDetails[0]->efek_samping === '-')
                                    <h4 class="text-md text-gray-700 font-medium">Efek Samping</h4>
                                    <p class="text-gray-600 mb-6 text-sm">{!! $product->productDetails[0]->efek_samping !!}</p>
                                    <hr class="text-gray-700 my-2" />
                                @endunless
                                @unless (!empty($product->obatCategory->obat_category_name) || $product->obatCategory->obat_category_name === '-')
                                    <h4 class="text-md text-gray-700 font-medium">Golongan Produk</h4>
                                    <p class="text-gray-600 mb-6 text-sm">{!! $product->obatCategory->obat_category_name !!}</p>
                                    <hr class="text-gray-700 my-2" />
                                @endunless
                                @unless (!empty($product->productDetails[0]->kemasan) || $product->productDetails[0]->kemasan === '-')
                                    <h4 class="text-md text-gray-700 font-medium">Kemasan</h4>
                                    <p class="text-gray-600 mb-6 text-sm">{!! $product->productDetails[0]->kemasan !!}</p>
                                    <hr class="text-gray-700 my-2" />
                                @endunless
                                @unless (!empty($product->productDetails[0]->manufaktur) || $product->productDetails[0]->manufaktur === '-')
                                    <h4 class="text-md text-gray-700 font-medium">Manufaktur</h4>
                                    <p class="text-gray-600 mb-6 text-sm">{!! $product->productDetails[0]->manufaktur !!}</p>
                                    <hr class="text-gray-700 my-2" />
                                @endunless
                                @unless (!empty($product->productDetails[0]->nomer_registrasi) || $product->productDetails[0]->nomer_registrasi === '-')
                                    <h4 class="text-md text-gray-700 font-medium">No Registrasi</h4>
                                    <p class="text-gray-600 mb-6 text-sm">{{ $product->productDetails[0]->nomer_registrasi }}
                                    </p>
                                    <hr class="text-gray-700 my-2" />
                                @endunless
                            </div>

                        </div>
                        {{-- Rekomendasi produk lain  --}}
                        <div class="lg:sticky lg:top-20 p-2 my-10 lg:my-0 w-full lg:w-1/3">
                            {{-- detail produk --}}
                            <h4 class="text-md text-gray-700 font-medium">Produk lain</h4>

                            <div class="flex flex-col gap-4 mt-4">
                                @foreach ($productserupa as $item)
                                    <div class="flex flex-row w-full justify-start transition border rounded-lg p-1">
                                        <div class="relative transition-shadow duration-300">
                                            <a href="{{ route('single-product', $item->slug) }}">
                                                @if ($item->productDetails && $item->productDetails[0]->image)
                                                    <img src="{{ asset('storage/' . $item->productDetails[0]->image) }}"
                                                        alt="{{ $item->product_name }}"
                                                        class="w-full h-20 object-contain mx-auto transition-transform duration-300 hover:scale-110">
                                                @else
                                                    <p>Gambar tidak tersedia.</p>
                                                @endif
                                            </a>
                                        </div>

                                        <div class="bg-white p-4 tracking-[1px]">
                                            <h3 class="text-gray-500 font-medium text-sm mb-2 hover:text-indigo-800">
                                                <a href="{{ route('single-product', $item->slug) }}">
                                                    {{ $item->product_name }}
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                @endforeach

                                <a href="/product"
                                    class="inline-block mt-4 text-indigo-600 font-medium text-sm py-2 px-6 rounded shadow-lg text-center border border-indigo-600 hover:bg-indigo-600 hover:text-white">
                                    Lihat Semua Produk
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="p-2">
                <div class="container mx-auto text-center  mt-10 border-2 rounded-lg p-4 border-purple-600 font-bold">
                    <h1 class="animate-pulse text-gray-700 lg:text-lg">BACA ATURAN PAKAI JIKA SAKIT BERLANJUT HUBUNGI
                        DOKTER
                    </h1>
                </div>
            </div>

    </section>
@endsection
