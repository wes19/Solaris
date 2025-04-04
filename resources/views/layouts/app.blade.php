<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mi Sitio Web')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-raleway">
    <video autoplay muted loop id="background-video">
        <source src="{{ asset('backgrounds/CIELO.webm') }}" type="video/webm">
        Tu navegador no soporta el elemento de video.
    </video>
    <div class="w-full min-h-[1022px] absolute top-0 z-[-1]"
        style="background: linear-gradient(0deg, rgba(4, 0, 112, 0) 2.5%, rgba(8, 0, 191, 0.12) 57.5%, rgba(0, 0, 32, 0.74));">
    </div>

    <header id="navbar" class="fixed top-0 h-28 left-0 w-full z-50 transition-transform duration-300">
        <nav class="pt-4 px-10">
            <div class="mx-auto w-full flex justify-between items-center">
                <div class="flex lg:w-[10%] w-full items-center">
                    <img src="{{ asset('images/Logo-blanco-Solaris.png') }}" alt="Logo" class="h-12">
                </div>
                <ul class="hidden lg:flex space-x-4 md:space-x-10 lg:space-x-20 w-full justify-center">
                    <li><a href='#' class="text-white hover:text-gray-300">INICIO</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">NOSOTROS</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">PROYECTOS</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">PROMOCIONES</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">CONTÁCTANOS</a></li>
                </ul>
                <div class="lg:flex items-center space-x-4">
                    <a href="#" class="relative">
                        <img src="{{ asset('images/carrito.png') }}" alt="Carrito" class="h-8 w-8">
                    </a>
                </div>                
                <div class="lg:hidden">
                    <button id="menu-button" class="text-white focus:outline-none">
                        <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Sidebar Menu -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden"></div>
    <div id="mobile-menu" class="fixed z-[2000000] top-0 left-0 w-64 h-full bg-gray-900 text-white transform -translate-x-full transition-transform duration-300">
        <ul class="flex flex-col space-y-4 mt-4 p-4">
            <li><a href='#' class="hover:text-gray-300">INICIO</a></li>
            <li><a href="#" class="hover:text-gray-300">NOSOTROS</a></li>
            <li><a href="#" class="hover:text-gray-300">PROYECTOS</a></li>
            <li><a href="#" class="hover:text-gray-300">PROMOCIONES</a></li>
            <li><a href="#" class="hover:text-gray-300">CONTÁCTANOS</a></li>
        </ul>
    </div>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="w-full h-[198px] relative flex flex-col justify-end bg-red-400 items-end">
            <div class=" w-full h-[150px] overflow-hidden flex items-center justify-center gap-11 bg-slate-600">
                <div class="w-[34.39px] h-[35px] bg-orange-600"></div>
                <div class="w-[34.39px] h-[35px] bg-orange-600"></div>
                <div class="w-[34.39px] h-[35px] bg-orange-600"></div>
            </div>
            <!-- <div class="w-full h-[134px] left-0 top-[64px]  bg-black"></div> -->
            <div class=" flex justify-center items-center bg-black w-full h-[134px]">
                <span class="text-white text-2xl font-normal font-['Raleway'] capitalize leading-normal">
                    Solaris Honduras © {{ date('Y') }} | Derechos Reservados |
                </span>
                <span class="text-white text-2xl font-normal font-['Raleway'] underline capitalize leading-normal"> </span>
                <span class="text-[#fbed4f] text-2xl font-normal font-['Raleway'] underline capitalize leading-normal">
                    <a target="_blank" href="{{ route('privacy') }}">Política de Privacidad</a>
                </span>
                <span class="text-white text-2xl font-normal font-['Raleway'] underline capitalize leading-normal"> </span>
                <span class="text-white text-2xl font-normal font-['Raleway'] capitalize leading-normal"> | Powered by 24Studio</span>
            </div>
        </div>
    </footer>
    
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
    <script>
        let lastScrollTop = 0;
        const navbar = document.getElementById('navbar');
        const menuButton = document.getElementById('menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const overlay = document.getElementById('overlay');

        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > lastScrollTop) {
                // Scroll down
                navbar.style.transform = 'translateY(-100%)';
            } else {
                // Scroll up
                navbar.style.transform = 'translateY(0)';
                if (scrollTop > 0) {
                    navbar.classList.add('bg-opacity-75', 'bg-gray-900', 'z-[100000]', 'max-h-24');
                } else {
                    navbar.classList.remove('bg-opacity-75', 'bg-gray-900');
                }
            }
            lastScrollTop = scrollTop;
        });

        menuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('-translate-x-full');
            mobileMenu.classList.toggle('translate-x-0');
            overlay.classList.toggle('hidden');

            // Toggle menu icon between hamburger and X
            if (menuIcon.classList.contains('menu-open')) {
                menuIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                `;
                menuIcon.classList.remove('menu-open');
            } else {
                menuIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                `;
                menuIcon.classList.add('menu-open');
            }
        });

        overlay.addEventListener('click', function() {
            mobileMenu.classList.add('-translate-x-full');
            mobileMenu.classList.remove('translate-x-0');
            overlay.classList.add('hidden');

            // Reset menu icon to hamburger
            menuIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            `;
            menuIcon.classList.remove('menu-open');
        });
    </script>
</body>

</html>