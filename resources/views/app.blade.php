<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <title>Tony Keiser‍</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-Bx4pytHkyTDy3aJKjGkGoHPt3tvv6zlwwjc3iqN7ktaiEMLDPqLSZYts2OjKcBx1" crossorigin="anonymous">
        <!-- Style -->
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />
        <link rel="stylesheet" href="/css/app.css">
        <!-- Scripts -->
        <script src='https://static-assets.mapbox.com/gl-pricing/dist/mapbox-gl.js'></script>
    </head>
    <body class="font-sans px-4">
        <div id="app">
            @include('partials.mobile-nav')
            <div class="container mx-auto">
                <button onclick="toggleNav();">Menu</button>
                <header class="py-6 my-8 flex items-center">
                    <div class="flex flex-1 items-center animated fadeInLeft flex-col md:flex-row lg:flex-row xl:flex-row">
                        <img src="/images/tony.jpeg" class="inline border border-grey-light shadow mr-4" style="border-radius: 100%; width: 120px; height: 120px;"/>
                        <div>
                            <h1 class="text-black leading-loose">Tony Keiser</h1>
                            <h5 class="hint text-center md:text-left lg:text-left xl:text-left md:pl-1 lg:pl-1 lx:pl-1">Software Developer</h5>
                        </div>
                    </div>

                    <div class="flex-1 flex-col text-right animated fadeInRight hidden md:flex lg:flex xl:flex">
                        <p>
                            <i class="text-grey-dark fal fa-map-marker-alt mr-2"></i>Seattle, Wa 98121
                        </p>
                        <p>
                            <i class="text-grey-dark fal fa-mobile mr-2"></i>
                            <a href="tel:206-323-3484">206-323-3484</a>
                        </p>
                        <p>
                            <i class="text-grey-dark fal fa-envelope-open-text mr-2"></i>
                            <a href="mailto:keisertony@gmail.com">keisertony@gmail.com</a>
                        </p>

                    </div>
                </header>

                <main class="flex">
                    @include('partials.main-nav')
                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
        <script src="/js/app.js"></script>
        <script type="text/javascript">
            function toggleNav() {
                $('.sidenav').toggleClass('expanded');
                $('.mobile-nav').toggleClass('expanded');
                $('.overlay').toggle();
            };

            // mapboxgl.accessToken = 'pk.eyJ1Ijoia2Vpc3RvIiwiYSI6ImNpa2l3c2twZTA1NmV1ZG02dDU2dDh0Y3AifQ.IsAoh6-Oygo60Myhyu-eXg';
            // var map = new mapboxgl.Map({
            //     center: [-122.3448, 47.6156],
            //     zoom: 12,
            //     container: 'map',
            //     style: 'mapbox://styles/mapbox/satellite-streets-v11'
            // });
            // var popup = new mapboxgl.Popup({closeOnClick: false})
            //     .setLngLat([-122.3448, 47.6156])
            //     .setHTML('<h2>I\'m Here!</h2>')
            //     .addTo(map);
            //
            // map.scrollZoom.disable();
            // map.doubleClickZoom.disable();
        </script>
    </body>
</html>
