
<style>
  .mySwiper1 .swiper1-prev,
  .mySwiper1 .swiper1-next {
    width: 48px;
    height: 48px;
    background-color: rgba(114, 127, 144, 0.7);
    border-radius: 50%;
    display: flex;
    position: static !important;
  }

  .mySwiper1 .swiper1-pagination {
    position: static !important;
  }

  .swiper {
    position: relative;
    padding-bottom: 50px; 
  }

  @media (max-width: 767px) {
    .espacio-mobile {
      display: none;
    }
  }

  .mySwiper1-controls {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
  }

  .swiper1-pagination {
    flex: 1 1 auto;
    display: flex !important;
    justify-content: center !important;
    align-items: center;
  }
</style>


<div class="w-full min-h-screen flex flex-col lg:flex-row bg-[#F2F5FA]" id="blog">

  <div class="w-full lg:w-1/3 flex flex-col p-4 gap-5" id="instagram">
    <div class="p-4">
      <h1 class="text-4xl lg:text-[96px] leading-tight font-semibold text-[#24317B]">Blog</h1>
      <h2 class="text-2xl lg:text-[40px] leading-tight font-semibold text-[#24317B]">y noticia</h2>

      <div class="relative mt-4">
        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-black pointer-events-none" 
             fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m1.23-5.4a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" />
        </svg>
        <input type="text" placeholder="Buscar" class="w-full pl-10 p-2 text-black italic bg-gray-300 border-none rounded-[5px]"/>
      </div>  
    </div>

  @php
    use App\Models\SocialPost;
    
    $socialPosts = SocialPost::where('is_active', 1)
      ->orderBy('created_at', 'desc')
      ->get();
  @endphp
    
  <div class="p-4 border-r border-gray-300 space-y-4">
    @foreach ($socialPosts as $post)
      <div class="w-full">
        <div class="min-w-[300px] w-full">
        
          <blockquote
            class="instagram-media"
            data-instgrm-captioned
            data-instgrm-permalink="{{ $post->url }}"
            data-instgrm-version="14"
            style="
              background:#FFF;
              border:0;
              border-radius:3px;
              box-shadow:0 0 1px 0 rgba(0,0,0,0.5),
                         0 1px 10px 0 rgba(0,0,0,0.15);
              margin:1px;
              max-width:540px;
              min-width:326px;
              padding:0;
              width:99.375%;
              width:-webkit-calc(100% - 2px);
              width:calc(100% - 2px);
            ">
          </blockquote>
        </div>
      </div>
    @endforeach
  </div>
  
  <script async src="//www.instagram.com/embed.js"></script>    
  </div>

  <div class="w-full lg:w-2/3 mx-auto mt-10 px-4" id="blogs">
    <div class="espacio-mobile" style="height: 10%;"></div>
    <div class="swiper mySwiper1">
      <div class="swiper-wrapper">
        @foreach ($blogs->chunk(4) as $blogGroup)
          <div class="swiper-slide">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-4">
              @foreach ($blogGroup as $blog)
                <div class="p-4 flex flex-col gap-4 rounded-md bg-white">
                  <div class="w-full h-auto max-h-80 overflow-hidden rounded-md mb-2">
                    <img src="{{ Voyager::image($blog->imagen) }}" 
                         alt="{{ $blog->titulo }}" 
                         class="w-full h-auto object-cover rounded-md" />
                  </div>
                  <h3 class="text-lg md:text-xl text-center font-semibold text-black">
                    {{ $blog->titulo }}
                  </h3>
                  <div class="text-black overflow-auto max-h-40 pr-2 text-sm md:text-base">
                    {!! $blog->descripcion !!}
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>

      <div class="mySwiper1-controls flex items-center justify-center gap-4 absolute bottom-0 left-0 w-full mt-4 z-20">
        <div class="swiper-button-prev swiper1-prev !static"></div>
        <div class="swiper1-pagination !static"></div>
        <div class="swiper-button-next swiper1-next !static"></div>
      </div>
    </div>

  </div>
</div>


  <script>
    const swiper = new Swiper('.mySwiper1', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
      el: '.swiper1-pagination',
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
  
