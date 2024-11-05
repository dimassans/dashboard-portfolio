<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap and Icons -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        body {
            background-image: url('assets/img/Group 1171275879.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: var(--default-color);
            background-color: var(--background-color);
            font-family: var(--default-font);
        }

        .navbar .nav-link:hover,
        .hover-transparent:hover {
            color: rgba(0, 123, 255, 0.7); /* Text color with transparency */
            background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent background */
            transition: background-color 0.3s ease, color 0.3s ease;
        }
    </style>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>
