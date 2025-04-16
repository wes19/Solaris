<!--<div class="h-[100vh] flex flex-col justify-center items-center bg-black xl:px-0 lg:px-10">
    <div id="projects-grid" class="grid grid-cols-4  grid-rows-2 gap-2 w-full  min-h-[600px] max-w-7xl">
        @foreach ($proyectos as $proyecto)
            <div class="relative group">
                <img src="{{ asset('storage/' . $proyecto->imagen) }}" alt="{{ $proyecto->nombre_proyecto }}" class="w-full h-full object-cover max-w-[310px] max-h-[310px]" />
                <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-0 transition duration-300 "></div>
                <div onclick="openModal('{{ asset('storage/' . $proyecto->imagen) }}', '{{ $proyecto->nombre_proyecto }}', `{!! htmlspecialchars($proyecto->descripcion, ENT_QUOTES, 'UTF-8') !!}`)" class="absolute cursor-pointer inset-0 flex justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300">
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-4 flex space-x-2">
        <button class="px-4 py-2 bg-gray-800 text-white rounded-lg" onclick="prevPage()">Anterior</button>
        <div id="pagination" class="flex space-x-2"></div>
        <button class="px-4 py-2 bg-gray-800 text-white rounded-lg" onclick="nextPage()">Siguiente</button>
    </div>
</div>-->

<div class=" h-[200vh] flex flex-col justify-center relative">
    <div class=" h-full max-h-[950px] w-full bg-red-400">
        <div class=" bg-no-repeat bg-cover bg-center h-1/2" style="background-image: url('images/panel-future.webp');"></div>
        <div class=" bg-no-repeat bg-cover bg-bottom h-1/2" style="background-image: url('images/trabajador-C.webp');"></div>
    </div>
    <div class="flex pl-[62px] justify-center flex-col w-full max-w-[686px] h-full max-h-[686px] bg-[#d9d9d9] absolute top-[35%] left-[50%] transform -translate-x-1/2 -translate-y-1/2 ">
        <h3 class=" w-full mb-[66px] max-w-[215px] h-full max-h-[84px] text-5xl leading-[83%]">Visión
            de Futuro</h3>
        <p class="w-full max-w-[562px] h-full max-h-[280px] text-justify text-xl leading-[111%]">
            Con una base sólida de más de 30 años de experiencia, Solaris se proyecta como un referente en la transición hacia una economía de energía limpia en Honduras y América Central. Nuestra visión es continuar innovando y expandiendo nuestras soluciones energéticas para atender las necesidades de una sociedad en constante crecimiento.
            <br><br>
            Solaris se compromete a seguir liderando el mercado de energías renovables en Honduras y a inspirar a otras empresas y personas a adoptar prácticas más sostenibles y responsables. Nuestro objetivo es construir un futuro en el que cada hogar y negocio pueda acceder a energía limpia, asequible y eficiente, contribuyendo así a un mundo más sostenible.
        </p>
    </div>

</div>
</div>

<style>
    .relative input:focus+label,
    .relative input:not(:placeholder-shown)+label {
        top: -0.5rem;
        left: 20;
        font-size: 0.75rem;
        color: #24317B;
    }

    .relative input:focus,
    .relative input:not(:placeholder-shown) {
        border-bottom-color: #24317B;
    }
</style>


<div class="h-[120vh] bg-[#FBED4F] flex flex-col justify-around items-center">
    <h3
        class="lg:text-[116px] w-full pl-[81px] uppercase text-[#24317B] font-extrabold  mt-14 mb-4 leading-[100%] tracking-[-6.96px]">
        Contáctanos</h3>
    <div class="mt-[-10%]  w-full pl-[81px]">
        <svg xmlns="http://www.w3.org/2000/svg" width="135" height="74" viewBox="0 0 135 74" fill="none">
            <g clip-path="url(#clip0_14_1518)">
                <path d="M66.4712 0L92.6148 26.0874H0V47.9126H92.6148L66.4712 74H97.9387L135 37L97.9387 0H66.4712Z"
                    fill="#24317B" />
            </g>
            <defs>
                <clipPath id="clip0_14_1518">
                    <rect width="135" height="74" fill="white" />
                </clipPath>
            </defs>
        </svg>
    </div>
    <form method="POST" class="w-full ">
        @csrf
        <div class="mb-4 relative">
            <input type="text" name="name" id="name" required
                class="w-full px-3 py-4 border-b-2 bg-[#FBED4F] border-black focus:outline-none focus:border-gray-500 placeholder-transparent"
                placeholder="Nombre">
            <label for="name"
                class="absolute uppercase text-[34px] left-10 top-2 text-black pointer-events-none transition-all duration-200 ease-in-out">Nombre</label>
        </div>
        <div class="mb-4 relative">
            <input type="email" name="email" id="email" required
                class="w-full px-3 py-4 border-b-2 bg-[#FBED4F] border-black focus:outline-none focus:border-gray-500 placeholder-transparent"
                placeholder="Email">
            <label for="email"
                class="absolute uppercase text-[34px] left-10 top-2 text-black pointer-events-none transition-all duration-200 ease-in-out">E-mail</label>
        </div>
        <div class="mb-4 relative">
            <input type="tel" name="phone" id="phone" required
                class="w-full px-3 py-4 border-b-2 bg-[#FBED4F] border-black focus:outline-none focus:border-gray-500 placeholder-transparent"
                placeholder="Teléfono">
            <label for="phone"
                class="absolute uppercase text-[34px] left-10 top-2 text-black pointer-events-none transition-all duration-200 ease-in-out">Teléfono</label>
        </div>
        <div class="mb-4 relative">
            <input type="text" name="subject" id="subject" required
                class="w-full px-3 py-4 border-b-2 bg-[#FBED4F] border-black focus:outline-none focus:border-gray-500 placeholder-transparent"
                placeholder="Asunto">
            <label for="subject"
                class="absolute uppercase text-[34px] left-10 top-2 text-black pointer-events-none transition-all duration-200 ease-in-out">Asunto</label>
        </div>
        <button type="submit"
            class="w-1/4 bg-[#24317B] ml-10 text-white py-2 px-4 rounded-lg hover:bg-[#1a255a] transition duration-200 mt-5">Enviar</button>
    </form>
</div>


@extends('layouts.app')

@section('head')
    <meta http-equiv="refresh" content="5;url={{ url('/') }}">
@endsection

<div class="flex items-center justify-center h-screen bg-green-600 text-white text-center px-4">
    <div>
        <i class="fas fa-check text-6xl mb-6"></i>
        <h1 class="text-3xl font-bold mb-4">¡Gracias por ponerte en contacto con nosotros!</h1>
        <p class="text-lg">En breve serás redirigido a la página de inicio.<br>Un asesor se comunicará contigo lo antes posible.</p>
    </div>
</div>

<div class="flex justify-center">
    {!! NoCaptcha::display() !!}
</div>
@if ($errors->has('g-recaptcha-response'))
    <p class="text-red-600 text-sm text-center mt-1">
      <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </p>
@endif


<svg width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M33.0863 6.37866L22.0253 1.10916C19.5905 -0.345187 16.56 -0.370992 14.1008 1.04166L2.91533 6.37866C2.87335 6.39968 2.82983 6.42218 2.78933 6.44616C0.134888 7.96392 -0.786628 11.3462 0.731138 14.0006C1.24561 14.9005 2.00239 15.6378 2.91533 16.1287L6.00085 17.5987V24.9487C6.00268 28.2353 8.14123 31.1389 11.2794 32.1157C13.4632 32.7475 15.7276 33.0568 18.0009 33.0337C20.2738 33.0592 22.5382 32.7525 24.7224 32.1232C27.8605 31.1465 29.9991 28.2428 30.0009 24.9562V17.5957L33.0009 16.1617V28.5336C33.0009 29.3621 33.6725 30.0336 34.5009 30.0336C35.3293 30.0336 36.0009 29.3621 36.0009 28.5336V10.5336C36.0109 8.77223 34.6201 7.14506 33.0863 6.37866ZM27.0008 24.9562C27.0016 26.9221 25.7261 28.661 23.8508 29.2507C21.9491 29.7941 19.9785 30.0578 18.0008 30.0337C16.0231 30.0578 14.0525 29.7941 12.1508 29.2507C10.2755 28.6609 9.00003 26.9221 9.0008 24.9562V19.0282L13.9763 21.3982C15.204 22.1272 16.6061 22.5103 18.0338 22.5067C19.3928 22.5164 20.729 22.1566 21.8994 21.4657L27.0008 19.0282V24.9562ZM31.8008 13.4212L20.4878 18.8212C18.9104 19.7396 16.9553 19.7136 15.4028 18.7537L4.3343 13.4887C3.10053 12.8234 2.6397 11.2839 3.305 10.0502C3.53 9.63293 3.86736 9.28706 4.27883 9.05166L15.5213 3.68168C17.0992 2.76523 19.0533 2.79117 20.6063 3.74918L31.6673 9.01868C32.4807 9.47037 32.9897 10.3233 33.0008 11.2537C33.0023 12.135 32.5485 12.9546 31.8008 13.4212Z" fill="white"/>
</svg>  

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