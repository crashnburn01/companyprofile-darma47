@extends('layout.app')

@section('title', 'About')

@section('content')
    <section id="hubungiKami" class="hero-bg min-h-[100vh] flex items-center justify-center text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Hubungi Kami</h2>
                <p class="max-w-3xl mx-auto text-lg">Kami siap membantu Anda dengan proyek konstruksi Anda. Silahkan hubungi kami untuk informasi lebih lanjut</p>
            </div>
            <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg text-gray-800 shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-4">Alamat Kantor</h3>
                        <div class="h-64 bg-gray-200 rounded-lg mb-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d248.3541058993796!2d119.44178007638538!3d-5.1573815922111494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMDknMjYuNSJTIDExOcKwMjYnMzAuOCJF!5e0!3m2!1sid!2sid!4v1751610775247!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="flex items-start mt-2">
                            <svg class="h-6 w-6 mt-1 mr-3 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0L6.343 16.657A8 8 0 1117.657 16.657z"/>
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <div>
                                <p class="mt-1">Jl. Perumahan Asoka, Bouleverd, Kota Makassar</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-7 mt-1">Informasi Kontak</h3>
                        <div class="mb-8 space-y-7">
                            <div class="flex items-start">
                                <svg class="h-6 w-6 mt-1 mr-3 text-grey-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <div>
                                    <h4 class="font-bold mt-1">Telepon (WhatsApp)</h4>
                                    <p>
                                        <a href="https://wa.me/6285242417032" target="_blank" class="text-black hover:text-gray-500 transition-colors">+62 812-3456-7890</a>
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="h-6 w-6 mt-1 mr-3 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <div>
                                    <h4 class="font-bold mt-1">Email</h4>
                                    <p><a href="mailto:email@gmail.com" class="text-black hover:underline hover:text-gray-500 transition-colors">email@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="h-6 w-6 mt-1 mr-3 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                </svg>
                                <div>
                                    <h4 class="font-bold mt-1">Jam Operasional</h4>
                                    <p>Senin-Jumat: 09.00-17.00 WITA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection