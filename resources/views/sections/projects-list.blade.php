<div class="h-[100vh] flex flex-col justify-center items-center bg-black xl:px-0 lg:px-10">
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
        <!-- <button class="px-4 py-2 bg-gray-800 text-white rounded-lg" onclick="prevPage()">Anterior</button> -->
        <div id="pagination" class="flex space-x-2"></div>
        <!-- <button class="px-4 py-2 bg-gray-800 text-white rounded-lg" onclick="nextPage()">Siguiente</button> -->
    </div>
</div>

<!-- Modal -->
<div id="modal" onclick="closeModal()" class="fixed inset-0 bg-[#24317B] bg-opacity-60 flex justify-center items-center hidden">
    <div class="bg-black bg-opacity-40 fixed flex justify-center items-center w-full h-full">
        <div class="rounded-lg p-8 max-w-7xl w-full flex h-full max-h-[527px]">
            <img id="modalImage" src="" alt="" class="w-1/2 h-auto rounded-[50px]">
            <div class="text-white text-justify ml-8">
                <h4 id="modalTitle" class="text-[26px] max-w-[375px] text-left max-h-[677px] font-bold mb-4"></h4>
                <p id="modalContent"></p>
            </div>
        </div>
    </div>
    <button onclick="closeModal()" class="absolute top-4 right-4 text-white text-2xl">&times;</button>
</div>

<script>
    let currentPage = 1;
    const postsPerPage = 8;
    const totalPosts = {{ $proyectos->count() }};
    const totalPages = Math.ceil(totalPosts / postsPerPage);
    console.log("Total proyectos: ", {{ $proyectos->count() }});

    function showPage(page) {
        const start = (page - 1) * postsPerPage;
        const end = start + postsPerPage;
        const posts = document.querySelectorAll('.group');
        posts.forEach((post, index) => {
            if (index >= start && index < end) {
                post.style.display = 'block';
            } else {
                post.style.display = 'none';
            }
        });
        updatePagination();
    }

    function prevPage() {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
        }
    }

    function nextPage() {
        if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
        }
    }

    function openModal(image, title, content) {
        document.getElementById('modalImage').src = image;
        document.getElementById('modalTitle').innerText = title;
        document.getElementById('modalContent').innerHTML = content;
        document.getElementById('modal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }

    function updatePagination() {
        const pagination = document.getElementById('pagination');
        pagination.innerHTML = '';
        for (let i = 1; i <= totalPages; i++) {
            const pageButton = document.createElement('button');
            pageButton.className = 'px-4 py-2 bg-gray-800 text-white rounded-lg';
            pageButton.innerText = i;
            pageButton.onclick = () => {
                currentPage = i;
                showPage(currentPage);
            };
            if (i === currentPage) {
                pageButton.classList.add('bg-blue-500');
            }
            pagination.appendChild(pageButton);
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        showPage(currentPage);
    });
</script>