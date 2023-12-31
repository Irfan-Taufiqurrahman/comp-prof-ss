@include('Asset.head')

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Add your loading page section -->
    <section id="loading-screen" class="loading-screen">
        <div class="containerrr">
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
            <span class="loading">Loading...</span>
        </div>
    </section>

    <!-- The rest of your layout content -->

    <!-- Navigation -->
    @include('Asset.Nav')
    <!-- end of navigation -->

    <!-- Header -->
    <header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
            <div class="mb-16 lg:mt-22 xl:mt-22 xl:mr-12">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-green-200 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                            <pattern id="1d4040f3-9f3e-4ac7-b117-7d4009658ced" x="0" y="0" width=".135" height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#1d4040f3-9f3e-4ac7-b117-7d4009658ced)" width="52" height="24"></rect>
                    </svg>
                    <span class="h3-large mb-5 text-white">Ekspedisi</span>
                </span>
                <h1 class="max-w-lg mb-6 font-sans font-bold leading-none tracking-tigh text-3xl lg:text-5xl md:mx-auto text-black">Layanan Ekspedisi Terbaik</h1>
                <p class="p-large mb-8 text-white text-justify sm:text-base">PT. Samudera Suri menyediakan jasa pengiriman barang, jasa Ekspedisi cargo murah melalui laut, darat dan udara. Layanan pengiriman barang kami meliputi Surabaya ke seluruh wilayah Indonesia salah satunya adalah Wilayah Papua (Bintuni, Manokwari, Nabire, Bintuni, Fakfak). dengan cepat, aman dan bergaransi.</p>
                <!--<a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a>-->
            </div>
            <div class="xl:text-right">
                <img class="inline" src="images/Group 1.png" alt="alternative" />
            </div>
        </div>
        <!-- end of container -->
    </header>
    <!-- end of header -->
    <!-- end of header -->

    <!-- Introduction -->
    <div class="introduction">
        <div class="pt-4 pb-14 text-center">
            <div class="container px-4 sm:px-8 xl:px-4">
                <p class="mb-4 text-gray-800 sm:text-lg sm:text-black lg:text-3xl leading-10 lg:mx-auto">
                <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-3xl lg:text-4xl md:mx-auto">
                    <span class="relative inline-block">
                        <span class="relative">Benefit</span>
                    </span>
                    yang Akan Anda Dapatkan
                </h2>Saat Memilih Samudera Suri Sebagai Jasa Pengiriman Anda</p>
            </div> <!-- end of container -->
        </div>
    </div>
    <!-- end of introduction -->

    <!-- Features -->
    <div id="features" class="cards-1">
        <div class="container px-4 sm:px-8 xl:px-4">
            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="images/features-icon-1.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title font-bold">Waktu dan Pengiriman Cepat</h5>
                    <p class="mb-4">Pelayanan Ekspedisi jasa pengiriman barang cepat dan aman semua adalah prioritas kami</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="images/features-icon-2.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title font-bold">Real Time Tracking</h5>
                    <p class="mb-4">Anda Tidak Perlu Khawatir, jasa pengiriman kami mempunyai fitur real time tracking untuk mempermudah customer mengetahui posisi barang yang dikirim</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="images/features-icon-3.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title font-bold">Tarif Ekonomis</h5>
                    <p class="mb-4">Dengan layanan pengiriman yang kami berikan, akan menjamin bahwa tarif yang kami berikan adalah tarif termurah diantara jasa pengiriman lainnya</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="images/features-icon-4.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title font-bold">Customer Support</h5>
                    <p class="mb-4">Customer Support yang berpengalaman di bidang jasa kirim barang & jasa ekspedisi barang. Jadi anda tidak perlu khawatir untuk menggunakan jasa kami</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="images/features-icon-5.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title font-bold">Pengiriman Dijamin Aman</h5>
                    <p class="mb-4">Jaminan Keamanan terhadap barang yang anda kirim. Dapat berupa layanan packing barang serta layanan asuransi pengiriman barang. Sehingga saat anda mengirimkan barang anda bersama jasa pengiriman, dapat terjamin aman sampai tujuan</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="images/features-icon-6.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title font-bold">Menjaga Reputasi Bisnis Anda</h5>
                    <p class="mb-4">Dengan Proses pengiriman barang yang dilakukan dengan aman dan cepat, konsumen akan merasa puas.Hal ini akan berdampak pada reputasi bisnis anda, sehingga kepercayaan pelanggan menjadi meningkat dengan kepuasan yang didapat oleh konsumen</p>
                </div>
            </div>
            <!-- end of card -->

        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of features -->


    <!-- Statistics -->
    <section class="statistic w-full h-screen bg-no-repeat bg-cover bg-fixed" style="background-image: url('images/container.jpg');">
        <div class="counter">
            <div class="text-center text-4xl font-bold tracking-tight sm:text-5xl text-white pb-5">
                About Us
            </div>
            <div class="container px-4 sm:px-8 bg-white">
                <div class="card-container">
                    <div class="card-slider">
                        @foreach($products as $item)
                        <!-- Card -->
                        <div class="card p-4">
                            <div class="card-image">
                                <img src="{{ asset('fotoProduct/'. $item->content) }}" alt="" style="width: 400px; height: auto;">
                            </div>
                            <div class="card-body">
                                <p class="text-center text-lg tracking-tight sm:text-lg pt-4">{{ $item->title_content }}</p>
                            </div>
                        </div>
                        <!-- end of card -->
                        @endforeach
                    </div>
                </div> <!-- end of container -->
            </div> <!-- end of counter -->
        </div>
        <!-- end of statistics -->
    </section>

    @include('Components.team')

    <section class="bg-white" id="reviewer">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24">
            <h2 class="text-center text-4xl font-bold tracking-tight sm:text-5xl">
                Review yang Telah Merasakan Layanan Kami
            </h2>

        </div>
    </section>

    <!-- Testimonial -->
    @include('Asset.testimonial')
    <!-- Testimonial -->

    <!-- Accordions -->
    <div class="pb-14" id="pertanyaan">
        <div class="px-3">
            <p class="sm:text-xl font-bold text-center text-4xl text-blue-600">Pertanyaan yang Sering Ditanyakan</p>
        </div>
    </div>
    @include('Asset.accordions')
    <!-- end of Accordions -->


    <!-- Pelanggan Kami -->
    <div class="pb-14 pt-14 text-center bg-gradient-to-b from-white via-blue-100 to-white" id="pelanggan-kami">
        <div>
            <section class="dark:bg-gray-900">
                <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
                    <h2 class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl">Pelanggan Kami</h2>
                    <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-5 dark:text-gray-400 justify-center">
                        <a href="https://www.toyota.com/" class="flex justify-center items-center">
                            <img src="images/Toyota.png" alt="Toyota">
                        </a>
                        <a href="https://www.philips.co.id/id" class="flex justify-center items-center">
                            <img src="images/Philips_logo.png" alt="Philips">
                        </a>
                        <a href="https://www.mayoraindah.co.id/" class="flex justify-center items-center">
                            <img src="images/Logo-Mayora.png" alt="Mayora">
                        </a>
                        <a href="https://wingscorp.com/" class="flex justify-center items-center">
                            <img src="images/2560px-Wings_(Indonesian_company)_logo.svg.png" alt="Wings">
                        </a>
                        <a href="https://www.yamaha-motor.co.id/" class="flex justify-center items-center">
                            <img src="images/Yamaha-Logo.png" alt="Yamaha">
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- end Pelanggan Kami -->
    @include('Asset.map')

    <a href="https://wa.me/+6281330943131" class="floating" target="_blank" onclick="openWhatsAppChat()">
        <i class="fab fa-whatsapp fab-icon"></i>
    </a>

    <!-- Footer -->
    @include('Asset.footer')
    <!-- end of footer -->

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for JavaScript plugins -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>
    <script>
        var glide07 = new Glide('.glide-08', {
            type: 'slider',
            focusAt: 'center',
            perView: 1,
            autoplay: 3500,
            animationDuration: 700,
            gap: 0,
            classes: {
                activeNav: '[&>*]:bg-slate-700',
            },
        });
        glide07.mount();
    </script>
    <script>
        function openWhatsAppChat() {
            // Define your chat message
            var message = "Halo bapak Agung, Nama saya ... saya ingin mengetahui lebih detail tentang jasa perusahaan anda..";

            // Construct the WhatsApp URL with the chat message
            var whatsappUrl = "https://wa.me/+6281330943131?text=" + encodeURIComponent(message);

            // Open the WhatsApp chat window
            window.open(whatsappUrl, "_blank");
        }
    </script>

    <script>
        // Hide the loading screen once the page is fully loaded
        window.addEventListener('load', function() {
            var loadingScreen = document.getElementById('loading-screen');
            loadingScreen.style.display = 'none';
        });
    </script>


</body>