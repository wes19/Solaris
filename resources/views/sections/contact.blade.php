
<div class="eco_mapdiv mx-[5%]">
    <h2 class="uppercase text-[96px] font-semibold mb-4 text-[#24317B] mt-32">Contáctanos</h2>
    
    <iframe src="https://www.google.hn/maps/d/u/0/embed?mid=104kFL8LqPLpVIZ-is6sFlhKoft2zoteo" width="100%" height="480"></iframe>
</div>

<div class="max-w-3xl mx-auto px-4 py-6" x-data="{ tab: 'contacto' }">
    <!-- Tabs -->
    <ul class="flex border-b justify-center mt-24">
      <li class="-mb-px mr-1">
        <a :class="tab === 'contacto' ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-gray-500'" 
           @click.prevent="tab = 'contacto'" 
           href="#" 
           class="bg-white inline-block py-2 px-4">
           CONTÁCTANOS
        </a>
      </li>
      <li class="-mb-px mr-1">
        <a :class="tab === 'distribuidor' ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-gray-500'" 
           @click.prevent="tab = 'distribuidor'" 
           href="#" 
           class="bg-white inline-block py-2 px-4">
           DISTRIBUIDOR
        </a>
      </li>
      <li class="-mb-px mr-1">
        <a :class="tab === 'empleo' ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-gray-500'" 
           @click.prevent="tab = 'empleo'" 
           href="#" 
           class="bg-white inline-block py-2 px-4">
           EMPLEO
        </a>
      </li>
    </ul>
  
    <!-- Tab content -->
    <div class="mt-6">
        <div x-show="tab === 'contacto'">

            <div class="max-w-4xl mx-auto px-4 py-8 border border-gray-300 rounded-lg p-6 shadow-sm">
              <form action="{{ route('envio') }}" method="POST" class="space-y-6">
                  @csrf
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                      <div class="space-y-4">
                          <div>
                            <label class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" name="nombre" id="uname"
                              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500"
                              required>
                          </div>
                        
                          <div>
                            <label class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                            <input type="text" name="correo" id="umail"
                              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500"
                              required>
                          </div>
                        
                          <div>
                            <label class="block text-sm font-medium text-gray-700">Número de teléfono</label>
                            <input type="text" name="telefono" id="utelefono"
                              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500"
                              required>
                          </div>
                      </div>

                      <div class="space-y-4">
                          <div>
                            <label class="block text-sm font-medium text-gray-700">País</label>
                            <input type="text" name="pais" id="upais"
                              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500"
                              required>
                          </div>
                        
                          <div>
                            <label class="block text-sm font-medium text-gray-700">Ciudad</label>
                            <input type="text" name="ciudad" id="uciudad"
                              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500"
                              required>
                          </div>
                        
                          <div>
                            <label class="block text-sm font-medium text-gray-700">Mensaje</label>
                            <textarea name="mensaje" id="msg" rows="5"
                              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-blue-500 focus:border-blue-500"
                              required></textarea>
                          </div>
                      </div>
                  </div>

                  <div class="text-center">
                      <button type="submit"
                        class="bg-[#B1B1B1] text-white font-semibold px-6 py-3 rounded hover:bg-blue-700 transition duration-200">
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
                                    <label class="block text-sm font-medium text-gray-700">Nombre</label>
                                    <input type="text" name="nombre" required
                                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Empresa</label>
                                    <input type="text" name="empresa" required
                                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                                    <input type="email" name="correo" required
                                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Número de teléfono</label>
                                    <input type="text" name="telefono" required
                                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>
                            </div>
                        </div>
            
                        <div>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Departamento</label>
                                    <input type="text" name="depto" required
                                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Ciudad</label>
                                    <input type="text" name="ciudad" required
                                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Productos que comercializa actualmente</label>
                                    <textarea name="mensaje" rows="5" required
                                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                                </div>
                            </div>
                        </div>
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
                <form action="{{ route('envioEmpleo') }}" method="POST" enctype="multipart/form-data" class="grid md:grid-cols-2 gap-6">
                    @csrf
            
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" name="nombre" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                        </div>
            
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                            <input type="email" name="correo" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                        </div>
            
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Número de teléfono</label>
                            <input type="text" name="telefono" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                        </div>
                    </div>
            
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Experiencia</label>
                            <select name="exp" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
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
                            <label class="block text-sm font-medium text-gray-700">Ciudad</label>
                            <input type="text" name="ciudad" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                        </div>
            
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Adjunte su CV</label>
                            <input type="file" name="file" accept=".pdf,.doc,.docx" class="mt-1 block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200" />
                            {!! $errors->first('file', '<p class="text-sm text-red-600 mt-1">:message</p>') !!}
                        </div>
                    </div>
            
                    <div class="md:col-span-2 text-center mt-6">
                        <button type="submit" class="bg-[#B1B1B1] text-white px-6 py-2 rounded shadow hover:bg-blue-700 transition">Enviar</button>
                        <p id="err" class="text-sm text-red-500 mt-2"></p>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<!-- eco_contactForm end -->
<div class="px-4 py-32 max-w-7xl mx-auto">
    <div class="text-center mb-10">
      <h2 class="text-2xl md:text-3xl font-bold uppercase text-[#1B3162]">Visítanos en nuestras sucursales a nivel nacional</h2>
    </div>
  
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Tegucigalpa -->
      <div class="bg-white p-6 rounded-xl shadow">
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
      <div class="bg-white p-6 rounded-xl shadow">
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
      <div class="bg-white p-6 rounded-xl shadow">
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
      <div class="bg-white p-6 rounded-xl shadow">
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
      <div class="bg-white p-6 rounded-xl shadow">
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
      <div class="bg-white p-6 rounded-xl shadow">
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
  

