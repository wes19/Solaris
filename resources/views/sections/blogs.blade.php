
<div class="w-full h-[250vh] flex bg-[#F2F5FA]" id="blog">
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
            src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsolarishonduras%2Fposts%2F1079805887516726&show_text=true&width=500"
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
            src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsolarishonduras%2Fposts%2F1078941897603125&show_text=true&width=500"
            width="100%" 
            height="679" 
            style="border:none;overflow:hidden;max-width:100%;" 
            scrolling="no" 
            frameborder="0" 
            allowfullscreen="true"
            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
          </iframe>
        </div>
      </div>
      
    </div>
  
    <div class="w-2/3 flex flex-col gap-5">
      <div class="h-[20%]"></div>

      <div x-data="{ open: false }">
        <div @click="open = true" class="flex flex-col gap-4 w-full max-w-3xl mx-auto cursor-pointer transition-shadow">
          <div class="w-full h-96 flex items-center justify-center overflow-hidden">
            <img src="images/alianza-grupo-midence-soto.webp" alt="Alianza Grupo Midence Soto" class="max-h-full max-w-full object-contain"/>
          </div>
          <h3 class="text-xl font-semibold text-black">
            Alianza con el Grupo Midence Soto Pierrefeu
          </h3>
          <div class="overflow-auto max-h-48 pr-2">
            <p class="text-black">
              Estas instalaciones no solo proporcionarán energía limpia a edificios comerciales y corporativos, 
              sino que también aliviarán la presión en el sistema eléctrico nacional. Con esta inversión, contribuimos
               a la reducción de emisiones de CO2 y reafirmamos nuestro compromiso con la sostenibilidad ambiental. 
               El proyecto consiste en 5 granjas solares de última tecnología, generando 521,303 KWh anuales y marcando 
               un hito significativo en el compromiso de nuestro cliente Grupo MSP con la responsabilidad ambiental.
            </p>
          </div>
        </div>
      
        <!-- MODAL -->
        <div x-show="open" x-cloak @click.self="open = false" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" x-transition>
          <div class="bg-white p-6 rounded-lg w-[90%] max-w-5xl max-h-[95vh] overflow-y-auto relative">
            <button @click="open = false" class="absolute top-2 right-2 text-black text-2xl hover:text-gray-700">
              ✕
            </button>
            <h2 class="text-2xl md:text-3xl font-bold mb-4 text-center text-black">
              Alianza con el Grupo Midence Soto Pierrefeu
            </h2>
            <p class="text-black text-base md:text-lg leading-relaxed mb-4">
              Estas instalaciones no solo proporcionarán energía limpia a edificios comerciales y corporativos, sino que 
              también aliviarán la presión en el sistema eléctrico nacional. Con esta inversión, contribuimos a la reducción 
              de emisiones de CO2 y reafirmamos nuestro compromiso con la sostenibilidad ambiental. El proyecto consiste en 
              5 granjas solares de última tecnología, generando 521,303 KWh anuales y marcando un hito significativo en el 
              compromiso de nuestro cliente Grupo MSP con la responsabilidad ambiental.
            </p>
            <div class="w-full h-[300px] md:h-[400px] flex items-center justify-center overflow-hidden rounded-md">
              <img src="images/midence-soto-modal.webp" alt="Alianza Grupo Midence Soto" class="max-h-full max-w-full object-contain" />
            </div>
          </div>
        </div>
      </div>
  
      <div x-data="{ openModal1: false, openModal2: false }">
        <div class="flex gap-5 w-full p-10">
        
          <div @click="openModal1 = true" class="cursor-pointer p-4 flex flex-col gap-2 w-1/2">
            <div class="w-full h-96 flex items-center justify-center overflow-hidden rounded-md mb-2">
              <img src="images/30-proyectos-renovables.webp" alt="30 años renovables" class="max-h-full max-w-full object-contain"/>
            </div>
            <h3 class="text-xl text-center font-semibold text-black mt-2">
              30 años de proyectos renovables
            </h3>
            <div class="overflow-auto max-h-48 pr-2">
              <p class="text-black">
                Solaris y la Fundación Covelo firmaron un importante convenio el día de ayer 23 de febrero, buscando establecer lazos 
                de cooperación técnica financiera, siendo el principal objetivo obtener financiamiento con condiciones blandas de 
                proyectos de energía renovable y eficiencia energética para el segmento pyme y residencial.<br>
                En el acto estuvo presente el presidente ejecutivo de Fundación Covelo, Juan José Lagos y el gerente general de Solaris, el Ingeniero Iván Pastor.
              </p>
            </div>
          </div>

          <div @click="openModal2 = true" class="cursor-pointer p-8 flex flex-col gap-4 w-1/2">
            <div class="w-full h-96 flex items-center justify-center overflow-hidden rounded-md">
              <img src="images/alianza-financiera-micredito.webp" alt="Financiera MiCrédito" class="max-h-full max-w-full object-contain"/>
            </div>
            <h3 class="text-xl text-center font-semibold text-black">
              La alianza que estabas esperando está aquí.
            </h3>
            <div class="overflow-auto max-h-48 pr-2">
              Nos hemos unido con Financiera MiCrédito Honduras para ofrecer financiamientos accesibles a personas y Mipymes que buscan invertir en sistemas solares.
            </div>
          </div>
        </div>

        <div 
          x-show="openModal1" 
          x-cloak
          @click.self="openModal1 = false"
          class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" 
          x-transition>
          <div class="bg-white p-6 rounded-lg w-[90%] max-w-5xl max-h-[90vh] overflow-y-auto relative">
            <button @click="openModal1 = false" class="absolute top-2 right-2 text-black text-2xl hover:text-gray-700">✕</button>
            <h2 class="text-2xl font-bold mb-4 text-center text-black">30 años de proyectos renovables</h2>
            <p class="text-black">
              Solaris y la Fundación Covelo firmaron un importante convenio el día de ayer 23 de febrero, buscando establecer lazos 
              de cooperación técnica financiera, siendo el principal objetivo obtener financiamiento con condiciones blandas de 
              proyectos de energía renovable y eficiencia energética para el segmento pyme y residencial.<br>
              En el acto estuvo presente el presidente ejecutivo de Fundación Covelo, Juan José Lagos y el gerente general de Solaris, el Ingeniero Iván Pastor.
            </p>
            <div class="w-full h-[400px] flex items-center justify-center overflow-hidden rounded-md">
              <img src="images/30-proyectos-renovables.webp" alt="30 años renovables" class="max-h-full max-w-full object-contain" />
            </div>
          </div>
        </div>

        <div 
          x-show="openModal2" 
          x-cloak
          @click.self="openModal2 = false"
          class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" 
          x-transition>
          <div class="bg-white p-6 rounded-lg w-[90%] max-w-5xl max-h-[90vh] overflow-y-auto relative">
            <button @click="openModal2 = false" class="absolute top-2 right-2 text-black text-2xl hover:text-gray-700">✕</button>
            <h2 class="text-2xl font-bold mb-4 text-center text-black">La alianza que estabas esperando</h2>
              Nos hemos unido con Financiera MiCrédito Honduras para ofrecer financiamientos accesibles a personas y Mipymes que buscan invertir en sistemas solares.
            <div class="w-full h-[400px] flex items-center justify-center overflow-hidden rounded-md">
              <img src="images/alianza-financiera-micredito.webp" alt="Financiera MiCrédito" class="max-h-full max-w-full object-contain" />
            </div>
          </div>
        </div>
      
      </div>

    </div>
  </div>
  