<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'PERAPI' }}</title>
    <meta name="description"
        content="28 Annual Scientific Meeting Indonesian Association of Plastic Reconstructive and Aesthetic Surgeons" />
    <meta name="keywords" content="plastic surgery, aesthetic, reconstructive, beauty, aesthetic education," />
    <meta name="author" content="AV-PRO" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Merriweather:wght@400;700&display=swap"
        rel="stylesheet">


    <!--FontAwesome CSS-->
    <script src="https://kit.fontawesome.com/6d07745da9.js" crossorigin="anonymous"></script>
    <!-- daisy ui -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- theme daisyui -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@$5/themes.css" rel="stylesheet" type="text/css" />

    {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FJSCNFEWXC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-FJSCNFEWXC');
    </script>

</head>


<body>

    <div class="flex flex-col lg:flex-row">
        <x-section.header />
        {{ $slot }}
    </div>
    <!-- Back-to-top Button start -->
    <button onclick="topFunction()" id="back-to-top"
        class="text-white bg-amber-400 hover:cursor-pointer hover:bg-amber-400 focus:ring-1 py-2 px-3 focus:outline-none focus:ring-amber-300 font-medium text-sm rounded-full text-center inline-flex items-center  z-40 fixed right-5 md:right-10 bottom-10 over:-translate-y-1 hover:scale-105"><i
            class="fa-solid text-white fa-arrow-up"></i></button>
    <!-- Back-to-top Button end -->

    <script src="assets/js/custom.js" data-navigate-once></script>

</body>

</html>