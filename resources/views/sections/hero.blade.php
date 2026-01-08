<div class="relative hero-sec" id="hero">
    <div class="relative">
        <!-- Contenido principal -->
        <div class="container mx-auto p-4 md:mt-11 mt-20 relative z-10">
            <h1 class="text-center text-[#FBED4F] 2xl:text-[250px] xl:text-[200px] lg:text-[160px] md:text-[120px] text-[60px] font-medium tracking-[0.15em]">
                SOLARIS
            </h1>
        </div>
    </div>
</div>

<div class="w-full flex flex-col md:flex-row h-full mt-[226px] mb-[20%]" id="about-section">
    <div class="w-full flex flex-col z-[111] md:ml-[5%] mb-14 md:mb-0">
        <h2 class="md:w-80 w-full md:pl-[5%] text-7xl md:text-10xl text-[#24317B] font-medium md:text-left text-center">
            Nuestra<br>Historia
        </h2>
        <div class="md:pl-[5%] w-full md:w-[503px] min-h-[300px] md:h-auto rounded-[10px]" style="background-color:rgba(255, 255, 255, 0.85)">
            <p class="text-[#24317B] md:text-left text-justify px-10 md:px-0 mt-5 mb-5 font-semibold md:max-w-[433px] tracking-tighter leading-[27px] lg:text-2xl text-base">
                Solaris, fundada en 1994 naciendo con el propósito de ofrecer soluciones de energía que mejoren la calidad
                de vida de sus clientes y contribuyan al desarrollo sostenible de Honduras. En 2018 el Ing. Iván Pastor con su
                socio Adolfo Montenegro compraron las acciones de Solaris, para renovar e innovar las soluciones de energía
                solar. A lo largo de tres décadas, Solaris ha crecido gracias a su dedicación y compromiso con la
                innovación, consolidándose como líder en el sector de energías renovables en el país.
            </p>
        </div>        
    </div>

    <div class="w-full z-[111] md:mt-0 mt-14 rounded-[20px]">
        <div class="md:pl-[5%] w-full md:w-[503px] h-[350px] rounded-[20px]" style="background-color:rgba(255, 255, 255, 0.85)">
            <p class="text-[#24317B] md:text-left text-justify px-10 py-4 md:px-0 lg:mt-[386px] md:mt-[460px] lg:mr-0 md:mr-10 font-semibold max-w-[433px] tracking-tighter leading-[23.5px] lg:text-xl text-base">
                Desde sus primeros pasos, Solaris ha sido pionera en la integración de energía limpia en diversas
                comunidades, comenzando con proyectos pequeños y creciendo para ofrecer soluciones a gran escala en toda
                Honduras. Con el tiempo, Solaris no solo ha creado un impacto positivo en el medio ambiente, sino también en
                las economías locales, generando empleos y promoviendo la sostenibilidad como un pilar fundamental de su
                actividad empresarial.
            </p>
        </div>
    </div>
</div>

<div id="dotlottie-container" class="fixed top-[60%] left-[30%] transform -translate-x-1/2 -translate-y-1/2 z-[-1] pointer-events-none">
  <dotlottie-player
    id="lottiePlayer"
    src="/images/PANEL12.lottie"
    background="transparent"
    style="width:150vw; height:5%;"
    loop
    autoplay>
  </dotlottie-player>
</div>

@section('scripts')
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lottieContainer = document.getElementById('dotlottie-container');
            const heroSection = document.getElementById('hero-section');
            const aboutSection = document.getElementById('about-section');
            const projectsSection = document.getElementById('projects-section');

            function isElementPartiallyInViewport(el) {
                const rect = el.getBoundingClientRect();
                const windowHeight = (window.innerHeight || document.documentElement.clientHeight);
                const windowWidth = (window.innerWidth || document.documentElement.clientWidth);

                // Check if the element is partially in the viewport
                const vertInView = (rect.top <= windowHeight) && ((rect.top + rect.height) >= 0);
                const horInView = (rect.left <= windowWidth) && ((rect.left + rect.width) >= 0);

                return (vertInView && horInView);
            }

            window.addEventListener('scroll', function() {
                if (isElementPartiallyInViewport(heroSection) || isElementPartiallyInViewport(aboutSection) || isElementPartiallyInViewport(projectsSection)) {
                    lottieContainer.style.display = 'block';
                } else {
                    lottieContainer.style.display = 'none';
                }
            });
        });
    </script>
@endsection
