@extends('layout.app')

@section('title', 'Profile Company')

@section('content')
    {{-- Hero Section --}}
    <section id="home" class="hero-bg min-h-[80vh] flex items-center justify-center text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Membangun Masa Depan Bersama</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Terpercaya dan Mewujudkan proyek konstruksi impian anda</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="" class="bg-white text-black px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-500 hover:text-white transition-colors flex items-center justify-center space-x-2">Hubungi Kami</a>
                <a href="" class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-black transition-colors">Lebih Lanjut</a>
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

        {{-- Section Kontak --}}
        <section id="kontak" class="py-17 bg-white">
            <div class="container mx-auto px-4">

            </div>
        </section>
@endsection