@include('Dashboard.Assets.head')

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('Dashboard.Assets.sidebar')
        <div class="flex flex-col flex-1 w-full">
            @include('Dashboard.Assets.navbar')
            <main class="h-full overflow-y-auto">
                <div class="text-center text-3xl text-gray-800 dark:text-gray-200">
                    Testing
                </div>
            </main>
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
</body>

</html>