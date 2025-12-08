<title>@yield('title')</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
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
{{-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300..900;1,300..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet"> --}}
<link rel="icon" type="image/png" href="/favicon.png">
<meta name="description" content="A Laravel Blade layout example with header, footer, and main content area.">
<meta name="keywords" content="Laravel, Blade, Layout, Header, Footer, Main Content">
<meta name="author" content="Your Name">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
