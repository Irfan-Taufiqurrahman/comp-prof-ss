<body>
    <div class="text-center text-3xl text-gray-800 dark:text-gray-200">

        <!-- Modal toggle -->
        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            + Tambah Konten
        </button>


        <!-- Overlay -->
        <div id="overlay" class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 hidden"></div>

        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full flex items-center justify-center">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Buat Konten Baru</h3>
                        <form class="space-y-6" action="{{ route('Dashboard.product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="name_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis</label>
                                <input type="text" name="name_type" id="name_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Jenis Konten" required>
                            </div>
                            <div>
                                <label for="title_content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Konten</label>
                                <input type="text" name="title_content" id="title_content" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Judul Konten" required>
                            </div>
                            <div>
                                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Konten</label>
                                <input type="file" name="content" id="content" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambahkan</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    <script src="{{ asset('js/focus-trap.js') }}"></script>
    <script src="{{ asset('js/charts-bars.js') }}" defer></script>
    <script src="{{ asset('js/charts-lines.js') }}" defer></script>
    <script src="{{ asset('js/charts-pie.js') }}" defer></script>
    <script>
        // Alpine.js initialization
        document.addEventListener('alpine:init', () => {
            Alpine.data('sidebar', () => ({
                isSideMenuOpen: false,
                toggleSideMenu() {
                    this.isSideMenuOpen = !this.isSideMenuOpen;
                },
                closeSideMenu() {
                    this.isSideMenuOpen = false;
                }
            }));
        });
    </script>
    <!-- Place this code at the bottom of your Blade file, just before the closing </body> tag -->

    <script>
        // Show modal
        function showModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('hidden');
            modal.setAttribute('aria-hidden', 'false');
            document.getElementById('overlay').classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        // Hide modal
        function hideModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('hidden');
            modal.setAttribute('aria-hidden', 'true');
            document.getElementById('overlay').classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        // Modal toggle
        const modalToggleButtons = document.querySelectorAll('[data-modal-toggle]');
        modalToggleButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const targetModalId = button.getAttribute('data-modal-target');
                showModal(targetModalId);
            });
        });

        // Modal hide
        const modalHideButtons = document.querySelectorAll('[data-modal-hide]');
        modalHideButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const targetModalId = button.getAttribute('data-modal-hide');
                hideModal(targetModalId);
            });
        });
    </script>


</body>