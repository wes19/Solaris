
<div class="flex flex-col justify-center items-center bg-transparent xl:px-0 lg:px-10 pb-[600px]" id="proyectos">
    <div class="text-center pt-32">
        <p class="font-extrabold text-[32px] text-[#24317B] sm:text-[24px]">
            Algunos de los proyectos que hemos impulsado
        </p>
    
        <p class="font-extrabold text-[40px] text-[#24317B] uppercase mt-2 sm:text-[28px]">
            Aplicando energía limpia en distintos lugares del país.
        </p>
    </div>    
    
    <div class="w-[80%] mx-auto pt-16">

      <!-- Acordeón Item 1 -->
      <div x-data="accordionPagination({{ $proyectos->where('categoria', 'Gasolineras')->values()->toJson() }})">
        <button 
            x-on:click="open = !open"
            class="w-full text-left p-4 bg-[#24317B] text-white rounded-[20px] focus:outline-none border-t-2 border-white flex">
            <div class="flex w-full items-center justify-between">
                <div class="flex items-center gap-4">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30 8.68125C29.9646 6.74607 29.1779 4.90053 27.8063 3.535L24.6338 0.36625C24.398 0.138552 24.0822 0.0125594 23.7545 0.0154074C23.4268 0.0182555 23.1132 0.149717 22.8815 0.381477C22.6497 0.613237 22.5183 0.926753 22.5154 1.2545C22.5126 1.58224 22.6386 1.898 22.8662 2.13375L25 4.2675V7.5C25 8.16304 25.2634 8.79893 25.7322 9.26777C26.2011 9.73661 26.837 10 27.5 10V22.5C27.5 22.8315 27.3683 23.1495 27.1339 23.3839C26.8995 23.6183 26.5815 23.75 26.25 23.75C25.9185 23.75 25.6005 23.6183 25.3661 23.3839C25.1317 23.1495 25 22.8315 25 22.5V21.25C25 20.2554 24.6049 19.3016 23.9017 18.5983C23.1984 17.8951 22.2446 17.5 21.25 17.5H20V6.25C19.998 4.59301 19.3389 3.00445 18.1672 1.83277C16.9956 0.661102 15.407 0.00198482 13.75 0L6.25 0C4.59301 0.00198482 3.00445 0.661102 1.83277 1.83277C0.661102 3.00445 0.00198482 4.59301 0 6.25L0 23.75C0.00198482 25.407 0.661102 26.9956 1.83277 28.1672C3.00445 29.3389 4.59301 29.998 6.25 30H13.75C15.407 29.998 16.9956 29.3389 18.1672 28.1672C19.3389 26.9956 19.998 25.407 20 23.75V20H21.25C21.5815 20 21.8995 20.1317 22.1339 20.3661C22.3683 20.6005 22.5 20.9185 22.5 21.25V22.5C22.5 23.4946 22.8951 24.4484 23.5983 25.1517C24.3016 25.8549 25.2554 26.25 26.25 26.25C27.2446 26.25 28.1984 25.8549 28.9017 25.1517C29.6049 24.4484 30 23.4946 30 22.5C30 22.5 30 8.70375 30 8.68125ZM6.25 2.5H13.75C14.7446 2.5 15.6984 2.89509 16.4017 3.59835C17.1049 4.30161 17.5 5.25544 17.5 6.25V11.25H2.5V6.25C2.5 5.25544 2.89509 4.30161 3.59835 3.59835C4.30161 2.89509 5.25544 2.5 6.25 2.5ZM17.5 23.75C17.5 24.7446 17.1049 25.6984 16.4017 26.4017C15.6984 27.1049 14.7446 27.5 13.75 27.5H6.25C5.25544 27.5 4.30161 27.1049 3.59835 26.4017C2.89509 25.6984 2.5 24.7446 2.5 23.75V13.75H17.5V23.75Z" fill="white"/>
                    </svg>                                                                                                                                                
                    <span class="font-bold text-[22px]">Gasolineras</span>
                </div>
                <svg width="16" height="26" viewBox="0 0 16 26" fill="none" xmlns="http://www.w3.org/2000/svg" :class="open ? 'rotate-[-90deg]' : ''" class="transition-transform duration-300">
                    <path d="M2.78687 2.94531L13.984 13.0544L2.78687 23.1635" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>         
            </div>
        </button>
      
        <div x-show="open" x-transition.duration.300ms class="overflow-hidden p-4 -mt-5 bg-[#24317B] text-black rounded-b-[20px] transition-all duration-300 ease-in-out">
            <div id="projects-grid" class="grid grid-cols-2 sm:grid-cols-4 gap-4 w-full max-w-7xl auto-rows-fr">
                <template x-for="proyecto in paginatedItems" :key="proyecto.id">
                    <div class="relative group flex flex-col items-center bg-[#dfdfdf] rounded-xl overflow-hidden">
                        <img :src="'/storage/' + proyecto.imagen"
                             alt=""
                             class="w-full aspect-square object-cover" />
                        <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-0 transition duration-300"></div>
                        <div @click="openModal('/storage/' + proyecto.imagen, proyecto.nombre_proyecto, proyecto.descripcion)"
                             class="absolute cursor-pointer inset-0 flex justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300"></div>
                        <div class="mt-2 text-center text-black font-bold text-[16px]" x-text="proyecto.nombre_proyecto"></div>
                    </div>
                </template>
            </div>
        
            <div class="flex justify-center mt-4 space-x-2 text-white">
                <button @click="prevPage" :disabled="currentPage === 1" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Anterior</button>
                <template x-for="page in totalPages" :key="page">
                    <button @click="goToPage(page)"
                            :class="{'bg-white text-black': currentPage === page, 'bg-gray-700': currentPage !== page}"
                            class="px-3 py-1 rounded"
                            x-text="page"></button>
                </template>
                <button @click="nextPage" :disabled="currentPage === totalPages" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Siguiente</button>
            </div>
        </div>

        <div x-show="modalOpen" x-cloak @click.away="closeModal" class="fixed inset-0 bg-[#24317B] bg-opacity-80 flex justify-center items-center z-50">
            <div class="bg-black bg-opacity-40 fixed flex justify-center items-center w-full h-full">
                <div class="rounded-lg p-8 max-w-7xl w-full flex flex-wrap md:flex-nowrap items-center max-h-[700px]">
                    <a :href="modalUrl" target="_blank" class="relative w-full md:w-1/2 max-w-[500px] mx-auto block">
                        <img :src="modalImage" alt="" class="w-full h-auto rounded-[50px]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 m-auto w-16 h-16 text-white opacity-80 pointer-events-none" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </a>
                    <div class="text-white text-justify md:ml-8 mt-6 md:mt-0 w-full md:w-1/2">
                        <h4 x-text="modalTitle" class="text-[26px] max-w-[375px] text-left font-bold mb-4"></h4>
                        <p x-html="modalContent"></p>
                    </div>
                </div>
            </div>            
            <button @click="closeModal" class="absolute top-4 right-4 text-white text-5xl">&times;</button>
        </div>
      </div>

      <!-- Acordeón Item 2 -->
      <div x-data="accordionPagination({{ $proyectos->where('categoria', 'Bancos')->values()->toJson() }})">
        <button 
            x-on:click="open = !open"
            class="w-full text-left p-4 bg-[#24317B] text-white rounded-[20px] focus:outline-none border-t-2 border-white flex">
            <div class="flex w-full items-center justify-between">
                <div class="flex items-center gap-4">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29.9992 28.7492C29.9992 29.0807 29.8676 29.3986 29.6332 29.633C29.3988 29.8674 29.0808 29.9991 28.7494 29.9991H1.2519C0.920409 29.9991 0.602496 29.8674 0.368097 29.633C0.133698 29.3986 0.00201424 29.0807 0.00201424 28.7492C0.00201424 28.4178 0.133698 28.0998 0.368097 27.8654C0.602496 27.631 0.920409 27.4994 1.2519 27.4994H28.7494C29.0808 27.4994 29.3988 27.631 29.6332 27.8654C29.8676 28.0998 29.9992 28.4178 29.9992 28.7492ZM0.365731 10.6909C0.0964084 10.1914 -0.0283646 9.62664 0.00541445 9.06012C0.0391935 8.49361 0.230188 7.94771 0.556963 7.48371C1.09099 6.70018 1.80615 6.05704 2.64177 5.60888L12.0172 0.729333C12.9386 0.250166 13.962 0 15.0006 0C16.0393 0 17.0626 0.250166 17.9841 0.729333L27.3582 5.61263C28.1938 6.06079 28.909 6.70393 29.443 7.48746C29.7698 7.95146 29.9608 8.49736 29.9946 9.06388C30.0284 9.63039 29.9036 10.1951 29.6343 10.6947C29.3443 11.2431 28.9094 11.7016 28.377 12.02C27.8446 12.3385 27.2349 12.5048 26.6145 12.5007H26.2496V22.4998H27.4995C27.831 22.4998 28.1489 22.6315 28.3833 22.8659C28.6177 23.1003 28.7494 23.4182 28.7494 23.7497C28.7494 24.0812 28.6177 24.3991 28.3833 24.6335C28.1489 24.8679 27.831 24.9996 27.4995 24.9996H2.50178C2.17029 24.9996 1.85238 24.8679 1.61798 24.6335C1.38358 24.3991 1.2519 24.0812 1.2519 23.7497C1.2519 23.4182 1.38358 23.1003 1.61798 22.8659C1.85238 22.6315 2.17029 22.4998 2.50178 22.4998H3.75167V12.5007H3.3867C2.76571 12.5046 2.15557 12.3379 1.62285 12.0187C1.09013 11.6996 0.655277 11.2403 0.365731 10.6909ZM6.25144 22.4998H10.0011V12.5007H6.25144V22.4998ZM12.5009 12.5007V22.4998H17.5004V12.5007H12.5009ZM23.7498 12.5007H20.0002V22.4998H23.7498V12.5007ZM2.58053 9.53227C2.65895 9.67686 2.77565 9.79707 2.91785 9.87974C3.06004 9.96241 3.22225 10.0044 3.3867 10.001H26.6145C26.779 10.0044 26.9412 9.96241 27.0834 9.87974C27.2256 9.79707 27.3423 9.67686 27.4207 9.53227C27.4778 9.43673 27.5055 9.32645 27.5001 9.21527C27.4948 9.10408 27.4567 8.99695 27.3907 8.90733C27.0879 8.45726 26.681 8.08683 26.2046 7.82743L16.8305 2.94413C16.2655 2.65093 15.6384 2.49788 15.0019 2.49788C14.3654 2.49788 13.7382 2.65093 13.1733 2.94413L3.79916 7.82743C3.32294 8.08766 2.91616 8.45844 2.61302 8.90858C2.54689 8.99783 2.50853 9.10459 2.50275 9.21552C2.49697 9.32646 2.52403 9.43663 2.58053 9.53227Z" fill="white"/>
                    </svg>                                                                                                                        
                    <span class="font-bold text-[22px]">Bancos</span>
                </div>
                <svg width="16" height="26" viewBox="0 0 16 26" fill="none" xmlns="http://www.w3.org/2000/svg" :class="open ? 'rotate-[-90deg]' : ''" class="transition-transform duration-300">
                    <path d="M2.78687 2.94531L13.984 13.0544L2.78687 23.1635" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>         
            </div>
        </button>

        <div x-show="open" x-transition.duration.300ms class="overflow-hidden p-4 -mt-5 bg-[#24317B] text-black rounded-b-[20px] transition-all duration-300 ease-in-out">
            <div id="projects-grid" class="grid grid-cols-2 sm:grid-cols-4 gap-4 w-full max-w-7xl auto-rows-fr">
                <template x-for="proyecto in paginatedItems" :key="proyecto.id">
                    <div class="relative group flex flex-col items-center bg-[#dfdfdf] rounded-xl overflow-hidden">
                        <img :src="'/storage/' + proyecto.imagen"
                             alt=""
                             class="w-full aspect-square object-cover" />
                        <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-0 transition duration-300"></div>
                        <div @click="openModal('/storage/' + proyecto.imagen, proyecto.nombre_proyecto, proyecto.descripcion)"
                             class="absolute cursor-pointer inset-0 flex justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300"></div>
                        <div class="mt-2 text-center text-black font-bold text-[16px]" x-text="proyecto.nombre_proyecto"></div>
                    </div>
                </template>
            </div>
        
            <div class="flex justify-center mt-4 space-x-2 text-white">
                <button @click="prevPage" :disabled="currentPage === 1" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Anterior</button>
                <template x-for="page in totalPages" :key="page">
                    <button @click="goToPage(page)"
                            :class="{'bg-white text-black': currentPage === page, 'bg-gray-700': currentPage !== page}"
                            class="px-3 py-1 rounded"
                            x-text="page"></button>
                </template>
                <button @click="nextPage" :disabled="currentPage === totalPages" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Siguiente</button>
            </div>
        </div>
    
        <div x-show="modalOpen" x-cloak @click.away="closeModal" class="fixed inset-0 bg-[#24317B] bg-opacity-80 flex justify-center items-center z-50">
            <div class="bg-black bg-opacity-40 fixed flex justify-center items-center w-full h-full">
                <div class="rounded-lg p-8 max-w-7xl w-full flex flex-wrap md:flex-nowrap items-center max-h-[700px]">
                    <a :href="modalUrl" target="_blank" class="relative w-full md:w-1/2 max-w-[500px] mx-auto block">
                        <img :src="modalImage" alt="" class="w-full h-auto rounded-[50px]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 m-auto w-16 h-16 text-white opacity-80 pointer-events-none" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </a>
                    <div class="text-white text-justify md:ml-8 mt-6 md:mt-0 w-full md:w-1/2">
                        <h4 x-text="modalTitle" class="text-[26px] max-w-[375px] text-left font-bold mb-4"></h4>
                        <p x-html="modalContent"></p>
                    </div>
                </div>
            </div>            
            <button @click="closeModal" class="absolute top-4 right-4 text-white text-5xl">&times;</button>
        </div>
      </div>

      <!-- Acordeón Item 3 -->
      <div x-data="accordionPagination({{ $proyectos->where('categoria', 'Comercios')->values()->toJson() }})">
        <button 
            x-on:click="open = !open"
            class="w-full text-left p-4 bg-[#24317B] text-white rounded-[20px] focus:outline-none border-t-2 border-white flex">
            <div class="flex w-full items-center justify-between">
                <div class="flex items-center gap-4">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30 10C30 9.88375 29.9837 9.7675 29.9525 9.65625L28.4875 4.5325C27.725 1.86375 25.2525 0 22.4775 0H7.52125C4.74625 0 2.275 1.86375 1.51125 4.5325L0.04875 9.65625C0.0175 9.7675 0 9.88375 0 10C0 11.265 0.4725 12.4212 1.25 13.3037V25C1.25 27.7575 3.4925 30 6.25 30H13.75C16.5075 30 18.75 27.7575 18.75 25V14.3288C19.22 14.0563 19.6425 13.7087 20 13.3037C20.9163 14.3438 22.2575 15 23.75 15H25C25.4312 15 25.85 14.945 26.25 14.8413V28.75C26.25 29.44 26.8088 30 27.5 30C28.1912 30 28.75 29.44 28.75 28.75V13.3037C29.5275 12.4225 30 11.265 30 10ZM13.75 27.5H6.25C4.87125 27.5 3.75 26.3787 3.75 25V22.5H16.25V25C16.25 26.3787 15.1287 27.5 13.75 27.5ZM16.25 20H3.75V14.8413C4.15 14.945 4.56875 15 5 15H6.25C7.7425 15 9.0825 14.3425 10 13.3037C10.9175 14.3438 12.2575 15 13.75 15H16.25V20ZM23.75 12.5C22.3713 12.5 21.25 11.3787 21.25 10C21.25 9.31 20.6912 8.75 20 8.75C19.3088 8.75 18.75 9.31 18.75 10C18.75 11.3787 17.6287 12.5 16.25 12.5H13.75C12.3713 12.5 11.25 11.3787 11.25 10C11.25 9.31 10.69 8.75 10 8.75C9.31 8.75 8.75 9.31 8.75 10C8.75 11.3787 7.62875 12.5 6.25 12.5H5C4.3875 12.5 3.825 12.2775 3.39 11.9113C3.35375 11.875 3.31625 11.8412 3.27625 11.8087C2.83375 11.3875 2.545 10.8062 2.505 10.1587L3.915 5.22C4.3725 3.61875 5.855 2.5 7.52125 2.5H8.75V5C8.75 5.69 9.31 6.25 10 6.25C10.69 6.25 11.25 5.69 11.25 5V2.5H18.75V5C18.75 5.69 19.3088 6.25 20 6.25C20.6912 6.25 21.25 5.69 21.25 5V2.5H22.4775C24.1425 2.5 25.6263 3.61875 26.0838 5.22L27.495 10.1587C27.4137 11.4637 26.325 12.5013 25 12.5013H23.75V12.5Z" fill="white"/>
                    </svg>                                                                                                                        
                    <span class="font-bold text-[22px]">Comercios</span>
                </div>
                <svg width="16" height="26" viewBox="0 0 16 26" fill="none" xmlns="http://www.w3.org/2000/svg" :class="open ? 'rotate-[-90deg]' : ''" class="transition-transform duration-300">
                    <path d="M2.78687 2.94531L13.984 13.0544L2.78687 23.1635" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>         
            </div>
        </button>
      
        <div x-show="open" x-transition.duration.300ms class="overflow-hidden p-4 -mt-5 bg-[#24317B] text-black rounded-b-[20px] transition-all duration-300 ease-in-out">
            <div id="projects-grid" class="grid grid-cols-2 sm:grid-cols-4 gap-4 w-full max-w-7xl auto-rows-fr">
                <template x-for="proyecto in paginatedItems" :key="proyecto.id">
                    <div class="relative group flex flex-col items-center bg-[#dfdfdf] rounded-xl overflow-hidden">
                        <img :src="'/storage/' + proyecto.imagen"
                             alt=""
                             class="w-full aspect-square object-cover" />
                        <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-0 transition duration-300"></div>
                        <div @click="openModal('/storage/' + proyecto.imagen, proyecto.nombre_proyecto, proyecto.descripcion)"
                             class="absolute cursor-pointer inset-0 flex justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300"></div>
                        <div class="mt-2 text-center text-black font-bold text-[16px]" x-text="proyecto.nombre_proyecto"></div>
                    </div>
                </template>
            </div>
        
            <div class="flex justify-center mt-4 space-x-2 text-white">
                <button @click="prevPage" :disabled="currentPage === 1" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Anterior</button>
                <template x-for="page in totalPages" :key="page">
                    <button @click="goToPage(page)"
                            :class="{'bg-white text-black': currentPage === page, 'bg-gray-700': currentPage !== page}"
                            class="px-3 py-1 rounded"
                            x-text="page"></button>
                </template>
                <button @click="nextPage" :disabled="currentPage === totalPages" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Siguiente</button>
            </div>
        </div>
    
        <div x-show="modalOpen" x-cloak @click.away="closeModal" class="fixed inset-0 bg-[#24317B] bg-opacity-80 flex justify-center items-center z-50">
            <div class="bg-black bg-opacity-40 fixed flex justify-center items-center w-full h-full">
                <div class="rounded-lg p-8 max-w-7xl w-full flex flex-wrap md:flex-nowrap items-center max-h-[700px]">
                    <a :href="modalUrl" target="_blank" class="relative w-full md:w-1/2 max-w-[500px] mx-auto block">
                        <img :src="modalImage" alt="" class="w-full h-auto rounded-[50px]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 m-auto w-16 h-16 text-white opacity-80 pointer-events-none" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </a>
                    <div class="text-white text-justify md:ml-8 mt-6 md:mt-0 w-full md:w-1/2">
                        <h4 x-text="modalTitle" class="text-[26px] max-w-[375px] text-left font-bold mb-4"></h4>
                        <p x-html="modalContent"></p>
                    </div>
                </div>
            </div>            
            <button @click="closeModal" class="absolute top-4 right-4 text-white text-5xl">&times;</button>
        </div>
      </div>
     
      <!-- Acordeón Item 4 -->
      <div x-data="accordionPagination({{ $proyectos->where('categoria', 'Hospitales')->values()->toJson() }})">
        <button 
            x-on:click="open = !open"
            class="w-full text-left p-4 bg-[#24317B] text-white rounded-[20px] focus:outline-none border-t-2 border-white flex">
            <div class="flex w-full items-center justify-between">
                <div class="flex items-center gap-4">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.3333 8.45919V6.93262C28.3333 3.10997 25.1557 0 21.25 0H12.75C8.84425 0 5.66667 3.10997 5.66667 6.93262V8.45919C2.43808 9.10392 0 11.9047 0 15.2518V26.344C0 30.1666 3.17758 33.2766 7.08333 33.2766H26.9167C30.8224 33.2766 34 30.1666 34 26.344V15.2518C34 11.9047 31.5619 9.10253 28.3333 8.45919ZM2.83333 26.344V15.2518C2.83333 13.4437 4.01767 11.9033 5.66667 11.3307V30.2651C4.01767 29.6924 2.83333 28.152 2.83333 26.344ZM8.5 6.93262C8.5 4.63931 10.4068 2.77305 12.75 2.77305H21.25C23.5932 2.77305 25.5 4.63931 25.5 6.93262V30.5035H8.5V6.93262ZM31.1667 26.344C31.1667 28.152 29.9823 29.6924 28.3333 30.2651V11.3307C29.9823 11.9033 31.1667 13.4437 31.1667 15.2518V26.344ZM15.5833 19.4113C15.5833 20.1767 14.9501 20.7979 14.1667 20.7979H12.75C11.9666 20.7979 11.3333 20.1767 11.3333 19.4113C11.3333 18.646 11.9666 18.0248 12.75 18.0248H14.1667C14.9501 18.0248 15.5833 18.646 15.5833 19.4113ZM22.6667 19.4113C22.6667 20.1767 22.0334 20.7979 21.25 20.7979H19.8333C19.0499 20.7979 18.4167 20.1767 18.4167 19.4113C18.4167 18.646 19.0499 18.0248 19.8333 18.0248H21.25C22.0334 18.0248 22.6667 18.646 22.6667 19.4113ZM15.5833 24.9574C15.5833 25.7228 14.9501 26.344 14.1667 26.344H12.75C11.9666 26.344 11.3333 25.7228 11.3333 24.9574C11.3333 24.1921 11.9666 23.5709 12.75 23.5709H14.1667C14.9501 23.5709 15.5833 24.1921 15.5833 24.9574ZM22.6667 24.9574C22.6667 25.7228 22.0334 26.344 21.25 26.344H19.8333C19.0499 26.344 18.4167 25.7228 18.4167 24.9574C18.4167 24.1921 19.0499 23.5709 19.8333 23.5709H21.25C22.0334 23.5709 22.6667 24.1921 22.6667 24.9574ZM18.4167 12.4787C18.4167 13.2441 17.7834 13.8652 17 13.8652C16.2166 13.8652 15.5833 13.2441 15.5833 12.4787V11.0922H14.1667C13.3832 11.0922 12.75 10.471 12.75 9.70567C12.75 8.94031 13.3832 8.31915 14.1667 8.31915H15.5833V6.93262C15.5833 6.16726 16.2166 5.5461 17 5.5461C17.7834 5.5461 18.4167 6.16726 18.4167 6.93262V8.31915H19.8333C20.6167 8.31915 21.25 8.94031 21.25 9.70567C21.25 10.471 20.6167 11.0922 19.8333 11.0922H18.4167V12.4787Z" fill="white"/>
                    </svg>                                                                                                   
                    <span class="font-bold text-[22px]">Hospitales</span>
                </div>
                <svg width="16" height="26" viewBox="0 0 16 26" fill="none" xmlns="http://www.w3.org/2000/svg" :class="open ? 'rotate-[-90deg]' : ''" class="transition-transform duration-300">
                    <path d="M2.78687 2.94531L13.984 13.0544L2.78687 23.1635" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>         
            </div>
        </button>
      
        <div x-show="open" x-transition.duration.300ms class="overflow-hidden p-4 -mt-5 bg-[#24317B] text-black rounded-b-[20px] transition-all duration-300 ease-in-out">
            <div id="projects-grid" class="grid grid-cols-2 sm:grid-cols-4 gap-4 w-full max-w-7xl auto-rows-fr">
                <template x-for="proyecto in paginatedItems" :key="proyecto.id">
                    <div class="relative group flex flex-col items-center bg-[#dfdfdf] rounded-xl overflow-hidden">
                        <img :src="'/storage/' + proyecto.imagen"
                             alt=""
                             class="w-full aspect-square object-cover" />
                        <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-0 transition duration-300"></div>
                        <div @click="openModal('/storage/' + proyecto.imagen, proyecto.nombre_proyecto, proyecto.descripcion)"
                             class="absolute cursor-pointer inset-0 flex justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300"></div>
                        <div class="mt-2 text-center text-black font-bold text-[16px]" x-text="proyecto.nombre_proyecto"></div>
                    </div>
                </template>
            </div>
        
            <div class="flex justify-center mt-4 space-x-2 text-white">
                <button @click="prevPage" :disabled="currentPage === 1" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Anterior</button>
                <template x-for="page in totalPages" :key="page">
                    <button @click="goToPage(page)"
                            :class="{'bg-white text-black': currentPage === page, 'bg-gray-700': currentPage !== page}"
                            class="px-3 py-1 rounded"
                            x-text="page"></button>
                </template>
                <button @click="nextPage" :disabled="currentPage === totalPages" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Siguiente</button>
            </div>
        </div>
    
        <div x-show="modalOpen" x-cloak @click.away="closeModal" class="fixed inset-0 bg-[#24317B] bg-opacity-80 flex justify-center items-center z-50">
            <div class="bg-black bg-opacity-40 fixed flex justify-center items-center w-full h-full">
                <div class="rounded-lg p-8 max-w-7xl w-full flex flex-wrap md:flex-nowrap items-center max-h-[700px]">
                    <a :href="modalUrl" target="_blank" class="relative w-full md:w-1/2 max-w-[500px] mx-auto block">
                        <img :src="modalImage" alt="" class="w-full h-auto rounded-[50px]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 m-auto w-16 h-16 text-white opacity-80 pointer-events-none" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </a>
                    <div class="text-white text-justify md:ml-8 mt-6 md:mt-0 w-full md:w-1/2">
                        <h4 x-text="modalTitle" class="text-[26px] max-w-[375px] text-left font-bold mb-4"></h4>
                        <p x-html="modalContent"></p>
                    </div>
                </div>
            </div>            
            <button @click="closeModal" class="absolute top-4 right-4 text-white text-5xl">&times;</button>
        </div>
      </div>

      <!-- Acordeón Item 5 -->
      <div x-data="accordionPagination({{ $proyectos->where('categoria', 'Plazas')->values()->toJson() }})">
        <button 
            x-on:click="open = !open"
            class="w-full text-left p-4 bg-[#24317B] text-white rounded-[20px] focus:outline-none border-t-2 border-white flex">
            <div class="flex w-full items-center justify-between">
                <div class="flex items-center gap-4">
                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.126 20.8107C23.126 17.8351 20.7054 15.4146 17.7299 15.4146H5.39606C2.42052 15.4146 0 17.8351 0 20.8107C0 22.9583 1.26268 24.8176 3.08346 25.6856V29.2902H1.54173C0.690696 29.2902 0 29.9794 0 30.8319C0 31.6845 0.690696 32.3737 1.54173 32.3737H3.08346V35.4571C3.08346 36.3097 3.77416 36.9989 4.62519 36.9989C5.47623 36.9989 6.16692 36.3097 6.16692 35.4571V32.3737H16.959V35.4571C16.959 36.3097 17.6497 36.9989 18.5008 36.9989C19.3518 36.9989 20.0425 36.3097 20.0425 35.4571V32.3737H21.5842C22.4353 32.3737 23.126 31.6845 23.126 30.8319C23.126 29.9794 22.4353 29.2902 21.5842 29.2902H20.0425V25.6856C21.8633 24.8176 23.126 22.9583 23.126 20.8107ZM5.39606 18.4981H17.7299C19.0049 18.4981 20.0425 19.5357 20.0425 20.8107C20.0425 22.0857 19.0049 23.1233 17.7299 23.1233H5.39606C4.12105 23.1233 3.08346 22.0857 3.08346 20.8107C3.08346 19.5357 4.12105 18.4981 5.39606 18.4981ZM6.16692 29.2902V26.2067H16.959V29.2902H6.16692ZM36.2985 15.6628C36.9892 17.0242 37.165 18.4503 36.8474 19.8702C36.1659 22.9306 33.3261 24.9271 30.1177 24.6342C29.8171 24.5972 29.6244 24.6635 29.4825 24.7914C29.3946 24.8685 29.2914 25.0073 29.2914 25.2216V35.4587C29.2914 36.3112 28.6007 37.0004 27.7496 37.0004C26.8986 37.0004 26.2079 36.3112 26.2079 35.4587V25.2216C26.2079 24.1824 26.6504 23.1896 27.4197 22.4973C28.2121 21.7851 29.2806 21.4428 30.3536 21.5584C32.0603 21.708 33.4987 20.7259 33.8364 19.2027C33.9952 18.4873 33.9104 17.775 33.5897 17.1444C33.3122 16.6095 32.7325 15.4932 33.582 13.7064C33.804 13.2408 33.915 12.7783 33.915 12.3327C33.915 11.3367 33.4247 10.4009 32.6014 9.82738C31.459 9.02722 30.7976 7.68438 30.8315 6.23361C30.8408 5.8158 30.7591 5.38874 30.5879 4.9663C30.2411 4.10756 29.4887 3.43228 28.6253 3.19948C28.0425 3.04222 27.4551 3.04222 26.8708 3.19948C26.0075 3.43074 25.2566 4.10756 24.9097 4.9663C24.7386 5.38874 24.6554 5.8158 24.6662 6.23361C24.7001 7.68438 24.0387 9.02722 22.8962 9.82584C22.073 10.4009 21.5812 11.3367 21.5812 12.3327C21.5812 13.1853 20.8905 13.8744 20.0394 13.8744C19.1884 13.8744 18.4977 13.1853 18.4977 12.3327C18.4977 10.33 19.4813 8.44753 21.131 7.2974C21.538 7.01218 21.5889 6.55429 21.5842 6.30453C21.5642 5.46428 21.7215 4.62404 22.0514 3.80846C22.7637 2.04472 24.2684 0.704957 26.0738 0.220853C27.1792 -0.0736177 28.3201 -0.0736177 29.4224 0.220853C31.2293 0.704957 32.7325 2.04626 33.4463 3.80846C33.7762 4.62404 33.9335 5.46428 33.9135 6.30453C33.9088 6.55274 33.9597 7.01218 34.3667 7.29894C36.0148 8.44753 36.9985 10.33 36.9985 12.3327C36.9985 13.2408 36.7857 14.1473 36.3664 15.0292C36.206 15.3653 36.2183 15.5025 36.2183 15.5025C36.223 15.5272 36.2677 15.6089 36.2954 15.6644L36.2985 15.6628Z" fill="white"/>
                    </svg>                                                                              
                    <span class="font-bold text-[22px]">Plazas</span>
                </div>
                <svg width="16" height="26" viewBox="0 0 16 26" fill="none" xmlns="http://www.w3.org/2000/svg" :class="open ? 'rotate-[-90deg]' : ''" class="transition-transform duration-300">
                    <path d="M2.78687 2.94531L13.984 13.0544L2.78687 23.1635" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>         
            </div>
        </button>
      
        <div x-show="open" x-transition.duration.300ms class="overflow-hidden p-4 -mt-5 bg-[#24317B] text-black rounded-b-[20px] transition-all duration-300 ease-in-out">
            <div id="projects-grid" class="grid grid-cols-2 sm:grid-cols-4 gap-4 w-full max-w-7xl auto-rows-fr">
                <template x-for="proyecto in paginatedItems" :key="proyecto.id">
                    <div class="relative group flex flex-col items-center bg-[#dfdfdf] rounded-xl overflow-hidden">
                        <img :src="'/storage/' + proyecto.imagen"
                             alt=""
                             class="w-full aspect-square object-cover" />
                        <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-0 transition duration-300"></div>
                        <div @click="openModal('/storage/' + proyecto.imagen, proyecto.nombre_proyecto, proyecto.descripcion)"
                             class="absolute cursor-pointer inset-0 flex justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300"></div>
                        <div class="mt-2 text-center text-black font-bold text-[16px]" x-text="proyecto.nombre_proyecto"></div>
                    </div>
                </template>
            </div>
        
            <div class="flex justify-center mt-4 space-x-2 text-white">
                <button @click="prevPage" :disabled="currentPage === 1" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Anterior</button>
                <template x-for="page in totalPages" :key="page">
                    <button @click="goToPage(page)"
                            :class="{'bg-white text-black': currentPage === page, 'bg-gray-700': currentPage !== page}"
                            class="px-3 py-1 rounded"
                            x-text="page"></button>
                </template>
                <button @click="nextPage" :disabled="currentPage === totalPages" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Siguiente</button>
            </div>
        </div>
    
        <div x-show="modalOpen" x-cloak @click.away="closeModal" class="fixed inset-0 bg-[#24317B] bg-opacity-80 flex justify-center items-center z-50">
            <div class="bg-black bg-opacity-40 fixed flex justify-center items-center w-full h-full">
                <div class="rounded-lg p-8 max-w-7xl w-full flex flex-wrap md:flex-nowrap items-center max-h-[700px]">
                    <a :href="modalUrl" target="_blank" class="relative w-full md:w-1/2 max-w-[500px] mx-auto block">
                        <img :src="modalImage" alt="" class="w-full h-auto rounded-[50px]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 m-auto w-16 h-16 text-white opacity-80 pointer-events-none" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </a>
                    <div class="text-white text-justify md:ml-8 mt-6 md:mt-0 w-full md:w-1/2">
                        <h4 x-text="modalTitle" class="text-[26px] max-w-[375px] text-left font-bold mb-4"></h4>
                        <p x-html="modalContent"></p>
                    </div>
                </div>
            </div>            
            <button @click="closeModal" class="absolute top-4 right-4 text-white text-5xl">&times;</button>
        </div>
      </div>

      <!-- Acordeón Item 6 -->
      <div x-data="accordionPagination({{ $proyectos->where('categoria', 'Residencial')->values()->toJson() }})">
        <button 
            x-on:click="open = !open"
            class="w-full text-left p-4 bg-[#24317B] text-white rounded-[20px] focus:outline-none border-t-2 border-white flex">
            <div class="flex w-full items-center justify-between">
                <div class="flex items-center gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="34" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                    </svg>                                                      
                    <span class="font-bold text-[22px]">Residencial</span>
                </div>
                <svg width="16" height="26" viewBox="0 0 16 26" fill="none" xmlns="http://www.w3.org/2000/svg" :class="open ? 'rotate-[-90deg]' : ''" class="transition-transform duration-300">
                    <path d="M2.78687 2.94531L13.984 13.0544L2.78687 23.1635" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>         
            </div>
        </button>
      
        <div x-show="open" x-transition.duration.300ms class="overflow-hidden p-4 -mt-5 bg-[#24317B] text-black rounded-b-[20px] transition-all duration-300 ease-in-out">
            <div id="projects-grid" class="grid grid-cols-2 sm:grid-cols-4 gap-4 w-full max-w-7xl auto-rows-fr">
                <template x-for="proyecto in paginatedItems" :key="proyecto.id">
                    <div class="relative group flex flex-col items-center bg-[#dfdfdf] rounded-xl overflow-hidden">
                        <img :src="'/storage/' + proyecto.imagen"
                             alt=""
                             class="w-full aspect-square object-cover" />
                        <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-0 transition duration-300"></div>
                        <div @click="openModal('/storage/' + proyecto.imagen, proyecto.nombre_proyecto, proyecto.descripcion)"
                             class="absolute cursor-pointer inset-0 flex justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300"></div>
                        <div class="mt-2 text-center text-black font-bold text-[16px]" x-text="proyecto.nombre_proyecto"></div>
                    </div>
                </template>
            </div>
        
            <div class="flex justify-center mt-4 space-x-2 text-white">
                <button @click="prevPage" :disabled="currentPage === 1" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Anterior</button>
                <template x-for="page in totalPages" :key="page">
                    <button @click="goToPage(page)"
                            :class="{'bg-white text-black': currentPage === page, 'bg-gray-700': currentPage !== page}"
                            class="px-3 py-1 rounded"
                            x-text="page"></button>
                </template>
                <button @click="nextPage" :disabled="currentPage === totalPages" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Siguiente</button>
            </div>
        </div>
    
        <div x-show="modalOpen" x-cloak @click.away="closeModal" class="fixed inset-0 bg-[#24317B] bg-opacity-80 flex justify-center items-center z-50">
            <div class="bg-black bg-opacity-40 fixed flex justify-center items-center w-full h-full">
                <div class="rounded-lg p-8 max-w-7xl w-full flex flex-wrap md:flex-nowrap items-center max-h-[700px]">
                    <a :href="modalUrl" target="_blank" class="relative w-full md:w-1/2 max-w-[500px] mx-auto block">
                        <img :src="modalImage" alt="" class="w-full h-auto rounded-[50px]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 m-auto w-16 h-16 text-white opacity-80 pointer-events-none" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </a>
                    <div class="text-white text-justify md:ml-8 mt-6 md:mt-0 w-full md:w-1/2">
                        <h4 x-text="modalTitle" class="text-[26px] max-w-[375px] text-left font-bold mb-4"></h4>
                        <p x-html="modalContent"></p>
                    </div>
                </div>
            </div>            
            <button @click="closeModal" class="absolute top-4 right-4 text-white text-5xl">&times;</button>
        </div>
      </div>

      <!-- Acordeón Item 7 -->
      <div x-data="accordionPagination({{ $proyectos->where('categoria', 'Educacion')->values()->toJson() }})">
        <button 
            x-on:click="open = !open"
            class="w-full text-left p-4 bg-[#24317B] text-white rounded-[20px] focus:outline-none border-t-2 border-white flex">
            <div class="flex w-full items-center justify-between">
                <div class="flex items-center gap-4">
                    <svg width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.0863 6.37866L22.0253 1.10916C19.5905 -0.345187 16.56 -0.370992 14.1008 1.04166L2.91533 6.37866C2.87335 6.39968 2.82983 6.42218 2.78933 6.44616C0.134888 7.96392 -0.786628 11.3462 0.731138 14.0006C1.24561 14.9005 2.00239 15.6378 2.91533 16.1287L6.00085 17.5987V24.9487C6.00268 28.2353 8.14123 31.1389 11.2794 32.1157C13.4632 32.7475 15.7276 33.0568 18.0009 33.0337C20.2738 33.0592 22.5382 32.7525 24.7224 32.1232C27.8605 31.1465 29.9991 28.2428 30.0009 24.9562V17.5957L33.0009 16.1617V28.5336C33.0009 29.3621 33.6725 30.0336 34.5009 30.0336C35.3293 30.0336 36.0009 29.3621 36.0009 28.5336V10.5336C36.0109 8.77223 34.6201 7.14506 33.0863 6.37866ZM27.0008 24.9562C27.0016 26.9221 25.7261 28.661 23.8508 29.2507C21.9491 29.7941 19.9785 30.0578 18.0008 30.0337C16.0231 30.0578 14.0525 29.7941 12.1508 29.2507C10.2755 28.6609 9.00003 26.9221 9.0008 24.9562V19.0282L13.9763 21.3982C15.204 22.1272 16.6061 22.5103 18.0338 22.5067C19.3928 22.5164 20.729 22.1566 21.8994 21.4657L27.0008 19.0282V24.9562ZM31.8008 13.4212L20.4878 18.8212C18.9104 19.7396 16.9553 19.7136 15.4028 18.7537L4.3343 13.4887C3.10053 12.8234 2.6397 11.2839 3.305 10.0502C3.53 9.63293 3.86736 9.28706 4.27883 9.05166L15.5213 3.68168C17.0992 2.76523 19.0533 2.79117 20.6063 3.74918L31.6673 9.01868C32.4807 9.47037 32.9897 10.3233 33.0008 11.2537C33.0023 12.135 32.5485 12.9546 31.8008 13.4212Z" fill="white"/>
                    </svg>                                                       
                    <span class="font-bold text-[22px]">Educación</span>
                </div>
                <svg width="16" height="26" viewBox="0 0 16 26" fill="none" xmlns="http://www.w3.org/2000/svg" :class="open ? 'rotate-[-90deg]' : ''" class="transition-transform duration-300">
                    <path d="M2.78687 2.94531L13.984 13.0544L2.78687 23.1635" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>         
            </div>
        </button>
      
        <div x-show="open" x-transition.duration.300ms class="overflow-hidden p-4 -mt-5 bg-[#24317B] text-black rounded-b-[20px] transition-all duration-300 ease-in-out">
            <div id="projects-grid" class="grid grid-cols-2 sm:grid-cols-4 gap-4 w-full max-w-7xl auto-rows-fr">
                <template x-for="proyecto in paginatedItems" :key="proyecto.id">
                    <div class="relative group flex flex-col items-center bg-[#dfdfdf] rounded-xl overflow-hidden">
                        <img :src="'/storage/' + proyecto.imagen"
                             alt=""
                             class="w-full aspect-square object-cover" />
                        <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-0 transition duration-300"></div>
                        <div @click="openModal('/storage/' + proyecto.imagen, proyecto.nombre_proyecto, proyecto.descripcion)"
                             class="absolute cursor-pointer inset-0 flex justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300"></div>
                        <div class="mt-2 text-center text-black font-bold text-[16px]" x-text="proyecto.nombre_proyecto"></div>
                    </div>
                </template>
            </div>
        
            <div class="flex justify-center mt-4 space-x-2 text-white">
                <button @click="prevPage" :disabled="currentPage === 1" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Anterior</button>
                <template x-for="page in totalPages" :key="page">
                    <button @click="goToPage(page)"
                            :class="{'bg-white text-black': currentPage === page, 'bg-gray-700': currentPage !== page}"
                            class="px-3 py-1 rounded"
                            x-text="page"></button>
                </template>
                <button @click="nextPage" :disabled="currentPage === totalPages" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Siguiente</button>
            </div>
        </div>
    
        <div x-show="modalOpen" x-cloak @click.away="closeModal" class="fixed inset-0 bg-[#24317B] bg-opacity-80 flex justify-center items-center z-50">
            <div class="bg-black bg-opacity-40 fixed flex justify-center items-center w-full h-full">
                <div class="rounded-lg p-8 max-w-7xl w-full flex flex-wrap md:flex-nowrap items-center max-h-[700px]">
                    <a :href="modalUrl" target="_blank" class="relative w-full md:w-1/2 max-w-[500px] mx-auto block">
                        <img :src="modalImage" alt="" class="w-full h-auto rounded-[50px]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 m-auto w-16 h-16 text-white opacity-80 pointer-events-none" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </a>
                    <div class="text-white text-justify md:ml-8 mt-6 md:mt-0 w-full md:w-1/2">
                        <h4 x-text="modalTitle" class="text-[26px] max-w-[375px] text-left font-bold mb-4"></h4>
                        <p x-html="modalContent"></p>
                    </div>
                </div>
            </div>            
            <button @click="closeModal" class="absolute top-4 right-4 text-white text-5xl">&times;</button>
        </div>
      </div>

      <!-- Acordeón Item 8 -->
      <div x-data="accordionPagination({{ $proyectos->where('categoria', 'Hoteles')->values()->toJson() }})">
        <button 
            x-on:click="open = !open"
            class="w-full text-left p-4 bg-[#24317B] text-white rounded-[20px] focus:outline-none border-t-2 border-white flex">
            <div class="flex w-full items-center justify-between">
                <div class="flex items-center gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="34" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                        <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                        <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z"/>
                    </svg>                                                      
                    <span class="font-bold text-[22px]">Hoteles</span>
                </div>
                <svg width="16" height="26" viewBox="0 0 16 26" fill="none" xmlns="http://www.w3.org/2000/svg" :class="open ? 'rotate-[-90deg]' : ''" class="transition-transform duration-300">
                    <path d="M2.78687 2.94531L13.984 13.0544L2.78687 23.1635" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>         
            </div>
        </button>
      
        <div x-show="open" x-transition.duration.300ms class="overflow-hidden p-4 -mt-5 bg-[#24317B] text-black rounded-b-[20px] transition-all duration-300 ease-in-out">
            <div id="projects-grid" class="grid grid-cols-2 sm:grid-cols-4 gap-4 w-full max-w-7xl auto-rows-fr">
                <template x-for="proyecto in paginatedItems" :key="proyecto.id">
                    <div class="relative group flex flex-col items-center bg-[#dfdfdf] rounded-xl overflow-hidden">
                        <img :src="'/storage/' + proyecto.imagen"
                             alt=""
                             class="w-full aspect-square object-cover" />
                        <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-0 transition duration-300"></div>
                        <div @click="openModal('/storage/' + proyecto.imagen, proyecto.nombre_proyecto, proyecto.descripcion)"
                             class="absolute cursor-pointer inset-0 flex justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300"></div>
                        <div class="mt-2 text-center text-black font-bold text-[16px]" x-text="proyecto.nombre_proyecto"></div>
                    </div>
                </template>
            </div>
        
            <div class="flex justify-center mt-4 space-x-2 text-white">
                <button @click="prevPage" :disabled="currentPage === 1" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Anterior</button>
                <template x-for="page in totalPages" :key="page">
                    <button @click="goToPage(page)"
                            :class="{'bg-white text-black': currentPage === page, 'bg-gray-700': currentPage !== page}"
                            class="px-3 py-1 rounded"
                            x-text="page"></button>
                </template>
                <button @click="nextPage" :disabled="currentPage === totalPages" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Siguiente</button>
            </div>
        </div>
    
        <div x-show="modalOpen" x-cloak @click.away="closeModal" class="fixed inset-0 bg-[#24317B] bg-opacity-80 flex justify-center items-center z-50">
            <div class="bg-black bg-opacity-40 fixed flex justify-center items-center w-full h-full">
                <div class="rounded-lg p-8 max-w-7xl w-full flex flex-wrap md:flex-nowrap items-center max-h-[700px]">
                    <a :href="modalUrl" target="_blank" class="relative w-full md:w-1/2 max-w-[500px] mx-auto block">
                        <img :src="modalImage" alt="" class="w-full h-auto rounded-[50px]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 m-auto w-16 h-16 text-white opacity-80 pointer-events-none" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </a>
                    <div class="text-white text-justify md:ml-8 mt-6 md:mt-0 w-full md:w-1/2">
                        <h4 x-text="modalTitle" class="text-[26px] max-w-[375px] text-left font-bold mb-4"></h4>
                        <p x-html="modalContent"></p>
                    </div>
                </div>
            </div>            
            <button @click="closeModal" class="absolute top-4 right-4 text-white text-5xl">&times;</button>
        </div>
      </div>

      <!-- Acordeón Item 9 -->
      <div x-data="accordionPagination({{ $proyectos->where('categoria', 'Otros')->values()->toJson() }})">
        <button 
            x-on:click="open = !open"
            class="w-full text-left p-4 bg-[#24317B] text-white rounded-[20px] focus:outline-none border-t-2 border-white flex">
            <div class="flex w-full items-center justify-between">
                <div class="flex items-center gap-4">
                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29.7083 14.2083H24.4383C24.3377 13.4967 24.1516 12.7997 23.8842 12.1326L28.4399 9.49246C28.5922 9.41052 28.7264 9.29885 28.8347 9.16407C28.943 9.02928 29.0232 8.87412 29.0704 8.70779C29.1176 8.54146 29.1309 8.36734 29.1096 8.19576C29.0883 8.02418 29.0328 7.85862 28.9463 7.7089C28.8598 7.55919 28.7441 7.42836 28.6061 7.32418C28.4681 7.22 28.3106 7.14458 28.1429 7.10239C27.9753 7.06021 27.8008 7.05212 27.63 7.07861C27.4591 7.1051 27.2953 7.16562 27.1482 7.25658L22.5887 9.90062C22.1528 9.35001 21.6548 8.85157 21.1045 8.41521L23.7473 3.85433C23.9064 3.55861 23.9441 3.21253 23.8524 2.88947C23.7607 2.56641 23.5468 2.29178 23.256 2.12379C22.9652 1.9558 22.6204 1.90767 22.2947 1.9896C21.9691 2.07153 21.6881 2.27708 21.5114 2.56267L18.8674 7.11579C18.2003 6.84806 17.5034 6.662 16.7917 6.56167V1.29167C16.7917 0.949095 16.6556 0.620555 16.4133 0.37832C16.1711 0.136086 15.8426 0 15.5 0C15.1574 0 14.8289 0.136086 14.5867 0.37832C14.3444 0.620555 14.2083 0.949095 14.2083 1.29167V6.56167C13.4966 6.662 12.7997 6.84806 12.1326 7.11579L9.49246 2.56008C9.31577 2.27449 9.03481 2.06894 8.70913 1.98701C8.38345 1.90508 8.03867 1.95322 7.74788 2.1212C7.45709 2.28919 7.24316 2.56383 7.15145 2.88689C7.05973 3.20995 7.09744 3.55603 7.25658 3.85175L9.89933 8.41521C9.34909 8.85157 8.85109 9.35001 8.41521 9.90062L3.85562 7.25658C3.70859 7.16562 3.54478 7.1051 3.37392 7.07861C3.20305 7.05212 3.02861 7.06021 2.86093 7.10239C2.69326 7.14458 2.53575 7.22 2.39776 7.32418C2.25977 7.42836 2.1441 7.55919 2.05761 7.7089C1.97112 7.85862 1.91557 8.02418 1.89425 8.19576C1.87293 8.36734 1.88627 8.54146 1.93349 8.70779C1.98072 8.87412 2.06085 9.02928 2.16915 9.16407C2.27745 9.29885 2.4117 9.41052 2.56396 9.49246L7.11579 12.1326C6.84835 12.7997 6.6623 13.4967 6.56167 14.2083H1.29167C0.949095 14.2083 0.620555 14.3444 0.37832 14.5867C0.136086 14.8289 0 15.1574 0 15.5C0 15.8426 0.136086 16.1711 0.37832 16.4133C0.620555 16.6556 0.949095 16.7917 1.29167 16.7917H6.56167C6.6623 17.5033 6.84835 18.2003 7.11579 18.8674L2.56008 21.5075C2.40783 21.5895 2.27357 21.7011 2.16527 21.8359C2.05697 21.9707 1.97684 22.1259 1.92962 22.2922C1.8824 22.4585 1.86905 22.6327 1.89037 22.8042C1.91169 22.9758 1.96724 23.1414 2.05374 23.2911C2.14023 23.4408 2.2559 23.5716 2.39389 23.6758C2.53188 23.78 2.68938 23.8554 2.85706 23.8976C3.02474 23.9398 3.19918 23.9479 3.37004 23.9214C3.5409 23.8949 3.70471 23.8344 3.85175 23.7434L8.41133 21.0994C8.84721 21.65 9.34522 22.1484 9.89546 22.5848L7.25658 27.1457C7.09744 27.4414 7.05973 27.7875 7.15145 28.1105C7.24316 28.4336 7.45709 28.7082 7.74788 28.8762C8.03867 29.0442 8.38345 29.0923 8.70913 29.0104C9.03481 28.9285 9.31577 28.7229 9.49246 28.4373L12.1326 23.8816C12.7997 24.1497 13.4966 24.3366 14.2083 24.4383V29.7083C14.2083 30.0509 14.3444 30.3794 14.5867 30.6217C14.8289 30.8639 15.1574 31 15.5 31C15.8426 31 16.1711 30.8639 16.4133 30.6217C16.6556 30.3794 16.7917 30.0509 16.7917 29.7083V24.4383C17.5033 24.3374 18.2002 24.1514 18.8674 23.8842L21.5075 28.4399C21.6842 28.7255 21.9652 28.9311 22.2909 29.013C22.6165 29.0949 22.9613 29.0468 23.2521 28.8788C23.5429 28.7108 23.7568 28.4362 23.8486 28.1131C23.9403 27.7901 23.9026 27.444 23.7434 27.1482L21.1007 22.5874C21.6509 22.151 22.1489 21.6526 22.5848 21.102L27.1444 23.746C27.2914 23.837 27.4552 23.8975 27.6261 23.924C27.7969 23.9505 27.9714 23.9424 28.1391 23.9002C28.3067 23.858 28.4642 23.7826 28.6022 23.6784C28.7402 23.5742 28.8559 23.4434 28.9424 23.2937C29.0289 23.144 29.0844 22.9784 29.1058 22.8068C29.1271 22.6352 29.1137 22.4611 29.0665 22.2948C29.0193 22.1285 28.9391 21.9733 28.8309 21.8385C28.7226 21.7037 28.5883 21.5921 28.436 21.5101L23.8803 18.87C24.1493 18.2022 24.3367 17.5044 24.4383 16.7917H29.7083C30.0509 16.7917 30.3794 16.6556 30.6217 16.4133C30.8639 16.1711 31 15.8426 31 15.5C31 15.1574 30.8639 14.8289 30.6217 14.5867C30.3794 14.3444 30.0509 14.2083 29.7083 14.2083ZM15.5 21.9583C6.96467 21.6871 6.96725 9.31162 15.5 9.04167C24.0353 9.31292 24.0327 21.6884 15.5 21.9583Z" fill="white"/>
                    </svg>                                                                                                    
                    <span class="font-bold text-[22px]">Otros</span>
                </div>
                <svg width="16" height="26" viewBox="0 0 16 26" fill="none" xmlns="http://www.w3.org/2000/svg" :class="open ? 'rotate-[-90deg]' : ''" class="transition-transform duration-300">
                    <path d="M2.78687 2.94531L13.984 13.0544L2.78687 23.1635" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>         
            </div>
        </button>
      
        <div x-show="open" x-transition.duration.300ms class="overflow-hidden p-4 -mt-5 bg-[#24317B] text-black rounded-b-[20px] transition-all duration-300 ease-in-out">
            <div id="projects-grid" class="grid grid-cols-2 sm:grid-cols-4 gap-4 w-full max-w-7xl auto-rows-fr">
                <template x-for="proyecto in paginatedItems" :key="proyecto.id">
                    <div class="relative group flex flex-col items-center bg-[#dfdfdf] rounded-xl overflow-hidden">
                        <img :src="'/storage/' + proyecto.imagen"
                             alt=""
                             class="w-full aspect-square object-cover" />
                        <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-0 transition duration-300"></div>
                        <div @click="openModal('/storage/' + proyecto.imagen, proyecto.nombre_proyecto, proyecto.descripcion)"
                             class="absolute cursor-pointer inset-0 flex justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300"></div>
                        <div class="mt-2 text-center text-black font-bold text-[16px]" x-text="proyecto.nombre_proyecto"></div>
                    </div>
                </template>
            </div>
        
            <div class="flex justify-center mt-4 space-x-2 text-white">
                <button @click="prevPage" :disabled="currentPage === 1" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Anterior</button>
                <template x-for="page in totalPages" :key="page">
                    <button @click="goToPage(page)"
                            :class="{'bg-white text-black': currentPage === page, 'bg-gray-700': currentPage !== page}"
                            class="px-3 py-1 rounded"
                            x-text="page"></button>
                </template>
                <button @click="nextPage" :disabled="currentPage === totalPages" class="px-3 py-1 bg-gray-700 rounded disabled:opacity-50">Siguiente</button>
            </div>
        </div>
        
        <div x-show="modalOpen" x-cloak @click.away="closeModal" class="fixed inset-0 bg-[#24317B] bg-opacity-80 flex justify-center items-center z-50">
            <div class="bg-black bg-opacity-40 fixed flex justify-center items-center w-full h-full">
                <div class="rounded-lg p-8 max-w-7xl w-full flex flex-wrap md:flex-nowrap items-center max-h-[700px]">
                    <a :href="modalUrl" target="_blank" class="relative w-full md:w-1/2 max-w-[500px] mx-auto block">
                        <img :src="modalImage" alt="" class="w-full h-auto rounded-[50px]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 m-auto w-16 h-16 text-white opacity-80 pointer-events-none" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </a>
                    <div class="text-white text-justify md:ml-8 mt-6 md:mt-0 w-full md:w-1/2">
                        <h4 x-text="modalTitle" class="text-[26px] max-w-[375px] text-left font-bold mb-4"></h4>
                        <p x-html="modalContent"></p>
                    </div>
                </div>
            </div>            
            <button @click="closeModal" class="absolute top-4 right-4 text-white text-5xl">&times;</button>
        </div>
      </div>
    
    </div>
</div>

<script>
    function accordionPagination(items) {
        return {
            open: false,
            modalOpen: false,
            modalImage: '',
            modalTitle: '',
            modalContent: '',
            modalUrl: '',
            items: items,
            currentPage: 1,
            perPage: 8,

            get paginatedItems() {
                let start = (this.currentPage - 1) * this.perPage;
                return this.items.slice(start, start + this.perPage);
            },
            get totalPages() {
                return Math.ceil(this.items.length / this.perPage);
            },
            nextPage() {
                if (this.currentPage < this.totalPages) this.currentPage++;
            },
            prevPage() {
                if (this.currentPage > 1) this.currentPage--;
            },
            goToPage(page) {
                if (page >= 1 && page <= this.totalPages) this.currentPage = page;
            },
            openModal(imgSrc, title, content, url) {
                this.modalImage = imgSrc;
                this.modalTitle = title;
                this.modalContent = content;
                this.modalOpen = true;
                this.modalUrl = url;
            },
            closeModal() {
                this.modalOpen = false;
            }
        };
    }
</script>
