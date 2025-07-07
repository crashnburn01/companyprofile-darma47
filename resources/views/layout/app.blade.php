<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        .hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('img/heros-bg-section.jpg') }}') no-repeat center center;
            background-size: cover;
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="https://example.com/logo.png" alt="Logo PT Konstruksi Mandiri" class="h-10 w-10">
                <span class="ml-3 text-xl font-bold text-gray-700 hover:text-blue-600"><a href="{{ route('home') }}">CV DARMA 47</a></span>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="#home" class="text-gray-700 hover:text-blue-600">Beranda</a>
                <a href="#about" class="text-gray-700 hover:text-blue-600">Tentang</a>
                <a href="#services" class="text-gray-700 hover:text-blue-600">Layanan</a>
                <a href="#portfolio" class="text-gray-700 hover:text-blue-600">Portofolio</a>
                <a href="#kontak" class="text-gray-700 hover:text-blue-600">Kontak</a>
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

</body>
</html>
