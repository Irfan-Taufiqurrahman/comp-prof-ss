<div data-spy="scroll" data-target=".fixed-top">

    <nav class="navbar fixed-top" id="mainNav">
        <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">
            <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline" href="/">
                <img src="images/PT.png" alt="alternative" class="h-10" />
            </a>

            <button class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden" type="button" data-toggle="offcanvas" @click="toggleDropdown">
                <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center" id="navbarsExampleDefault">
                <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                    <li>
                        <a class="nav-link page-scroll" href="/">
                            Beranda <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="#features">
                            Benefit
                        </a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="#details">
                            Produk
                        </a>
                    </li>

                    <li class="relative">
                        <button type="button" class="nav-link page-scroll focus:outline-none font-bold" id="dropdown-toggle">
                            Tracking
                        </button>

                        <div class="absolute right-0 w-40 mt-2 bg-white border rounded-md shadow-md p-2 hidden" id="dropdown-menu">
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                                Mobil
                            </a>
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                                Truk
                            </a>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="#reviewer">
                            Review
                        </a>
                    </li>

                    <li>
                        <a class="nav-link page-scroll" href="#footer">
                            Kontak Kami
                        </a>
                    </li>
                </ul>
            </div>  
            <!-- end of navbar-collapse -->
        </div>
        <!-- end of container -->
    </nav>
    <!-- end of navbar -->
</div>

<script>
    window.addEventListener("scroll", function() {
        var nav = document.getElementById("mainNav");
        if (window.scrollY > 0) {
            nav.classList.add("scrolled");
        } else {
            nav.classList.remove("scrolled");
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const dropdownToggle = document.getElementById('dropdown-toggle');
        const dropdownMenu = document.getElementById('dropdown-menu');

        dropdownToggle.addEventListener('mouseover', () => {
            dropdownMenu.classList.remove('hidden');
        });

        dropdownToggle.addEventListener('mouseleave', () => {
            setTimeout(() => {
                if (!dropdownMenu.matches(':hover')) {
                    dropdownMenu.classList.add('hidden');
                }
            }, 300);
        });

        dropdownMenu.addEventListener('mouseenter', () => {
            clearTimeout(dropdownMenu.dataset.timer);
        });

        dropdownMenu.addEventListener('mouseleave', () => {
            dropdownMenu.dataset.timer = setTimeout(() => {
                dropdownMenu.classList.add('hidden');
            }, 300);
        });

        // Toggle the dropdown menu when the "Tracking" button is clicked
        dropdownToggle.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    });
</script>