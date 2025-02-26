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
