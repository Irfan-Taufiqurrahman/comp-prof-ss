@include('Dashboard.Assets.head')

<body :class="{ 'modal-open': isModalOpen }">
    <div class="flex h-screen dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('Dashboard.Assets.sidebar')
        <div class="flex flex-col flex-1 w-full">
            @include('Dashboard.Assets.navbar')
            <main class="h-full overflow-y-auto" x-data="{ darkMode: false }">
                <div class="text-3xl text-center">
                    News
                </div>
                @include('Dashboard.product.create')

                <div class="text-center text-gray-800 dark:text-gray-200">

                    <!-- Add this inside the <body> tag of your Blade PHP file -->
                    <div class="container mx-auto mt-8">
                        <div>

                        </div>
                        <table id="example" class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Nama tipe</th>
                                    <th class="px-4 py-2">Judul Konten</th>
                                    <th class="px-4 py-2">Konten</th>
                                    <th class="px-4 py-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $item)
                                <tr>
                                    <td class="border px-4 py-2 dark:bg-gray-900">{{ $item->name_type }}</td>
                                    <td class="border px-4 py-2 dark:bg-gray-900">{{ $item->title_content }}</td>
                                    <td class="border px-4 py-2 dark:bg-gray-900">
                                        <img src="{{ asset('fotoProduct/'. $item->content) }}" alt="" style="width: 100px;">
                                    </td>
                                    <td class="border px-4 py-2 dark:bg-gray-900">
                                        <button>
                                            <form action="{{ route('products.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500">Hapus</button>
                                            </form>
                                        </button>

                                    </td>
                                </tr>

                                @endforeach
                                <!-- Add more rows if needed -->
                            </tbody>
                        </table>
                    </div>

                </div>
            </main>

        </div>
    </div>
    <div class="modal-overlay" x-show="isModalOpen"></div>


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
            Alpine.data('modal', () => ({
                isModalOpen: false,
                openModal() {
                    this.isModalOpen = true;
                },
                closeModal() {
                    this.isModalOpen = false;
                }
            }));
        });
    </script>
    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Add DataTables.js -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- Initialize DataTables -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <style>
        .modal-open {
            overflow: hidden;
        }

        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            z-index: 9999;
        }
    </style>
</body>

</html>