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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-raleway">
    <video muted loop id="background-video">
        <source src="{{ asset('backgrounds/CIELO1.webm') }}" type="video/webm">
        Tu navegador no soporta el elemento de video.
    </video>
    <div class="w-full min-h-[1022px] absolute top-0 z-[-1]"
        style="background: linear-gradient(0deg, rgba(4, 0, 112, 0) 2.5%, rgba(8, 0, 191, 0.12) 57.5%, rgba(0, 0, 32, 0.74));">
    </div>

    <header id="navbar" class="fixed top-0 h-28 left-0 w-full z-50 transition-transform duration-300">
        <nav class="pt-4 px-10">
            <div class="mx-auto w-full flex justify-between items-center">
                <div class="flex lg:w-[10%] w-full items-center">
                    <a href="#hero">
                        <img src="{{ asset('images/Logo-blanco-Solaris.png') }}" alt="Logo" class="h-12">
                    </a>
                </div>                
                <ul class="hidden lg:flex space-x-6 md:space-x-8 lg:space-x-10 w-full justify-center">
                    <li><a href='#hero' class="text-white hover:text-gray-300">INICIO</a></li>
                    <li><a href="#sobre-nosotros" class="text-white hover:text-gray-300">NOSOTROS</a></li>
                    <li><a href="#proyectos" class="text-white hover:text-gray-300">PROYECTOS</a></li>
                    <li><a href="#RSE" class="text-white hover:text-gray-300">RSE</a></li>
                    <li><a href="#soluciones" class="text-white hover:text-gray-300">PRODUCTOS Y SOLUCIONES</a></li>
                    <li><a href="#blog" class="text-white hover:text-gray-300">BLOG</a></li>
                    <li><a href="#contactanos" class="text-white hover:text-gray-300">CONTÁCTANOS</a></li>
                </ul>
                <div class="flex items-center mr-4">
                    <a href="https://solarismarkethn.com/" class="relative" target="_blank">
                        <img src="{{ asset('images/carrito.png') }}" alt="Carrito" class="h-8 w-8 hidden lg:block">
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
            <li><a href='#hero' class="hover:text-gray-300">INICIO</a></li>
            <li><a href="#sobre-nosotros" class="hover:text-gray-300">NOSOTROS</a></li>
            <li><a href="#proyectos" class="hover:text-gray-300">PROYECTOS</a></li>
            <li><a href="#RSE" class="hover:text-gray-300">RSE</a></li>
            <li><a href="#soluciones" class="hover:text-gray-300">PRODUCTOS Y SOLUCIONES</a></li>
            <li><a href="#blog" class="hover:text-gray-300">BLOG</a></li>
            <li><a href="#contactanos" class="hover:text-gray-300">CONTÁCTANOS</a></li>
            <li class="flex items-center">
                <a href="https://solarismarkethn.com/" class="relative" target="_blank">
                    <img src="{{ asset('images/carrito.png') }}" alt="Carrito" class="h-8 w-8">
                </a>
            </li>
        </ul>
    </div>

    <main>
        @yield('content')
    </main>

    <div id="fab" class="fixed bottom-6 right-6 z-[150] flex flex-col items-end space-y-3 group">
      <a href="https://wa.me/1234567890?text=Hola,%20quiero%20contactar%20contigo" target="_blank">
        <div class="relative">
          <div class="absolute right-[90px] bottom-4 bg-blue-500 text-white text-lg px-6 py-1 rounded-lg shadow-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 max-w-xs whitespace-nowrap">
            ¿En qué puedo ayudarte?
            <div class="absolute right-[-6px] top-1/2 -translate-y-1/2 w-3 h-3 bg-blue-500 rotate-45"></div>
          </div>
            <button id="fab-toggle" class="w-16 h-16 lg:w-20 lg:h-20 rounded-full bg-white shadow-lg overflow-hidden p-0 flex items-center justify-center transition-transform hover:rotate-12 border z-60">
            <div class="w-full h-full rounded-full overflow-hidden">
              <img src="{{ asset('images/logo1.webp') }}" alt="Logo"
                class="w-full h-full object-contain" />
            </div>
          </button>
        </div>
      </a>
    </div>

    <footer>
        <div class="w-full relative flex flex-col justify-end items-end">
            <div class="flex flex-wrap justify-center items-center bg-black w-full h-auto px-4 py-6 gap-x-4 gap-y-2 text-center sm:justify-center lg:justify-center">
                <span class="text-white text-base sm:text-lg lg:text-2xl font-normal font-['Raleway'] capitalize leading-normal">
                    Solaris Honduras © {{ date('Y') }} | Derechos Reservados |
                </span>
                
                <span class="text-[#fbed4f] text-base sm:text-lg lg:text-2xl font-normal font-['Raleway'] underline capitalize leading-normal">
                    <a target="_blank" href="{{ route('privacy') }}">Política de Privacidad</a>
                </span>
                
                <span class="text-white text-base sm:text-lg lg:text-2xl font-normal font-['Raleway'] capitalize leading-normal">
                    | Powered by 24Studio
                </span>
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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.swiper-container', {
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>

</body>

</html>