@extends('layout.main')

@section('content')
    <div id="app">
        @include('partials.mobile-nav')
        <div class="container mx-auto">
            <header class="py-6 my-0 md:my-4 lg:my-8 lx:my-8 flex items-center">
                <div class="flex flex-1 items-center animated fadeInLeft flex-col md:flex-row lg:flex-row xl:flex-row">
                    <div class="mr-4 block lg:hidden xl:hidden animated fadeInLeft">
                        <button id="menu" class="button"><i class="fas fa-bars fa-fw"></i></button>
                    </div>

                    <img src="/images/tony.jpeg" class="inline border border-grey-light shadow mr-4" style="border-radius: 100%; width: 120px; height: 120px;"/>
                    <div>
                        <h1 class="text-black leading-loose">Tony Keiser</h1>
                        <h5 class="hint text-center md:text-left lg:text-left xl:text-left md:pl-1 lg:pl-1 lx:pl-1">Software Developer</h5>
                    </div>
                </div>

                <div class="w-1/3 flex-col text-right animated fadeInRight hidden md:flex lg:flex xl:flex">
                    <p class="text-black">
                        <i class="text-grey-dark fal fa-map-marker-alt mr-2"></i>Seattle, Wa 98121
                    </p>
                    <p class="py-2">
                        <i class="text-grey-dark fal fa-mobile mr-2"></i>
                        <a href="tel:206-353-3484">206-353-3484</a>
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
@endsection

@section('script')
    <script src="/js/app.js"></script>
    <script type="text/javascript">
        const sun = document.getElementById('sun');
        const asteroid = document.getElementById('asteroid');
        const overlay = document.querySelector('.overlay');
        const menu = document.getElementById('menu');
        let navBool = false;

        const toggleNav = function () {
            navBool = !navBool;

            const sideNav = document.querySelector('.sidenav');
            const mobileNav = document.querySelector('.mobile-nav');
            const flag = document.getElementById('flag');

            sideNav.classList.toggle('expanded');
            mobileNav.classList.toggle('expanded');
            flag.classList.toggle('fade-out');

            if (window.innerHeight > 800) {
                sun.classList.toggle('fade-out');
            }

            overlay.classList.toggle('show');
        };

        if (window.innerWidth < 900) {
            asteroid.classList.add('fade-out')
        }

        overlay.addEventListener("click", toggleNav);
        menu.addEventListener("click", toggleNav);

        window.addEventListener("resize", function() {
            if (window.innerHeight < 800) {
                sun.classList.add('fade-out');
            } else if (navBool) {
                sun.classList.remove('fade-out')
            }

            if (window.innerWidth < 900) {
                asteroid.classList.add('fade-out')
            } else {
                if (asteroid.classList.contains('fade-out')) {
                    asteroid.classList.remove('fade-out');
                }
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
@endsection
