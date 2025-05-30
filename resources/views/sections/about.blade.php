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

    .swiper-button-next,
    .swiper-button-prev {
        z-index: 1002;
        position: absolute;
        color: white !important;
    }

  .mySwiper4 .swiper-button-next,
  .mySwiper4 .swiper-button-prev {
    color: white !important;        
    background: none !important;    
    top: 50% !important;            
    width: auto;
    height: auto;
  }
</style>

<div class="swiper-container overflow-hidden mb-96 hidden lg:block">
    <div class="swiper-wrapper">

        <!--Nuestro Brand-->
        <div class="swiper-slide bg-[#000F33] w-full flex xl:min-h-[875px] h-full">
            <div class="w-full flex xl:min-h-[875px] h-full bg-[#000F33] z-[1000] relative px-[125px] py-[80px] justify-center items-center">
                <div class="bg-[#000F33] z-[1000] xl:min-h-[652px] h-full w-full max-w-[1360px] relative flex justify-center items-center">
                    <div class="grid grid-cols-3 grid-rows-4 absolute h-full w-full bg-contain bg-bottom bg-no-repeat"
                        style="background-image: url('images/about.webp');">
                    </div>

                    <!--<div class="grid grid-cols-3 grid-rows-4 absolute h-full w-full bg-cover bg-bottom bg-no-repeat"
                        style="background-image: url('images/about.webp');">
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
                    </div>-->

                    <div class="z-[1001] xl:text-[12.5em] lg:text-[9em] tracking-[-0.04em] text-white xl:pl-[140px] uppercase leading-[90%]">
                        <p class="nuestro [text-shadow:7px_9px_4px_rgba(0,0,0,0.5)]">Nuestro</p>
                        <p class="nuestro [text-shadow:7px_9px_4px_rgba(0,0,0,0.5)]">Brand</p>
                        <p class="purpose [text-shadow:7px_9px_4px_rgba(0,0,0,0.5)]">Purpose</p>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
            </div>

        </div>


        <!--Mision-->
        <div class="swiper-slide bg-cover bg-bottom bg-no-repeat w-full flex xl:min-h-[875px] h-full"
            style="background-image: url('images/about-panel-edificio.webp');">

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
                    class=" absolute top-0 2xl:right-20 lg:right-5 h-[65%] w-[33%] flex flex-col z-40 bg-[#000F33] text-[#FBED4F]">
                    <p class="text-[26px] leading-[25.76px] mt-12">
                        Impulsar el uso eficiente de la energía, contribuyendo a mejorar la calidad de vida 
                        de las personas y la comunidad de una manera amigable con el medio ambiente, 
                        ofreciendo soluciones económicamente auto sostenibles, que garanticen la satisfacción 
                        de nuestros clientes, colaboradores y accionistas.</p>
                </div>
                <div class=" rounded-[25px] bg-[#000F33] col-span-1 row-span-3 col-start-5 row-start-1"></div>
                <div class=" rounded-[25px] bg-[#000F33] col-span-1 row-span-1 col-start-5 row-start-4"></div>
                {{-- <div class=" rounded-[25px] bg-red-600 col-span-2 row-span-3 col-start-4 row-start-1"></div> --}}
                {{-- <div class=" rounded-[50px] bg-blue-950 col-start-4 row-start-4">11</div>
                <div class=" rounded-[50px] bg-blue-950 col-start-5 row-start-4">12</div> --}}
            </div>
            <div class="swiper-button-next"></div> 
            <div class="swiper-button-prev"></div>
        </div>

        
        <!--Vision-->
        <div class="swiper-slide bg-cover bg-bottom bg-no-repeat w-full flex xl:min-h-[875px] h-full"
            style="background-image: url('images/about-panel.webp');">

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
                        visión</h3>
                </div>
                <div class=" rounded-[25px] bg-[#000F33] col-span-1 row-span-4 col-start-4 row-start-1"></div>
                <div
                    class=" absolute top-0 2xl:right-20 lg:right-5 h-[65%] w-[33%] flex flex-col z-40 bg-[#000F33] text-[#FBED4F]">
                    <p class="text-[25px] leading-[28.76px] mt-12">
                        Ser la marca de referencia en el ámbito de Eficiencia Energética.</p>
                </div>
                <div class=" rounded-[25px] bg-[#000F33] col-span-1 row-span-3 col-start-5 row-start-1"></div>
                <div class=" rounded-[25px] bg-[#000F33] col-span-1 row-span-1 col-start-5 row-start-4"></div>
                {{-- <div class=" rounded-[25px] bg-red-600 col-span-2 row-span-3 col-start-4 row-start-1"></div> --}}
                {{-- <div class=" rounded-[50px] bg-blue-950 col-start-4 row-start-4">11</div>
                <div class=" rounded-[50px] bg-blue-950 col-start-5 row-start-4">12</div> --}}
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


        <!--Valores-->
        <div class="swiper-slide bg-cover bg-bottom bg-no-repeat w-full flex xl:min-h-[875px] h-full"
            style="background-image: url('images/about-trabajador-panel.webp');">

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
                        valores</h3>
                </div>
                <div class=" rounded-[25px] bg-[#000F33] col-span-1 row-span-4 col-start-4 row-start-1"></div>
                <div
                    class=" absolute top-0 2xl:right-20 lg:right-5 h-[65%] w-[33%] flex flex-col z-40 bg-[#000F33] text-[#FBED4F]">
                  
                    <ul class="text-[30px] leading-[35.76px] mt-12">
                        Nuestros Valores:
                        <li>- Excelencia</li>
                        <li>- Innovación</li>
                        <li>- Integridad</li>
                        <li>- Respeto</li>
                        <li>- Enfoque en el cliente</li>
                    </ul>
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


<div class="block lg:hidden w-full h-[70vh] relative">
  <div class="swiper mySwiper4 h-full">
    <div class="swiper-wrapper">

      <div class="swiper-slide w-full h-full flex flex-col items-center justify-center bg-[#000F33] relative">
        <img src="/images/about.webp" alt="About" class="w-full h-full object-contain" />
        <p class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white text-[72px] font-semibold text-center"
           style="text-shadow: 2px 2px 8px rgba(0,0,0,0.8);">
          Nuestro Brand Purpose
        </p>
      </div>

      <div class="swiper-slide h-full flex items-center justify-center bg-[#000F33] p-6">
        <p class="text-[#FBED4F] text-lg leading-relaxed font-medium text-center">
          <strong>Misión:</strong><br>
          Impulsar el uso eficiente de la energía, contribuyendo a mejorar la calidad de vida  
          de las personas y la comunidad de una manera amigable con el medio ambiente, 
          ofreciendo soluciones económicamente auto sostenibles, que garanticen la satisfacción 
          de nuestros clientes, colaboradores y accionistas.
        </p>
      </div>

      <div class="swiper-slide h-full flex items-center justify-center bg-[#000F33] p-6">
        <p class="text-[#FBED4F] text-xl font-semibold text-center">
          <strong>Visión:</strong><br>
          Ser la marca de referencia en el ámbito de Eficiencia Energética.
        </p>
      </div>

      <div class="swiper-slide h-full flex flex-col items-center justify-center bg-[#000F33] p-6 text-[#FBED4F]">
        <h3 class="text-xl font-semibold mb-4">Nuestros Valores:</h3>
        <ul class="list-disc text-left text-xl space-y-2">
          <li>Excelencia</li>
          <li>Innovación</li>
          <li>Integridad</li>
          <li>Respeto</li>
          <li>Enfoque en el cliente</li>
        </ul>
      </div>

    </div>


  <div class="swiper-button-prev swiper4-prev"></div>
  <div class="swiper-button-next swiper4-next"></div>
  </div>
</div>

<script>
  const swiper4 = new Swiper('.mySwiper4', {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    pagination: {
      el: '.swiper4-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper4-next',
      prevEl: '.swiper4-prev',
    },
  });
</script>


