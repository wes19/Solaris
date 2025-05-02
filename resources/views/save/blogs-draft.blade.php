
<style>
  .swiper1-next,
  .swiper1-prev {
    color: #000;
    top: unset !important;
    bottom: 0px !important;
    transform: translateY(0) !important;
    z-index: 10;
  }

  .swiper1-next {
    right: 10px;
  }
  
  .swiper1-prev {
    left: 10px;
  }

  .swiper {
    position: relative;
    padding-bottom: 50px; 
  }
</style>


<div class="w-full h-[250vh] flex bg-[#F2F5FA] pb-[500px]" id="blog">
    <div class="w-1/3 flex flex-col p-8 gap-5">
      <div class="p-4" style="height: 20%;">
        <h1 class="text-[96px] leading-[100%] font-semibold" style="color: #24317B;">
          Blog
        </h1>
        <h2 class="text-[40px] leading-[100%] font-semibold" style="color: #24317B;">
          y noticia
        </h2>
  
        <div class="relative mt-4">
          <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-black w-5 h-5 pointer-events-none" 
               fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m1.23-5.4a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" />
          </svg>
          <input type="text" placeholder="Buscar" class="w-full pl-10 p-2 text-black italic bg-gray-300 border-none rounded-[5px]"/>
        </div>  
      </div>
  
      <div class="p-4 border-r border-gray-300" style="height: 80%;">
        <div class="w-full max-w-full overflow-hidden">
          <iframe 
            src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsolarishonduras%2Fposts%2F1079805887516726&show_text=true&width=100%"
            width="100%" 
            height="679" 
            style="border:none;overflow:hidden;max-width:100%;" 
            scrolling="no" 
            frameborder="0" 
            allowfullscreen="true"
            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
          </iframe>
        </div>
      
        <div class="w-full max-w-full overflow-hidden">
          <iframe 
            src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsolarishonduras%2Fposts%2F1078844030946245&show_text=true&width=500" 
            width="100%" 
            height="660" 
            style="border:none;overflow:hidden" 
            scrolling="no" 
            frameborder="0" 
            allowfullscreen="true" 
            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
          </iframe>
        </div>
      </div>
      
    </div>
  
    <div class="w-2/3 mx-auto mt-10">
      <div class="h-[20%]"></div>
      <div class="swiper mySwiper1">
        <div class="swiper-wrapper">
          @foreach ($blogs->chunk(4) as $blogGroup)
            <div class="swiper-slide">
              <div class="grid grid-cols-2 gap-6 p-4">
                @foreach ($blogGroup as $blog)
                  <div class="p-4 flex flex-col gap-4 rounded-md">
                    <div class="w-full h-96 flex items-center justify-center overflow-hidden rounded-md mb-2">
                      <img src="{{ Voyager::image($blog->imagen) }}" alt="{{ $blog->titulo }}" class="max-h-full max-w-full object-contain" />
                    </div>
                    <h3 class="text-xl text-center font-semibold text-black">
                      {{ $blog->titulo }}
                    </h3>
                    <div class="text-black overflow-auto max-h-48 pr-2">
                      {!! $blog->descripcion !!}
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          @endforeach
        </div>

        <div class="swiper-button-next swiper1-next bg-gray-600/70 p-7 rounded-full"></div>
        <div class="swiper-button-prev swiper1-prev bg-gray-600/70 p-7 rounded-full"></div>
        <div class="swiper-pagination"></div>
      </div>

    </div>    
  </div>

  <script>
    const swiper = new Swiper('.mySwiper1', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper1-next',
        prevEl: '.swiper1-prev',
      },
      breakpoints: {
        1024: { slidesPerView: 1 },
        768: { slidesPerView: 1 },
        640: { slidesPerView: 1 },
      }
    });
  </script>
  