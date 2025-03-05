<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'PERAPI' }}</title>
    <meta name="description" content="28 Annual Scientific Meeting Indonesian Association of Plastic Reconstructive and Aesthetic Surgeons" />
    <meta name="keywords" content="plastic surgery, aesthetic, reconstructive, beauty, aesthetic education," />
    <meta name="author" content="AV-PRO" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <!--FontAwesome CSS-->
    
    <script src="https://kit.fontawesome.com/6d07745da9.js" crossorigin="anonymous"></script>
    
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>


<body class="bg-gray-100">

    <div class="flex flex-col lg:flex-row">
        <x-section.header />
        {{ $slot }}
    </div>

    <!-- Back-to-top Button start -->
    <div id="back-to-top">
        <a href="#" class="bg-kuning position-relative align-items-center rounded-circle d-block"></a>
    </div>
    <!-- Back-to-top Button end -->

    @livewireScripts
    <script src="assets/js/custom.js"></script>

</body>

</html>