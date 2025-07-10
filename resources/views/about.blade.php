@extends('layout.app')

@section('title', 'About')

@section('content')
    <section class="hero-bg min-h-[50vh] flex items-center justify-center text-white py-17">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-50 mb-4">Tentang Kami</h2>
            <p class="text-gray-50 max-w-3xl mx-auto text-lg">CV. DARMA 47 merupakan perusahaan konstruksi terkemuka dengan pengalaman dengan nama baik dalam menawarkan jasa dengan standar terbaik di area development.</p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-md">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <img src="{{ asset('img/contoh1.jpg') }}" alt="" class="rounded-lg shadow-lg w-full h-80 object-cover object-center">
                </div>

                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Visi & Misi</h3>
                    <p class="text-gray-600 mb-6">Kami berkomitmen untuk menyediakan solusi konstruksi berkualitas tinggi dengan standar keamanan terbaik.</p>

                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg class="h-5 w-5 text-gray-800 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-800">15+ Tahun Pengalaman</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="h-5 w-5 text-gray-800 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-800">100+ Proyek Rampung</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="h-5 w-5 text-gray-800 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-800">20+ Staff Profesional</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center gap-12 mt-10">
                <div class="md:w-1/2">
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Nilai Inti</h3>
                        <ul class="list-disc list-inside text-gray-600 mb-6">
                            <li>Keberlanjutan: Kami berkomitmen untuk praktik konstruksi yang ramah lingkungan.</li>
                            <li>Inovasi: Kami selalu mencari cara baru untuk meningkatkan efisiensi dan kualitas.</li>
                            <li>Keamanan: Keselamatan pekerja dan klien adalah prioritas utama kami.</li>
                            <li>Integritas: Beroperasi dengan transparansi dan kejujuran dalam semua aspek bisnis kami.</li>
                        </ul>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Nilai Inti</h3>
                        <ul class="list-disc list-inside text-gray-600 mb-4">
                            <li>Keberlanjutan: Kami berkomitmen untuk praktik konstruksi yang ramah lingkungan.</li>
                            <li>Inovasi: Kami selalu mencari cara baru untuk meningkatkan efisiensi dan kualitas.</li>
                            <li>Keamanan: Keselamatan pekerja dan klien adalah prioritas utama kami.</li>
                            <li>Integritas: Beroperasi dengan transparansi dan kejujuran dalam semua aspek bisnis kami.</li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</section>


@endsection