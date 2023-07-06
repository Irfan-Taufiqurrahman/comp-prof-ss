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

    @include('Dashboard.Assets.script')
</body>

</html>