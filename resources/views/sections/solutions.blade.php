
<div id="soluciones" class="flex flex-col lg:flex-row min-h-screen w-full bg-[#FFFFFF]">
    <!-- Panel izquierdo -->
    <div class="w-full lg:w-[30%] flex flex-col items-center justify-center p-6">
        <h2 id="productos-soluciones-2" class="text-[24px] text-[#24317B] font-bold text-center mb-4 uppercase lg:hidden block">
            Productos y Soluciones
        </h2>
        <div class="bg-black p-5 rounded-[2px] w-full">
            <ul class="text-white text-[18px] leading-[34px] font-normal space-y-2">
                @php
                    $items = [
                        "Instalación de Sistemas de Autoconsumo",
                        "Instalación de Sistemas de Respaldo",
                        "Instalación de Sistemas Aislados",
                        "Sistemas Híbridos",
                        "Instalación de Sistemas de Bombeo Solar",
                        "Sistemas de Refrigeración Solar",
                        "Instalación de Sistemas Termosolar",
                        "Climatización Solar de Piscinas",
                        "Soluciones de Eficiencia Energética",
                        "Mantenimiento Preventivo",
                        "Mantenimiento Correctivo",
                        "Respuestos"
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

    <!-- Panel derecho -->
    <div id="productos-soluciones" class="w-full lg:w-[70%] flex items-center">
        <div class="flex flex-col px-6 sm:px-10 py-12">
            <h1 class="uppercase text-[42px] sm:text-[64px] lg:text-[96px] leading-[86%] font-extrabold text-[#24317B] text-center lg:text-left">
                Productos<br>y Soluciones
            </h1>
            <p class="text-[#24317B] text-[16px] sm:text-[20px] lg:text-[24px] font-normal leading-[150%] mt-8 lg:mt-16 text-justify lg:text-left lg:mr-48">
                Solaris ofrece una gama completa de soluciones energéticas, que incluye la instalación de sistemas de paneles solares para hogares, empresas e industrias.
                Nuestros servicios abarcan desde diseños de ingeniería, estudios de factibilidad, Suministro e instalación, monitoreo y mantenimiento. Cada solución es adaptada a las necesidades del cliente, asegurando el más rápido retorno sobre la inversión.
                <br><br>
                Además, Solaris brinda servicios de asesoría y consultoría en proyectos de energía renovable, ayudando a organizaciones a transitar hacia prácticas más verdes y sostenibles. Nuestros clientes confían en nuestra experiencia y dedicación para implementar soluciones energéticas que no solo les generen ahorro, sino que también contribuyan al bienestar ambiental.
            </p>
        </div>
    </div>
</div>


    @php
    $modales = [
        [
            'titulo' => 'Instalación de Sistemas de Autoconsumo',
            'descripcion' => 'Aprovecha la energía del sol para reducir tu dependencia de la red eléctrica con un sistema de autoconsumo solar. Diseñamos soluciones personalizadas que permiten generar y utilizar tu propia electricidad en tiempo real, optimizando la producción fotovoltaica para maximizar el ahorro en el consumo energético. Con nuestros sistemas, puedes asegurar un suministro estable de energía durante el día y reducir considerablemente tu factura eléctrica.',
            'imagen' => 'sistemas-autoconsumo.webp'
        ],
        [
            'titulo' => 'Instalación de Sistemas de Respaldo',
            'descripcion' => 'Garantizar el suministro eléctrico en caso de apagones con nuestros sistemas de respaldo, diseñados para proporcionar energía confiable en hogares, empresas e industrias. Implementamos soluciones con baterías de gel, litio y de ácido-plomo de las mejores marcas, combinadas con inversores de alta eficiencia. Estos sistemas permiten mantener operativos equipos esenciales, optimizando el uso de la energía almacenada y brindando seguridad energética en situaciones críticas.',
            'imagen' => 'sistemas-respaldo.webp'
        ],
        [
            'titulo' => 'Instalación de Sistemas Aislados',
            'descripcion' => 'Diseñamos e instalamos sistemas solares aislados ideales para ubicaciones sin acceso a la red eléctrica. Estos sistemas permiten la generación y almacenamiento de energía mediante paneles solares y baterías, proporcionando una fuente confiable y sostenible de electricidad en zonas remotas.',
            'imagen' => 'sistemas-aislados.webp'
        ],
        [
            'titulo' => 'Sistemas Híbridos',
            'descripcion' => 'Nuestros sistemas híbridos combinan un sistema de autoconsumo con almacenamiento en baterías para garantizar energía de respaldo en caso de cortes eléctricos. Estos sistemas permiten aprovechar al máximo la generación solar durante el día y almacenar el excedente en baterías para su uso en la noche o en situaciones de emergencia. Ideales para hogares, negocios e industrias que buscan reducir costos y asegurar un suministro energético ininterrumpido.',
            'imagen' => 'sistemas-hibridos.webp'
        ],
        [
            'titulo' => 'Instalación de Sistemas de Bombeo Solar',
            'descripcion' => 'Implementamos sistemas de bombeo solar para el abastecimiento de agua en zonas rurales, agrícolas e industriales. Estos sistemas eliminan la necesidad de combustibles fósiles o electricidad convencional, asegurando un suministro eficiente, sostenible y de bajo mantenimiento.',
            'imagen' => 'sistemas-bombeo.webp'
        ],
        [
            'titulo' => 'Sistema de Refrigeración Solar',
            'descripcion' => 'Nuestros sistemas de refrigeración solar están diseñados para brindar soluciones eficientes y sostenibles en zonas con acceso limitado a energía eléctrica o con altas necesidades de ahorro energético. Utilizan la energía solar para alimentar refrigeradoras, congeladores u otros equipos de conservación, lo que los convierte en una opción ideal para hogares rurales, clínicas, negocios y proyectos agrícolas.

            Gracias a su tecnología de bajo consumo y su compatibilidad con paneles solares, estos sistemas permiten mantener alimentos y productos perecederos en condiciones óptimas, sin depender de la red eléctrica tradicional. Además, contribuyen significativamente a la reducción de costos operativos y al cuidado del medio ambiente.

            Ya sea para uso doméstico o comercial, la refrigeración solar representa una alternativa confiable, duradera y alineada con un futuro más limpio y sustentable. Consulta con nosotros para conocer el sistema ideal para tu necesidad.',
            'imagen' => 'sistemas-refrigeracion.webp'
        ],
        [
            'titulo' => 'Instalación de Sistemas Termosolar',
            'descripcion' => 'Aprovechamos la energía solar para generar agua caliente de manera eficiente mediante Sistema de Termosifón. Estos sistemas son ideales para hogares, hoteles, hospitales e industrias, reduciendo la dependencia de combustibles fósiles y disminuyendo los costos energéticos.',
            'imagen' => 'sistemas-termicos.webp'
        ],
        [
            'titulo' => 'Climatización Solar de Piscinas',
            'descripcion' => 'Implementamos sistemas de climatización solar para piscinas mediante colectores solares de alto rendimiento. Estos dispositivos captan la radiación solar y la transfieren al agua, elevando su temperatura de manera eficiente y sostenible. Nuestros colectores están diseñados con materiales resistentes a la corrosión y garantizan una climatización constante sin consumo eléctrico adicional. Este sistema es ideal para piscinas residenciales, hoteles y clubes deportivos, reduciendo significativamente los costos operativos y la huella de carbono.',
            'imagen' => 'climatizacion-solar.webp'
        ],
        [
            'titulo' => 'Soluciones de Eficiencia Energética',
            'descripcion' => 'Optimizamos el consumo eléctrico de tu hogar o negocio mediante la implementación de tecnologías avanzadas que reducen el desperdicio energético y maximizan el ahorro. Ofrecemos auditorías energéticas, modernización de sistemas de iluminación, instalación de dispositivos de control inteligente y asesoría en la reducción de costos operativos.',
            'imagen' => 'soluciones-eficiencia.webp'
        ],
        [
            'titulo' => 'Mantenimiento Preventivo',
            'descripcion' => 'Brindamos servicios de mantenimiento preventivo para sistemas solares, asegurando su funcionamiento óptimo y prolongando su vida útil. Realizamos inspecciones técnicas, limpieza de paneles solares, verificación de conexiones eléctricas, revisión de baterías e inversores, y pruebas de eficiencia energética para garantizar el mejor rendimiento de cada instalación.',
            'imagen' => 'mantenimiento-preventivo.webp'
        ],
        [
            'titulo' => 'Mantenimiento Correctivo',
            'descripcion' => 'Ofrecemos mantenimiento correctivo para solucionar fallas o averías en sistemas solares, garantizando su pronta recuperación y funcionamiento óptimo. Nuestro equipo técnico diagnostica y repara problemas en paneles solares, baterías, inversores, controladores y demás componentes, asegurando la continuidad del suministro energético.',
            'imagen' => 'mantenimiento-correctivo.webp'
        ],
        [
            'titulo' => 'Respuestos',
            'descripcion' => 'Proximamente...',
            'imagen' => ''
        ],

    ];
    @endphp

@foreach($modales as $index => $modal)
    <div id="modal-{{ $index }}" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center sm:justify-end">
        <div class="bg-white p-6 rounded-lg w-[85%] sm:w-[50%] max-w-[700px] relative sm:mr-40 flex flex-col gap-4">
            <button class="absolute top-2 right-4 text-gray-700 text-2xl font-bold" onclick="closeModal({{ $index }})">&times;</button>

            <div class="w-full text-center">
                <h2 class="text-[32px] sm:text-[40px] text-[#24317B] font-bold leading-[36px]">
                    {{ $modal['titulo'] }}
                </h2>
            </div>

            <div class="flex flex-col sm:flex-row gap-4">
                <div class="w-full sm:w-1/2 p-1">
                    <img src="{{ asset('images/' . $modal['imagen']) }}" alt="{{ $modal['titulo'] }}" class="rounded-lg w-full h-auto">
                </div>

                <div class="w-full sm:w-1/2 flex flex-col justify-between">
                    <div class="overflow-y-auto max-h-[250px] sm:max-h-[300px] pr-2">
                        <p class="text-gray-700 text-[14px] sm:text-[16px] font-normal leading-[28px] sm:leading-[32px]">
                            {!! nl2br(e($modal['descripcion'])) !!}
                        </p>
                    </div>
                    <a href="https://solarismarkethn.com/" target="_blank" rel="noopener noreferrer"
                       class="bg-[#66944D] text-[14px] sm:text-[16px] font-semibold uppercase self-start text-white px-5 py-2 rounded-[8px] mt-4 sm:mt-0">
                       Cotizar
                    </a>
                </div>
            </div>
        </div>
    </div>
@endforeach



</div>

<script>
    function openModal(index) {
        document.getElementById('productos-soluciones').classList.add('hidden');
        document.getElementById(`modal-${index}`).classList.remove('hidden');
        document.getElementById('productos-soluciones-2').classList.remove('hidden');
    }

    function closeModal(index) {
        document.getElementById('productos-soluciones').classList.remove('hidden');
        document.getElementById(`modal-${index}`).classList.add('hidden');
        document.getElementById('productos-soluciones-2').classList.add('hidden');
    }

    window.addEventListener('click', function(e) {
        for (let i = 0; i < 11; i++) {
            const modal = document.getElementById(`modal-${i}`);
            if (modal && !modal.classList.contains('hidden') && e.target === modal) {
                modal.classList.add('hidden');
                document.getElementById('productos-soluciones').classList.remove('hidden');
                document.getElementById('productos-soluciones-2').classList.add('hidden');
            }
        }
    });
</script>
