<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="Description" content="Tony Keiser is a software developer in the Seattle, WA. His skills for developing mobile and web applications include PHP, JavaScript, Flutter utilizing frameworks like Laravel, VueJS, and more!">
        <meta name="Keywords" content="software developer, laravel developer, seattle Developer, php developer, vuejs developer, software engineer, Tony Keiser">
        <title>Software Developer | Tony Keiser‍</title>

        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
        <link rel="iconicon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="/images/favicon/site.webmanifest">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-Bx4pytHkyTDy3aJKjGkGoHPt3tvv6zlwwjc3iqN7ktaiEMLDPqLSZYts2OjKcBx1" crossorigin="anonymous">
        <!-- Style -->
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />
        <link rel="stylesheet" href="/css/app.css">
        <!-- Scripts -->
        <script src='https://static-assets.mapbox.com/gl-pricing/dist/mapbox-gl.js' defer></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129313407-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-129313407-2');
        </script>
    </head>
    <body class="font-sans px-4">
        @yield('content')
        @yield('script')
    </body>
</html>
