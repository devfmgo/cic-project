    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>404</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
            rel="stylesheet">
        <style>
            body {
                font-family: "Plus Jakarta Sans", sans-serif;
            }

            h1,
            h2,
            h3 {
                font-family: "Plus Jakarta Sans", sans-serif;
            }

            @keyframes fade-in {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes fade-in-right {
                from {
                    opacity: 0;
                    transform: translateX(40px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            .animate-fade-in {
                animation: fade-in 1s ease-out both;
            }

            .animate-fade-in-right {
                animation: fade-in-right 1.2s ease-out both;
            }
        </style>
    </head>

    <body>
        <div class=" text-gray-600 p-6 rounded-lg text-center lg:my-52 my-40">
            <!-- ICON CENTER -->
            <h2 class="lg:text-[160px] text-[150px] text-gray-700 font-black"> 404 </h2>
            <p class="font-semibold lg:text-[64px] text-4xl">Not Found</p>
            <p class="text-sm text-gray-400 mt-4 my-4">Coba gunakan kata pencarian lain.</p>

            <a href="{{ route('product') }}"
                class="inline-block mt-4 bg-purple-600 hover:bg-purple-500 text-white px-4 py-2 rounded-lg">
                Back to home
            </a>
        </div>
    </body>

    </html>
