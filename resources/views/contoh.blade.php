{{-- Contoh Website --}}

<!DOCTYPE html>
<html lang="id" class="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Taka - Coming Soon</title>
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white">

  <!-- Header -->
  <header class="flex justify-between items-center p-6 max-w-7xl mx-auto">
    <div class="text-2xl font-bold">Taka</div>
    <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-2 rounded-lg shadow-[5px_5px_0px_0px_rgba(30,64,175,1)] hover:shadow-[2px_2px_0px_0px_rgba(30,64,175,1)] transition-all duration-200">
      Masuk
    </button>
  </header>

  <!-- Hero Section -->
  <section class="text-center py-20 px-6">
    <h1 class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">
      COMING SOON IN 2025
    </h1>
    <p class="text-xl text-gray-300 mb-12">Something big is coming soon...</p>
    
    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <!-- Button 1 -->
  <button class="bg-blue-500 text-white font-semibold px-8 py-3 rounded-lg shadow-[5px_5px_0px_0px_rgba(30,64,175,1)] hover:shadow-[2px_2px_0px_0px_rgba(30,64,175,1)] transition-all duration-200">
    Temukan Kreator Favoritmu!
  </button>

  <!-- Button 2 -->
  <button class="bg-pink-500 text-white font-semibold px-8 py-3 rounded-lg shadow-[5px_5px_0px_0px_rgba(190,24,93,1)] hover:shadow-[2px_2px_0px_0px_rgba(190,24,93,1)] transition-all duration-200">
    Buat Akun
  </button>
    </div>
  </section>

  <!-- Feature Cards -->
  <section class="max-w-7xl mx-auto px-6 pb-20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <!-- Card 1 -->
      <div class="bg-blue-500 p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
        <h3 class="text-2xl font-bold mb-4">Apa Itu Taka?</h3>
        <p class="text-sm leading-relaxed mb-6">
          Taka adalah platform monetisasi bagi para konten kreator untuk mendapatkan 
          penghasilan lebih dari sekedar kreasi kontennya saja.
        </p>
        <p class="text-sm leading-relaxed mb-8">
          Dengan Taka, kamu dapat berinteraksi lebih dekat dengan para penggemarmu 
          sekaligus mendapatkan pendapatan lebih untuk mendukung kreativitasmu 
          dalam berkarya.
        </p>
        <div class="flex justify-center items-center h-32">
          <div class="relative">
            <div class="w-20 h-20 bg-blue-300 rounded-full flex items-center justify-center">
              <i data-lucide="user" class="w-10 h-10 text-blue-600"></i>
            </div>
            <div class="absolute -top-2 -right-2 w-8 h-8 bg-red-500 rounded-full flex items-center justify-center">
              <span class="text-white font-bold text-lg">?</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-pink-500 p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
        <h3 class="text-2xl font-bold mb-6">Fitur-Fitur Taka</h3>
        <div class="space-y-3 text-sm mb-8">
          <div class="flex items-start gap-3">
            <span class="bg-pink-400 text-pink-900 w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold">1</span>
            <span>Overlay Soundboard, Voice Note</span>
          </div>
          <div class="flex items-start gap-3">
            <span class="bg-pink-400 text-pink-900 w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold">2</span>
            <span>Text-to-Speech 50+ Suara</span>
          </div>
          <div class="flex items-start gap-3">
            <span class="bg-pink-400 text-pink-900 w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold">3</span>
            <span>Mediashare TikTok, Instagram, dan Youtube</span>
          </div>
          <div class="flex items-start gap-3">
            <span class="bg-pink-400 text-pink-900 w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold">4</span>
            <span>Filter NSFW/Konten 18+ di semua Mediashare</span>
          </div>
          <div class="flex items-start gap-3">
            <span class="bg-pink-400 text-pink-900 w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold">5</span>
            <span>Potongan Biaya Layanan Spesial</span>
          </div>
          <div class="flex items-start gap-3">
            <span class="bg-pink-400 text-pink-900 w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold">6</span>
            <span>Dan masih banyak lagi!</span>
          </div>
        </div>
        <p class="text-sm">Punya ide / saran fitur? Yuk beritahu kami!</p>
        <div class="flex justify-center items-center h-32 mt-4">
          <div class="relative">
            <div class="w-20 h-20 bg-pink-300 rounded-full flex items-center justify-center">
              <i data-lucide="star" class="w-10 h-10 text-pink-600"></i>
            </div>
            <div class="absolute -bottom-2 -right-2">
              <i data-lucide="play" class="w-6 h-6 text-pink-200"></i>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-green-500 p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
        <h3 class="text-2xl font-bold mb-6">Masih Bingung?</h3>
        <p class="text-sm leading-relaxed mb-8">
          Gak jawaban pertanyaanmu di bawah ini atau hubungi tim Taka langsung via 
          Server Discord Taka.
        </p>
        <button class="bg-green-400 hover:bg-green-300 text-green-900 px-6 py-3 rounded-lg font-semibold transition-colors duration-200 mb-8">
          Pelajari Taka
        </button>
        <div class="flex justify-center items-center h-32">
          <div class="relative">
            <div class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center">
              <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center">
                <span class="text-2xl">😊</span>
              </div>
            </div>
            <div class="absolute -top-2 -right-2">
              <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center">
                <span class="text-white text-xs">🎩</span>
              </div>
            </div>
            <div class="absolute -bottom-2 -left-2 w-8 h-8 bg-red-500 rounded-full flex items-center justify-center">
              <span class="text-white font-bold text-lg">?!</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Chat Button -->
  <div class="fixed bottom-6 right-6">
    <button class="bg-blue-500 hover:bg-blue-600 w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-200 hover:scale-110">
      <i data-lucide="message-circle" class="w-6 h-6"></i>
    </button>
  </div>

  <script>
    lucide.createIcons();
  </script>
</body>
</html>
