<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <meta name="description" content="48 Annual Scientific Meeting of Indonesian Urological Association" />
    <meta name="keywords" content="urology, urology education, urological, indonesia urologi, iaui, incontinence urology, pan pasific urology, ppcs, PPCS, continence care" />
    <meta name="author" content="AV-PRO" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--CSS Plugins-->
    <link rel="stylesheet" href="assets/css/plugin.css">
    <!-- Default CSS-->
    <link rel="stylesheet" href="assets/css/default.css">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--FontAwesome CSS-->
    <script src="https://kit.fontawesome.com/6d07745da9.js" crossorigin="anonymous"></script>

    <script src="https://cdn.dhtmlx.com/scheduler/edge/dhtmlxscheduler.js"></script>
    <link href="https://cdn.dhtmlx.com/scheduler/edge/dhtmlxscheduler.css"
        rel="stylesheet">

</head>

<body>
    <x-section.header />
    {{ $slot }}
    <x-section.footer />

    <!-- Back-to-top Button start -->
    <div id="back-to-top">
        <a href="#" class="bg-kuning position-relative align-items-center rounded-circle d-block"></a>
    </div>
    <!-- Back-to-top Button end -->

    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom-nav.js"></script>
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>