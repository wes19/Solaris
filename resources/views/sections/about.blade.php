<!-- filepath: /c:/Users/24stu/OneDrive/Desktop/Proyectos/solaris_nueva_web/resources/views/sections/about.blade.php -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<style>
    .swiper-container {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-button-next {
        color: #000;
    }
    .swiper-button-prev {
        color: #FBED4F;
    }


</style>

<div class="swiper-container overflow-hidden">
    <div class="swiper-wrapper ">
        <div class="swiper-slide bg-[#000F33] w-full flex xl:min-h-[875px] h-full">
            <div
                class="w-full flex xl:min-h-[875px] h-full bg-[#000F33] z-[1000] relative px-[125px] py-[80px] justify-center items-center">
                <div
                    class="bg-[#000F33] z-[1000] xl:min-h-[652px] h-full w-full max-w-[1360px] relative  flex justify-center items-center">

                    <div class="grid grid-cols-3 grid-rows-4 absolute h-full w-full bg-cover bg-bottom bg-no-repeat"
                        style="background-image: url('images/about-panel-trabajador.webp');">
                        <div class="row-span-2 border-[#000F33] border-[10px]"></div>
                        <div class="row-span-2 border-[#000F33] border-[10px]"></div>
                        <div class="col-span-2 border-[#000F33] border-[10px] row-span-2 col-start-1 row-start-3">3
                        </div>
                        <div class="row-span-4 border-[#000F33] border-[10px] col-start-3 row-start-1"></div>
                    </div>
                    <div class="grid grid-cols-3 grid-rows-4 absolute h-full w-full bg-cover bg-bottom bg-no-repeat">
                        <div class="row-span-2 border-[#000F33] rounded-[50px] border-[10px]"></div>
                        <div class="row-span-2 border-[#000F33] rounded-[50px] border-[10px]"></div>
                        <div
                            class="col-span-2 border-[#000F33] rounded-[50px] border-[10px] row-span-2 col-start-1 row-start-3">
                        </div>
                        <div class="row-span-4 border-[#000F33] rounded-[50px] border-[10px] col-start-3 row-start-1">
                        </div>
                    </div>
                    <div class="grid grid-cols-3 grid-rows-4 absolute h-full w-full bg-cover bg-bottom bg-no-repeat">
                        <div class="row-span-2 border-[#000F33] rounded-[30px] border-[10px]"></div>
                        <div class="row-span-2 border-[#000F33] rounded-[30px] border-[10px]"></div>
                        <div
                            class="col-span-2 border-[#000F33] rounded-[30px] border-[10px] row-span-2 col-start-1 row-start-3">
                        </div>
                        <div class="row-span-4 border-[#000F33] rounded-[30px] border-[10px] col-start-3 row-start-1">
                        </div>
                    </div>
                    <div
                        class="z-[1001] xl:text-[12.5em] lg:text-[9em] tracking-[-0.04em] text-white xl:pl-[140px] uppercase leading-[90%]">
                        <p class="nuestro">Nuestro</p>
                        <p class="nuestro">Brand</p>
                        <p class="purpose">Purpose</p>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                {{-- <div class="swiper-button-prev"></div> --}}
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="swiper-slide bg-cover bg-bottom bg-no-repeat w-full flex xl:min-h-[875px] h-full"
            style="background-image: url('images/about-panel-trabajador.webp');">

            <div
                class="grid grid-cols-5 grid-rows-4 gap-2 xl:max-h-[800px] xl:min-h-[620px] ml-24 m-12 h-full w-full relative">
                <div class=" rounded-[25px] bg-transparent row-span-2 col-start-1 row-start-2 flex flex-col gap-2">
                    <div class=" h-[50%] bg-[#000F33] rounded-[25px]"></div>
                    <div class=" h-[50%] bg-[#000F33] rounded-[25px]"></div>
                </div>
                <div class=" rounded-[25px] bg-transparent row-span-3 col-start-2 row-start-2 flex flex-col gap-2">
                    <div class=" h-[33.33%] bg-[#000F33] rounded-[25px]"></div>
                    <div class=" h-[33.33%] bg-[#000F33] rounded-[25px]"></div>
                    <div class=" h-[33.33%] bg-[#000F33] rounded-[25px]"></div>
                </div>
                <div class=" rounded-[25px] bg-transparent row-span-4 col-start-3 row-start-1 flex flex-col gap-2">
                    <div class=" h-[33.33%] bg-[#000F33] rounded-[25px]"></div>
                    <div class=" h-[33.33%] bg-[#000F33] rounded-[25px]"></div>
                    <div class=" h-[33.33%] bg-[#000F33] rounded-[25px]"></div>
                    <div class=" h-[33.33%] bg-[#000F33] rounded-[25px]"></div>
                </div>
                <div class=" rounded-[25px]  col-span-2 col-start-1 row-start-1">
                    <h3
                        class="  text-white uppercase text-left xl:text-[150px] lg:text-[100px] overflow-ellipsis m-0 p-0 h-full w-full">
                        misión</h3>
                </div>
                <div class=" rounded-[25px] bg-[#000F33] col-span-1 row-span-4 col-start-4 row-start-1"></div>
                <div
                    class=" absolute top-0 2xl:right-20 lg:right-5 h-[65%] w-[33%] flex flex-col justify-center  z-40 bg-[#000F33] text-[#FBED4F]">
                    <p class=" xl:text-xl lg:text-md leading-[17.76px]">
                        La misión de Solaris es
                        proporcionar soluciones energéticas que sean eficientes, accesibles y ambientalmente
                        responsables.
                        Nos guiamos por valores fundamentales que incluyen el compromiso, la integridad, la innovación y
                        la
                        responsabilidad social. Estos valores son la base sobre la cual construimos relaciones sólidas y
                        duraderas con nuestros clientes, colaboradores y socios.<br><br>
                        En Solaris, creemos que la energía es un recurso que debe estar al servicio de las personas y
                        del
                        planeta. Por ello, nuestras prácticas empresariales buscan reducir nuestra huella ambiental,
                        fortalecer a nuestras comunidades y crear un futuro donde la energía renovable sea accesible
                        para
                        todos.</p>
                </div>
                <div class=" rounded-[25px] bg-[#000F33] col-span-1 row-span-3 col-start-5 row-start-1"></div>
                <div class=" rounded-[25px] bg-[#000F33] col-span-1 row-span-1 col-start-5 row-start-4"></div>
                {{-- <div class=" rounded-[25px] bg-red-600 col-span-2 row-span-3 col-start-4 row-start-1"></div> --}}
                {{-- <div class=" rounded-[50px] bg-blue-950 col-start-4 row-start-4">11</div>
                <div class=" rounded-[50px] bg-blue-950 col-start-5 row-start-4">12</div> --}}
            </div>
            {{-- <div class="swiper-button-next"></div> --}}
            <div class="swiper-button-prev"></div>
        </div>

        
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            // autoplay: {
            //     delay: 3000,
            //     disableOnInteraction: false,
            // },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>
