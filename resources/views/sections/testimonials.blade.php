
<style>
    .swiper2-next,
    .swiper2-prev {
      color: #FFF !important;
    }

</style>

<div class="h-[200vh] flex flex-col justify-center mt-[300px]">
    <div class=" flex flex-col">
        <div class="flex flex-col">
            <div class="w-full h-full flex justify-center flex-col xl:pl-[212px] lg:items-center xl:items-start">
                <h3 class="w-full max-w-[433px] text-4xl sm:text-5xl lg:text-6xl text-[#000f33] mb-[35px] font-semibold leading-[111%]">
                    Testimonios de Clientes
                </h3>                
            </div>
            
            <div class="w-full h-full flex justify-center flex-col xl:pl-[212px] mb-[100px] lg:items-center xl:items-start">
                <div class=" border border-gray-300 rounded-[16px] p-6 w-full max-w-[1020px]" style="background-color:rgba(255, 255, 255, 0.85)">
                    <p class="w-full h-full xl:text-xl lg:text-lg xl:px-0 lg:px-8 text-justify leading-[111%] font-medium text-[#000f33]">
                        La satisfacción de nuestros clientes es nuestro mejor testimonio. Muchos de nuestros clientes destacan
                        el profesionalismo y compromiso de nuestro equipo, así como la calidad y durabilidad de nuestras
                        instalaciones. Entre los comentarios recibidos, un cliente expresó: “Gracias a Solaris, hemos reducido
                        nuestra factura de electricidad a la mitad y ahora contamos con energía confiable. El equipo de Solaris
                        nos acompañó en todo momento, asegurándose de que el sistema funcionara a la perfección.”
                        Estos testimonios reflejan nuestra dedicación a ofrecer soluciones de alta calidad y a construir
                        relaciones de confianza a largo plazo con cada uno de nuestros clientes.
                    </p>
                </div>
            </div>
        </div>
  
        <div class="relative w-full h-full flex justify-center flex-col">
            <div class="relative z-10 w-full h-full flex justify-center items-center overflow-hidden">
                <div class="swiper-container-second mySwiper2 w-full">
                    <div class="swiper-wrapper">
                        @foreach($testimonios->reverse() as $testimonio)
                            <div class="swiper-slide flex justify-center items-center">
                                <div class="relative w-full m-5 max-w-[320px] sm:max-w-[380px] md:max-w-[420px] min-h-[621px] flex flex-col justify-between items-center overflow-hidden rounded-[100px]">
                                    <img src="{{ asset('images/nubes.webp') }}" alt="Fondo de nubes"
                                        class="absolute inset-0 w-full h-full object-cover rounded-xl z-0">
                                    <div class="relative z-10 p-4 w-full h-full flex flex-col justify-center items-center text-[#24317B]">
                                        <a href="{{ $testimonio->url_video }}" target="_blank" class="relative w-full">
                                            <img src="{{ Voyager::image($testimonio->imagen) }}" alt="Imagen de testimonio" class="p-4 mb-4">
                                            <div class="absolute inset-0 flex items-center justify-center">
                                                <svg width="67" height="76" viewBox="0 0 67 76" fill="white" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M64.5 33.6699C67.8333 35.5944 67.8333 40.4056 64.5 42.3301L7.5 75.2391C4.16667 77.1636 0 74.758 0 70.909V5.09103C0 1.24203 4.16666 -1.16359 7.5 0.760906L64.5 33.6699Z"/>
                                                </svg>
                                            </div>
                                        </a>
                                        <p class="mb-[45px] w-full max-w-[235px] text-2xl font-semibold leading-[111%]">
                                            {{ $testimonio->nombre }}
                                        </p>
                                        <p class="w-full max-w-[235px] text-xl font-normal leading-[111%]">
                                            <div class="p-6 text-[18px]">
                                                {!! $testimonio->descripcion !!}
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-button-prev mySwiper2-prev bg-gray-600/70 p-7 rounded-full text-white"></div>
                <div class="swiper-button-next mySwiper2-next bg-gray-600/70 p-7 rounded-full text-white"></div>    
            </div>
        </div>

    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.mySwiper2', {
            loop: false,
            navigation: {
              nextEl: '.mySwiper2-next',
              prevEl: '.mySwiper2-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 16,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        });
    });
  </script>