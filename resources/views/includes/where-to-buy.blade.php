 <!-- Where to Buy -->
 @if (session('success'))
     <div id="successPopup" tabindex="-1"
         class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
         <div class="bg-white rounded-lg shadow-lg w-full max-w-sm p-4">

             <div class=" flex flex-col text-center mb-3">
                 <label class="text-[74px]">🎉</label>
                 <h3 class="ml-3 text-[30px] font-semibold text-purple-800">Success</h3>
             </div>

             <p class="text-gray-600 mb-4 text-center tracking-[1px]">
                 {{ session('success') }}

             </p>
         </div>
     </div>
 @endif

 <section class="max-w-6xl mx-auto py-16 px-4 text-center">
     <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">
         Where to <span class="text-purple-600">Buy</span>
     </h2>
     <p class="text-gray-600 text-md mb-10">
         Dapatkan produk kami di marketplace favorit Anda
     </p>

     <div class="flex justify-center gap-6 flex-wrap">
         <!-- Tokopedia -->
         <a href="https://www.tokopedia.com/combiphar" target="_blank" rel="noopener noreferrer"
             class="group flex flex-col items-center w-28 p-5 bg-green-50 rounded-2xl shadow-md hover:shadow-lg transition hover:scale-105 duration-300">
             <div class="w-16 h-16 flex items-center justify-center rounded-full bg-white mb-3">
                 <img src="{{ asset('assets/images/ecommerce/tokopedia.svg') }}" alt="Tokopedia"
                     class="h-10 object-contain" />
             </div>
             <span class="text-sm font-semibold text-green-700">Tokopedia</span>
         </a>

         <!-- Shopee -->
         <a href="https://shopee.co.id/pt.combiphar" target="_blank" rel="noopener noreferrer"
             class="group flex flex-col items-center w-28 p-5 rounded-2xl shadow-md hover:shadow-lg transition hover:scale-105 duration-300"
             style="background-color: #FFF1ED;">
             <div class="w-16 h-16 flex items-center justify-center rounded-full bg-white mb-3">
                 <img src="{{ asset('assets/images/ecommerce/shopee.png') }}" alt="Shopee"
                     class="h-10 object-contain" />
             </div>
             <span class="text-sm font-semibold" style="color: #EE4D2D;">Shopee</span>
         </a>

         <!-- Blibli -->
         <a href="https://www.blibli.com/merchant/combiphar-flagship-store" target="_blank" rel="noopener noreferrer"
             class="group flex flex-col items-center w-28 p-5 bg-blue-50 rounded-2xl shadow-md hover:shadow-lg transition hover:scale-105 duration-300">
             <div class="w-16 h-16 flex items-center justify-center rounded-full bg-white mb-3">
                 <img src="{{ asset('assets/images/ecommerce/blibli.svg') }}" alt="Blibli"
                     class="h-10 object-contain" />
             </div>
             <span class="text-sm font-semibold text-blue-600">Blibli</span>
         </a>
         <a href="https://www.klikindomaret.com/" target="_blank" rel="noopener noreferrer"
             class="group flex flex-col items-center w-28 p-5 bg-red-50 rounded-2xl shadow-md hover:shadow-lg transition hover:scale-105 duration-300">
             <div class="w-16 h-16 flex items-center justify-center rounded-full bg-white mb-3">
                 <img src="{{ asset('assets/images/ecommerce/indomaret.svg') }}" alt="Indomaret"
                     class="h-10 object-contain" />
             </div>
             <span class="text-sm font-semibold text-red-600">Indomaret</span>
         </a>
         <a href="https://alfagift.id/" target="_blank" rel="noopener noreferrer"
             class="group flex flex-col items-center w-28 p-5 bg-yellow-50 rounded-2xl shadow-md hover:shadow-lg transition hover:scale-105 duration-300">
             <div class="w-16 h-16 flex items-center justify-center rounded-full bg-white mb-3">
                 <img src="{{ asset('assets/images/ecommerce/logo-alfa.png') }}" alt="Alfamart"
                     class="h-10 object-contain" />
             </div>
             <span class="text-sm font-semibold text-yellow-600">Alfamart</span>
         </a>
         <a href="https://www.tiktok.com/@combipharid" target="_blank" rel="noopener noreferrer"
             class="group flex flex-col items-center w-28 p-5 bg-gray-50 rounded-2xl shadow-md hover:shadow-lg transition hover:scale-105 duration-300">
             <div class="w-16 h-16 flex items-center justify-center rounded-full bg-white mb-3">
                 <img src="{{ asset('assets/images/ecommerce/logo-tiktok.png') }}" alt="Alfamart"
                     class="h-10 object-contain" />
             </div>
             <span class="text-sm font-semibold text-gray-600">Tiktok</span>
         </a>
         <a href="https://www.lazada.co.id/shop/combiphar/" target="_blank" rel="noopener noreferrer"
             class="group flex flex-col items-center w-28 p-5 bg-pink-50 rounded-2xl shadow-md hover:shadow-lg transition hover:scale-105 duration-300">
             <div class="w-16 h-16 flex items-center justify-center rounded-full bg-white mb-3">
                 <img src="{{ asset('assets/images/ecommerce/logo-lazada.png') }}" alt="Alfamart"
                     class="h-10 object-contain" />
             </div>
             <span class="text-sm font-semibold text-pink-600">Lazada</span>
         </a>
     </div>
     {{-- other market --}}

     <div class="my-12 text-center ">
         <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">
             Cari Apotek <span class="text-purple-600">Terdekat</span>
         </h2>
         <p class="text-gray-600 text-md mb-10">
             Temukan apotek terdekat di sekitar anda
         </p>

         <!-- CTA BUTTON -->
         <div class="flex justify-center">

             <a id="btnApotik" href="https://www.google.com/maps/search/?api=1&query=Apotek+Terdekat" target="_blank"
                 class="bg-purple-600 text-white px-4 py-3 rounded-full shadow-lg cursor-pointer flex items-center gap-2 hover:bg-purple-700 w-52">
                 <svg data-slot="icon" class="w-6 ml-6" fill="none" stroke-width="1.5" stroke="currentColor"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                     <path stroke-linecap="round" stroke-linejoin="round"
                         d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z">
                     </path>
                 </svg>

                 </svg>
                 <label for="cari" class="mx-1 cursor-pointer">
                     Cari Apotek
                 </label>

             </a>
         </div>
     </div>
     </div>
 </section>

 <!-- Modal Form Feedback -->
 <div id="myModal"
     class="fixed inset-0 bg-black/50 flex items-start justify-center
            pt-16 sm:pt-20 md:pt-28 lg:pt-36 xl:pt-40 hidden z-50 p-2 ">

     <!-- Card Modal -->
     <div class="bg-white w-full max-w-md rounded-xl p-6 shadow-lg animate-fade-in">
         <div class="flex justify-end items-center">
             {{-- <h2 class="text-lg font-semibold text-center">Cari Apotek</h2> --}}

             <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 ">
                 <svg data-slot="icon" class=" w-9 text-gray-500" fill="none" stroke-width="1.5"
                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true">
                     <path stroke-linecap="round" stroke-linejoin="round"
                         d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                 </svg>
             </button>
         </div>

         <div class="max-w-3xl mx-auto mt-5">
             <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                 Form <span class="text-purple-600">Feedback</span>
             </h2>

             <form action="{{ route('create.feedback') }}" method="POST" class="space-y-5">
                 @csrf
                 <!-- Nama -->
                 <div>
                     <label class="block text-sm font-semibold text-gray-700 mb-1 tracking-1">Nama Lengkap</label>
                     <input type="text" name="nama_lengkap"
                         class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none @error('nama_lengkap') border-red-500 @enderror">
                     @error('nama_lengkap')
                         <div class="alert alert-danger mt-2">
                             {{ $message }}
                         </div>
                     @enderror
                 </div>

                 <!-- Email -->
                 <div>
                     <label class="block text-sm font-semibold text-gray-700 mb-1 tracking-1">Email</label>
                     <input type="email" name="email"
                         class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none">
                     @error('email')
                         <div class="alert alert-danger mt-2">
                             {{ $message }}
                         </div>
                     @enderror
                 </div>

                 <!-- Subjek -->
                 <div>
                     <label class="block text-sm font-semibold text-gray-700 mb-1 tracking-1">Subjek</label>
                     <input type="text" name="subjek"
                         class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none">
                     @error('subjek')
                         <div class="alert alert-danger mt-2">
                             {{ $message }}
                         </div>
                     @enderror
                 </div>
                 <!-- Message -->
                 <div>
                     <label class="block text-sm font-semibold text-gray-700 mb-1 tracking-1">Pesan</label>
                     <textarea name="message" rows="4"
                         class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none resize-none"></textarea>
                     @error('message')
                         <div class="alert alert-danger mt-2">
                             {{ $message }}
                         </div>
                     @enderror
                 </div>

                 <!-- Button -->
                 <button type="submit"
                     class=" w-full items-center justify-center gap-2  bg-purple-600 text-white py-3 rounded-lg font-medium hover:bg-purple-700 transition">
                     Kirim Pesan
                 </button>

             </form>
         </div>


         {{-- <div class="mt-6 flex justify-end gap-2">
             <button onclick="closeModal()" class="px-3 py-2 border rounded hover:bg-gray-50">
                 Batal
             </button>
             <button class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-500">
                 Submit
             </button>
         </div> --}}
     </div>
 </div>
 <div class="fixed bottom-6 right-6">
     <a href="javascript:void(0);" onclick="openModal()"
         class="inline-flex items-center gap-2 text-sm lg:text-md font-mendium text-white hover:text-purple-100 bg-purple-500 p-4 rounded-full hover:bg-purple-600">
         <svg data-slot="icon" class="w-5 lg:w-6" fill="none" stroke-width="1.5" stroke="currentColor"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
             <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
             <path stroke-linecap="round" stroke-linejoin="round"
                 d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z">
             </path>
         </svg>
         Send Feedback</a>

 </div>

 <style>
     .animate-fade-in-down {
         animation: fadeInDown 0.3s ease-out;
     }

     @keyframes fadeInDown {
         from {
             opacity: 0;
             transform: translateY(-10px);
         }

         to {
             opacity: 1;
             transform: translateY(0);
         }
     }
 </style>
 <script>
     document.addEventListener("DOMContentLoaded", function() {
         const modal = document.getElementById('successPopup');
         const closeBtn = document.getElementById('closePopupBtn');

         if (modal) {
             // Auto close
             setTimeout(() => {
                 modal.classList.add('hidden');
             }, 3000);

             // Manual close
             if (closeBtn) {
                 closeBtn.addEventListener('click', () => modal.classList.add('hidden'));
             }
         }
     });
 </script>

 <style>
     @keyframes fade-in {
         from {
             opacity: 0;
             transform: translateY(10px);
         }

         to {
             opacity: 1;
             transform: translateY(0);
         }
     }

     .animate-fade-in {
         animation: fade-in 0.25s ease-out;
     }
 </style>
