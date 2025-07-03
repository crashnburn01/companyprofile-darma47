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
                <span class="ml-3 text-xl font-bold text-gray-700 hover:text-blue-600">CV Darma 47</span>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="#home" class="text-gray-700 hover:text-blue-600">Beranda</a>
                <a href="#about" class="text-gray-700 hover:text-blue-600">Tentang</a>
                <a href="#services" class="text-gray-700 hover:text-blue-600">Layanan</a>
                <a href="#portfolio" class="text-gray-700 hover:text-blue-600">Portofolio</a>
                <a href="#team" class="text-gray-700 hover:text-blue-600">Tim</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600">Kontak</a>
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

</body>
</html>
