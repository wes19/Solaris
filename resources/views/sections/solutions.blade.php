


<div class="flex h-screen w-full">
    <!-- Contenedor Izquierdo (30%) -->
    <div class="w-[30%] bg-red-500 flex items-center justify-center p-6">
        <!-- Contenedor Interno Negro -->
        <div class="bg-black p-5 rounded-[2px] w-full">
            <ul class="text-white text-[18px] leading-[34px] font-normal space-y-2">
                @php
                    $items = [
                        "Soluciones de Eficiencia Energética",
                        "Climatización Solar de Piscinas",
                        "Instalación de Sistemas de Respaldo",
                        "Instalación de Sistemas Aislados",
                        "Instalación de Sistemas Térmicos",
                        "Instalación de Sistemas de Bombeo",
                        "Instalación de Sistemas de Autoconsumo",
                        "Sistemas Híbridos",
                        "Mantenimiento preventivo",
                        "Mantenimiento correctivo",
                        "Sistemas de refrigeración solar"
                    ];
                @endphp

                @foreach($items as $index => $item)
                    <li class="p-1 cursor-pointer hover:underline" onclick="openModal({{ $index }})">
                        ► {{ $item }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Contenedor Derecho (70%) -->
    <div id="contenedor-derecho" class="w-[70%] bg-blue-500 flex items-center">
        <div class="flex flex-col px-10 py-12">
            <h1 class="uppercase text-[120px] leading-[86%] font-extrabold text-white">
                Productos<br>y Soluciones
            </h1>
            <p class="text-[#24317B] text-[24px] font-normal leading-[103%] mt-16 text-left mr-48">
                Solaris ofrece una gama completa de soluciones energéticas, que incluye la instalación de sistemas de paneles solares para hogares, empresas e industrias.
                Nuestros servicios abarcan desde diseños de ingeniería, estudios de factibilidad, Suministro e instalación, monitoreo y mantenimiento. Cada solución es adaptada a las necesidades del cliente, asegurando el más rápido retorno sobre la inversión.
                <br><br>
                Además, Solaris brinda servicios de asesoría y consultoría en proyectos de energía renovable, ayudando a organizaciones a transitar hacia prácticas más verdes y sostenibles. Nuestros clientes confían en nuestra experiencia y dedicación para implementar soluciones energéticas que no solo les generen ahorro, sino que también contribuyan al bienestar ambiental.
            </p>
        </div>
    </div>

    <!-- Modales (uno por ítem) -->
    @foreach($items as $index => $item)
        <div id="modal-{{ $index }}" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-end">
            <div class="bg-white p-8 rounded-lg w-[60%] max-w-[800px] relative">
                <button class="absolute top-2 right-4 text-gray-700 text-2xl font-bold" onclick="closeModal({{ $index }})">&times;</button>
                <h2 class="text-2xl font-bold mb-4">{{ $item }}</h2>
                <p class="text-gray-700">Aquí podrías poner una descripción específica sobre "{{ $item }}".</p>
            </div>
        </div>
    @endforeach
</div>

<!-- Script Vanilla JS -->
<script>
    function openModal(index) {
        // Ocultar el contenedor derecho
        document.getElementById('contenedor-derecho').classList.add('hidden');
        
        // Mostrar el modal correspondiente
        document.getElementById(`modal-${index}`).classList.remove('hidden');
    }

    function closeModal(index) {
        // Mostrar el contenedor derecho de nuevo
        document.getElementById('contenedor-derecho').classList.remove('hidden');
        
        // Ocultar el modal correspondiente
        document.getElementById(`modal-${index}`).classList.add('hidden');
    }

    // Cerrar al hacer click fuera
    window.addEventListener('click', function(e) {
        for (let i = 0; i < 11; i++) {
            const modal = document.getElementById(`modal-${i}`);
            if (modal && !modal.classList.contains('hidden') && e.target === modal) {
                modal.classList.add('hidden');
                document.getElementById('contenedor-derecho').classList.remove('hidden'); // Mostrar el contenedor derecho
            }
        }
    });
</script>
