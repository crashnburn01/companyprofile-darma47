<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <style>
        .hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('img/heros-bg-section.jpg') }}') no-repeat center center;
            background-size: cover;
        }
    </style>
</head>
<body class="font-sans bg-gray-50">

    <div id="preloader">
        <div class="three-body">
            <div class="three-body__dot"></div>
            <div class="three-body__dot"></div>
            <div class="three-body__dot"></div>
        </div>
    </div>

    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="https://example.com/logo.png" alt="Logo PT Konstruksi Mandiri" class="h-10 w-10">
                <span class="ml-3 text-xl font-bold text-gray-700 hover:text-gray-500 transition-colors"><a href="{{ route('home') }}">CV DARMA 47</a></span>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-gray-500 transition-colors">Beranda</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-gray-500 transition-colors">Tentang</a>
                <a href="{{ route('galeri') }}" class="text-gray-700 hover:text-gray-500 transition-colors">Galeri</a>
                <a href="{{ route('kontak') }}" class="text-gray-700 hover:text-gray-500 transition-colors">Kontak</a>
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-500 transition-colors">Tes</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} CV. Darma 47. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>
        $(document).ready(function(){
            // Pilih semua link yang href-nya dimulai dengan '#'
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.hash); // Dapatkan elemen target dari hash
                if( target.length ) {
                    event.preventDefault(); // Mencegah perilaku default

                    // Animasi scroll
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top // Scroll ke posisi atas elemen target
                    }, 800); // Durasi animasi dalam milidetik (1000ms = 1 detik)
                }
            });
        });
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            const preloader = document.getElementById('preloader');
            preloader.classList.add('hidden');
        }, 800); // Hilang setelah 0.3 detik DOM siap
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        const faqItems = document.querySelectorAll('#faq [class*="border"]');

        faqItems.forEach(item => {
            const button = item.querySelector('button');
            // Gunakan kelas baru 'faq-content' untuk seleksi yang lebih spesifik
            const content = item.querySelector('.faq-content'); 
            const icon = button.querySelector('svg');

            // Inisialisasi awal: pastikan semua konten tersembunyi
            // Set max-height ke '0px' secara langsung untuk transisi yang benar
            content.style.maxHeight = '0px';
            content.classList.add('opacity-0'); // Pastikan opacity juga 0

            button.addEventListener('click', () => {
                if (content.style.maxHeight === '0px' || content.style.maxHeight === '') {
                    // Jika tersembunyi, tampilkan
                    content.style.maxHeight = content.scrollHeight + 'px'; // Set max-height ke tinggi sebenarnya
                    content.classList.remove('opacity-0');
                    content.classList.add('opacity-100');
                } else {
                    // Jika terlihat, sembunyikan
                    content.style.maxHeight = '0px'; // Kembali ke 0 untuk transisi menutup
                    content.classList.remove('opacity-100');
                    content.classList.add('opacity-0');
                    // Tidak perlu setTimeout untuk menambahkan max-h-0 di sini karena kita sudah mengatur '0px'
                    // Elemen tidak akan memakan ruang karena max-height: 0
                }

                // Toggle kelas untuk memutar ikon panah
                icon.classList.toggle('rotate-180');
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.zoom-gallery-item').magnificPopup({
            type: 'image', // Menentukan tipe konten adalah gambar
            closeOnContentClick: true, // Menutup pop-up saat mengklik gambar
            mainClass: 'mfp-img-mobile', // Kelas CSS tambahan untuk styling mobile
            image: {
                verticalFit: true // Gambar akan secara otomatis menyesuaikan ukuran vertikal
            },
            gallery: {
                enabled: false // Set ke true jika Anda ingin membuat galeri yang bisa dinavigasi
            }
        });
    });
</script>

<script>
    const scrollTopBtn = document.getElementById("scrollTopBtn");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            scrollTopBtn.classList.remove("hidden");
        } else {
            scrollTopBtn.classList.add("hidden");
        }
    });

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>

</body>
</html>
