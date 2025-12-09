<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <title>Combiphar - @yield('title')</title>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
    <link rel="stylesheet" href="..\css\filament\custom.css">
    <script src="https://cdn.tailwindcss.com"></script>
    @include('includes.head')
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        body {
            /* padding-top: 80px; */
            /* header + banner tinggi awal */
            transition: padding-top .3s ease;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen antialiased">
    <header>
        @include('includes.header')
    </header>
    <main class="flex-grow mt-10">
        @yield('content')
        @include('includes.where-to-buy')
    </main>
    <footer>
        @include('includes.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
<!-- JS untuk toggle -->
<script>
    // const mobileMenu = document.getElementById('mobileMenu');
    // const openMenuBtn = document.getElementById('openMenuBtn');
    // const closeMenuBtn = document.getElementById('closeMenuBtn');

    // openMenuBtn.addEventListener('click', () => {
    //     mobileMenu.classList.remove('hidden');
    // });

    // closeMenuBtn.addEventListener('click', () => {
    //     mobileMenu.classList.add('hidden');
    // });

    var tag = document.createElement('script');
    tag.id = 'iframe-demo';
    tag.src = 'https://www.youtube.com/iframe_api';
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('existing-iframe-example', {
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    function onPlayerReady(event) {
        document.getElementById('existing-iframe-example').style.borderColor = '#FF6D00';
    }

    function changeBorderColor(playerStatus) {
        var color;
        if (playerStatus == -1) {
            color = "#37474F"; // unstarted = gray
        } else if (playerStatus == 0) {
            color = "#FFFF00"; // ended = yellow
        } else if (playerStatus == 1) {
            color = "#33691E"; // playing = green
        } else if (playerStatus == 2) {
            color = "#DD2C00"; // paused = red
        } else if (playerStatus == 3) {
            color = "#AA00FF"; // buffering = purple
        } else if (playerStatus == 5) {
            color = "#FF6DOO"; // video cued = orange
        }
        if (color) {
            document.getElementById('existing-iframe-example').style.borderColor = color;
        }
    }

    function onPlayerStateChange(event) {
        changeBorderColor(event.data);
    }

    function openModal() {
        document.getElementById("myModal").classList.remove("hidden");

    }

    function closeModal() {
        document.getElementById("myModal").classList.add("hidden");
    }
    // Carusel Product
    document.addEventListener("DOMContentLoaded", function() {
        const scrollBox = document.getElementById("carouselScroll");
        const next = document.getElementById("btnNext");
        const prev = document.getElementById("btnPrev");

        const itemWidth = 240; // width item + gap
        const scrollEnd = () => scrollBox.scrollWidth - scrollBox.clientWidth;

        // -------------------------------
        // NEXT
        // -------------------------------
        next.addEventListener("click", () => {
            if (scrollBox.scrollLeft >= scrollEnd() - 5) {
                // Mentok kanan → balik ke awal
                scrollBox.scrollTo({
                    left: 0,
                    behavior: "smooth"
                });
            } else {
                scrollBox.scrollBy({
                    left: itemWidth,
                    behavior: "smooth"
                });
            }
        });

        // -------------------------------
        // PREV
        // -------------------------------
        prev.addEventListener("click", () => {
            if (scrollBox.scrollLeft <= 5) {
                // Mentok kiri → loncat ke paling akhir
                scrollBox.scrollTo({
                    left: scrollEnd(),
                    behavior: "smooth"
                });
            } else {
                scrollBox.scrollBy({
                    left: -itemWidth,
                    behavior: "smooth"
                });
            }
        });

        // -------------------------------
        // AUTO SLIDE (opsional)
        // -------------------------------
        let auto = setInterval(() => {
            if (scrollBox.scrollLeft >= scrollEnd() - 5) {
                scrollBox.scrollTo({
                    left: 0,
                    behavior: "smooth"
                });
            } else {
                scrollBox.scrollBy({
                    left: itemWidth,
                    behavior: "smooth"
                });
            }
        }, 4000);

        scrollBox.addEventListener("mouseenter", () => clearInterval(auto));
        scrollBox.addEventListener("mouseleave", () => {
            auto = setInterval(() => {
                if (scrollBox.scrollLeft >= scrollEnd() - 5) {
                    scrollBox.scrollTo({
                        left: 0,
                        behavior: "smooth"
                    });
                } else {
                    scrollBox.scrollBy({
                        left: itemWidth,
                        behavior: "smooth"
                    });
                }
            }, 4000);
        });
    });
    // Show hide info prototype
    const banner = document.getElementById('topBanner');
    const header = document.getElementById('mainHeader');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            // Banner hilang
            banner.style.display = "none";

            // Header naik ke posisi top:0
            header.style.top = "0";

            // Sesuaikan padding body (tinggal header)
            // document.body.style.paddingTop = "40px";
        } else {
            // Banner muncul kembali
            banner.style.display = "block";

            // Header kembali turun sesuai tinggi banner
            header.style.top = "40px";
            // Body padding dikembalikan
            // document.body.style.paddingTop = "100px";
        }
    });
</script>



</html>
