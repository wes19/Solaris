
<div class="eco_mapdiv mx-[5%]">
  <h2 class="uppercase text-[36px] sm:text-[48px] md:text-[64px] lg:text-[80px] xl:text-[96px] font-semibold mb-4 text-[#24317B] mt-32">
    Contáctanos
  </h2>
    
    <iframe src="https://www.google.hn/maps/d/u/0/embed?mid=104kFL8LqPLpVIZ-is6sFlhKoft2zoteo" width="100%" height="480"></iframe>
</div>

<div class="max-w-3xl mx-auto px-4 py-6" x-data="{ tab: 'contacto' }" id="contactanos">
    <!-- Tabs -->
    <ul class="flex justify-center mt-24">
      <li class="-mb-px mr-1">
        <a :class="tab === 'contacto' ? 'border-l border-t border-r rounded-t text-white font-semibold' : 'text-black'" 
           @click.prevent="tab = 'contacto'" 
           href="#" 
           class="bg-transparent inline-block py-2 px-4">
           CONTÁCTANOS
        </a>
      </li>
      <li class="-mb-px mr-1">
        <a :class="tab === 'distribuidor' ? 'border-l border-t border-r rounded-t text-white font-semibold' : 'text-black'" 
           @click.prevent="tab = 'distribuidor'" 
           href="#" 
           class="bg-transparent inline-block py-2 px-4">
           DISTRIBUIDOR
        </a>
      </li>
      <li class="-mb-px mr-1">
        <a :class="tab === 'empleo' ? 'border-l border-t border-r rounded-t text-white font-semibold' : 'text-black'" 
           @click.prevent="tab = 'empleo'" 
           href="#" 
           class="bg-transparent inline-block py-2 px-4">
           EMPLEO
        </a>
      </li>
    </ul>
  
    <!-- Tab content -->
    <div class="mt-6 bg-white rounded-[20px]">
        <div x-show="tab === 'contacto'">

            <div class="max-w-4xl mx-auto px-4 py-8 border border-gray-300 rounded-[20px] p-6 shadow-sm">
              <form action="{{ route('envio') }}" method="POST" class="space-y-6">
                  @csrf
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                      <div class="space-y-4">
                          <div>
                            <label class="block text-sm font-medium text-black">Nombre</label>
                            <input type="text" name="nombre" id="uname"
                              class="mt-1 block w-full border border-black rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500"
                              required>
                          </div>
                        
                          <div>
                            <label class="block text-sm font-medium text-black">Correo electrónico</label>
                            <input type="text" name="correo" id="umail"
                              class="mt-1 block w-full border border-black rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500"
                              required>
                          </div>
                        
                          <div>
                            <label class="block text-sm font-medium text-black">Número de teléfono</label>
                            <input type="text" name="telefono" id="utelefono"
                              class="mt-1 block w-full border border-black rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500"
                              required>
                          </div>
                      </div>

                      <div class="space-y-4">
                          <div>
                            <label class="block text-sm font-medium text-black">País</label>
                            <input type="text" name="pais" id="upais"
                              class="mt-1 block w-full border border-black rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500"
                              required>
                          </div>
                        
                          <div>
                            <label class="block text-sm font-medium text-black">Ciudad</label>
                            <input type="text" name="ciudad" id="uciudad"
                              class="mt-1 block w-full border border-black rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500"
                              required>
                          </div>
                        
                          <div>
                            <label class="block text-sm font-medium text-black">Mensaje</label>
                            <textarea name="mensaje" id="msg" rows="5"
                              class="mt-1 block w-full border border-black rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500"
                              required></textarea>
                          </div>
                      </div>
                  </div>

                  <div class="flex justify-center">
                    {!! NoCaptcha::display() !!}
                  </div>

                  <div class="text-center">
                      <button type="submit"
                        class="bg-[#B1B1B1] text-white font-bold px-6 py-3 rounded hover:bg-blue-700 transition duration-200">
                        Enviar
                      </button>
                      <p id="err" class="text-red-500 mt-2"></p>
                  </div>

              </form>
            </div>

        </div>

  
      <div x-show="tab === 'distribuidor'" x-cloak>

        <div class="max-w-4xl mx-auto px-4 py-8 border border-gray-300 rounded-lg p-6 shadow-sm">
                <form action="{{ route('envioDistribuidor') }}" method="POST" class="w-full max-w-4xl">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-black">Nombre</label>
                                    <input type="text" name="nombre" required
                                        class="w-full border border-black rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-black">Empresa</label>
                                    <input type="text" name="empresa" required
                                        class="w-full border border-black rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-black">Correo electrónico</label>
                                    <input type="email" name="correo" required
                                        class="w-full border border-black rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-black">Número de teléfono</label>
                                    <input type="text" name="telefono" required
                                        class="w-full border border-black rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>
                            </div>
                        </div>
            
                        <div>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-black">Departamento</label>
                                    <input type="text" name="depto" required
                                        class="w-full border border-black rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-black">Ciudad</label>
                                    <input type="text" name="ciudad" required
                                        class="w-full border border-black rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-black">Productos que comercializa actualmente</label>
                                    <textarea name="mensaje" rows="5" required
                                        class="w-full border border-black rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center">
                      {!! NoCaptcha::display() !!}
                    </div>
            
                    <div class="flex justify-center mt-6">
                        <button type="submit"
                            class="bg-[#B1B1B1] hover:bg-blue-700 text-white font-bold py-2 px-6 rounded text-uppercase">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
  
        <div x-show="tab === 'empleo'" x-cloak>

            <div class="max-w-5xl mx-auto px-4 py-8 border border-gray-300 rounded-lg p-6 shadow-sm">
                <form action="{{ route('envioEmpleo') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-4xl">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-black">Nombre</label>
                                <input type="text" name="nombre" required class="w-full border border-black rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                
                            <div>
                                <label class="block text-sm font-medium text-black">Correo electrónico</label>
                                <input type="email" name="correo" required class="w-full border border-black rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                
                            <div>
                                <label class="block text-sm font-medium text-black">Número de teléfono</label>
                                <input type="text" name="telefono" required class="w-full border border-black rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                        </div>
                
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-black">Experiencia</label>
                                <select name="exp" class="w-full border border-black rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="0" {{ old('exp') == 0 ? 'selected' : '' }}>Experiencia Laboral</option>
                                    <option value="Practica profesional" {{ old('exp') == "Practica profesional" ? 'selected' : '' }}>Práctica profesional</option>
                                    <option value="entre 1-2 años" {{ old('exp') == "entre 1-2 años" ? 'selected' : '' }}>entre 1-2 años</option>
                                    <option value="entre 2-3 años" {{ old('exp') == "entre 2-3 años" ? 'selected' : '' }}>entre 2-3 años</option>
                                    <option value="entre 3-4 años" {{ old('exp') == "entre 3-4 años" ? 'selected' : '' }}>entre 3-4 años</option>
                                    <option value="entre 4-5 años" {{ old('exp') == "entre 4-5 años" ? 'selected' : '' }}>entre 4-5 años</option>
                                    <option value="entre 5-6 años" {{ old('exp') == "entre 5-6 años" ? 'selected' : '' }}>entre 5-6 años</option>
                                    <option value="más de 6 años" {{ old('exp') == "más de 6 años" ? 'selected' : '' }}>más de 6 años</option>
                                </select>
                                {!! $errors->first('exp', '<p class="text-sm text-red-600 mt-1">:message</p>') !!}
                            </div>
                
                            <div>
                                <label class="block text-sm font-medium text-black">Ciudad</label>
                                <input type="text" name="ciudad" required class="w-full border border-black rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                
                            <div>
                                <label class="block text-sm font-medium text-black">Adjunte su CV</label>
                                <input type="file" name="file" accept=".pdf,.doc,.docx" class="mt-1 block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200" />
                                {!! $errors->first('file', '<p class="text-sm text-red-600 mt-1">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex justify-center mt-2">
                      {!! NoCaptcha::display() !!}
                    </div>
            
                    <div class="md:col-span-2 text-center mt-6">
                        <button type="submit" class="bg-[#B1B1B1] text-white px-6 py-2 rounded shadow hover:bg-blue-700 transition font-bold">Enviar</button>
                        <p id="err" class="text-sm text-red-500 mt-2"></p>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<!-- eco_contactForm end -->
<div class="px-12 py-32 mx-auto bg-white">
    <div class="text-center mb-10">
      <h2 class="text-2xl md:text-3xl font-extrabold uppercase text-[#1B3162]">Visítanos en nuestras sucursales a nivel nacional</h2>
    </div>
  
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Tegucigalpa -->
      <div class="bg-white p-6 rounded-xl">
        <h5 class="font-semibold text-center text-[24px] leading-[37px]">OFICINA PRINCIPAL</h5>
        
        <div class="text-black mt-4 text-[24px] font-normal leading-[37px]">
          <div class="text-center">Col. Florencia Sur, Calle principal, Edificio Solaris, 50 mts antes de farmacia Senros.</div>
          
          <div class="flex flex-col items-center space-y-2 mt-4">
            <div class="text-black font-semibold">info@solarishn.com</div>
            
            <a href="tel:+50431512030" class="flex items-center gap-2 text-blue-600 hover:underline">
              <img src="images/llamada.png" class="w-4 h-4" alt="Llamada"> +504 3151-2030
            </a>
            
            <a href="tel:+50431819480" class="flex items-center gap-2 text-blue-600 hover:underline">
              <img src="images/llamada.png" class="w-4 h-4" alt="Llamada"> +504 3181-9480
            </a>
            
            <a href="tel:+50431891742" class="flex items-center gap-2 text-blue-600 hover:underline">
              <img src="images/llamada.png" class="w-4 h-4" alt="Llamada"> +504 3189-1742
            </a>
          </div>
        </div>
      </div>
        
  
      <!-- San Pedro Sula -->
      <div class="bg-white p-6 rounded-xl">
        <h5 class="font-semibold text-center text-[24px] leading-[37px]">SAN PEDRO SULA</h5>
        
        <div class="text-black mt-4 text-[24px] font-normal leading-[37px]">
          <div class="text-center">Barrio Rio de Piedras, entre 17 y 18 Ave, 7 calle, S.O. Esquina opuesta a la Embajada de México.</div>
          
          <div class="flex flex-col items-center space-y-2 mt-4">
            <div class="text-black font-semibold">comercialsps@solarishn.com</div>
            
            <a href="tel:+50431512030" class="flex items-center gap-2 text-blue-600 hover:underline">
              <img src="images/llamada.png" class="w-4 h-4" alt="Llamada"> +504 3189-0802
            </a>
            
            <a href="tel:+50431819480" class="flex items-center gap-2 text-blue-600 hover:underline">
              <img src="images/llamada.png" class="w-4 h-4" alt="Llamada"> +504 3143-9790
            </a>
            
          </div>
        </div>
      </div>
  
      <!-- La Ceiba -->
      <div class="bg-white p-6 rounded-xl">
        <h5 class="font-semibold text-center text-[24px] leading-[37px]">LA CEIBA</h5>
        
        <div class="text-black mt-4 text-[24px] font-normal leading-[37px]">
          <div class="text-center">Boulevard 15 de Septiembre, centro comercial Plaza del Boulevard frente a la Armeria local N° 4.</div>
          
          <div class="flex flex-col items-center space-y-2 mt-4">
            <div class="text-black font-semibold">sucursal.ceiba@solarishn.com</div>
            
            <a href="tel:+50431512030" class="flex items-center gap-2 text-blue-600 hover:underline">
              <img src="images/llamada.png" class="w-4 h-4" alt="Llamada"> +504 3151-2030
            </a>
            
          </div>
        </div>
      </div>
  
      <!-- Catacamas -->
      <div class="bg-white p-6 rounded-xl">
        <h5 class="font-semibold text-center text-[24px] leading-[37px]">CATACAMAS</h5>
        
        <div class="text-black mt-4 text-[24px] font-normal leading-[37px]">
          <div class="text-center">Barrio el Campo, frente al Hotel Chaver, contiguo a Clínicas Santa Fe.</div>
          
          <div class="flex flex-col items-center space-y-2 mt-4">
            <div class="text-black font-semibold">comercialcatacamas@solarishn.com</div>
            
            <a href="tel:+50431512030" class="flex items-center gap-2 text-blue-600 hover:underline">
              <img src="images/llamada.png" class="w-4 h-4" alt="Llamada"> +504 3189-1294
            </a>
            
          </div>
        </div>
      </div>
  
      <!-- Roatán -->
      <div class="bg-white p-6 rounded-xl">
        <h5 class="font-semibold text-center text-[24px] leading-[37px]">ROATÁN</h5>
        
        <div class="text-black mt-4 text-[24px] font-normal leading-[37px]">
          <div class="text-center">Barrio Spring Garden, Edificio Coconut Plaza, 500 metros antes de llegar al aeropuerto.</div>
          
          <div class="flex flex-col items-center space-y-2 mt-4">
            <div class="text-black font-semibold">comercialroatan@solarishn.com</div>
            
            <a href="tel:+50431512030" class="flex items-center gap-2 text-blue-600 hover:underline">
              <img src="images/llamada.png" class="w-4 h-4" alt="Llamada"> +504 9906-7250
            </a>
            
          </div>
        </div>
      </div>
  
      <!-- Choluteca -->
      <div class="bg-white p-6 rounded-xl">
        <h5 class="font-semibold text-center text-[24px] leading-[37px]">CHOLUTECA</h5>
        
        <div class="text-black mt-4 text-[24px] font-normal leading-[37px]">
          <div class="text-center">Bo Libertad, media cuadra al este de la Cooperativa Guadalupe.</div>
          
          <div class="flex flex-col items-center space-y-2 mt-4">
            <div class="text-black font-semibold">corporativochl@solarishn.com</div>
            
            <a href="tel:+50431512030" class="flex items-center gap-2 text-blue-600 hover:underline">
              <img src="images/llamada.png" class="w-4 h-4" alt="Llamada"> +504 3392-9486
            </a>
            
          </div>
        </div>
      </div>

    </div>
</div>
  
<div class="w-full relative flex flex-col justify-end items-end bg-transparent">
  <div class="w-full h-[450px] overflow-hidden flex items-end justify-center gap-4 pb-4">
    <a href="https://www.facebook.com/solarishonduras" target="_blank" rel="noopener noreferrer">
      <div class="w-[34.39px] h-[35px]">
        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M17.1956 0C7.70262 0 0 7.83898 0 17.5C0 25.9746 5.91228 33.0367 13.7745 34.654V22.733H9.4305V17.7472H13.7745V13.9477C13.7745 9.62571 16.3073 7.23164 20.1795 7.23164C22.0323 7.23164 23.9753 7.57062 23.9753 7.57062V11.815H21.838C19.7284 11.815 19.0761 13.1427 19.0761 14.5127V17.7472H23.8573L23.0662 22.733H19.0761V34.8799C18.4377 34.9576 17.7854 35 17.1192 35C17.147 35 17.1748 35 17.2025 35C17.8826 35 18.5626 34.9576 19.2218 34.8799C27.7711 33.863 34.3981 26.4689 34.3981 17.5C34.3981 7.83898 26.6955 0 17.1956 0Z" fill="#1B3162"/>
        </svg>
      </div>
    </a>    
    <a href="https://www.instagram.com/solarishn?igsh=MWlpMTdndm94eTlxZA==" target="_blank" rel="noopener noreferrer">
      <div class="w-[34.39px] h-[35px]">
        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M21.5826 9.4707H13.8522C11.6316 9.4707 9.82739 11.3069 9.82739 13.5667V21.434C9.82739 23.6939 11.6316 25.53 13.8522 25.53H21.5826C23.8031 25.53 25.6073 23.6939 25.6073 21.434V13.5667C25.6073 11.3069 23.8031 9.4707 21.5826 9.4707ZM17.8006 22.3309C15.1845 22.3309 13.0611 20.1628 13.0611 17.5074C13.0611 14.8521 15.1915 12.684 17.8006 12.684C20.4098 12.684 22.5402 14.8521 22.5402 17.5074C22.5402 20.1628 20.4098 22.3309 17.8006 22.3309ZM22.8455 13.4467C22.2348 13.4467 21.7352 12.9382 21.7352 12.3167C21.7352 11.6953 22.2348 11.1868 22.8455 11.1868C23.4562 11.1868 23.9558 11.6953 23.9558 12.3167C23.9558 12.9382 23.4562 13.4467 22.8455 13.4467Z" fill="#1B3162"/>
          <path d="M17.7174 0C8.21747 0 0.52179 7.83898 0.52179 17.5C0.52179 26.0805 6.58673 33.2203 14.5947 34.7105C15.6078 34.9011 16.6487 35 17.7174 35C18.3974 35 19.0775 34.9576 19.7367 34.8799C28.2859 33.863 34.9129 26.4689 34.9129 17.5C34.9129 7.83192 27.2103 0 17.7174 0ZM27.3769 21.4336C27.3769 24.6822 24.7816 27.3234 21.5895 27.3234H13.8591C10.667 27.3234 8.07175 24.6822 8.07175 21.4336V13.5664C8.07175 10.3178 10.667 7.67655 13.8591 7.67655H21.5895C24.7816 7.67655 27.3769 10.3178 27.3769 13.5664V21.4336Z" fill="#1B3162"/>
          <path d="M17.8007 14.3652C16.1005 14.3652 14.7196 15.7706 14.7196 17.5008C14.7196 19.2311 16.1005 20.6364 17.8007 20.6364C19.5008 20.6364 20.8817 19.2311 20.8817 17.5008C20.8817 15.7706 19.5008 14.3652 17.8007 14.3652Z" fill="#1B3162"/>
        </svg>                  
      </div>
    </a>    
    <a href="https://wa.me/50431512030" target="_blank" rel="noopener noreferrer">
      <div class="w-[34.39px] h-[35px]">
        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M17.2391 0C7.73919 0 0.0435181 7.83898 0.0435181 17.5C0.0435181 27.161 7.74613 35 17.2391 35C26.732 35 34.4347 27.161 34.4347 17.5C34.4347 7.83898 26.739 0 17.2391 0ZM27.0166 21.3277C26.7529 21.9492 26.4337 22.5494 26.0589 23.1144C25.6842 23.6723 25.2609 24.1949 24.789 24.6681C24.3172 25.1412 23.7967 25.5791 23.2485 25.9534C22.6934 26.3347 22.0966 26.6596 21.479 26.9209C20.1952 27.4718 18.8282 27.7472 17.4265 27.7472C16.5313 27.7472 15.6431 27.6342 14.7826 27.4082C13.9499 27.1893 13.1449 26.8644 12.3885 26.4407H12.3746L6.64279 28.291L8.50945 22.6836V22.6695C8.0237 21.8644 7.64899 21.0028 7.39917 20.1059C7.14242 19.1808 7.01058 18.2133 7.01058 17.2387C7.01058 15.8192 7.28814 14.4421 7.82941 13.1427C8.0931 12.5212 8.41231 11.9209 8.78703 11.3559C9.16175 10.798 9.58505 10.2754 10.0569 9.80226C10.5288 9.3291 11.0492 8.89124 11.5974 8.51695C12.1526 8.13559 12.7494 7.81073 13.367 7.54943C14.6507 6.99859 16.0178 6.72316 17.4195 6.72316C18.8213 6.72316 20.1883 6.99859 21.4721 7.54943C22.0897 7.81073 22.6864 8.14266 23.2416 8.51695C23.7898 8.89124 24.3102 9.32203 24.7821 9.80226C25.254 10.2754 25.6842 10.8051 26.052 11.3559C26.4267 11.9209 26.7529 12.5212 27.0096 13.1427C27.5509 14.4421 27.8285 15.8192 27.8285 17.2387C27.8285 18.6582 27.5509 20.0353 27.0096 21.3347L27.0166 21.3277Z" fill="#1B3162"/>
          <path d="M17.4265 8.32542C12.562 8.32542 8.60663 12.3226 8.60663 17.2308C8.60663 19.1164 9.18259 20.9102 10.279 22.4356L9.16872 25.776L12.5967 24.6672C14.0332 25.6277 15.7125 26.1291 17.4334 26.1291C22.2979 26.1291 26.2533 22.1319 26.2533 17.2237C26.2533 12.3155 22.2979 8.31836 17.4334 8.31836L17.4265 8.32542ZM22.4575 20.4582C22.2354 21.8847 20.6185 22.6121 19.3417 22.3862C18.6686 22.2661 18.051 21.9483 17.4265 21.7011C14.8242 20.663 13.1796 17.9653 13.0478 17.7958C12.4788 17.033 12.0346 16.1079 12.0069 15.1333C12.0069 15.091 12.0069 15.0415 12.0069 14.9992C12.0069 14.8367 12.0277 14.6814 12.0555 14.526C12.1526 14.0034 12.3885 13.4949 12.7702 13.1277C12.9576 12.9511 13.1796 12.8028 13.4156 12.711C13.6654 12.6192 13.9985 12.5274 14.2622 12.6121C14.4634 12.6757 14.5744 12.9088 14.6508 13.0924C14.8659 13.6079 15.3794 14.8862 15.4418 15.0133C15.6778 15.4935 15.1296 16.0373 14.8242 16.348C14.6993 16.4751 14.5605 16.6164 14.7132 16.8777C15.5182 18.3113 16.8297 19.4201 18.1967 19.9497C18.4535 20.0768 18.5992 20.0556 18.7519 19.8862C18.9809 19.6178 19.2099 19.3494 19.418 19.0669C19.6193 18.7986 19.7858 18.6079 20.1397 18.7421C20.3757 18.8268 21.6317 19.4554 21.8884 19.5825C22.1452 19.7096 22.3117 19.7732 22.3811 19.8862C22.4852 20.0556 22.4922 20.2675 22.4575 20.4582Z" fill="#1B3162"/>
        </svg>          
      </div>
    </a>    
    <a href="https://www.tiktok.com/@solarishn?_t=ZM-8vaIBY5Z6Pe&_r=1" target="_blank" rel="noopener noreferrer">
      <div class="w-[34.39px] h-[35px]">
        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M17.7609 34.9854C27.2539 34.9854 34.9426 27.1535 34.9426 17.4995C34.9426 7.84559 27.2539 0.0136719 17.7609 0.0136719C8.26796 0.0136719 0.579224 7.84559 0.579224 17.4995C0.579224 27.1535 8.2749 34.9854 17.7609 34.9854ZM9.36436 18.9332C9.69051 18.1563 10.1554 17.4501 10.7453 16.8498C11.3351 16.2495 12.0221 15.7764 12.7924 15.4445C13.8471 14.9925 14.9227 14.9007 16.0538 14.9713V18.806C16.0538 18.7707 15.2628 18.7425 15.1934 18.7425C14.895 18.7425 14.5966 18.7919 14.319 18.8979C13.2851 19.3075 12.5842 20.3456 12.5842 21.4685C12.5842 22.9868 13.7986 24.2227 15.2905 24.2227C16.7825 24.2227 18.1218 22.9798 18.1218 21.5038L18.1495 6.96282H21.7232C21.7441 7.16056 21.7579 7.3583 21.7926 7.54898C22.1396 9.83712 24.041 11.6238 26.3101 11.7933L26.664 11.8216V15.9459C25.9215 15.9459 25.1651 15.9882 24.4435 15.8046C23.9716 15.6846 23.5136 15.508 23.0834 15.275C22.5837 14.9995 22.1257 14.6464 21.7232 14.2368V21.4755C21.7232 22.3583 21.5498 23.2199 21.2167 24.025C20.8905 24.8018 20.4256 25.508 19.8358 26.1083C19.2459 26.7086 18.5589 27.1818 17.7887 27.5137C16.9976 27.8527 16.151 28.0292 15.2836 28.0292C14.4162 28.0292 13.5696 27.8527 12.7785 27.5137C12.0152 27.1818 11.3212 26.7086 10.7314 26.1083C10.1416 25.508 9.67664 24.8089 9.35049 24.025C9.01741 23.2199 8.84392 22.3583 8.84392 21.4755C8.84392 20.5928 9.01741 19.7312 9.35049 18.9261L9.36436 18.9332Z" fill="#1B3162"/>
        </svg>                   
      </div>
    </a>      
    <a href="https://www.youtube.com/@solarishonduras4857" target="_blank" rel="noopener noreferrer">
      <div class="w-[34.39px] h-[35px]">
        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M20.6413 17.3654L15.069 14.1027C14.9649 14.0392 14.8331 14.1168 14.8331 14.244V20.7623C14.8331 20.8894 14.9649 20.9601 15.069 20.9036L20.6413 17.6479C20.7453 17.5843 20.7453 17.429 20.6413 17.3654Z" fill="#1B3162"/>
          <path d="M17.2827 0C7.78971 0 0.0870972 7.83192 0.0870972 17.5C0.0870972 27.1681 7.78277 35 17.2827 35C26.7826 35 34.4782 27.1681 34.4782 17.5C34.4782 7.83192 26.7756 0 17.2827 0ZM28.3647 23.2062C28.101 24.2232 27.3169 25.0282 26.3176 25.3037C24.5134 25.798 17.2827 25.798 17.2827 25.798C17.2827 25.798 10.045 25.798 8.24077 25.3037C7.24845 25.0282 6.46432 24.2302 6.19369 23.2062C5.70794 21.3559 5.70793 17.5 5.70793 17.5C5.70793 17.5 5.70794 13.6441 6.19369 11.7938C6.45738 10.7768 7.24151 9.97175 8.24077 9.69633C10.045 9.20198 17.2827 9.20198 17.2827 9.20198C17.2827 9.20198 24.5204 9.20198 26.3176 9.69633C27.31 9.97175 28.0941 10.7698 28.3647 11.7938C28.8505 13.6441 28.8505 17.5 28.8505 17.5C28.8505 17.5 28.8505 21.3559 28.3647 23.2062Z" fill="#1B3162"/>
        </svg>                   
      </div>
    </a>      
    <a href="https://www.linkedin.com/company/solarishn/" target="_blank" rel="noopener noreferrer">
      <div class="w-[34.39px] h-[35px]">
        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M17.8045 0C8.30456 0 0.608887 7.83898 0.608887 17.5C0.608887 27.161 8.3115 35 17.8045 35C27.2974 35 35 27.161 35 17.5C35 7.83898 27.3044 0 17.8045 0ZM13.398 25.6921H9.96999V14.7034H13.398V25.6921ZM11.7048 13.291C10.6292 13.291 9.74795 12.4011 9.74795 11.2994C9.74795 10.1977 10.6223 9.30791 11.7048 9.30791C12.7873 9.30791 13.6617 10.1977 13.6617 11.2994C13.6617 12.4011 12.7873 13.291 11.7048 13.291ZM25.8749 25.6638H22.5024V20.346C22.5024 19.1384 22.5024 17.4859 20.8022 17.4859C19.1021 17.4859 18.8315 18.8842 18.8315 20.2542V25.6638H15.459V14.7246H18.6996V16.2147C18.9494 15.7486 19.3519 15.3178 19.8446 15.0141C20.4275 14.6469 21.1284 14.4562 21.8639 14.4562C23.4392 14.4562 24.5148 14.9506 25.1393 15.9605C25.6459 16.7797 25.8749 17.9237 25.8749 19.6681V25.6638Z" fill="#1B3162"/>
        </svg>                   
      </div>
    </a>      
  </div>
</div>

{!! NoCaptcha::renderJs() !!}

