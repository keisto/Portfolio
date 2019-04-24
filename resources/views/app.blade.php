<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
                <header class="py-6 my-0 md:my-4 lg:my-8 lx:my-8 flex items-center">
                    <div class="flex flex-1 items-center animated fadeInLeft flex-col md:flex-row lg:flex-row xl:flex-row">
                        <div class="mr-4 block lg:hidden xl:hidden animated fadeInLeft">
                            <button onclick="toggleNav();" class="button"><i class="fas fa-bars fa-fw"></i></button>
                        </div>

                        <img src="/images/tony.jpeg" class="inline border border-grey-light shadow mr-4" style="border-radius: 100%; width: 120px; height: 120px;"/>
                        <div>
                            <h1 class="text-black leading-loose">Tony Keiser</h1>
                            <h5 class="hint text-center md:text-left lg:text-left xl:text-left md:pl-1 lg:pl-1 lx:pl-1">Software Engineer</h5>
                        </div>
                    </div>

                    <div class="w-1/3 flex-col text-right animated fadeInRight hidden md:flex lg:flex xl:flex">
                        <p class="text-black">
                            <i class="text-grey-dark fal fa-map-marker-alt mr-2"></i>Seattle, Wa 98121
                        </p>
                        <p class="py-2">
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
                    <img src="/images/background/galaxy.png" class="bg-image" width="320px"
                        style="right: 10%; top: 2%;" />
                    <img src="/images/background/mars.png" class="bg-image" width="512px"
                        style="left: 5%; bottom: 2%;" />
                    <img id="asteroid" src="/images/background/asteroid.png" class="bg-image" width="256px"
                        style="right: 12%; bottom: 12%;" />
                    @include('partials.main-nav')
                    <div class="primary flex-1 mb-8">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
        <script src="/js/app.js"></script>
        <script type="text/javascript">

            var navBool = false;

            function toggleNav() {
                navBool = !navBool;
                $('.sidenav').toggleClass('expanded');
                $('.mobile-nav').toggleClass('expanded');
                $('#flag').fadeToggle('slow');


                if (window.innerHeight > 800) {
                    $('#sun').fadeToggle('slow');
                }

                $('.overlay').toggle();
            };

            if (window.innerWidth < 900) {
                $('#asteroid').fadeOut('slow');
            }

            $( window ).resize(function() {
                if (window.innerHeight < 800) {
                    $('#sun').fadeOut('slow');
                } else if (navBool) {
                    $('#sun').fadeIn('slow');
                }

                if (window.innerWidth < 900) {
                    $('#asteroid').fadeOut('slow');
                } else {
                    $('#asteroid').fadeIn('slow');
                }
            });

            function animateCSS(element, animationName, callback) {
                const node = document.querySelector(element)
                node.classList.add('animated', animationName)

                function handleAnimationEnd() {
                    node.classList.remove('animated', animationName)
                    node.removeEventListener('animationend', handleAnimationEnd)

                    if (typeof callback === 'function') callback()
                }

                node.addEventListener('animationend', handleAnimationEnd)
            }
            
        </script>
    </body>
</html>
