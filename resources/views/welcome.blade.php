@extends('layout.app')

@section('title', 'Profile Company')

@section('content')
    {{-- Hero Section --}}
    <section id="home" class="hero-bg min-h-[80vh] flex items-center justify-center text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Membangun Masa Depan Bersama</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Terpercaya dan Mewujudkan proyek konstruksi impian anda</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('kontak') }}" class="bg-white text-black px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-500 hover:text-white transition-colors flex items-center justify-center space-x-2">Hubungi Kami</a>
                <a href="#kontak" class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-black transition-colors">Lebih Lanjut</a>
            </div>
        </div>
    </section>

    {{-- About Section --}}
        <section id="about" class="py-17 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:4xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
                    <p class="text-gray-600 max-w-5xl mx-auto text-lg"><b>CV. YAN ROLLE KONSTRUKSI</b> merupakan perusahaan yang bergerak di area eksekusi dan bergabung dengan Asosiasi ASPEKNAS. CV. YAN ROLLE KONSTRUKSI dan berpusat di Kab. Gowa, Indonesia,. CV. YAN ROLLE KONSTRUKSI terkenal dengan nama baik dalam menawarkan jasa dengan standar terbaik di area development.</p>
                </div>
            </div>
            <section id="stats" class="py-0 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg-px-8">
                    <div class="mt-16 bg-white rounded-2xl shadow-lg p-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap 8">

                            <div class="text-center">
                                <div class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">100+</div>
                                <div class="text-gray-600">Proyek Rampung</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">20+</div>
                                <div class="text-gray-600">Staff Profesional</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">15+</div>
                                <div class="text-gray-600">Tahun Pengalaman</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        {{-- Services Section --}}
        <section id="services" class="py-17 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:4xl font-bold text-gray-800 mb-4">Layanan Kami</h2>
                    <p class="text-gray-600 max-w-3xl mx-auto text-lg">CV. YAN ROLLE KONSTRUKSI menyediakan layanan pembangunan di berbagai sektor proyek, baik skala kecil maupun besar.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Konstruksi Gedung Kesehatan</h3>
                        <p class="text-gray-600">CV. YAN ROLLE KONSTRUKSI memiliki ijin kegiatan Konstruksi Gedung Kesehatan dengan kualifikasi Umum sesuai dengan KBLI 41015 yang terdaftar di LPJK Kementerian Pekerjaan Umum (PU).</p>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Konstruksi Gedung Pendidikan</h3>
                        <p class="text-gray-600">CV. YAN ROLLE KONSTRUKSI memiliki ijin kegiatan Konstruksi Gedung Pendidikan dengan kualifikasi Umum sesuai dengan KBLI 41016 yang disertifikasi LPJK Kementerian Pekerjaan Umum (PU).</p>
                    </div>

                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Konstruksi Gedung Penginapan</h3>
                        <p class="text-gray-600">CV. YAN ROLLE KONSTRUKSI memiliki ijin kegiatan Konstruksi Gedung Penginapan dengan kualifikasi Umum sesuai dengan KBLI 41017 yang terdaftar di LPJK Kementerian Pekerjaan Umum (PU).</p>
                    </div>

                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Konstruksi Gedung Lainnya</h3>
                        <p class="text-gray-600">CV. YAN ROLLE KONSTRUKSI memiliki ijin kegiatan Konstruksi Gedung Lainnya dengan kualifikasi Umum sesuai dengan KBLI 41019 yang mendapat lisensi dari LPJK Kementerian Pekerjaan Umum (PU).</p>
                    </div>

                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Bangunan Sipil Jalan</h3>
                        <p class="text-gray-600">CV. YAN ROLLE KONSTRUKSI memiliki ijin kegiatan Bangunan Sipil Jalan dengan kualifikasi Umum sesuai dengan KBLI 42101 yang disertifikasi LPJK Kementerian Pekerjaan Umum (PU).</p>
                    </div>

                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Konstruksi Jaringan Irigasi dan Drainase</h3>
                        <p class="text-gray-600">CV. YAN ROLLE KONSTRUKSI memiliki ijin kegiatan Konstruksi Jaringan Irigasi dan Drainase dengan kualifikasi Umum sesuai dengan KBLI 42201 yang mendapat lisensi dari LPJK Kementerian Pekerjaan Umum (PU).</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- FAQ Section --}}
        <section id="faq" class="py-17 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:4xl font-bold text-gray-800 mb-4">Frequently Asked Question</h2>
                    <p class="text-gray-600 max-w-3xl mx-auto text-lg">Berikut adalah beberapa pertanyaan yang sering diajukan oleh klien kami.</p>
                </div>
                <div class="max-w-4xl mx-auto">
                    <div class="space-y-4">
                        <div class="border border-gray-200 rounded-lg p-4 transition-all duration-200">
                            <button class="flex justify-between items-center w-full text-left font-medium">
                                <span>Apa jenis proyek yang biasa dikerjakan?</span>
                                <svg class="h-5 w-5 text-gray-500 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div class="faq-content mt-2 text-gray-600 overflow-hidden transition-all duration-500 ease-in-out">
                                Kami mengerjakan berbagai jenis proyek konstruksi termasuk gedung komersial, jembatan, dan infastruktur publik.
                            </div>
                        </div>
                    
                        <div class="border border-gray-200 rounded-lg p-4 transition-all duration-200">
                            <button class="flex justify-between items-center w-full text-left font-medium">
                                <span>Berapa lama waktu pengerjaan yang dibutuhkan?</span>
                                <svg class="h-5 w-5 text-gray-500 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div class="faq-content mt-2 text-gray-600 overflow-hidden transition-all duration-500 ease-in-out">
                                Waktu penyelesaian tergantung pada skala dan kompleksitas proyek. Kami akan memberikan estimasi setelah melakukan penilaian.
                            </div>
                        </div>
                    
                        <div class="border border-gray-200 rounded-lg p-4 transition-all duration-200">
                            <button class="flex justify-between items-center w-full text-left font-medium">
                                <span>Lorem Ipsum Dolor Sit Amet</span>
                                <svg class="h-5 w-5 text-gray-500 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div class="faq-content mt-2 text-gray-600 overflow-hidden transition-all duration-500 ease-in-out">
                                Lorem Ipsum Dolor Sit Amet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Kontak Section --}}
        <section id="kontak" class="py-17 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:4xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
                    <p class="text-gray-600 max-w-3xl mx-auto text-lg">Kami siap membantu Anda dengan proyek konstruksi Anda. Silakan hubungi kami untuk informasi lebih lanjut.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    {{-- Maps --}}
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Alamat Kantor</h2>
                        <div class="mb-4">
                             <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d248.3541058993796!2d119.44178007638538!3d-5.1573815922111494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMDknMjYuNSJTIDExOcKwMjYnMzAuOCJF!5e0!3m2!1sid!2sid!4v1751610775247!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <p class="text-gray-600">Perumahan Asoka, Jl. Boulevart, Makassar</p>
                    </div>
                    {{-- Form --}}
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md">
                        <form id="contact-form">
                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <label for="name" class="block text-sm font-medium">Nama Lengkap</label>
                                    <input type="text" id="name" name="name" class="mt-1 block w-full bg-white border border-gray-300 rounded-md py-2 px-3" placeholder="Masukkan nama Anda" required>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium">Email</label>
                                    <input type="email" id="email" name="email" class="mt-1 block w-full bg-white border border-gray-300 rounded-md py-2 px-3" placeholder="Masukkan email Anda" required>
                                </div>
                                <div>
                                    <label for="message" class="block text-sm font-medium">Pesan</label>
                                    <textarea id="message" name="message" rows="4" class="mt-1 block w-full bg-white border border-gray-300 rounded-md py-2 px-3" placeholder="Tulis pesan Anda" required></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="w-full bg-gray-500 text-white hover:bg-gray-400 hover:text-white font-bold py-2 px-4 rounded-md transition-colors">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tombol Kembali ke Atas -->
        <button 
            id="scrollTopBtn"
            onclick="scrollToTop()" 
            class="hidden fixed bottom-6 right-6 z-50 bg-gray-600 text-white p-3 rounded-full shadow-lg hover:bg-gray-700 transition"
            aria-label="Kembali ke Atas">
            <!-- Ikon panah atas (Heroicons) -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </button>

@endsection