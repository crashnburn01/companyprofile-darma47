@extends('layout.app')

@section('title', 'Galeri')

@section('content')
    <section class="py-17 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Galeri Kegiatan</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">Berikut adalah beberapa kegiatan konstruksi yang telah kami lakukan</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">

                <div class="relative bg-gray-200 rounded-lg overflow-hidden shadow-md group">
                    <img src="{{ asset('img/galeri1.jpg') }}" alt="Pemasangan Pondasi Bangunan" class="w-full h-70 object-cover transform group-hover:scale-105 transition-transform duration-300">

                    {{-- Overlay untuk Icon Zoom --}}
                    <a href="{{ asset('img/galeri1.jpg') }}" class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center p-4 opacity-0 group-hover:opacity-80 transition-opacity duration-300 zoom-gallery-item" title="Pemasangan Pondasi Bangunan">
                        <i class="fas fa-search-plus text-white text-4xl transform group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                </div>

                <div class="relative bg-gray-200 rounded-lg overflow-hidden shadow-md group">
                    <img src="{{ asset('img/galeri1.jpg') }}" alt="Pemasangan Pondasi Bangunan" class="w-full h-70 object-cover transform group-hover:scale-105 transition-transform duration-300">

                    {{-- Overlay untuk Icon Zoom --}}
                    <a href="{{ asset('img/galeri1.jpg') }}" class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center p-4 opacity-0 group-hover:opacity-80 transition-opacity duration-300 zoom-gallery-item" title="Pemasangan Pondasi Bangunan">
                        <i class="fas fa-search-plus text-white text-4xl transform group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                </div>

                <div class="relative bg-gray-200 rounded-lg overflow-hidden shadow-md group">
                    <img src="{{ asset('img/galeri1.jpg') }}" alt="Pemasangan Pondasi Bangunan" class="w-full h-70 object-cover transform group-hover:scale-105 transition-transform duration-300">

                    {{-- Overlay untuk Icon Zoom --}}
                    <a href="{{ asset('img/galeri1.jpg') }}" class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center p-4 opacity-0 group-hover:opacity-80 transition-opacity duration-300 zoom-gallery-item" title="Pemasangan Pondasi Bangunan">
                        <i class="fas fa-search-plus text-white text-4xl transform group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection