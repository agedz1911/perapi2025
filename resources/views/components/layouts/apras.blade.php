<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'APRAS 2026' }}</title>
    <meta name="description"
        content="APRAS 2026" />
    <meta name="keywords" content="plastic surgery, aesthetic, reconstructive, beauty, aesthetic education," />
    <meta name="author" content="AV-PRO" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/custom.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
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

</head>

<body>
    <div class="">
        <x-section.header-apras />
        {{ $slot }}
        <x-section.footer />
    </div>
    <!-- Back-to-top Button start -->
    <button onclick="topFunction()" id="back-to-top"
        class="btn btn-circle btn-warning btn-outline  z-40 fixed right-5 md:right-10 bottom-10 over:-translate-y-1 hover:scale-105"><i
            class="fa-solid hover:text-white hover:scale-125 fa-arrow-up"></i></button>
    <!-- Back-to-top Button end -->

    <script src="../assets/js/custom.js"></script>
</body>

</html>