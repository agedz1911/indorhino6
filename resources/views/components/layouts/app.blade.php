<!DOCTYPE html>
<html class="scroll-smooth" data-theme="corporate" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ $title ?? config('app.name') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/logo/favicon.ico">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap"
        rel="stylesheet">

    <!--FontAwesome CSS-->
    <script src="https://kit.fontawesome.com/6d07745da9.js" crossorigin="anonymous"></script>
    <!-- daisy ui -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- theme daisyui -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@$5/themes.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <x-nav.header />

    {{ $slot }}

    <x-nav.footer />
    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-square btn-sm btn-primary z-40 fixed right-5 md:right-10 bottom-10 over:-translate-y-1 hover:scale-105"><i class="fa-solid text-white fa-arrow-up"></i></a>

    <script src="assets/js/custom.js" data-navigate-once></script>

</body>

</html>